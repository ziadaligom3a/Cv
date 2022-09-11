<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="/Admin/Css/css.css">
    </head>
    <body>

        <div class="login-page">


            <div class="form">

              <form class="login-form" action="/admin/login" method="post">
                @csrf
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit">login</button>
              </form>
              @if(Session::has('error'))
              <p style="color: red">{{ Session::get('error') }}</p>
               @endif
            </div>
          </div>
          <script>
            $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
          </script>
    </body>
</html>