<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/dist/assets/images/logo.png" type="image/x-icon">
    <title>@yield('title')</title>

    @stack('before-style')

    @include('includes.front.style')
    
    @stack('after-style')

</head>

<body>

    <div id="app">
        <div id="main">
            @include("includes.front.navbar")
            
            @yield('content')
        </div>
        <div class="main-content container-fluid">
            @include("includes.front.footer")
        </div>
    </div>

    @stack('before-script')

    @include('includes.front.script')
    
    @stack('after-script')
</body>

</html>