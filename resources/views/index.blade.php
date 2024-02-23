@extends('layouts.app')


@section('content')


<!-- hero -->
 <div class="hero-bg-image flex flex-col items-center justify-center">
      <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">welcome to my Blog </h1>
      <a href="/" class="bg-gray-100 text-gray-700 py-7 px-5 rounded-lg font-bold uppercase ">Start Reading</a>
 </div>  

 <!-- How to be-->
 <div class="class=container sm:grid grid-cols-2  gap-15 mx-auto py-15 pl-10">
     <div class="mx-2 md:mx-0">
          <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
     </div>
     <div class="flex flex-col items-left justify-center">
          <h2 class="font-blod text-gray-700 text-4xl uppercase">
                how to be expert in 2024
          </h2>
          <p class="font-blod text-gray-600 text-xl pt-2">
             you can find  
          </p>
          <p class="py-4 text-gray-600 text-sm leading-5">
             get the same The API will return 30 items per page by default.

            To request another page, use the ?page parameter.

            To change the amount of items per page, use the ?limit parameter.
          </p>
          <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start">
               Read More
          </a>
          
     </div>
 </div>

 <!-- Blog Categories -->
 <div class=" text-center p-15 bg-gray-700 text-gray-100">
     <h2 class="text-2xl">Blog Categories</h2>
     <div class="container mx-auto pt-10 sm:grid grid-cols-4">
          <span class="font-bold text-3xl py-2">UX Design</span>
          <span class="font-bold text-3xl py-2">Programming</span>
          <span class="font-bold text-3xl py-2">Graphic Design</span>
          <span class="font-bold text-3xl py-2">Front-end</span>
     </div>
 <!-- Recent posts -->
 <div class="container mx-auto text-center py-15 ">
     <h2 class="font-bold text-5xl py-10">Recenr Posts</h2>
     <p class="text-gray-400 leading-6 px-10 ">
          PHP is a general-purpose scripting language geared towards web development.[8] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.[9][10] The PHP reference implementation is now produced by the PHP Group.[11] PHP was originally an abbreviation of Personal Home Page,[12][13] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
     </p>
 </div>
 <div class=" sm:grid grid-cols-2 w-4/5 mx-auto">
     <div class=" flex bg-yellow-700 text-gray-100 pt-10">
          <div class=" block m-auto py-4 pd-15 w-4/5">
               <ul class=" md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Language</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>
               </ul>



          <h3 class=" text-left py-10 leading-6">
               PHP is a general-purpose scripting language geared towards web development.[8] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.[9][10] The PHP reference implementation is now produced by the PHP Group.[11] PHP was originally an abbreviation of Personal Home Page,[12][13] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.

          </h3>
          <a href="/" class=" bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-left inline-block ">Read More</a>
          </div>
     </div>
     <div class=" flex">
          <img class=" object-cover " src="https://picsum.photos/id/259/960/620" alt="">
     </div>
 </div>

@endsection