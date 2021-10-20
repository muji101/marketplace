@extends('layouts.app')

@section('content')
    <div class="py-12 mx-32">
        <div class="grid grid-cols-5">
            <div class="col-span-1">
                @include('pages.front.profile.profileside')
            </div>
            <div class="col-span-4">
                @stack('content')
            </div>

            {{-- <div class="bg-gray-100 h-screen w-screen flex justify-center">
                <div class="mr-8">
                    <h1 class="font-medium max-w-xl mx-auto pt-10 pb-4">Smooth Accordion</h1>
                    <div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="{selected:null}">
                        <ul class="shadow-box">
                            <li class="relative border-b border-gray-200">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span>Should I use reCAPTCHA v2 or v3?</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security and usability for v2.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative border-b border-gray-200">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span>I'd like to run automated tests with reCAPTCHA. What should I do?</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>
                    
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p>For reCAPTCHA v3, create a separate key for testing environments. Scores may not be accurate as reCAPTCHA v3 relies on seeing real traffic.</p>
                                    </div>
                                </div>
                            </li>
                    
                        
                            <li class="relative border-b border-gray-200">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span>Can I run reCAPTCHA v2 and v3 on the same page?</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p>To do this, load the v3 site key as documented, and then explicitly render v2 using grecaptcha.render.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            
        </div>
        
    </div>
@endsection

@push('after-style')
<style>
    .tab-content {
    max-height: 0;
    -webkit-transition: max-height .35s;
    -o-transition: max-height .35s;
    transition: max-height .35s;
    }
    /* :checked - resize to full height */
    .tab input:checked ~ .tab-content {
    max-height: 100vh;
    }
    /* Label formatting when open */
    .tab input:checked + label{
    /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
    font-size: 1.25rem; /*.text-xl*/
    padding: 1.25rem; /*.p-5*/
    border-left-width: 2px; /*.border-l-2*/
    border-color: #65cd8d; /*.border-indigo*/
    background-color: #f8fafc; /*.bg-gray-100 */
    color: #65cd8d; /*.text-indigo*/
    }
    /* Icon */
    .tab label::after {
    float:right;
    right: 0;
    top: 0;
    display: block;
    width: 1.5em;
    height: 1.5em;
    line-height: 1.5;
    font-size: 1.25rem;
    text-align: center;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    }
    /* Icon formatting - closed */
    .tab input[type=checkbox] + label::after {
    content: "+";
    font-weight:bold; /*.font-bold*/
    border-width: 1px; /*.border*/
    border-radius: 9999px; /*.rounded-full */
    border-color: #b8c2cc; /*.border-grey*/
    }
    .tab input[type=radio] + label::after {
    content: "\25BE";
    font-weight:bold; /*.font-bold*/
    border-width: 1px; /*.border*/
    border-radius: 9999px; /*.rounded-full */
    border-color: #b8c2cc; /*.border-grey*/
    }
    /* Icon formatting - open */
    .tab input[type=checkbox]:checked + label::after {
    transform: rotate(315deg);
    background-color: #65cd8d; /*.bg-indigo*/
    color: #f8fafc; /*.text-grey-lightest*/
    }
    .tab input[type=radio]:checked + label::after {
    transform: rotateX(180deg);
    background-color: #65cd8d; /*.bg-indigo*/
    color: #f8fafc; /*.text-grey-lightest*/
    }
 </style>
@endpush

@push('after-script')
    <script>
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                    setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }
    </script>

    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglers[i].parentElement.classList.remove("border-red-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-red-400", "border-b-4", "-mb-px", "opacity-100");
        });
        });

        document.getElementById("default-tab").click();
    </script>
@endpush