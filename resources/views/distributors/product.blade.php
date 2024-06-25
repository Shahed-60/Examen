<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Producten Overzicht') }}
        </h2>
    </x-slot>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Naam</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Aantal</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Barcode</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Omschrijving</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if ($distributor->products->isNotEmpty()) --}}
            @foreach ($distributorWithProducts as $product)
                <tr>
                    <td style="border: 1px solid black; padding: 1px;">{{ $product->name }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $product->amount }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $product->barcode }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $product->description }}</td>
                </tr>
            @endforeach
            {{-- @else
                <tr>
                    <td colspan="4" style="border: 1px solid black; padding: 1px;">Geen producten gevonden</td>
                </tr>
            @endif --}}
        </tbody>
</x-app-layout>
