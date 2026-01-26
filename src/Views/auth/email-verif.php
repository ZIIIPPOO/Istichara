<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
            background-color: #f6f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background: #0969da;
            border-radius: 8px;
            padding: 48px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .icon {
            width: 64px;
            height: 64px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .icon svg {
            width: 32px;
            height: 32px;
            fill: white;
        }

        h1 {
            color: white;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .email {
            font-weight: 600;
            color: white;
        }

        .input-group {
            margin-bottom: 16px;
        }

        .code-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            font-size: 16px;
            text-align: center;
            letter-spacing: 4px;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            margin-bottom: 12px;
            transition: all 0.2s;
        }

        .code-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
            letter-spacing: normal;
        }

        .code-input:focus {
            outline: none;
            border-color: white;
            background: rgba(255, 255, 255, 0.15);
        }

        .btn {
            background: white;
            color: #0969da;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            width: 100%;
        }

        .btn:hover {
            background: #f6f8fa;
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .btn:active {
            transform: translateY(0);
        }

        .resend {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
        }

        .resend:hover {
            color: white;
            text-decoration: underline;
        }

        .success-message {
            display: none;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 6px;
            padding: 12px;
            color: white;
            font-size: 14px;
            margin-top: 16px;
        }

        .error-message {
            display: none;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 6px;
            padding: 12px;
            color: #ffdddd;
            font-size: 14px;
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <svg viewBox="0 0 24 24">
                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
        </div>
        
        <h1>Verify your email address</h1>
        
        <p>
            We've sent a verification email to<br>
            <span class="email">user@example.com</span>
        </p>
        
        <p>Click the link in the email to verify your account and get started.</p>
    
        <form action="User/verification" method="post">
        <?=  $_SESSION['code'] ?>
        code envoye :<input id="codeInput" type="text" name="code" id="">
        <input type="submit"  onclick="verifyCode()" value="submit">
    </form>
        
        <div class="success-message" id="successMsg">
            ✓ Verification email sent successfully!
        </div>
        
        <div class="error-message" id="errorMsg">
            ✗ Invalid code. Please try again.
        </div>
    </div>

    <script>
        function verifyCode() {
            const code = document.getElementById('codeInput').value;
            const errorMsg = document.getElementById('errorMsg');
            const successMsg = document.getElementById('successMsg');
            
            errorMsg.style.display = 'none';
            successMsg.style.display = 'none';
            
            // Demo: accept "123456" as valid code
            if (code === <?=  $_SESSION['code'] ?>) {
                successMsg.textContent = '✓ Email verified successfully!';
                successMsg.style.display = 'block';
            } else if (code.length === 6) {
                errorMsg.style.display = 'block';
            }
        }
    </script>
</body>
</html>