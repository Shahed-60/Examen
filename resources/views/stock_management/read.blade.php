<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productvoorraadoverzicht') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @if (session('status'))
                    <div id="status-message" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4"
                        role="alert">
                        {{ session('status') }}
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('status-message').style.display = 'none';
                        }, 3000); // 3000 milliseconds = 3 seconds
                    </script>
                @endif


                <table class="w-full">
                    <thead class="">
                        <tr class="*:border *:border-neutral-900 *:p-2">
                            <th>Streepjescode</th>
                            <th>Productnaam</th>
                            <th>Categorie</th>
                            <th>Aantal</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($stock as $product)
                            <tr class="*:p-3 *:border *:border-neutral-900 text-center">
                                <td>{{ $product->barcode }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->amount }}</td>
                                <td>
                                    <form action="{{ route('stock_management.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="inline-block px-6 py-3 bg-red-500 text-white font-medium text-sm leading-tight rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                            type="submit">
                                            Verwijder product</button>
                                    </form>
                                </td>

                                <td>
                                    <a class="inline-block px-6 py-3 bg-blue-500 text-white font-medium text-sm leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                        href="{{ route('stock_management.update', $product->id) }}">Wijzigen</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="inline-block px-6 my-4 py-3 bg-blue-500 text-white font-medium text-sm leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    href="{{ route('stock_management.create') }}">Nieuw product</a>


            </div>
        </div>
    </div>
</x-app-layout>
