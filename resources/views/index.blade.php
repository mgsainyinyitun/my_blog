@extends('layouts.app')
@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block"> 
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Do you want to become a develover</h1>
            <a
                href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase"
            >
            Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div> 
        <img src="https://cdn.pixabay.com/photo/2020/01/26/20/14/computer-4795762_960_720.jpg" alt="image" width="700">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block"> 
        <h2 class="text-4xl font-extrabold text-gray-600">
            Struggling to be a better web developer
        </h2>
        <p class="py-8 text-gray-500 text-l">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Non cum voluptatibus quisquam impedit animi
        </p>
        <p class="font-extrabold text-gray-600 text-xl pb-9">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae facere, repudiandae reiciendis blanditiis, nam enim quae dolores at eveniet nulla magnam delect
        </p>
        <a 
            href="/blog"
            class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl "
        >
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">I'm an expert in ...</h2>
    <span class="font-extrabold block text-4xl py-1">
        Ux Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend developer
    </span>

</div>


<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        BLOG
    </span>
    <h2 class="text-4xl font-bold py-10">Recent Post</h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit vitae ratione dolore quasi tenetur! Doloremque deserunt ratione, vel magni sapiente possimus unde enim voluptatibus omnis nihil optio accusantium ipsum.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block"> 
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quaerat consectetur, adipisci tempora ut fugit similique voluptates ipsam aliquid impedit, iusto, inventore repudiandae! Iste accusamus officia ab mollitia ratione rerum!
            </h3>
            <a 
                href=""
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl"
            >
                Find Out More
            </a>
        </div>
    </div>
    <div> 
        <img src="https://cdn.pixabay.com/photo/2020/01/26/20/14/computer-4795762_960_720.jpg" alt="image" width="700">
    </div>
</div>
    
@endsection