@extends('template')

@section('content')

<div class="bg-gray-100 rounded-lg px-6 py-4">
    <h2 class="text-[30px] text-gray-900 my-6 mx-2">{{ $blog->title }}</h2>
    <p class="text-xs flex items-center gap-2">
        <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
        <span>{{ $blog->created_at->format('d/m/Y') }}</span>
    </p>

    <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1 my-6">
        <p class="text-xl flex items-center gap-2">
            {{$blog->body}}
        </p>

    </div>
</div>


@endsection

