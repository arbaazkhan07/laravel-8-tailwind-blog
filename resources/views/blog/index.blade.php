@extends('layouts.app')

@section('content')
    <div class="text-center w-4/5 text-6xl text-gray-800 py-16 mx-auto border-b border-gray-300">
        <span>Blog Posts</span>
    </div>

    @if (session()->has('message'))
        <div class="mx-auto mt-8 w-4/5 text-center bg-green-500">
            <p class="p-6 text-white">{{ session()->get('message') }}</p>
        </div>
    @endif

    @if (Auth::check())
        <div class="mx-auto w-4/5 mt-16">
            <a href="/blog/create" class="bg-teal-500 text-white px-4 py-2 rounded-3xl hover:bg-teal-700 uppercase font-bold">Add Post</a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="grid grid-cols-2 my-12 w-4/5 mx-auto">
            <div>
                <div data-aos="fade-right" data-delay="2000">
                    <img src="images/{{$post->image_path}}" width="400" alt="">
                </div>
            </div>
            <div class="flex flex-col justify-center px-4" data-aos="fade-left" data-delay="2000">
                <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
                <p class="text-gray-500 mb-4"">By <span class="text-gray-800 font-bold italic">{{ $post->user->name }}</span>, created on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                <p class="text-gray-500 text-lg mb-5 leading-snug">{{ $post->description }}</p>
                <span><a href="/blog/{{ $post->slug }}" class="bg-teal-500 text-white px-4 py-2 rounded-3xl hover:bg-teal-700 uppercase font-bold">Keep reading</a></span>
            </div>
        </div>
    @endforeach
@endsection