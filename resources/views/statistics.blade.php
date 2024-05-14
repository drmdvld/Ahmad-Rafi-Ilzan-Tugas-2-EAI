<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-2xl">
                    Match Statistics
                </div>
            </div>

            <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                        <tr class="text-white">
                            <th>Statistics</th>
                            <th>Home</th>
                            <th>Away</th>
                        </tr>
                        </thead>
                        <tbody class="text-white">
                        <!-- row 1 -->
                        @foreach($resDecoded as $data)
                        <tr>
                            <th>{{ $data->type }}</th>
                            <td>{{ $data->home }}</td>
                            <td>{{ $data->away }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
              
            </div>
        </div>
    </div>
</x-app-layout>
