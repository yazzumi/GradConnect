<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{asset('assets/images/isu-logo.png')}}" type="image/png">
    <title>GradConnect | Professional Alumni Tracer</title>
    <style>
        .step-hidden { display: none; }
        .step-active { display: block; animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }

        /* Custom scrollbar for professional look */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #1a3d2c; border-radius: 10px; }
    </style>
</head>
<body class="bg-[#fcfaf2] min-h-screen font-sans text-slate-900 antialiased">

<div class="flex flex-col lg:flex-row min-h-screen">

    <!-- SIDEBAR / HEADER -->
    <aside class="w-full lg:w-96 bg-[#1a3d2c] text-white p-8 lg:p-12 flex flex-col justify-between shrink-0 shadow-2xl relative overflow-hidden">
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#d9a54a]/20 rounded-full blur-3xl"></div>

        <div class="relative z-10">
            <div class="flex items-center gap-3 mb-10 lg:mb-20">
                <img src="{{asset('assets/images/isu-logo.png')}}" alt="ISU" class="h-10 w-10 brightness-110">
                <span class="font-extrabold tracking-tighter text-2xl">GradConnect</span>
            </div>

            <div class="space-y-6">
                <p class="text-[#d9a54a] text-[10px] font-black uppercase tracking-[0.3em]">Institutional Survey 2026</p>
                <h1 class="text-4xl lg:text-5xl font-serif leading-tight">
                    Alumni <br>
                    <span class="italic text-[#d9a54a]">Pathways</span>
                </h1>
                <p class="text-slate-300/80 text-sm leading-relaxed max-w-xs pt-4">
                    Your data helps ISU Ilagan Campus shape future academic programs. All information is kept strictly confidential.
                </p>
            </div>
        </div>

        <div class="relative z-10 mt-8 lg:mt-0">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-lg border border-white/10 backdrop-blur-sm text-[10px] font-bold uppercase tracking-widest opacity-80">
                <div class="w-2 h-2 rounded-full bg-green-400"></div>
                Secure SSL Connection
            </div>
        </div>
    </aside>

    <!-- FORM MAIN AREA -->
    <main class="flex-grow py-12 px-6 lg:px-20 overflow-y-auto">
        <div class="w-full max-w-4xl mx-auto">

            <!-- DYNAMIC PROGRESS BAR -->
            <div class="mb-10">
                <div class="flex justify-between items-center mb-3 text-[10px] font-black uppercase tracking-widest">
                    <span id="stepLabel" class="text-[#1a3d2c]">Step 1: Personal Profile</span>
                    <span id="progressText" class="text-[#d9a54a]">33%</span>
                </div>
                <div class="h-1.5 w-full bg-slate-200 rounded-full overflow-hidden">
                    <div id="progressBar" class="h-full bg-[#1a3d2c] w-1/3 transition-all duration-500"></div>
                </div>
            </div>

            <form id="surveyForm" action="/submit-survey" method="POST">

                <!-- STEP 1: PERSONAL DETAILS (The Fields You Requested) -->
                <div id="step1" class="step-active space-y-8">
                    <div class="bg-white p-8 lg:p-10 rounded-3xl border border-slate-100 shadow-sm">
                        <h2 class="text-xl font-bold text-slate-800 mb-8 flex items-center gap-2">
                            <span class="w-2 h-6 bg-[#d9a54a] rounded-full"></span>
                            Profile Information
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">First Name</label>
                                <input type="text" name="first_name" placeholder="John" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->first_name }}">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Middle Name</label>
                                <input type="text" name="middle_name" placeholder="D." class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->middle_name }}">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Last Name</label>
                                <input type="text" name="last_name" placeholder="Doe" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->last_name }}">
                            </div>

                            <div class="md:col-span-2 space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Email Address</label>
                                <input type="email" name="email" placeholder="j.doe@email.com" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->email }}">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Contact Number</label>
                                <input type="text" name="contact_number" placeholder="09XXXXXXXXX" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->contact_number }}">
                            </div>

                            <div class="md:col-span-2 space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Academic Program</label>
                                <input type="text" name="program" placeholder="BS in Information Technology" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Year Graduated</label>
                                <input type="number" name="year_graduated" placeholder="2025" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->graduation_year }}">
                            </div>

                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Birthday</label>
                                <input type="date" name="birthday" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" value="{{ $graduate->date_of_birth ? \Carbon\Carbon::parse($graduate->date_of_birth)->format('Y-m-d') : '' }}">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Sex</label>
                                <select name="sex" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm" >
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Civil Status</label>
                                <select name="civil_status" class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm">
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                </select>
                            </div>

                            <div class="md:col-span-3 space-y-1">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Permanent Address</label>
                                <textarea name="address" rows="2" placeholder="Full Address..." class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="button" onclick="goToStep(2)" class="w-full md:w-auto bg-[#1a3d2c] text-white px-14 py-4 rounded-xl font-bold shadow-lg hover:bg-[#143023] transition-all">
                            Confirm & Continue →
                        </button>
                    </div>
                </div>

                <!-- STEP 2: EMPLOYMENT STATUS (The 4 Cards) -->
                <div id="step2" class="step-hidden space-y-8">
                    <div class="space-y-2">
                        <h2 class="text-2xl font-bold text-slate-800">Employment Status</h2>
                        <p class="text-slate-500 text-sm">Select your current professional standing.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- ID 1: Employed -->
                        <label class="group cursor-pointer">
                            <input type="radio" name="emp_status_id" value="1" class="peer sr-only" onclick="setStatusName('Employed')">
                            <div class="p-6 bg-white border-2 border-slate-100 rounded-2xl transition-all peer-checked:border-[#1a3d2c] peer-checked:ring-1 peer-checked:ring-[#1a3d2c] group-hover:border-slate-300">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-slate-50 rounded-xl text-[#1a3d2c] group-hover:bg-slate-100">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div><p class="font-bold text-slate-800">Employed</p><p class="text-[10px] text-slate-400 uppercase tracking-wide">Corporate / Govt</p></div>
                                </div>
                            </div>
                        </label>

                        <!-- ID 2: Self-Employed -->
                        <label class="group cursor-pointer">
                            <input type="radio" name="emp_status_id" value="2" class="peer sr-only" onclick="setStatusName('Self-Employed')">
                            <div class="p-6 bg-white border-2 border-slate-100 rounded-2xl transition-all peer-checked:border-[#1a3d2c] peer-checked:ring-1 peer-checked:ring-[#1a3d2c] group-hover:border-slate-300">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-slate-50 rounded-xl text-[#1a3d2c]">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                    </div>
                                    <div><p class="font-bold text-slate-800">Self-Employed</p><p class="text-[10px] text-slate-400 uppercase tracking-wide">Business / Freelance</p></div>
                                </div>
                            </div>
                        </label>

                        <!-- ID 3: OFW -->
                        <label class="group cursor-pointer">
                            <input type="radio" name="emp_status_id" value="3" class="peer sr-only" onclick="setStatusName('OFW')">
                            <div class="p-6 bg-white border-2 border-slate-100 rounded-2xl transition-all peer-checked:border-[#1a3d2c] peer-checked:ring-1 peer-checked:ring-[#1a3d2c] group-hover:border-slate-300">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-slate-50 rounded-xl text-[#1a3d2c]">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>
                                    <div><p class="font-bold text-slate-800">OFW</p><p class="text-[10px] text-slate-400 uppercase tracking-wide">Working Abroad</p></div>
                                </div>
                            </div>
                        </label>

                        <!-- ID 4: Unemployed -->
                        <label class="group cursor-pointer">
                            <input type="radio" name="emp_status_id" value="4" class="peer sr-only" onclick="setStatusName('Unemployed')">
                            <div class="p-6 bg-white border-2 border-slate-100 rounded-2xl transition-all peer-checked:border-[#1a3d2c] peer-checked:ring-1 peer-checked:ring-[#1a3d2c] group-hover:border-slate-300">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-slate-50 rounded-xl text-[#1a3d2c]">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>
                                    <div><p class="font-bold text-slate-800">Unemployed</p><p class="text-[10px] text-slate-400 uppercase tracking-wide">Not Currently Working</p></div>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="flex items-center justify-between pt-6">
                        <button type="button" onclick="goToStep(1)" class="text-slate-400 font-bold text-sm">← Back</button>
                        <button type="button" onclick="goToStep(3)" class="bg-[#1a3d2c] text-white px-14 py-4 rounded-xl font-bold shadow-lg">Next Step</button>
                    </div>
                </div>

                <!-- STEP 3: DYNAMIC QUESTIONS (Matching Your Database Table) -->
                <div id="step3" class="step-hidden space-y-8">
                    <div class="space-y-2">
                        <h2 id="dynamicTitle" class="text-2xl font-bold text-slate-800">Work Details</h2>
                        <p class="text-slate-500 text-sm">Final step. Please complete the professional assessment.</p>
                    </div>

                    <div id="dynamicQuestionContainer" class="grid grid-cols-1 md:grid-cols-2 gap-6 p-8 bg-white rounded-3xl border border-slate-100 shadow-sm">
                        <!-- Questions generated by JS -->
                    </div>

                    <div class="flex items-center justify-between pt-6">
                        <button type="button" onclick="goToStep(2)" class="text-slate-400 font-bold text-sm">← Back</button>
                        <button type="submit" class="bg-[#d9a54a] text-[#1a3d2c] px-14 py-4 rounded-xl font-extrabold shadow-xl hover:brightness-105 transition-all">Submit Survey</button>
                    </div>
                </div>

            </form>
        </div>
    </main>
</div>

<script>
    const dbQuestions = [
        { question_text: 'Company Name', fieldkey: 'company_name', question_type: 'text', employment_statusid: 1, is_required: 1, display_order: 1 },
        { question_text: 'Monthly Salary', fieldkey: 'salary', question_type: 'number', employment_statusid: 1, is_required: 1, display_order: 2 },
        { question_text: 'Business Industry', fieldkey: 'biz_type', question_type: 'text', employment_statusid: 2, is_required: 1, display_order: 1 },
        { question_text: 'Country of Employment', fieldkey: 'country', question_type: 'text', employment_statusid: 3, is_required: 1, display_order: 1 },
        { question_text: 'Reason for Unemployment', fieldkey: 'unemp_reason', question_type: 'text', employment_statusid: 4, is_required: 1, display_order: 1 }
    ];

    let selectedStatusName = "";

    function setStatusName(name) {
        selectedStatusName = name;
    }

    function renderQuestions(statusId) {
        const container = document.getElementById('dynamicQuestionContainer');
        const title = document.getElementById('dynamicTitle');

        title.innerText = `${selectedStatusName} Information`;

        const filtered = dbQuestions
            .filter(q => q.employment_statusid == statusId)
            .sort((a, b) => a.display_order - b.display_order);

        if (filtered.length === 0) {
            container.innerHTML = `<p class="text-slate-400 italic md:col-span-2">No additional questions required for this status.</p>`;
            return;
        }

        container.innerHTML = filtered.map(q => `
                <div class="space-y-1">
                    <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                        ${q.question_text} ${q.is_required ? '<span class="text-red-400">*</span>' : ''}
                    </label>
                    <input type="${q.question_type}" name="${q.fieldkey}" ${q.is_required ? 'required' : ''}
                           class="w-full p-3 bg-slate-50 border-none rounded-xl ring-1 ring-slate-200 focus:ring-2 focus:ring-[#1a3d2c] outline-none text-sm">
                </div>
            `).join('');
    }

    function goToStep(step) {
        const s1 = document.getElementById('step1');
        const s2 = document.getElementById('step2');
        const s3 = document.getElementById('step3');
        const bar = document.getElementById('progressBar');
        const pTxt = document.getElementById('progressText');
        const label = document.getElementById('stepLabel');

        [s1, s2, s3].forEach(el => el.classList.replace('step-active', 'step-hidden'));

        if (step === 1) {
            s1.classList.replace('step-hidden', 'step-active');
            bar.style.width = '33%'; pTxt.innerText = '33%';
            label.innerText = 'Step 1: Personal Profile';
        } else if (step === 2) {
            s2.classList.replace('step-hidden', 'step-active');
            bar.style.width = '66%'; pTxt.innerText = '66%';
            label.innerText = 'Step 2: Employment Status';
        } else if (step === 3) {
            const radio = document.querySelector('input[name="emp_status_id"]:checked');
            if(!radio) {
                s2.classList.replace('step-hidden', 'step-active');
                alert("Please select your employment status first.");
                return;
            }
            renderQuestions(radio.value);
            s3.classList.replace('step-hidden', 'step-active');
            bar.style.width = '100%'; pTxt.innerText = '100%';
            label.innerText = 'Step 3: Final Details';
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>
</body>
</html>
