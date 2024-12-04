<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input type="text" name="email" placeholder="Email" value="{{ old('email') }}"/>
                <x-input type="password" name="password" placeholder="Password"/>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('register')">I need to create an account</x-a>
                <x-button type="submit" form="login-form">Login</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>


