<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon-toos-v3.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

       <!-- Styles Plugin HTML TABLES https://datatables.net/ -->
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

       
       
 
    <!-- Styles -->
    <link href="{{ asset('css/mymain.css') }}" rel="stylesheet">

      <!-- Styles  PROJECT THEONLYONESTUDIO <link rel="stylesheet" href="{{asset('css/style_main.css') }}">-->

   <link  href="{{asset('css/style_main.css') }}" rel="stylesheet">

   

   
</head>


<body style="height:2500px" class="bg-dark" >
    <div id="app">



          <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
           <div class="container-fluid">
            <a class="navbar-brand" href="#">SC brood-war  </a>
      
            <div class="d-flex justify-content-center">
                   <div class="p-1 ">                  
                       <a href="welcome">
                         <img src="img/SC_hs.png" alt="" style="width:260px;">
                       </a>
                   </div>
            </div>
           
            <ul class="navbar-nav">

                                <li class="nav-item">
                                   <a class="nav-link"  href="about">project</a>
                                </li>
                              <!-- Authentication Links -->
                              @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif
      
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>
      
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
      
                                          <a class="dropdown-item" href="{{ route('libros.index') }}">dashboard admin</a>
      
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
      
             </ul>
          </div>
        </nav>



       
        <main class="py-4">
            @yield('content')
        </main>

        

    </div>

  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


        <script>
        myTable = document.getElementById("myTable");
        dataTable = new DataTable(myTable); 
        </script>
     
</body>
</html>
