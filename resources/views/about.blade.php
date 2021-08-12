@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center mx-10">
        <div class="max-w-screen-lg mx-auto">
            <h6 class="text-4xl text-center mt-10 mb-6">About Us</h6>
            <h2 class="text-6xl text-center text-gray-800 mb-6">Your Opportunity. Our Promise.</h2>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, commodi reprehenderit! Natus commodi veniam blanditiis, quis ipsa, atque minima cumque, deleniti ad sed sunt autem dignissimos ipsum voluptatem adipisci tempore consequatur tenetur ut recusandae hic? Odio perspiciatis laboriosam dolorum dolore nesciunt quam consectetur labore illum quaerat, repudiandae ad temporibus quibusdam autem. Labore expedita, veniam aspernatur cum animi dolore aut, harum, alias corporis libero aperiam. Corrupti, tenetur minima molestiae ea tempore repudiandae aperiam maxime recusandae, temporibus eum alias eveniet repellendus voluptatum! Officiis ullam est quo eum repellat quas deleniti, eveniet velit dignissimos omnis aperiam eos alias. Perspiciatis corrupti ex hic consequuntur.</p>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio saepe molestias! Ea, eveniet necessitatibus!</p>
            <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ut itaque, libero facilis neque pariatur inventore consectetur, dolor quibusdam repellendus sequi vel odio fugit. Quibusdam quod nesciunt, reprehenderit ipsum dolorem itaque in cum debitis vero explicabo repudiandae repellendus eveniet, quis dicta nihil incidunt impedit sapiente laboriosam praesentium quisquam. Sapiente, molestias.</p>
            <div class="text-center">
          <a href="{{ route('home') }}" class="mb-10 mt-5 inline-block px-5 py-3 rounded-lg shadow-lg bg-red-500 hover:bg-indigo-400 active:bg-indigo-600 focus:outline-none focus:shadow-outline text-sm text-white uppercase tracking-wider font-semibold sm:text-base transition">🏠 Back to Home</a>
            </div>
        </div>
        </div>
    </section>
    <section class="mx-5 -mt-20 mb-20 grid grid-cols-3 gap-4">
    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
        <h3 class="text-center text-xl font-bold mb-3">Integrity</h3>
        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
        <!-- <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none  transition">Join</button>  -->
    </div>
    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
        <h3 class="text-center text-xl font-bold mb-3">Quality</h3>
        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
        <!-- <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none  transition">Join</button>  -->
    </div>
    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
        <h3 class="text-center text-xl font-bold mb-3">Trust</h3>
        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
        <!-- <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none  transition">Join</button>  -->
    </div>
    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
        <h3 class="text-center text-xl font-bold mb-3">Innovation</h3>
        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
        <!-- <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none  transition">Join</button>  -->
    </div>
    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
        <h3 class="text-center text-xl font-bold mb-3">People</h3>
        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
        <!-- <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none  transition">Join</button>  -->
    </div>
    <div class="p-4 bg-gray-200 h-full rounded-xl shadow-md">
        <h3 class="text-center text-xl font-bold mb-3">Associations</h3>
        <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, exercitationem. Aperiam exercitationem omnis suscipit ipsum ullam recusandae dignissimos facilis qui!</p>
        <!-- <button href="{{ route('about') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none  transition">Join</button>  -->
    </div>

    </section>

@endsection