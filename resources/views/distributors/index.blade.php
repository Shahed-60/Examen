<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leverancier Overzicht') }}
        </h2>
    </x-slot>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Contact Persoon</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Bedrijfsnaam</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Adres</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Postcode</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Land</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Email</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Telfoonnummer</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">EersteVolgende Levering</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Toon Producten</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributors as $distributor)
                <tr>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->contact_person }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->company_name }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->adress }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->postal_code }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->country }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->email }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->phone_number }}</td>
                    <td style="border: 1px solid black; padding: 1px;">{{ $distributor->next_delivery }}</td>
                    <td style="border: 1px solid black; padding: 1px;">
                        {{-- <a href="/distributors/{{ $distributor->id }}">{{ $distributor->name }}</a> --}}
                        <a href="{{ route('distributors.show', $distributor->id) }}">Click ME</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</x-app-layout>
