<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('reporter.partials.admin_head')
</head>
<body class="dark-edition">
  <div class="wrapper">
    @include('reporter.partials.admin_sidebar')
    <div class="main-panel">
        @include('reporter.partials.admin_nav')

        {{-- <main> --}}
            @yield('content')
        {{-- </main> --}}
        {{-- @include('reporter.partials.admin_footer') --}}
    </div>

    {{-- <div id="admin-app" > --}}

        

    {{-- </div> --}}

  </div>    

  @include('reporter.partials.admin_fixedplugin')
  
  @include('reporter.partials.admin_javasript')    

</body>
</html>
