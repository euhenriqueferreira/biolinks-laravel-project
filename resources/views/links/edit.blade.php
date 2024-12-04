<x-layout.app>
    <x-container>
        <x-card title="Editing Link :: id {{ $link->id }}">
            <x-form :route="( route('links.edit', $link) )" put id="form">
                <x-input type="text" name="link" placeholder="Link" value="{{ old('link', $link->link) }}"></x-input>
                <x-input type="text" name="name" placeholder="Name" value="{{ old('name', $link->name) }}"></x-input>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Update Link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>

</x-layout.app>