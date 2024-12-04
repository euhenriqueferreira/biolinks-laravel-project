<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="( route('register'))" post id="form-register">
                <x-input type="text" name="name" placeholder="Name" value="{{ old('name') }}"></x-input>
                <x-input type="text" name="email" placeholder="Email" value="{{ old('email') }}"></x-input>
                <x-input type="text" name="email_confirmation" placeholder="Confirmation Email" value=""></x-input>
                <x-input type="password" name="password" placeholder="Password"></x-input>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Already have an account?</x-a>
                <x-button type="submit" form="form-register">Register</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>

</x-layout.app>
