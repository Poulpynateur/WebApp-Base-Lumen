<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Home</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald&display=swap">

  <link rel="stylesheet" href="{{ url('css/vendor/spectre.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/vendor/spectre-exp.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/vendor/spectre-icons.min.css') }}">

  <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>

<body>

  <div class="p-absolute container columns">
    <div class="column col-4 col-md-6 col-sm-12 col-mx-auto">
      <ul class="tab tab-block">
        <li class="tab-item">
          <a href="{{ url('/') }}" class="{{ Request::is('/')=='home' ? 'active' : '' }}">Home</a>
        </li>
        <li class="tab-item">
          <a href="{{ url('/auth/login') }}" class="{{ Request::is('auth/login')? 'active' : '' }}">login</a>
        </li>
      </ul>
    </div>
  </div>

  <div id="app">
      <main>
          @yield('content')
      </main>
  </div>

  <script src="{{ url('js/vendor/jquery-3.4.1.min.js') }}"></script>

  <script src="{{ url('js/modules/interface.js') }}"></script>
  <script src="{{ url('js/modules/auth.js') }}"></script>
  <script src="{{ url('js/app.js') }}"></script>
</body>
</html>