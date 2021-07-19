@extends('layouts.app')

@section('content')
    <div class="text-center w-4/5 text-6xl text-gray-800 py-16 mx-auto border-b border-gray-300">
        <span>Update Post</span>
    </div>

    <div class="w-4/5 mx-auto mt-12">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="mx-auto w-4/5 mt-16">
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" id="title" value="{{ $post->title }}" class="bg-transparent w-full h-20 border-b-2 outline-none text-6xl">

            <textarea name="description" id="description" class="bg-transparent w-full h-40 border-b-2 pt-24 text-2xl outline-none">{{ $post->description }}</textarea>

            <button type="submit" class="bg-teal-500 text-white mt-12 px-6 py-4 rounded-3xl hover:bg-teal-700 uppercase font-bold">Update Post
            </button>

        </form>
    </div>


@endsection