<!DOCTYPE html>

<html>

<head>

  <title>3RT Login Page</title>

  <link rel="stylesheet" href="style.css">
<style>
    *{

margin: 0;

padding: 0;

box-sizing: border-box;

font-family: "Poppins", sans-serif;

}

body{

display: flex;

justify-content: center;

align-items: center;

min-height: 100vh;

background:url(https://images.unsplash.com/photo-1501975558162-0be7b8ca95ea?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MDk2NTI3NDJ8&ixlib=rb-4.0.3&q=85) no-repeat;

background-size: cover;

background-position: center;

}

.wrapper{

width: 420px;

background: transparent;

border: 1px solid white;

backdrop-filter: blur(4px);

color: #fff;

border-radius: 12px;

padding: 30px 40px;

display: none;

}

.wrapper h1{

font-size: 36px;

text-align: center;

}

.wrapper .input-box{

position: relative;

width: 100%;

height: 50px;



margin: 30px 0;

}

.input-box input{

width: 100%;

height: 100%;

background: transparent;

border: none;

outline: none;

border: 1px solid white;

border-radius: 40px;

font-size: 16px;

color: #fff;

padding: 20px 45px 20px 20px;

}

.input-box input::placeholder{

color: #fff;

}

.input-box i{

position: absolute;

right: 20px;

top: 30%;

transform: translate(-50%);

font-size: 20px;

}

.wrapper .checkbox1{

display: flex;

justify-content: space-between;

font-size: 14.5px;

margin: -15px 0 15px;

}

.checkbox1 label input{

accent-color: #fff;

margin-right: 3px;

}

.checkbox1 a{

color: #fff;

text-decoration: none;

}

.checkbox1 a:hover{

text-decoration: underline;

}

.wrapper .btn{

width: 100%;

height: 45px;

background: #fff;

border: none;

outline: none;

border-radius: 40px;



border: 1px solid white;

box-shadow: 0 0 10px rgba(0, 0, 0, .1);

cursor: pointer;

font-size: 16px;

color: #333;

font-weight: 600;

}

.wrapper .link{

font-size: 14.5px;

text-align: center;

margin: 20px 0 15px;

}

.link p a{

color: #fff;

text-decoration: none;

font-weight: 600;

}

.link p a:hover{

text-decoration: underline;

}

#loginForm:checked ~ #loginFormContent,

#registerForm:checked ~ #registerFormContent,

#forgotForm:checked ~ #forgotFormContent {

display: block;

}

  input[type="radio"] {

    display: none;
  }
</style>
</head>

<body>

  <input type="radio" id="loginForm" name="formToggle" checked>

<input type="radio" id="registerForm" name="formToggle">

<input type="radio" id="forgotForm" name="formToggle">



  <div class="wrapper" id="loginFormContent">

    <form action="{{ route('admin.login') }}" method="POST">
@csrf
      <h1>Login</h1>

      <div class="input-box">

        <input type="email"  name="email" placeholder="Username" required>



      </div>

      <div class="input-box">

        <input type="password" name="password" placeholder="Password" required>



      </div>

      <div class="checkbox1">

        <label><input type="checkbox">Remember Me</label>

        {{-- <label for="forgotForm">Forgot Password</label> --}}

      </div>

      <button type="submit" class="btn">Login</button>



    </form>

  </div>



  <div class="wrapper" id="forgotFormContent">

  <form action="">

      <h1>Reset your password</h1>

      <div class="input-box">

        <input type="email" placeholder="Email" required>

      </div>

      <div class="input-box">

      <button type="submit" class="btn">Send Request</button>

      <div class="link">

        <p>Don't have an account? <label for="registerForm">Register</label></p>

      </div>

    </form>

</div>

</body>

</html>
