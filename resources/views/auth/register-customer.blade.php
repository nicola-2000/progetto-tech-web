<x-layout>
    <form method="POST" action="/register-customer">
        @csrf
        <div class="">
            <div class="">
                <div class="">
                    {{-- form field first_name --}}
                    <x-form-field>
                        <x-form-label for="first_name">First name</x-form-label>
                        <div class="">
                            <x-form-input for="first_name" id="first_name" />
                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>
                    {{-- form field last_name --}}
                    <x-form-field>
                        <x-form-label for="last_name">Last name</x-form-label>
                        <div class="">
                            <x-form-input for="last_name" id="last_name" />
                            <x-form-error name="last_name"/>
                        </div>
                    </x-form-field>
                    {{-- form field fiscal_code --}}
                    <x-form-field>
                        <x-form-label for="fiscal_code">Fiscal code</x-form-label>
                        <div class="">
                            <x-form-input name="fiscal_code" id="fiscal_code" type="fiscal_code" />
                            <x-form-error name="fiscal_code" />
                        </div>
                    </x-form-field>
                    {{-- form field email --}}
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="">
                            <x-form-input name="email" id="email" type="email" />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                    {{-- form field password --}}
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="">
                            <x-form-input name="password" id="password" type="password" />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="">
            <a href="/" class="">Cancel</a>
            <x-form-button>Registrati</x-form-button>
        </div>
    </form>
</x-layout>