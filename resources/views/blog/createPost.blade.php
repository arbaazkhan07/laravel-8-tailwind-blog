@extends('layouts.app')

@section('content')
    <div class="text-center w-4/5 text-6xl text-gray-800 py-16 mx-auto border-b border-gray-300">
        <span>Create Post</span>
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
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" id="title" placeholder="Title..." class="bg-transparent w-full h-20 border-b-2 outline-none text-6xl">

            <textarea name="description" id="description" placeholder="Description..." class="bg-transparent w-full h-40 border-b-2 pt-24 text-6xl outline-none"></textarea>

            <div class=" mt-10 bg-gray-100 w-48">
                <label class="flex flex-col shadow-xl py-4 px-8 items-center justify-center border border-blue cursor-pointer">
                    <span class=" leading-normal tracking-wider  uppercase font-semibold text-gray-600">Choose File</span>
                    <input type="file" name="image_path" class="hidden">
                </label>
            </div>

            <button type="submit" class="bg-teal-500 text-white mt-12 px-6 py-4 rounded-3xl hover:bg-teal-700 uppercase font-bold">Add Post
            </button>

        </form>
    </div>


@endsection