<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
    <style>
        .email-wrapper {
            width: 100%;
            padding: 20px;
            background-color: #f4f4f7;
        }
        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 4px;
        }
        .email-masthead_name {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }
        .content-cell {
            padding: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #22bc66;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }
        .sub {
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <span class="preheader">Use this code to verify your email address.</span>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="email-masthead">
                <a href="" class="email-masthead_name">Be Unique – Unique Fashion</a>
            </div>
            <div class="email-body">
                <div class="content-cell">
                    <h1>Hi {{ $user->name }},</h1>
                    <p>Thank you for signing up with us. Please use the following code to verify your email address:</p>
                    <div class="button">{{ $code }}</div>
                    <p>This code will expire in 5 minutes.</p>
                    <p>If you did not create an account, no further action is required.</p>
                    <div class="body-sub">
                        <p class="sub">If you’re having trouble with the button above, copy and paste the code below into your web browser.</p>
                        <p class="sub">{{ $code }}</p>
                    </div>
                </div>
            </div>
            <div class="email-footer">
                <p class="sub align-center">© 2024 Be Unique – Unique Fashion. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
