@extends('layouts.app')

@section('content')
    <div class="mx-32 p-4">
        <div class="grid grid-cols-8 h-96">
            @foreach ($categoryall as $item)
            <div class="col-span-2 p-2 h-full overflow-auto">
                    <div class="">
                        <a href="{{ route('category-show', $item->id) }}" class="pl-2">{{ $item->name }}</a>
                        <div class="pt-2 flex flex-col text-sm text-gray-500">
                            @foreach ($item->subcategory as $sub)
                                <a class="pl-4 hover:text-blue-500" href="{{ route('category-detail', [ $item->id, $sub->id ]) }}">{{ $sub->name }}</a>
                            @endforeach
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection