@extends('alumni.shared.layout')
@section('title','Verification')

@section('content')


    <style>
        @keyframes shake {
            0%{transform:translateX(0px);}
            25%{transform:translateX(-10px);}
            50%{transform:translateX(10px);}
            75%{transform:translateX(-10px);}
            100%{transform:translateX(0px);}

        }

        .shake{
            animation: shake 0.3s ease;
        }
    </style>
<!-- Main Container -->
<div class="flex min-h-screen bg-[#fcfaf2] font-sans">


    <aside class="hidden md:flex w-[400px] bg-[#1a3d2c] p-16 flex-col justify-between relative overflow-hidden text-white">

        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 0); background-size: 20px 20px;"></div>

        <div class="relative z-10">
            <h2 class="text-[#d9a54a] font-bold text-xs uppercase tracking-[0.3em] mb-8">GradConnect • Secure Portal</h2>
            <h1 class="text-6xl font-serif italic leading-tight mb-6">Identity<br>Verification</h1>
            <p class="text-gray-300 text-lg leading-relaxed max-w-xs">
                Verify your alumni records to access the ISU Ilagan Campus Alumni Tracer Survey.
            </p>
            <div class="mt-8 inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 text-xs font-medium text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#d9a54a]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                AY 2020 – 2025 Alumni Only
            </div>
        </div>

        <div class="relative z-10">
            <div class="w-12 h-1 bg-[#d9a54a] mb-6"></div>
            <p class="text-xs text-gray-400 font-medium leading-loose uppercase tracking-widest">
                Isabela State University — Ilagan Campus<br>
                Office of Student Affairs and Services (OSAS)
            </p>
        </div>
    </aside>


    <main class="flex-1 p-8 md:p-24 flex flex-col justify-center max-w-4xl mx-auto">
        <form action="" method="POST" class="space-y-12">


            <section id="personalIdentitySection" class="transition-all duration-500 ease-in-out">
                <div class="flex items-center gap-4 mb-6">
                    <span class="w-8 h-8 rounded-full bg-[#1a3d2c] text-white flex items-center justify-center font-bold text-sm">1</span>
                    <div>
                        <h3 class="font-bold text-gray-800">Personal Identity</h3>
                        <p class="text-xs text-gray-500">Enter your name exactly as it appears on your official ISU records.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">First Name <span class="text-red-500">*</span></label>
                        <input type="text" id="fname" placeholder="JUAN" class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none transition uppercase">
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">Middle Name</label>
                        <input type="text" id="mname" placeholder="SANTOS" class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none transition uppercase">
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" id="lname" placeholder="CRUZ" class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none transition uppercase">
                    </div>
                </div>

                <div id="div_studentid">
                    <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">Student ID Number <span class="text-red-500">*</span></label>
                    <input type="text" id="studentId" placeholder="2021-01234" class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none transition">
                </div>

                <div id="academic_records" hidden>
                    <div class="mb-6">
                        <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">Degree Program <span class="text-red-500">*</span></label>
                        <select id="select_program_id" class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none appearance-none cursor-pointer">
                            <option value="">Select your program</option>
                            <option>test</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">Year Graduated <span class="text-red-500">*</span></label>

                            <input type="number"
                                   id="select_year_id"
                                   min="1900"
                                   max="2099"
                                   placeholder="Enter year"
                                   class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none">
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-gray-600 mb-2 block uppercase tracking-wide">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" id="select_date_id" class="w-full bg-white border border-gray-200 p-4 rounded-lg focus:ring-2 focus:ring-[#1a3d2c] outline-none">
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <p class="text-sm text-gray-600">Forgot your student ID? <span onclick="toggleOptions()" class="text-[#1a3d2c] font-semibold cursor-pointer underline">See options</span></p>

                    <!-- Options Dropdown -->
                    <div id="optionsDropdown" class="hidden mt-4 bg-white border border-gray-200 rounded-lg shadow-lg p-4">
                        <h4 class="font-semibold text-gray-800 mb-3">Choose verification method:</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="verificationMethod" value="studentId" class="text-[#1a3d2c]" onchange="toggleSection2('studentId')">
                                <span class="text-sm text-gray-700">Use Student ID Number</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="verificationMethod" value="academicRecords" class="text-[#1a3d2c]" onchange="toggleSection2('academicRecords')">
                                <span class="text-sm text-gray-700">Use Academic Records</span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. OTP Verification Placeholder -->
            <section class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-green-50 text-[#1a3d2c] rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">OTP Verification</h3>
                        <p class="text-sm text-gray-500 mb-4">A one-time passcode will be sent to your registered contact for additional security.</p>
                        <button type="button" onclick="openOTPModal()" class="border border-[#1a3d2c] text-[#1a3d2c] px-6 py-2 rounded-full text-xs font-bold flex items-center gap-2 hover:bg-[#1a3d2c] hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9 18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Request OTP
                        </button>
                    </div>
                </div>
            </section>

            <!-- Privacy Note -->
            <div class="bg-[#f3f4f0] p-6 rounded-xl flex items-start gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#1a3d2c] opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <p class="text-[10px] text-gray-600 leading-relaxed uppercase tracking-wider">
                    Your information is used solely for alumni verification and institutional tracking. All records are handled securely per the Data Privacy Act of 2012 (RA 10173).
                </p>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="button" id="btnVerify" class="bg-[#1a3d2c] hover:bg-[#143023] text-white px-10 py-4 rounded-full font-bold shadow-lg flex items-center gap-3 transition transform hover:scale-105">
                    Verify Alumni
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </button>
            </div>
        </form>

        <!-- Footer -->
        <footer class="mt-24 pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between text-[10px] text-gray-400 font-medium uppercase tracking-widest">
            <span> 2026 GradConnect — ISU Ilagan Campus. All rights reserved.</span>
            <span>osas@isu-ilagan.edu.ph</span>
        </footer>
    </main>

    <!-- OTP Modal -->
    <div id="otpModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 relative">
            <!-- Close Button -->
            <button onclick="closeOTPModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Modal Content -->
            <div id="modalStep1">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-[#1a3d2c]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a3d2c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Choose OTP Delivery Method</h3>
                    <p class="text-sm text-gray-600">Select how you want to receive your verification code</p>
                </div>

                <div class="space-y-3">
                    <button onclick="selectOTPMethod('email')" class="w-full p-4 border border-gray-200 rounded-lg hover:border-[#1a3d2c] hover:bg-[#1a3d2c]/5 transition text-left">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-sm text-gray-600">Send code to your email address</p>
                            </div>
                        </div>
                    </button>

                    <button onclick="selectOTPMethod('sms')" class="w-full p-4 border border-gray-200 rounded-lg hover:border-[#1a3d2c] hover:bg-[#1a3d2c]/5 transition text-left">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">SMS</h4>
                                <p class="text-sm text-gray-600">Send code to your mobile number</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Step 2: OTP Input -->
            <div id="modalStep2" class="hidden">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Enter Verification Code</h3>
                    <p class="text-sm text-gray-600 mb-4">We've sent a 6-digit code to <span id="maskedContact" class="font-semibold"></span></p>
                </div>

                <div class="mb-6">
                    <div class="flex justify-center gap-2 mb-4">
                        <input type="text" maxlength="1" class="otp-input w-12 h-12 text-center border border-gray-300 rounded-lg text-xl font-semibold focus:border-[#1a3d2c] focus:outline-none" onkeyup="moveToNext(this, 1) ">
                        <input type="text" maxlength="1" class="otp-input w-12 h-12 text-center border border-gray-300 rounded-lg text-xl font-semibold focus:border-[#1a3d2c] focus:outline-none" onkeyup="moveToNext(this, 1)">
                        <input type="text" maxlength="1" class="otp-input w-12 h-12 text-center border border-gray-300 rounded-lg text-xl font-semibold focus:border-[#1a3d2c] focus:outline-none" onkeyup="moveToNext(this, 2)">
                        <input type="text" maxlength="1" class="otp-input w-12 h-12 text-center border border-gray-300 rounded-lg text-xl font-semibold focus:border-[#1a3d2c] focus:outline-none" onkeyup="moveToNext(this, 3)">
                        <input type="text" maxlength="1" class="otp-input w-12 h-12 text-center border border-gray-300 rounded-lg text-xl font-semibold focus:border-[#1a3d2c] focus:outline-none" onkeyup="moveToNext(this, 4)">
                        <input type="text" maxlength="1" class="otp-input w-12 h-12 text-center border border-gray-300 rounded-lg text-xl font-semibold focus:border-[#1a3d2c] focus:outline-none" onkeyup="moveToNext(this, 5)">
                    </div>
                    <p class="text-center text-sm text-gray-600">
                        Didn't receive the code? <button onclick="resendOTP()" class="text-[#1a3d2c] font-semibold hover:underline">Resend</button>
                    </p>
                </div>

                <div class="flex gap-3">
                    <button onclick="backToStep1()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                        Back
                    </button>
                    <button onclick="verifyOTP()" class="flex-1 px-4 py-2 bg-[#1a3d2c] text-white rounded-lg hover:bg-[#143023] transition">
                        Verify
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        localStorage.setItem('otp_result',false)
        selectOTPMethod('studentId')


        async  function getProgram(){
            $.ajax({
                url: '{{ route('get_program') }}',
                type: 'get',
                dataType: 'json',
                success: function(response) {

                    console.log(response)

                    $('#select_program_id').empty()
                    $('#select_program_id').append(' <option value="">Select your program</option>')
                    if(response.status === 200)
                    {
                        response.data.forEach(data => {
                          $('#select_program_id').append(`<option value="${data.program_id}">${data.program_name}</option>`)
                        });
                    }

                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            })
        }
        $('#btnVerify').click(function(){
            const fname = $('#fname').val()
            const mname = $('#mname').val()
            const lname = $('#lname').val()
            const student_id = $('#studentId').val()
            const select_program =  $('#select_program_id').val();
            const select_year = $('#select_year_id').val();
            const select_date = $('#select_date_id').val()

            const verificationMethod = localStorage.getItem('type');
            let otp_result = localStorage.getItem('otp_result')

            let data = {};


            if(fname === '' || lname === '')
            {

                alert('Please Check Input')

                return false;
            }


            if (verificationMethod === 'studentId'){
                if(student_id === ''){
                    alert('Please Input Student ID')

                    return false;
                }

                 data = {
                    fname,
                    mname,
                    lname,
                    student_id
                }
            }

            if(verificationMethod === 'academicRecords')
            {
                if(select_program === '' || select_date === '' || select_year === '' ){
                    alert('Please Check inputs')

                    return false;
                }

                 data = {
                    fname,
                    mname,
                    lname,
                    select_program,
                    select_year,
                    select_date
                }
            }



            if(otp_result === 'false'){
                alert('Please Verify Otp First')
                return false;
            }
            const guid = localStorage.getItem('guid');

            window.location.href = "{{ route('survey_form', ':guid') }}".replace(':guid', guid);

        });
        function toggleOptions2() {
            const dropdown = document.getElementById('optionsDropdown2');
            dropdown.classList.toggle('hidden');
        }

        function toggleSection2(method) {


            const personalSection = document.getElementById('personalIdentitySection');
            const academicSection = document.getElementById('academicRecordsSection');

            if (method === 'studentId') {

                $('#div_studentid').show()
                $('#academic_records').hide()

            } else {
                getProgram()

                $('#div_studentid').hide()
                $('#academic_records').show()
            }

            // Hide dropdown after selection
            localStorage.setItem('type',method)
        }

        // OTP Modal Functions
        function openOTPModal() {
            document.getElementById('otpModal').classList.remove('hidden');
            document.getElementById('modalStep1').classList.remove('hidden');
            document.getElementById('modalStep2').classList.add('hidden');
        }

        function closeOTPModal() {
            document.getElementById('otpModal').classList.add('hidden');
        }

        function selectOTPMethod(method) {
            const maskedContact = document.getElementById('maskedContact');

            const fname = $('#fname').val()
            const mname = $('#mname').val()
            const lname = $('#lname').val()
            const student_id = $('#studentId').val()
            const select_program =  $('#select_program_id').val();
            const select_year = $('#select_year_id').val();
            const select_date = $('#select_date_id').val()

            const verificationMethod = localStorage.getItem('type');

            let data = {};


            if (verificationMethod === 'studentId'){
                data = {
                    fname,
                    mname,
                    lname,
                    student_id
                }
            }

            if(verificationMethod === 'academicRecords')
            {


                data = {
                    fname,
                    mname,
                    lname,
                    select_program,
                    select_year,
                    select_date
                }
            }

            if (method === 'email') {

                $.ajax({
                    url: '{{ route('generate_otp') }}',
                    type: 'POST',
                    data : data,
                    dataType: 'json',
                    success: function(response) {

                        console.log(response)

                        if(response.status === 200)
                        {
                            maskedContact.textContent = response.email;
                            localStorage.setItem('otp_result',true)
                        }

                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });


            } else {
                maskedContact.textContent = '09******';
            }

            // Switch to step 2
            document.getElementById('modalStep1').classList.add('hidden');
            document.getElementById('modalStep2').classList.remove('hidden');
        }

        function backToStep1() {
            document.getElementById('modalStep2').classList.add('hidden');
            document.getElementById('modalStep1').classList.remove('hidden');
        }

        function moveToNext(input, index) {
            if (input.value.length === 1) {
                const inputs = input.parentElement.querySelectorAll('input');
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            }
        }

        function resendOTP() {
            // Simulate resending OTP
            alert('OTP has been resent!');
        }

        function verifyOTP() {


            const maskedContact = document.getElementById('maskedContact');

            const fname = $('#fname').val()
            const mname = $('#mname').val()
            const lname = $('#lname').val()
            const student_id = $('#studentId').val()
            const select_program =  $('#select_program_id').val();
            const select_year = $('#select_year_id').val();
            const select_date = $('#select_date_id').val()

            const verificationMethod = localStorage.getItem('type');

            let data = {};

            let otp = '';

            document.querySelectorAll('.otp-input').forEach(input => {
                otp += input.value;
            });

            if (verificationMethod === 'studentId'){
                data = {
                    fname,
                    mname,
                    lname,
                    student_id,
                    otp
                }
            }

            if(verificationMethod === 'academicRecords')
            {

                data = {
                    fname,
                    mname,
                    lname,
                    select_program,
                    select_year,
                    select_date,
                    otp
                }
            }

                $.ajax({
                    url: '{{ route('verify_otp') }}',
                    type: 'POST',
                    data : data,
                    dataType: 'json',
                    success: function(response) {

                        console.log(response)

                        if(response.status === 200){
                            alert(response.message)
                            localStorage.setItem('otp_result',true)
                            localStorage.setItem('guid',response.guid)
                            closeOTPModal()
                        }else{
                            alert(response.message)
                            localStorage.setItem('otp_result',false)
                        }


                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });





        }

        function toggleOptions() {
            const dropdown = document.getElementById('optionsDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('optionsDropdown');
            const optionsLink = event.target.closest('span[onclick="toggleOptions()"]');

            if (!dropdown.contains(event.target) && !optionsLink) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</div>
@endsection
