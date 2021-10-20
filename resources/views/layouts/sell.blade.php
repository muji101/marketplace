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
            
            <div class="grid grid-cols-6">
                <div class="col-span-1 p-1 h-screen overflow-y-auto">
                    @include('includes.seller.sidebar')
                </div>
                <div class="col-span-5 bg-gray-100">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @stack('before-script')

    @include('includes.seller.script')
    
    @stack('after-script')
</body>

</html>