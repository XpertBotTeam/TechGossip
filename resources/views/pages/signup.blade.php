<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <style>
        body{
            margin-top:5%;
            background-color: rgb(229, 220, 229);
        }
        #logInCanvas{
            color:teal;
            font-size: x-large;
            text-align: left;
            display:flex;
            flex-direction: column; 
            align-items: center;
            padding:65px;
        }
        #loginContainer{
            
            height: auto;
            font-size: smaller;
            width:300px;
            border: 3px solid black;
            padding:1.3%;
            border-radius: 35px;
            box-shadow: 5px 10px #888888;
        }
        button{
            background-color:aliceblue;
            border-radius: 6px;
            color:teal;
            width:70px;
            height: 30px;
            margin:7%; 
        }
        
        input{
            border-radius: 5px;
            color:teal;
            width:165px;
            height: 20px;
        }
        .error{
            color:red;
            font-size: small;
        }
    </style>

</head>
<body>
    <div id="logInCanvas">
        
        <span>Sign up!</span>
        <form id="loginContainer" method="post" action="signup">
            @csrf

            <p>Email</p>
            <input type="text" name="email" value="{{ old('email') }}"><br>
            @error('email')
            <span class="error">{{ $message }} </span>
            @enderror

            <p>Username</p>
            <input type="text" name="username" value="{{ old('username') }}"><br>
            @error('username')
            <span class="error">{{ $message }} </span>
            @enderror

            <p>Password</p>
            <input type="password" name="password" ><br>
            @error('password')
            <span class="error">{{ $message }} </span>
            @enderror

            <button style="margin-left: 70%">Sumbit</button>
        </form>
        
    </div>
</body>
</html>