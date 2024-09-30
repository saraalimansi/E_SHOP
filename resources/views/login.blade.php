<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop | Login</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 500px;
        }

        /* Input Styling */
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #04AA6D;
            outline: none;
        }

        /* Button Styling */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #039e5a;
        }

        /* Link Styling */
        a {
            color: #04AA6D;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            form {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            form {
                width: 95%;
            }
        }
    </style>
</head>
<body>

<form action="/login" method="post">
    @csrf
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <p>Don't have an account? <a href="/register">Register Now</a></p>
    </div>
</form>

</body>
</html>
