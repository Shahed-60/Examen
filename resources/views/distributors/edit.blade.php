<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leverancier Wijzigen') }}
        </h2>
    </x-slot>
    <form action="{{ route('distributors.update', $distributor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="contact_person">Naam:</label>
            <input type="text" name="contact_person" id="contact_person" value="{{ $distributor->contact_person }}"
                required>
        </div>
        <div>
            <label for="company_name">Bedrijfsnaam:</label>
            <input type="text" name="company_name" id="company_name" value="{{ $distributor->company_name }}"
                required>
        </div>

        <div>
            <label for="adress">Adres:</label>
            <input type="text" name="adress" id="adress" value="{{ $distributor->adress }}" required>
        </div>

        <div>
            <label for="postal_code">Postcode:</label>
            <input type="text" name="postal_code" id="postal_code" value="{{ $distributor->postal_code }}" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="{{ $distributor->email }}" required>
        </div>

        <div>
            <label for="phone_number">Telefoonnummer:</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ $distributor->phone_number }}"
                required>
        </div>

        <div>
            <label for="country">Land:</label>
            <input type="text" name="country" id="country" value="{{ $distributor->country }}" required>
        </div>

        <div>
            <button type="submit"
                style="background-color: #4CAF50; color: white; padding: 10px 24px; margin: 20px 0; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Opslaan</button>
        </div>
    </form>
</x-app-layout>
