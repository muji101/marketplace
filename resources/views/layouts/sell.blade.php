<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/dist/assets/images/logo.png" type="image/x-icon">
    <title>@yield('title')</title>

    @stack('before-style')

    @include('includes.seller.style')
    
    @stack('after-style')

</head>

<body>

    <div id="app">
        <div id="main">
            @include("includes.seller.navbar")
            
            <div class="flex">
                @include('includes.seller.sidebar')
                @yield('content')
            </div>
        </div>
    </div>

    @stack('before-script')

    @include('includes.seller.script')
    
    @stack('after-script')
</body>

</html>