<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      </h2>
   </x-slot>
   <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   <div class="w-full">
   @foreach ($bookings as $booking)
   <form method="post" action="{{ route('bookings.destroy', $booking->id) }}" class="inline">
   @csrf
   @method('delete')

      <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <div class="mt-8" id="">
            <div class="sm:col-span-3">
            <label for="title" class="block tracking-wider text-orange-500 text-lg font-semibold">Movie Title</label>
               <div class="mt-2">
                  <input type="text" name="title" id="title" value="{{$booking->movie_name}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="region" class="block tracking-wider text-orange-500 text-lg font-semibold">Region</label>
               <div class="mt-2">
                  <input type="text" name="region" id="region" value="{{$booking->region}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="cinema" class="block tracking-wider text-orange-500 text-lg font-semibold">Cinema</label>
               <div class="mt-2">
                  <input type="text" name="cinema" id="cinema" value="{{$booking->cinema}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="tickets" class="block tracking-wider text-orange-500 text-lg font-semibold">Tickets</label>
               <div class="mt-2">
                  <input type="number" name="tickets" id="tickets" value="{{$booking->tickets}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="movie_date" class="block tracking-wider text-orange-500 text-lg font-semibold">Date</label>
               <div class="mt-2">
                  <input type="text" name="movie_date" id="movie_date" value="{{$booking->movie_date}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
         
         <div class="mt-8" id="">
            <div class="sm:col-span-3">
               <label for="movie_time" class="block tracking-wider text-orange-500 text-lg font-semibold">Time</label>
               <div class="mt-2">
                  <input type="text" name="title" id="title" value="{{$booking->movie_time}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>

         <div class="mt-8 mb-16" id="" >
            <div class="sm:col-span-3">
               <label for="reference" class="block tracking-wider text-orange-500 text-lg font-semibold">Reference Number</label>
               <div class="mt-2">
                  <input type="text" name="reference" id="reference" value="{{$booking->reference_no}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
               </div>
            </div>
         </div>
      </div>
      <button class="border border-red-500 hover:bg-white-500 hover:text-red bg-red-500 text-white  px-4 py-2 rounded-md">Cancel Booking</button>
      <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  @endforeach
   </form>
</x-app-layout>