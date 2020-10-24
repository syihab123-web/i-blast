<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type"  content="text/html charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('company/logo.png') }}">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/fontawesome.min.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/solid.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/brands.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/regular.js') }}" defer></script>
    <script src="{{ asset('js/simple-modal.js') }}" defer></script>
    <script src="{{ asset('js/taginput.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/lq7e09nr1zvfkk9rgymrak6zoskkyv2dtna24qw94jhuxh22/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/vendor/chart.js/Chart.min.js') }}" defer></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/taginput.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-modal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">

    <style>
        html {

          --bg: #FCFCFC;
          --bg-panel: #EBEBEB;
          --color-headings: #0077FF;
          --color-text: #333333;
      }

      html[data-theme='dark'] {
          --bg: #333333;
          --bg-panel: #434343;
          --color-headings: #3694FF;
          --color-text: #B5B5B5;
      }

      body {
          background-color: var(--bg);
      }

      .container {
          color: var(--color-text);
      }
      .bg{
          background-color: var(--bg-panel);
          color: var(--color-text);

      }
      .up{
          color: var(--color-text);
      }

      /* SWITCH TOGGLE */

      /* The swirch - the box around the slider */
      .switch{
      position: relative;
      display: inline-block;
      width: 55px;
      height: 30px;
      }

      /* Hide default HTML checkbox */
      .switch input{
          opacity: 0;
          width: 0;
          height: 0;
      }

      /* The Slider */
      .slider{
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
      }

      .slider:before{
          position: absolute;
          content: "";
          height: 22px;
          width: 22px;
          cursor: pointer;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
      }

      input:checked + .slider{
          background-color: #4caf50;
      }


      input:focus + .slider{
          box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before{
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
      }

      /* Rounded slider */
      .slider.round{
          border-radius: 34px;
      }

      .slider.round:before{
          border-radius: 50%;
      }



      html.transition,
      html.transition *,
      html.transition *:before,
      html.transition *:after {
        transition: all 750ms !important;
        transition-delay: 0 !important;
      }
          </style>
</head>
<body>
    <div id="app">
     <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('company/logo_2.png') }}" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/home"><i class="fas fa-home"></i> Home</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
            <div class="bg" id="sidebar-wrapper">
                <div class="sidebar-heading"><a href="{{ route('profile.edit') }}" class="list-group-item list-group-item-action bg"><i class="fas fa-user-circle"></i>  Edit Profile</a>
                </div>
                <br>
                <div class="list-group list-group-flush">
                @if(Auth::user() && Auth::user()->roles == '1')
                <li class="list-group-item bg-transparent nav-item">
                    <i class="fas fa-tachometer-alt ml-3"></i><a class="ml-2" href="/email/dashboard"><button class="btn btn-transparent bg"> Dashboard</button></a>
                </li>
                <li class="list-group-item bg-transparent nav-item">
                    <i class="fas fa-pen-square ml-3"></i><a class="ml-2" href="/saran"><button class="btn btn-transparent bg"> Kritik dan saran</button></a>
                </li>
                <li class="list-group-item bg-transparent nav-item">
                    <i class="fas fa-users ml-3"></i><a class="ml-2" href="/manageUsers"><button class="btn btn-transparent bg"> Manage Users</button></a>
                </li>
                @endif
                <li class="list-group-item bg-transparent nav-item">
                    <i class="fas fa-envelope ml-3"></i><a class="ml-2" href="/email/create"><button class="btn btn-transparent bg"> Send Email</button></a>
                </li>
                <li class="list-group-item bg-transparent nav-item">
                    <i class="fas fa-history ml-3"></i><a class="ml-2" href="/email"><button class="btn btn-transparent bg"> Email History</button></a>
                </li>
                <li class="list-group-item bg-transparent nav-item">
                    <i class="fas fa-image ml-3"></i><a class="ml-2" href="/email/seeTemplate"><button class="btn btn-transparent bg"> See Template</button></a>
                </li>
                <i class="list-group-item bg-transparent nav-item">
                    <div class="toggle-container">
                    <label class="switch">
                       <input type="checkbox" name="theme  ">
                       <span class="slider round"></span>
                   </label>
                       <small><i class="fas fa-sun"></i>Day / <i class="fas fa-moon"></i>Night</small>
                   </div>
               </i>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-light bg-secondary justify-content-between">
                <div class="container">
                    <a class="navbar-item ml-2 btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></a>
                    <form class="form-check-inline" method="GET" action="/search">
                    <input class="form-control mr-sm-2 p-1 pl-2 search" name="search" id="search" size="25" type="search" placeholder="Search" aria-label="Search">
                    <button style="height: 100%;" type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                </nav>
                <main class="py-4 mb-2">
                    <div class="container">
                        @yield('content')
                    </div>
                </main>

            </div>
        </div>
        <br><br>
      	<footer class="footer-distributed">

		<div class="footer-left">

        <span><img src="{{ asset('company/logo.png') }}" width="100"></span>

		<p class="footer-links">
		<a href="#">Home</a>
	·
		<a href="https://inovindo.co.id/">About</a>
	·
		<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">I-Blast &copy; 2020</p>
		</div>

		<div class="footer-center">

		<div class="mt-2">
		<i class="fa fa-map-marker"></i>
		<p><span>Buana Citra C-15</span>Kab.Bandung, Jawa Barat</p>
		</div>

		<div class="mt-3">
		<i class="fa fa-phone"></i>
		<p>+62-881-0236-89072</p>
		</div>

		<div class="mt-3">
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:syihabudin234@gmail.com">syihabudin234@gmail.com</a></p>
		</div>

		</div>

		<div class="footer-right">

		<p class="footer-company-about">
		<span>About the company</span>
        INOVINDO Merupakan perusahaan Jasa Pembuatan Website Profesional, memiliki tenaga ahli muda yang berkompeten dan senantiasa mengutamakan pelayanan yang prima untuk klien / perusahaan mitra.mt-1</p>

		<div class="footer-icons">

		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="https://inovindo.co.id/"><i class="fas fa-globe"></i></a>

		</div>

		</div>

		</footer>
    </div>

   <!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    const toggleSwitch = document.querySelector('.switch input[type="checkbox"]');

    function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        // Menyimpan Preferensi
        localStorage.setItem('theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        // Menyimpan Preferensi
        localStorage.setItem('theme', 'light');
    }
}
toggleSwitch.addEventListener('change', switchTheme, false);

    // Supaya modenya tidak berubah ubah
    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);
        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
    }

</script>

</body>
</html>
