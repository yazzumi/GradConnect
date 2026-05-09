<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>

    <style>
        body{
            margin:0;
            padding:0;
            background:#f4f7fb;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container{
            width:100%;
            padding:40px 0;
        }

        .card{
            max-width:520px;
            margin:auto;
            background:#ffffff;
            border-radius:18px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }

        .header{
            background:linear-gradient(135deg,#4f46e5,#7c3aed);
            padding:35px;
            text-align:center;
            color:#fff;
        }

        .header h1{
            margin:0;
            font-size:28px;
        }

        .content{
            padding:40px 35px;
            color:#333;
        }

        .content h2{
            margin-top:0;
            font-size:24px;
            color:#111827;
        }

        .content p{
            font-size:16px;
            line-height:1.7;
            color:#6b7280;
        }

        .otp-box{
            margin:35px 0;
            text-align:center;
        }

        .otp{
            display:inline-block;
            background:#f3f4f6;
            padding:18px 35px;
            border-radius:14px;
            letter-spacing:10px;
            font-size:34px;
            font-weight:bold;
            color:#4f46e5;
            border:2px dashed #c7d2fe;
        }

        .warning{
            background:#fff7ed;
            color:#c2410c;
            padding:15px;
            border-radius:10px;
            font-size:14px;
            margin-top:25px;
        }

        .footer{
            padding:25px;
            text-align:center;
            background:#f9fafb;
            font-size:13px;
            color:#9ca3af;
        }

        @media only screen and (max-width:600px){
            .content{
                padding:30px 20px;
            }

            .otp{
                font-size:28px;
                padding:15px 25px;
                letter-spacing:6px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <div class="card">

        <div class="header">
            <h1>OTP Verification</h1>
        </div>

        <div class="content">

            <h2>Hello {{ $data['name'] }},</h2>

            <p>
                Use the verification code below to complete your login process.
                This OTP is valid for 5 minutes.
            </p>

            <div class="otp-box">
                <div class="otp">
                    {{ $data['otp'] }}
                </div>
            </div>

            <p>
                Do not share this code with anyone for security reasons.
            </p>

            <div class="warning">
                If you did not request this verification, please ignore this email.
            </div>

        </div>

        <div class="footer">
            © {{ date('Y') }} Your Company. All rights reserved.
        </div>

    </div>

</div>

</body>
</html>
