<!DOCTYPE html>
<!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/source/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Register - TokoMerah</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/source/dist/css/app.css" />
        <!-- END: CSS Assets-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            form {
                max-width: 400px;
                padding: 2em;
                border:1px dashed #ddd
                    
                }
                #pwd{
                /* border-radius:50px; */
                /* padding: 10px 20px; */
                /* border:2px solid #999; */
                }
                *:focus {
                outline-style: none;
                }
            
                input {
                display: block;
                width: 100%;
                box-sizing: border-box;
                padding: 6px;
                border: 1px solid #ddd;
                }
            
                #progressBar {
                height: 20px;
                width: 100%;
                margin-top: 0.6em;
                border-radius:50px;
                border:2px solid #ddd
                }
            
                #progress-bar {
                width: 0%;
                height: 100%;
                transition: width 500ms linear;
                border-radius:50px;
                /* box-shadow:0px 1px 5px #555 */
                }
            
                .progress-bar-danger {
                background: #d00;
                }
            
                .progress-bar-warning {
                background: #f50;
                }
            
                .progress-bar-success {
                background: #080;
                }
            
            </style>
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="/source/dist/images/logo.svg">
                        <span class="text-white text-lg ml-3"> Ru<span class="font-medium">bick</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="/source/dist/images/illustration.svg">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign up to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign Up
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 dark:text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <form action="{{ route('user.reg') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="intro-x mt-8">
                                <input type="hidden" name="role" value="user">
                                <input name="name" type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="Name">
                                {{-- <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Last Name"> --}}
                                <input name="email" type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Email">
                                <input id="password" name="password" type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Password">
                                <div class="py-2 flex">
                                    <input type='checkbox' id='toggle' class="w-6" value='0' onchange='togglePassword(this);'>
                                    <span id='toggleText'>Show</span>
                                </div>
                                <div id="progressBar">
                                    <div id="progress-bar"></div>
                                </div> 
                                {{-- <div  class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                    <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                    <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                    <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                    <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"></div>
                                </div> --}}
                                {{-- <a href="" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">What is a secure password?</a>  --}}
                                {{-- <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Password Confirmation"> --}}
                            </div>
                            {{-- <div class="intro-x flex items-center text-gray-700 dark:text-gray-600 mt-4 text-xs sm:text-sm">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                                <a class="text-theme-1 dark:text-theme-10 ml-1" href="">Privacy Policy</a>. 
                            </div> --}}
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button type="submit" id="success-notification-toggle" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                                <a href="/login" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END: Register Form -->
                <!-- BEGIN: Notification Content --> <div id="success-notification-content" class="toastify-content hidden flex"> <i class="text-theme-9" data-feather="check-circle"></i> <div class="ml-4 mr-4"> <div class="font-medium">Message Saved!</div> <div class="text-gray-600 mt-1">Success to register, you can login now.</div> </div> </div> <!-- END: Notification Content --> 
                {{-- <!-- BEGIN: Notification Toggle --> <button id="success-notification-toggle" class="btn btn-primary">Show Notification</button> <!-- END: Notification Toggle -->  --}}
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="login-dark-register.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="/source/dist/js/app.js"></script>
        <!-- END: JS Assets-->

        <script>
            $(document).ready(function(){
            $("#toggle").change(function(){
            
            // Check the checkbox state
            if($(this).is(':checked')){
            // Changing type attribute
            $("#password").attr("type","text");
            
            // Change the Text
            $("#toggleText").text("Hide");
            }else{
            // Changing type attribute
            $("#password").attr("type","password");
            
            // Change the Text
            $("#toggleText").text("Show");
            }
            
            });
            });
        </script>

        <script>
            jQuery.strength = function( element, password ) {
                    var desc = [{'width':'0px'}, {'width':'20%'}, {'width':'40%'}, {'width':'60%'}, {'width':'80%'}, {'width':'100%'}];
                    var descClass = ['', 'progress-bar-danger', 'progress-bar-danger', 'progress-bar-warning', 'progress-bar-success', 'progress-bar-success'];
                    var score = 0;
            
                    //Jika Password Lebih Dari 6 Karakter Tambah Skor
                    if(password.length > 6){ 
                        score++;
                    }
            
                    //Jika Password Terdapat Huruf Kecil dan Besar Tambah Skor
                    if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))){ 
                        score++;
                    }
            
                    
                    //Jika Password Terdiri dari Angka
                    if(password.match(/\d+/)){
                        score++;
                    }
                    
                    //Jika Password Terdapat Simbol
                    if(password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)){
                        score++;
                    }
            
                    //Jika Password Lebih dari 10 Karakter  
                    if (password.length > 10){
                        score++;
                    }
            
                    element.removeClass( descClass[score-1] ).addClass( descClass[score] ).css( desc[score] );
                };
            
            jQuery(function() {
            jQuery("#password").keyup(function() {
                                jQuery.strength(jQuery("#progress-bar"), jQuery(this).val());
                            });
            });
            </script> 
    </body>
</html>