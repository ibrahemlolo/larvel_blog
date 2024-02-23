@extends('layouts.app')

@section('content')

  <div class=" container m-auto text-center pt-15 pb-5">
     <h1 class=" text-6xl font-bold"> All Posts</h1>
  </div>

  <div class=" sm:grid grid-cols-2 gap-15 mx-auto py-15 px-15 border-b border-gray-300"> 
      <div class="flex">
          <img class=" object-cover" src="https://picsum.photos/id/343/960/620" alt="">
      </div>

      <div>
          <h2 class=" text-gray-700 font-bold text-4xl py-5 md:pt-0">
               How to create blog with Laravel
          </h2>
          <span>
               By: <span class="text-gray-500 italic "> Ibrahim </span>
               <p class=" text-lg text-gray-700 py-8 leading-6">
                    asdasdasd asdsaasd asdasdsa asdd asdasdasd  asdasdasdasdasdasd dasdasdasd asdasdasefr asdasd
               </p>

                <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start">
                  Read More
                </a>
          </span>
      </div>

  </div>


    <div class=" sm:grid grid-cols-2 gap-15 mx-auto py-15 px-15 border-b border-gray-300"> 
      <div class="flex">
          <img class=" object-cover" src="https://picsum.photos/id/861/960/620" alt="">
      </div>

      <div>
          <h2 class=" text-gray-700 font-bold text-4xl py-5 md:pt-0">
               How to create blog with Laravel
          </h2>
          <span>
               By: <span class="text-gray-500 italic "> Ibrahim </span>
               <p class=" text-lg text-gray-700 py-8 leading-6">
                    asdasdasd asdsaasd asdasdsa asdd asdasdasd  asdasdasdasdasdasd dasdasdasd asdasdasefr asdasd
               </p>

                <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start">
                  Read More
                </a>
          </span>
      </div>

  </div>


@endsection