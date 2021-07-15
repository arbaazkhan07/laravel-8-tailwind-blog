@extends('layouts.app')

@section('content')

    <div class="text-center w-4/5 text-6xl text-gray-800 py-16 mx-auto border-b border-gray-300">
        <span>{{ $post->title }}</span>
    </div>

    <div class="mx-auto w-4/5 mt-16">
        <b class="text-gray-400">By <span class="font-bold text-gray-900">{{$post->user->name}}, </span>Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</b>

        <p class="pt-8 text-cool-gray-600 text-xl leading-8">{{ $post->description }}</p>
    </div>


@endsection