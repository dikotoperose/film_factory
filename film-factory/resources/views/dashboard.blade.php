
<x-app-layout>
<div class="container mx-auto px-4 pt-16">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="mt-8" id="">
               <div class="sm:col-span-3">
                  <label for="region" class="block tracking-wider text-orange-500 text-lg font-semibold">Region</label>
                  <div class="mt-2">
                     <select id="region" name="region" autocomplete="region-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-sm sm:text-sm sm:leading-6" style="height:38px">
                     <option>Select Region</option>
                     <option>Gauteng</option>
                     <option>Western Cape</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="mt-8" id="">
               <div class="sm:col-span-3">
                  <label for="cinema" class="block tracking-wider text-orange-500 text-lg font-semibold">Cinema</label>
                  <div class="mt-2">

                     <select id="cinema" name="cinema" autocomplete="cinema-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-sm sm:text-sm sm:leading-6" style="height:38px">
                     <option>Select Cinema</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>

      <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            @foreach ($movies as $movie)
            <div class="mt-8 movie-cards" id="{{$movie->code}}" data-title="{{$movie->title}}" style="cursor:pointer">
                <img src="{{ $movie->img_url }}" alt="img">
                <div class="bg-white py-4 px-2">
                    <a href="" class="text-lg mt-2 text-gray-500 b">{{$movie->title}}</a>
                    <span class="mx-2 text-gray-400">|</span>
                    <span class="text-sm text-orange-500">{{$movie->release_date}}</span>
                </div>
            </div>
            @endforeach
            </div>
    </div>
    <button class="border border-green-500 hover:bg-white-500 hover:text-red bg-green-500 text-white  px-4 py-2 rounded-md" onclick="showAll();">Show All Movies</button>

    <div class="popular-movies mt-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
               <div class="mt-8" id="">
       
                     <img src="{{URL::asset('/images/supermario.jpg')}}" alt="super mario">
              
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
               
                     <img src="{{URL::asset('/images/scream.jpg')}}" alt="super mario">
                
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
           
                     <img src="{{URL::asset('/images/dungeons.jpg')}}" alt="super mario">
              
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
              
                     <img src="{{URL::asset('/images/antman.jpg')}}" alt="super mario">
                
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
                
                     <img src="{{URL::asset('/images/mermaid.jpg')}}" alt="super mario">
              
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8">
                  <a href="">
                     <img src="{{URL::asset('/images/puss.jpg')}}" alt="super mario">
                  </a>
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>

            </div>
        </div> 
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
    $(document).on("change", '#region', function () {
    var cinema_id = document.getElementById("cinema");
    cinema_id.innerHTML = "";

    @foreach ($cinemas as $cinema)

    var selectedRegion = document.getElementById('region').value;
    var cinema_id = document.getElementById("cinema");
    var option = document.createElement("option");
   
    if ("{{ $cinema->region }}" == selectedRegion){

        option.value = "{{ $cinema->name }}";
        option.text = "{{ $cinema->name }}";
        cinema_id.appendChild(option);
    }
   

    @endforeach
    });

    $(".movie-cards").on("click", function (e) {
        var movie_id  = $(this)[0].id
        var movie  = $(this)[0].dataset.title
        var cinema = $('#cinema').val()
        var region = $('#region').val()

        if(movie_id && movie && cinema && region){
            window.location.href = "{{ route('bookings.create') }}" + `?movie_id=${movie_id}&movie=${movie}&cinema=${cinema}&region=${region}`;
        } else {
            alert('Select a cinema or region for this movie!')
        }
    });

    $(document).on("change", '#cinema', function () {

        var movieCards = document.querySelectorAll(".movie-cards");

        for (var i = 0; i < movieCards.length; i++) 
            {
                movieCards[i].style.display = 'none';

            }

        @foreach ($movies as $movie)

    var selectedCinema = document.getElementById('cinema').value;
    
    if ("{{ $movie->cinema }}" == selectedCinema){

        var movieCards = document.querySelectorAll(".movie-cards");
        var code = "{{ $movie->code }}"

        for (var i = 0; i < movieCards.length; i++) 
        {
            if(movieCards[i].id === code)
            {
                var codeMatch = true;
                movieCards[i].style.display = "block";
            }

        }
    }

    @endforeach
    });

    function showAll()
    {
        var movieCards = document.querySelectorAll(".movie-cards");
        for (var i = 0; i < movieCards.length; i++) 
        {
            movieCards[i].style.display = "block";

        }
    }

</script>
</x-app-layout>
