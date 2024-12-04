<x-layout.app>
    <x-container>
        <div class="text-center w-2/3 flex flex-col items-center gap-2">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture"/>
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm opacity-80 mb">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($user->links as $link)
                    <li class="flex items-center gap-2">
                        <x-button href="{{$link->link}}" block outline info target="_blank">
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>


        </div>
    </x-container>

</x-layout.app>
