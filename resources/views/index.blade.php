@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-28 pb-28">
            <div class="w-4/5 text-center m-auto" data-aos="zoom-in">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-4">Do You Want To Become A Developer?</h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-500 py-2 px-2 m-3 uppercase text-xl font-bold">Read more</a>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 w-4/5 mx-auto mt-12">
        <div data-aos="fade-right" data-delay="300">
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="400" alt="">
        </div>
        <div class="flex flex-col items-center justify-center" data-aos="fade-left" data-delay="300">
            <h3 class="text-3xl mb-4 font-extrabold">Struggling to be a web devloper?</h3>
            <p class="text-sm text-gray-500 mb-3 leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="text-lg text-gray-700 leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="/blog" class="uppercase mt-4 bg-blue-500 w-40 px-4 py-2 rounded-2xl text-white hover:bg-blue-700">Find out more</a>
        </div>
    </div>
    <div class="my-8 bg-black text-gray-100 py-16">
        <div class="text-center">
            <p class="mb-3 text-gray-400">I am expert in ...</p>
            <h3 class="font-extrabold text-2xl" data-aos="fade-left" data-delay="300">UX Design</h3>
            <h3 class="font-extrabold text-2xl" data-aos="fade-right" data-delay="400">Project Management</h3>
            <h3 class="font-extrabold text-2xl" data-aos="fade-left" data-delay="500">Degital Strategy</h3>
            <h3 class="font-extrabold text-2xl" data-aos="fade-right" data-delay="600">Backend Development</h3>
        </div>
    </div>
    <div class="text-center my-8">
        <h4 class="text-gray-400 tracking-widest mb-6">BLOG</h4>
        <h1 class="font-bold text-3xl mb-4">Recent Post</h1>
        <p class="text-gray-700 mb-4 leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, repellat.</p>
    </div>
    <div class="grid grid-cols-2 w-4/5 mx-auto bg-yellow-500">
        <div class="flex flex-col p-8" data-aos="fade-left" data-delay="1000">
            <span class="text-cool-gray-100">PHP</span>
            <p class="mt-12 text-cool-gray-50 font-bold text-lg leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab tempora nobis quibusdam cum nostrum, eligendi debitis doloribus? Dignissimos, nesciunt, molestias suscipit, temporibus aspernatur repudiandae a nam incidunt doloremque nostrum sunt.</p>
            <a href="/blog" class="uppercase mt-8 border-2 border-gray-50 w-40 px-4 py-2 rounded-2xl text-white hover:bg-white hover:text-cool-gray-900">Find out more</a>
        </div>
        <div data-aos="fade-right" data-delay="1000">
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="600" alt="">
        </div>
    </div>
@endsection