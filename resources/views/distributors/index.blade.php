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
                <th scope="col" style="border: 1px solid black; padding: 8px;">Bewerken</th>
                <th scope="col" style="border: 1px solid black; padding: 8px;">Verwijderen</th>

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
                        <a href="{{ route('distributors.show', $distributor->id) }}">
                            Bekijken</a>
                    </td>
                    <td style="border: 1px solid black; padding: 1px;">
                        <a href="{{ route('distributors.edit', $distributor->id) }}">Bewerk</a>
                    </td>
                    <td style="border: 1px solid black; padding: 1px;">
                        <form action="{{ route('distributors.destroy', $distributor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijder</button>
                        </form>
                    </td>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('distributors.create') }}"
        style="background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 12px;">Nieuwe
        Leverancier Toevoegen</a>
</x-app-layout>
