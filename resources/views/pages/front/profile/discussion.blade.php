@extends('pages.front.profile.app')

@push('content')
    <h1 class="px-4 pb-2 font-bold text-base">Diskusi</h1>
    @foreach ($discussions as $discussion)
    <div class="mx-4 mb-4 h-auto p-4 border-2 rounded-lg bg-blue-50">
        <a href="{{ route('front.product-detail', $discussion->product->id) }}" class="flex items-center space-x-2 bg-blue-200 rounded-lg">
            <img class="w-20 h-20 object-cover rounded-lg" src="{{ asset('/storage/'.$discussion->product->galleries->first()->photo) }}" alt="">
            <div class="">
                <p class="text-gray-900 font-bold hover:text-blue-400">{{ $discussion->product->name }}</p>
                <p class="font-bold">Rp {{ number_format($discussion->product->price) }}</p>
            </div>
        </a>
        <hr>
        <div class="grid grid-cols-12 pt-4">
            <div class="col-span-1">
                <img class="w-16 rounded-full" src="{{ asset('/storage/'.$discussion->user->photo) }}" alt="">
            </div>
            <div class="col-span-11">
                <div class="py-2">
                    <p class="text-gray-600">{{ $discussion->user->name }} <span class="px-2 py-1 bg-blue-100 rounded text-xs">Kamu</span></p>
                    <p class="font-bold">{{ $discussion->content }}</p>
                </div>
                @foreach ($discussion->subdiscussion as $item)
                <div class="flex items-center space-x-2 border-l-4 pl-2 my-2 bg-blue-100 rounded py-2">
                        @if ($item->product->user_id == $item->user_id)
                            <img class="w-16 rounded-lg" src="{{ asset('/storage/'.$item->user->store->photo) }}" alt="">
                            <div class="">
                                <p class="text-gray-600 hover:text-blue-400">{{ $item->user->store->name }} <span class="px-2 py-1 bg-gray-50 text-blue-500 font-bold rounded text-xs">Penjual</span></p>
                                <p>{{ $item->note }}</p>
                            </div>
                        @else
                            <img class="w-16 rounded-lg" src="{{ asset('/storage/'.$item->user->photo) }}" alt="">
                            <div class="">
                                <p class="text-gray-600 hover:text-blue-400">{{ $item->user->name }}</p>
                                <p>{{ $item->note }}</p>
                            </div>                                                              
                        @endif
                    </div>
                @endforeach
                <div class="py-2">
                    <form action="{{ route('subdiscussions.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="text-sm">
                            <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="product_id" value="{{ $discussion->product->id }}">
                            <input name="note" type="text" class="p-2 border-2 w-full rounded" placeholder="Balas diskusi...">
                            <div class="flex justify-end space-x-2 pt-2">
                                <button class="py-2 px-4 font-bold bg-gray-200 rounded-lg">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endpush