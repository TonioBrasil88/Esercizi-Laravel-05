<x-layout>


    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Home Page</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            @if ($movies->isNotEmpty())
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-3">
                        <x-moviecard 
                            :movie="$movie"                           
                        />
                    </div>
                @endforeach
            @else
                <p>Non ci sono film da mostrare</p>
            @endif

        </div>
    </div>

</x-layout>