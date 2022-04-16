@extends('layouts.app')
@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-3/5 block border border-blue-50 rounded-3xl p-10"> 
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Do you want to become a develover</h1>
            <a
                href="/blog"
                class="text-center bg-gray-800 text-white py-2 px-4 font-bold text-xl uppercase rounded-3xl"
            >
            Read More
            </a>
        </div>
    </div>
</div>

<div class="w-4/5 rounded-3xl m-auto bg-black  mt-20"> 
    <h1 class="text-white p-3 text-xl">POPULAR BLOGS</h1>
</div>

<!-- 3 Card Blog --> 
<div class="sm:grid grid-cols-3 gap-10 w-4/5 mx-auto py-10 border-b border-gray-200">

    <div class="bg-black text-white rounded-3xl drop-shadow-2xl border-gray-50 overflow-hidden"> 
        <img src="/images/laptop.png" alt="image" class="h-4/6">

        <div class="p-5 mt-5"> 
            <h3 class="mb-3">Card Title </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita tempora numquam nisi! Corrupti rem cu</p>
        </div>
    </div>

    <div class="border border-red-500"> 
        <img src="/images/laptop.png" alt="image" class="w-full">
        
        <div class="p-5 mt-5"> 
            <h3>Card Title </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita tempora numquam nisi! Corrupti rem cu</p>
        </div>
    
    </div>

    <div class="bg-black text-white rounded-3xl drop-shadow-2xl border-gray-50 overflow-hidden"> 
        <img src="/images/laptop.png" alt="image" class="h-4/6">

        <div class="p-5 mt-5"> 
            <h3 class="mb-3">Card Title </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita tempora numquam nisi! Corrupti rem cu</p>
        </div>
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
    <h2 class="text-4xl font-bold py-10">Recent</h2>
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