<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="( route('profile'))" put id="form-profile" enctype="multipart/form-data">
                <div class="flex flex-col gap-4 items-center">
                    <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture"/>
                    <x-file-input name="photo"></x-file-input>
                </div>
                <x-input type="text" name="name" placeholder="Name" value="{{ old('name', $user->name) }}"></x-input>
                <x-textarea type="text" name="description" value="{{ old('description', $user->description) }}"></x-textarea>
                <x-input type="text" name="handler" placeholder="Handler" prefix="biolinks.com.br/" value="{{ old('handler', $user->handler) }}"></x-input>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Cancel</x-a>
                <x-button type="submit" form="form-profile">Update Profile</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>