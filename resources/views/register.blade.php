<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=email], input[type=password], input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2>Регистрация</h2>

<form method="POST" action="{{route('register_attempt')}}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password2"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password2" required>

        <label for="user_name"><b>User name</b></label>
        <input type="text" placeholder="Enter user name" name="user_name" required>

        <!-- <label for="status"><b>Status</b></label>
        <input type="text" placeholder="Enter status" name="status" required>

        <label for="bio"><b>Biography</b></label>
        <input type="text" placeholder="Enter biography" name="bio" required>

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter phone" name="phone" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter address" name="address" required>

        <label for="age"><b>Age</b></label>
        <input type="number" placeholder="Enter age" name="age" required> -->

        <input type="file" name="image">

        <input class="button" type="submit" value="Регистрация"/>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a type="button" href="{{route('login')}}">Вход</a>
    </div>
</form>

</body>
</html>
