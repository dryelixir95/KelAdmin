<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" href="{{asset('/css/main.css')}}" rel="stylesheet">
    
</head>
    <body class="align">

        <div class="grid">
        
        <form action="{{route('login')}}" method="POST" class="form login">
          @csrf
            <header class="login__header">
              <h3 class="login__title">Login</h3>
            </header>
      
            <div class="login__body">
      
              <div class="form__field">
                <input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus>
              </div>
      
              <div class="form__field">
                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
              </div>
      
            </div>
      
            <footer class="login__footer">
              <input type="submit" value="Melebu">
              <p><span class="icon icon--info">!</span><a href="{{ route('register') }}">daftar</a></p>
              <p><span class="icon icon--info">!</span><a href="{{ route('password.request') }}">Forgot Password</a></p>
            </footer>
      
          </form>
      
        </div>
      
      </body>
</html>