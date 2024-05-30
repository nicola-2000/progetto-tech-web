<x-layout>
    <form method="POST" action="/login-customer">
        @csrf
        @method('PATCH')
        <div class="">
            <div class="">
                <div class="">
                    {{-- form field email --}}
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>

                        <div class="">
                            <x-form-input name="email" id="email" type="email" :value="old('email')" required />

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                    {{-- form field password --}}
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>

                        <div class="">
                            <x-form-input name="password" id="password" type="password" required />

                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="">
            <a href="/" class="">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>