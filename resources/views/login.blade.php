<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QR Code Attendance Management System</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 420px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .logo {
            text-align: center;
            font-size: 55px;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            color: #1e293b;
            font-size: 25px;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 14px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #334155;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            margin-bottom: 18px;
            font-size: 15px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 7px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #94a3b8;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <div class="logo">📱</div>

        <h1>QR Attendance</h1>

        <p class="subtitle">
            QR Code Attendance Management System
        </p>

        <form>

            <label>Email Address</label>

            <input
                type="email"
                placeholder="Enter your email"
                required
            >

            <label>Password</label>

            <input
                type="password"
                placeholder="Enter your password"
                required
            >

            <label>Login As</label>

            <select required>
                <option value="">Select your role</option>
                <option value="teacher">Teacher / Faculty</option>
                <option value="student">Student</option>
            </select>

            <button type="submit">
                Login
            </button>

        </form>

        <div class="footer">
            © 2026 QR Code Attendance Management System
        </div>

    </div>

</body>
</html>