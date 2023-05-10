<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   
      </h2>
   </x-slot>
   <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   <div class="w-full">
   <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('bookings.store') }}" method="post" style="padding:1.25rem">
      @csrf
      <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mb-12">
      <input type="text" name="movie_id" id="movie_id" value="{{$movie_id}}" style="display:none" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      <input type="text" name="user_email" id="user_email" value="{{ Auth::user()->email }}" style="display:none" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="title" class="block tracking-wider text-orange-500 text-lg font-semibold">Movie Title</label>
               <div class="mt-2">
                  <input type="text" name="title" id="title" value="{{$movie}}" required class="input-border block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="region" class="block tracking-wider text-orange-500 text-lg font-semibold">Region</label>
               <div class="mt-2">
                  <input type="text" name="region" id="region" value="{{$region}}" required class="input-border block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="cinema" class="block tracking-wider text-orange-500 text-lg font-semibold">Cinema</label>
               <div class="mt-2">
                  <input type="text" name="cinema" id="cinema" value="{{$cinema}}" required class="input-border block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="tickets" class="block tracking-wider text-orange-500 text-lg font-semibold">Tickets</label>
               <div class="mt-2">
                  <input type="number" name="tickets" id="tickets" value="given-name" required class="input-border block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="movie_date" class="block tracking-wider text-orange-500 text-lg font-semibold">Date</label>
               <div class="mt-2">
                  <input type="date" name="movie_date" id="movie_date" required class="input-border block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="movie_time" class="block tracking-wider text-orange-500 text-lg font-semibold">Time</label>
               <div class="mt-2">
                  <select id="movie_time" name="movie_time" class="input-border block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-sm sm:text-sm sm:leading-6" style="height:38px">
                     <option>Select Time</option>
                     <option>12:00</option>
                     <option>19:00</option>
                  </select>
               </div>
            </div>
         </div>
      </div>
      <button class="border border-green-500 hover:bg-white-500 hover:text-red bg-green-500 text-white  px-4 py-2 rounded-md">Book Movie</button>
  
   </form>
</x-app-layout>