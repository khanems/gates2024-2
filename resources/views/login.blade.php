<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000000e3;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            color: white;
        }

        #algn {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #container {
            border-radius: 10px;
            width: 320px;
            height: 340px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            backdrop-filter: blur(1px);
        }

        #container .head {
            font-weight: 700;
            font-size: larger;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            width: 265px;
        }

        .input-container .inpt {
            padding: 10px;
            margin: 5px 10px;
            border: 2px solid white;
            border-radius: 25px;
            background-color: transparent;
            color: #ec1f28;
        }

        ::placeholder {
            font-weight: 600;
            color: white;
            opacity: 1;
        }

        .rem-forgot {
            display: flex;
            justify-content: space-around;
            column-gap: 10px;
            font-size: 11px;
            font-weight: 400;
            margin: 8px;
        }

        .rem {
            display: flex;
            align-items: center;
        }

        .rem-forgot span a {
            text-decoration: none;
            color: white;
        }

        .rem-forgot span a:hover {
            color: #ec1f28;
        }

        .input-container .btn {
            margin: 0 12px;
            padding: 10px 0;
            border: none;
            border-radius: 25px;
            font-weight: 700;
        }

        .input-container .btn:hover {
            background-color: #ec1f28;
            color: white;
        }

        #container .footer {
            font-size: 11px;
            font-weight: 400;
        }

        #container .footer a {
            text-decoration: none;
            color: white;
            font-weight: 700;
            margin: 0 5px;
        }

        #container .footer a:hover {
            color: #ffc3d2;
        }
    </style>
</head>
<body>
<div id="algn">
    <div id="container">
        <img src="../assets/images/logos/logo.png" class="light-logo" alt="Logo-light" height="65px"/>
        <form action="{{ route('login') }}" class="input-container" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter email" class="inpt" required>
            <input type="password" name="password" placeholder="Enter password" class="inpt" required>
            <div class="rem-forgot">
                <div class="rem">
                    <input type="checkbox" id="rem-tik" name="remember">
                    <label for="rem-tik">Remember me</label>
                </div>
                <span><a href="#">Forgot password</a></span>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <p class="footer">Don't have an account? <a href="#">Register</a></p>
    </div>
</div>
</body>
</html>
