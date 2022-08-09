

  

    <div id="logInCanvas">
        <button class="closeLoginBtn" v-on:click="signupPop"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button><br>
        <span style="margin-left:40.5%;">Sign in!</span>
        <form id="loginContainer" method="post" action="login">
            @csrf

            <p>Username</p>
            <input type="text" name="username" value="{{ old('username') }}" required><br>
            @error('username')
            <span class="error">{{ $message }} </span>
            @enderror

            <p>Password</p>
            <input type="password" name="password" required><br>
            @error('password')
            <span class="error">{{ $message }} </span>
            @enderror
           <p> <a href="signup">create account?</a></p>
            <button class="loginButton" name="help">Sumbit</button>
        </form>
    </div>
 


   
