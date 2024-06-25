<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nieuwe Leverancier Toevoegen') }}
        </h2>
    </x-slot>
    <form action="{{ route('distributors.store') }}" method="POST">
        @csrf
        <div>
            <label for="contact_person">Naam:</label>
            <input type="text" name="contact_person" id="contact_person" value="" required>
        </div>
        <div>
            <label for="company_name">Bedrijfsnaam:</label>
            <input type="text" name="company_name" id="company_name" value="" required>
        </div><x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Nieuwe Leverancier Toevoegen') }}
                </h2>
            </x-slot>
            <form action="{{ route('distributors.store') }}" method="POST">
                @csrf
                <div>
                    <label for="contact_person">Naam:</label>
                    <input type="text" name="contact_person" id="contact_person" value="" required>
                </div>
                <div>
                    <label for="company_name">Bedrijfsnaam:</label>
                    <input type="text" name="company_name" id="company_name" value="" required>
                </div>
                <div>
                    <label for="adress">Adres:</label>
                    <input type="text" name="adress" id="adress" value="" required>
                </div>
                <div>
                    <label for="postal_code">Postcode:</label>
                    <input type="text" name="postal_code" id="postal_code" value="" required>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" value="" required>
                </div>
                <div>
                    <label for="phone">Telefoonnummer:</label>
                    <input type="text" name="phone" id="phone" value="" required>
                </div>
                <div>
                    <label for="country">Land:</label>
                    <input type="text" name="country" id="country" value="" required>
                </div>
                <div>
                    <button type="submit">Toevoegen</button>
                </div>
            </form>
        </x-app-layout>

        <div>
            <label for="adress">Adres:</label>
            <input type="text" name="adress" id="adress" value="" required>
        </div>
        <div>
            <label for="postal_code">Postcode:</label>
            <input type="text" name="postal_code" id="postal_code" value="" required>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="" required>
        </div>
        <div>
            <label for="phone">Telefoonnummer:</label>
            <input type="text" name="phone" id="phone" value="" required>
        </div>
        <div>
            <label for="country">Land:</label>
            <input type="text" name="country" id="country" value="" required>
        </div>
        <div>
            <button type="submit">Toevoegen</button>
        </div>
    </form>
</x-app-layout>
