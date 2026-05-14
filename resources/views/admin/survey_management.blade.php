@extends('admin.shared.layout')
@section('title', 'Survey Management')
@section('content')

    <div class="flex min-h-screen relative">

        @include('admin.partials.sidebar')
        <!-- MAIN CONTENT -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-2xl font-black text-[#1a3d2c]">Survey Questions</h1>
                    <p class="text-sm text-gray-500">Manage the Graduate Tracer Study (GTS) questionnaire.</p>
                </div>
                <button class="bg-[#1a3d2c] text-white px-6 py-3 rounded-xl text-xs font-bold shadow-lg hover:bg-black transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus text-isu-gold"></i> ADD NEW QUESTION
                </button>
            </header>

            <!-- QUESTIONS TABLE -->
            <div class="bg-white rounded-md border border-gray-100 shadow-sm overflow-hidden">
                <table class="w-full text-left">
                    <thead>
                    <tr class="bg-[#1a3d2c] text-[10px] font-black text-white uppercase tracking-widest border-b border-gray-100">
                        <th class="px-6 py-5 text-center">Order</th>
                        <th class="px-6 py-5">Question Text</th>
                        <th class="px-6 py-5">Type</th>
                        <th class="px-6 py-5">Options</th>
                        <th class="px-6 py-5 text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                    @forelse($questions as $question)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-8 py-5 text-center font-bold text-gray-400">{{ str_pad($question->question_id, 2, '0', STR_PAD_LEFT) }}</td>
                            <td class="px-8 py-5">
                                <p class="text-sm font-bold text-[#1a3d2c]">{{ $question->question_text }}</p>
                                @if($question->employmentStatus)
                                    <p class="text-[10px] text-gray-400">For: {{ $question->employmentStatus->status_name }}</p>
                                @else
                                    <p class="text-[10px] text-gray-400">All graduates</p>
                                @endif
                            </td>
                            <td class="px-8 py-5">
                                @php
                                    $typeColors = [
                                        'text'     => 'bg-gray-50 text-gray-600',
                                        'number'   => 'bg-orange-50 text-orange-600',
                                        'select'   => 'bg-purple-50 text-purple-600',
                                        'radio'    => 'bg-blue-50 text-blue-600',
                                        'textarea' => 'bg-teal-50 text-teal-600',
                                    ];
                                    $color = $typeColors[$question->question_type] ?? 'bg-gray-50 text-gray-600';
                                @endphp
                                <span class="{{ $color }} px-2 py-1 rounded text-[9px] font-black uppercase">{{ $question->question_type }}</span>
                            </td>
                            <td class="px-8 py-5 text-gray-500 text-xs font-medium">
                                {{ $question->options->count() > 0 ? $question->options->count() . ' Options' : '—' }}
                            </td>
                            <td class="px-8 py-5 text-right">
                                <div class="flex justify-end gap-2">
                                    <button onclick="openModal({{ $question->question_id }})" class="w-8 h-8 rounded-lg bg-gray-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-lg bg-gray-50 text-red-500 hover:bg-red-500 hover:text-white transition-all">
                                        <i class="fa-solid fa-trash-can text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-8 py-12 text-center text-gray-400 text-sm italic">No survey questions found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </main>

        <!-- SIDE MODAL (Question Editor) -->
        <div id="modalOverlay" class="fixed inset-0 modal-shadow hidden z-30 opacity-0 transition-opacity duration-300"></div>
        <div id="sideModal" class="fixed right-0 top-0 h-full w-[450px] bg-white shadow-2xl z-40 side-modal flex flex-col">
            <div class="p-6 bg-isu-dark text-white flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-bold">Edit Question</h2>
                    <p id="modalQuestionLabel" class="text-[10px] text-isu-gold uppercase tracking-widest font-bold">ID: GTS-Q--</p>
                </div>
                <button onclick="toggleModal()" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 transition-all">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="p-8 flex-1 overflow-y-auto space-y-6">
                <input type="hidden" id="modalQuestionId">
                <!-- Question Text -->
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Question Text</label>
                    <textarea id="modalQuestionText" class="w-full bg-gray-50 border border-gray-100 rounded-xl p-4 text-sm font-bold focus:ring-2 focus:ring-isu-dark outline-none" rows="3"></textarea>
                </div>

                <!-- Type Selector -->
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Response Type</label>
                    <select id="modalQuestionType" class="w-full bg-gray-50 border border-gray-100 rounded-xl p-4 text-sm font-bold outline-none focus:border-isu-dark">
                        <option value="text">Text Input</option>
                        <option value="number">Number</option>
                        <option value="select">Dropdown (Select)</option>
                        <option value="radio">Radio</option>
                        <option value="textarea">Textarea</option>
                    </select>
                </div>

                <!-- Options Editor -->
                <div id="optionsWrap">
                    <div class="flex justify-between items-center mb-4">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Answer Options</label>
                        <button type="button" onclick="addOption()" class="text-[10px] font-bold text-[#1a3d2c] hover:underline">+ Add Option</button>
                    </div>
                    <div id="modalOptions" class="space-y-2"></div>
                </div>
            </div>

            <div id="saveStatus" class="hidden px-8 pb-2 text-xs font-bold text-green-600"></div>
            <div class="p-6 border-t border-gray-100 flex gap-3">
                <button onclick="toggleModal()" class="flex-1 py-3 text-xs font-bold text-gray-400 hover:text-gray-600 transition-all">Discard Changes</button>
                <button onclick="saveQuestion()" id="saveBtn" class="flex-1 py-3 bg-isu-dark text-white rounded-xl text-xs font-bold shadow-lg hover:shadow-emerald-900/20 transition-all">SAVE CHANGES</button>
            </div>
        </div>
    </div>

    <!-- Toast -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 hidden">
        <div class="bg-[#1a3d2c] text-white px-6 py-3 rounded-xl shadow-xl text-xs font-bold flex items-center gap-2">
            <i class="fa-solid fa-circle-check text-[#d9a54a]"></i>
            <span id="toastMsg">Saved successfully.</span>
        </div>
    </div>

    <script>
        const allQuestions = @json($questions);
        const updateUrl = '{{ url("Surveys") }}/';

        function openModal(questionId) {
            const q = allQuestions.find(x => x.question_id === questionId);
            if (!q) return;

            document.getElementById('modalQuestionId').value   = q.question_id;
            document.getElementById('modalQuestionText').value = q.question_text;
            document.getElementById('modalQuestionLabel').textContent = 'ID: GTS-Q' + String(q.display_order).padStart(2, '0');

            const typeSelect = document.getElementById('modalQuestionType');
            typeSelect.value = q.question_type;
            toggleOptionsSection(q.question_type);

            const optContainer = document.getElementById('modalOptions');
            optContainer.innerHTML = '';
            (q.options || []).forEach(opt => {
                optContainer.insertAdjacentHTML('beforeend', optionRow(opt.option_text));
            });

            document.getElementById('saveStatus').classList.add('hidden');
            if (!document.getElementById('sideModal').classList.contains('active')) toggleModal();
        }

        function optionRow(value) {
            return `<div class="flex gap-2 items-center">
            <span class="text-gray-300 cursor-grab"><i class="fa-solid fa-grip-vertical text-xs"></i></span>
            <input type="text" value="${value.replace(/"/g, '&quot;')}" placeholder="Option text..." class="flex-1 bg-gray-50 border border-gray-100 rounded-lg px-4 py-2 text-xs font-medium outline-none focus:ring-1 focus:ring-[#1a3d2c]">
            <button type="button" onclick="this.closest('div').remove()" class="text-gray-300 hover:text-red-500 transition-colors"><i class="fa-solid fa-circle-minus"></i></button>
        </div>`;
        }

        function addOption() {
            document.getElementById('modalOptions').insertAdjacentHTML('beforeend', optionRow(''));
            document.getElementById('modalOptions').lastElementChild.querySelector('input').focus();
        }

        function toggleOptionsSection(type) {
            const wrap = document.getElementById('optionsWrap');
            wrap.style.display = (type === 'select' || type === 'radio') ? 'block' : 'none';
        }

        document.getElementById('modalQuestionType').addEventListener('change', function () {
            toggleOptionsSection(this.value);
        });

        function saveQuestion() {
            const id          = document.getElementById('modalQuestionId').value;
            const questionText = document.getElementById('modalQuestionText').value.trim();
            const questionType = document.getElementById('modalQuestionType').value;
            const optionInputs = document.querySelectorAll('#modalOptions input[type="text"]');
            const options      = Array.from(optionInputs).map(i => i.value.trim()).filter(v => v !== '');

            if (!questionText) { alert('Question text cannot be empty.'); return; }

            const btn = document.getElementById('saveBtn');
            btn.textContent = 'Saving...';
            btn.disabled = true;

            $.ajax({
                url: updateUrl + id + '/update',
                type: 'POST',
                data: { question_text: questionText, question_type: questionType, options: options },
                dataType: 'json',
                success: function (response) {
                    btn.textContent = 'SAVE CHANGES';
                    btn.disabled = false;
                    if (response.status === 200) {
                        showToast('Question saved successfully.');
                        setTimeout(() => { toggleModal(); location.reload(); }, 1200);
                    }
                },
                error: function () {
                    btn.textContent = 'SAVE CHANGES';
                    btn.disabled = false;
                    showToast('Error saving. Please try again.', true);
                }
            });
        }

        function showToast(msg, error = false) {
            const toast = document.getElementById('toast');
            const toastDiv = toast.firstElementChild;
            document.getElementById('toastMsg').textContent = msg;
            toastDiv.className = (error ? 'bg-red-700' : 'bg-[#1a3d2c]') + ' text-white px-6 py-3 rounded-xl shadow-xl text-xs font-bold flex items-center gap-2';
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 3000);
        }

        function toggleModal() {
            const modal = document.getElementById('sideModal');
            const overlay = document.getElementById('modalOverlay');

            if (modal.classList.contains('active')) {
                modal.classList.remove('active');
                overlay.classList.add('hidden');
                overlay.classList.remove('block');
                overlay.style.opacity = '0';
            } else {
                modal.classList.add('active');
                overlay.classList.remove('hidden');
                overlay.classList.add('block');
                setTimeout(() => { overlay.style.opacity = '1'; }, 10);
            }
        }
    </script>
@endsection
