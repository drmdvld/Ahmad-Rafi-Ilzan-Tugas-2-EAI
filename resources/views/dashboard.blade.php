<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    Spain Leagues
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3 gap-6 mt-5">
                @foreach($resDecoded as $data)
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src={{ $data->league_logo }} alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">{{ $data->league_name }}</h2>
                            <p>{{ $data->league_season }}</p>
                            <div class="card-actions">
                            <a href={{ route('teams', $data->league_id) }} class="btn btn-primary">See Match</a>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>
    </div>
</x-app-layout>
