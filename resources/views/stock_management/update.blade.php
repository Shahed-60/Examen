<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product aanpassen') }}
        </h2>
    </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-8 text-gray-900">

            <form action="{{ route('stock_management.edit') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="barcode" class="block text-sm font-medium text-gray-700 mb-1">Streepjescode</label>
                        <input type="text" name="barcode" id="barcode" value="{{ $productData->barcode }}"
                            class="block w-full px-4 py-3 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-base rounded-md">
                    </div>

                    <div>
                        <label for="productname" class="block text-sm font-medium text-gray-700 mb-1">Productnaam</label>
                        <input type="text" name="productname" id="productname" value="{{ $productData->name }}"
                            class="block w-full px-4 py-3 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-base rounded-md">
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Categorie</label>
                        <select name="category_id" id="category_id"
                            class="block w-full px-4 py-3 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-base rounded-md">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $productData->category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Aantal</label>
                        <input type="text" name="amount" id="amount" value="{{ $productData->amount }}"
                            class="block w-full px-4 py-3 border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-base rounded-md">
                    </div>
                </div>

                <input type="hidden" name="productId" value="{{ $productData->id }}">

                <div class="mt-6">
                    <button type="submit"
                        class="inline-block px-6 py-3 bg-blue-500 text-white font-medium text-base leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        Wijzigen
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

</x-app-layout>
