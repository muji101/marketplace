@extends('pages.front.profile.app')

@push('content')
<div class="px-2 border-2 rounded-lg ml-2">
    <div class="grid grid-cols-8 h-screen">
        <div class="col-span-2 pr-2">
            <h1 class="font-bold text-2xl py-4">Chat</h1>
            <div id="tabs" class="flex flex-col space-y-2">
                @php
                    $id = 'a1';
                @endphp
                @foreach ($chats as $chat)
                <a href="#{{ $id++ }}" id="default-tab" class="py-2 flex space-x-2 items-center bg-blue-50 rounded-lg p-4">
                    <img class="w-12 h-12 object-cover border-2 rounded-full" src="{{ asset('/storage/'.$chat->user->photo) }}" alt="">
                    <div class="">
                        <p class="font-bold text-xs text-gray-600">{{ $chat->user->store->name }} <span class="p-1 text-blue-400 rounded text-xs bg-blue-100">penjual</span></p>
                        @isset($chat->subchat->message)
                            <p class=" text-gray-400 text-xs">{{ Str::limit($chat->subchat->last()->message, 20, '...') }}</p>
                        @endisset
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div  id="tab-contents" class="col-span-6 border-l-2">
            @php
                $num = 'a1';
            @endphp
            @foreach ($chats as $message)
            <div  id="{{ $num++ }}" class="flex-1 p-2 justify-between flex flex-col h-screen">
                <div class="flex sm:items-center justify-between py-3 border-b-2 border-gray-200">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('/storage/'.$message->user->photo) }}" alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                        <div class="flex flex-col leading-tight">
                            <div class="text-xl mt-1 flex items-center">
                            <span class="text-gray-700 mr-3 font-bold">{{ $message->user->store->name }}</span>
                            <span class="py-1 px-2 text-blue-400 rounded text-xs bg-blue-50 font-bold">penjual</span>
                            </div>
                            {{-- online offline status --}}
                            @if (Cache::has('user-is-online-' . $message->user->id))
                                <span class="text-xs text-green-400 font-bold">• Online</span>
                            @else
                                <div class="text-xs text-green-400 font-bold">Online <span class="text-gray-400">{{ \Carbon\Carbon::parse($message->user->last_seen)->diffForHumans() }}</span></div>
                            @endif
                        </div>
                    </div>
                </div>
                <div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch h-full justify-end">
                    @foreach ($message->subchat as $msg)
                    <div class="chat-message">
                        @if ($msg->user_id == Auth::user()->id)
                            <div class="flex items-end justify-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">{{ $msg->message }}</span></div>
                                </div>
                                <img src="{{ asset('/storage/'.Auth::user()->photo) }}" class="w-6 h-6 rounded-full order-2">
                            </div>
                        @else
                            <div class="flex items-end">
                                <img src="{{ asset('/storage/'.$msg->user->photo) }}" class="w-6 h-6 rounded-full order-2">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">{{ $msg->message }}</span></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
                    <form action="{{ route('chat-store-sub') }}" method="POST">
                        @csrf
                        @method("POST")
                    
                        <div class="relative flex">
                            <span class="absolute inset-y-0 flex items-center">
                                <button type="button" class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                                </svg>
                                </button>
                            </span>
                            <input type="hidden" name="masterchat_id" value="{{ $message->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="text" name="message" placeholder="Write Something" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-full py-3">
                            <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                                <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                </svg>
                                </button>
                                <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                </button>
                                <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                </button>
                                <button type="submit" class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 transform rotate-90">
                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                </svg>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endpush

@push('after-style')
<style>
    .scrollbar-w-2::-webkit-scrollbar {
        width: 0.25rem;
        height: 0.25rem;
    }
    
    .scrollbar-track-blue-lighter::-webkit-scrollbar-track {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity));
    }
    
    .scrollbar-thumb-blue::-webkit-scrollbar-thumb {
        --bg-opacity: 1;
        background-color: #edf2f7;
        background-color: rgba(237, 242, 247, var(--bg-opacity));
    }
    
    .scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
        border-radius: 0.25rem;
    }
    </style>
@endpush

@push('after-script')
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

        tabTogglers[i].parentElement.classList.remove();  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add();
    });
    });

    document.getElementById("default-tab").click();
</script>
<script>
    const el = document.getElementById('messages')
    el.scrollTop = el.scrollHeight
</script>
@endpush