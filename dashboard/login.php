<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #AFEEEE;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            max-width: 90%;
            border: 1px solid #ccc;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #333; /* Warna teks untuk label */
            background-color: #5F9EA0; /* Warna latar belakang untuk kotak */
            padding: 5px 10px; /* Padding untuk kotak */
            border-radius: 5px; /* Radius sudut untuk kotak */
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: calc(100% - 20px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #007bff;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
        a:hover {
        text-decoration: none;
        color: #5F9EA0;
        }
        .login-box {
        max-width: 400px;
        margin: 20px auto;
        padding: 100px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #3a3939;
        box-shadow: 0 4px 8px  #3a3939;
        }

        /* style */
        .login-box:hover {
            background-color:#fa9ebc;
            transition: background-color 0.2s ease;
        }

        /* Style the login header */
        .login-box header {
            font-size: 30px;
            margin-bottom: 30px;
            margin-top: 10px;
            text-align: center;
            color: white;
        }

        /* Style the input boxes */
        .input-box {
            margin-bottom: 15px;
        }

        .input-field {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 10px;
        border: 2px solid black;
        font-family: serif;
        }

        /* Style the forgot section */
        .forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            Padding: 7px;
        }
    </style>
</head>

<body>
    <div>
        <form action="proses.php" method="POST">
            <div>
                <label for="">Username</label>
                <input type="username" name="username" required>
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
            <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check" style="color: white;">Remember me</label>
            </section>
            </div>
        </div>
        </form>
    </div>
</body>
</html>