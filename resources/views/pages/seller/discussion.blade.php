@extends('layouts.sell')

@section('title', 'Discution')

@section('content')
    <h2 class="font-bold text-lg my-2 pl-4">
        Diskusi
    </h2>
    @foreach ($products as $product)
        @if ($product->discussion->count() )
            <div class="mx-4 h-auto p-4 border-2 rounded-lg bg-blue-50 mb-2">
                <div class="flex items-center border-b-2 border-blue-200 pb-2">
                    <img class="w-12 h-12 object-cover rounded-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}" alt="">
                    <div class="pl-4">
                        <p class="text-gray-600 hover:text-blue-400">{{ $product->name }}</p>
                        <p class="font-bold">Rp {{ number_format($product->price) }}</p>
                    </div>
                </div>
                @foreach ($product->discussion as $discussion)
                <div class="flex pt-4">
                    <div class="">
                        <img class="w-12 h-12 rounded-full" src="{{ asset('/storage/'.$discussion->user->photo) }}" alt="">
                    </div>
                    <div class="w-full px-4">
                        <div class="py-2">
                            <p class="text-gray-600">{{ $discussion->user->name }}<span class="ml-2 px-2 py-1 font-bold text-white text-xs bg-blue-300 rounded">Pembeli</span></p>
                            <p class="font-bold text-gray-700">{{ $discussion->content }}</p>
                        </div>
                        @foreach ($discussion->subdiscussion as $item)
                            <div class="flex items-center my-2 bg-blue-200 rounded-lg">
                                @if ($item->product->user_id == $item->user_id)
                                    <img class="w-12 rounded-lg" src="{{ asset('/storage/'.$item->user->store->photo) }}" alt="">
                                    <div class="pl-4">
                                        <p class="text-gray-600 hover:text-blue-400">{{ $item->user->store->name }}<span class="px-2 py-1 font-bold text-blue-400 text-xs bg-gray-200 rounded ml-2">Kamu</span></p>
                                        <p class="text-gray-700">{{ $item->note }}</p>
                                    </div>
                                @else
                                    <img class="w-12 rounded-lg" src="{{ asset('/storage/'.$item->user->photo) }}" alt="">
                                    <div class="pl-4">
                                        <p class="text-gray-600 hover:text-blue-400">{{ $item->user->name }}</p>
                                        <p class="text-gray-700">{{ $item->note }}</p>
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
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input name="note" type="text" class="p-2 border-2 w-full rounded" placeholder="Tulis balasan disini...">
                                    <div class="flex justify-end space-x-2 pt-2">
                                        <button class="py-2 px-4 font-bold bg-gray-200 rounded-lg">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    @endforeach
@endsection