<html>
    <head>
        <title>CUOnlline Student Portal - @yield('title')</title>
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-sm bg-light">
              <ul class="navbar-nav">
                 <li class="nav-item">
                    <a id="index" class="navbar-brand" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                 <a id="index" class="navbar-brand" href="{{url('/login')}}">Login</a>                  
                </li>
                <li class="nav-item">
                  <a id="index" class="navbar-brand" href="{{url('/contact')}}">Contact</a>                    
                </li>
              </ul>
            </nav>
        @show

        
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
