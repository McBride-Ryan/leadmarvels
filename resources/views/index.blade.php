@extends('layouts.default')

@section('page-content')
    <section style="background-image: url('https://images.unsplash.com/photo-1516060610219-308fc12a5e37?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80')" class="relative min-h-screen flex items-center opacity-80">
        <div class="container mx-auto text-center rounded-xl">
            <h2 class="text-4xl sm:text-8xl">Generate. Syndicate. <span class="text-yellow-700">Accelerate.</span></h2>
            <!-- <h3 class="text-2xl sm:text-4xl italic">with leadmarvels</h3> -->
            <div class="absolute bottom-0 left-0 right-0 p-20">
                <p class="text-xl text-center mb-4">
                Scroll to learn more
                </p>
                <div class="flex justify-center">
                    <svg class="animate-bounce w-6 h-6 text-amber-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        
    </section>

    <section class="py-10">
        <div class="text-center max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-800">About Us</h4>
            <p class="mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam libero fugit sed tempora officiis aspernatur explicabo voluptates! Placeat odit laborum magni maxime adipisci corrupti explicabo aliquid quis obcaecati necessitatibus numquam, sint minus! Maxime sed sit tenetur pariatur? Aut, sed exercitationem consectetur adipisci sequi amet nihil eligendi similique, rem, ex sunt.</p>
            <a href="{{ route('about') }}" class="inline-block px-5 py-3 rounded-lg shadow-lg bg-red-500 hover:bg-indigo-400 transition active:bg-indigo-600 focus:outline-none focus:shadow-outline text-sm text-white uppercase tracking-wider font-semibold sm:text-base">About</a>
        </div>
    </section>

    <section class="py-10 mx-5">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6 text-center">Tailored Solutions</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/3 mb-3 px-2">
                    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
                        <h3 class="text-center text-xl font-bold mb-3">Publishers</h3>
                        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
                        <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="text-white bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 hover:bg-indigo-400 motion-reduce:transform-none transition">View</button> 
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-3 px-2">
                    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
                        <h3 class="text-center text-xl font-bold mb-3">Associations</h3>
                        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
                        <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="text-white bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 hover:bg-indigo-400 motion-reduce:transform-none  transition">Join</button> 
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-3 px-2">
                    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
                        <h3 class="text-center text-xl font-bold mb-3">B2B Marketers</h3>
                        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
                        <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="text-white bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 hover:bg-indigo-400 motion-reduce:transform-none  transition mx-2">Activate</button> 
                    </div>
                </div>
                
            </div>
        </div>   
    </section>
    

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Contact Us</h3>
            <h4 class="text-xl mb-6">Learn new heights.</h4>
            <div class="-mx-2 sm:flex">
            <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="text-white bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 hover:bg-indigo-400 motion-reduce:transform-none  transition mx-2">✉️ Email</button> 
            <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="text-white bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 hover:bg-indigo-400 motion-reduce:transform-none  transition mx-2">📞 Phone</button> 
            </div>
        </div>
    </section>

@endsection