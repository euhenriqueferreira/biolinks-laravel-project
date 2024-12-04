<x-layout.app>
    <x-container>
        <x-card title="Create a new link">
            <x-form :route="( route('links.create'))" post id="form">
                <x-input type="text" name="link" placeholder="Link" value="{{ old('link') }}"></x-input>
                <x-input type="text" name="name" placeholder="Name" value="{{ old('name') }}"></x-input>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Create a new Link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>

</x-layout.app>
