<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-button ghost :href="route('profile')">Update Profile</x-button>
            <x-button ghost :href="route('links.create')">Create a new Link</x-button>
            <x-button ghost :href="route('logout')">Logout</x-button>
        </div>


    <div class="text-center w-2/3 flex flex-col items-center gap-2">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture"/>
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm opacity-80 mb">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="flex items-center gap-2">

                        @unless($loop->last)
                            <x-form :route="route('links.down', $link)" patch>                                
                                <x-button ghost >
                                    <x-icons.arrow-down class="w-5 h-5"></x-icons.arrow-down>
                                </x-button>
                            </x-form> 
                        @else
                            <x-button disabled ghost>
                                <x-icons.arrow-down class="w-5 h-5"></x-icons.arrow-down>
                            </x-button>
                        @endunless

                        @unless($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-up class="w-5 h-5"></x-icons.arrow-up>
                                </x-button>
                            </x-form> 
                        @else
                            <x-button disabled ghost>
                                <x-icons.arrow-up class="w-5 h-5"></x-icons.arrow-up>
                            </x-button>
                        @endunless  
    

                        <x-button href="{{ route('links.edit', $link)}}" block outline info>{{ $link->name }}</x-button>
                    
                        <x-form :route="route('links.destroy', $link)" delete>
                            <x-button type="submit" ghost>
                                <x-icons.trash class="w-5 h-5"></x-icons.trash>
                            </x-button>
                        </x-form>   
                    </li>
                @endforeach
            </ul>


        </div>
    </x-container>

</x-layout.app>
{{-- 

<x-layout.app>
<div>
    <h1>Dashboard</h1>

    <h3>User: {{ auth()->user()->name }} :: {{ auth()->id() }}</h3>
    <a href="{{ route('profile') }}">Atualizar Profile</a>
    @if($message = session()->get('message'))
        {{ $message }}
    @endif

    <a href="{{ route('links.create') }}">Criar um novo</a>
    
    <ul>
        @foreach ($links as $link)
            <li style="display:flex; gap:10px;">
                @unless($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="post">
                        @csrf
                        @method('PATCH')
                        
                        <button>⬇️</button>
                    </form> 
                @endunless

                @unless($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="post">
                        @csrf
                        @method('PATCH')
                        
                        <button>⬆️</button>
                    </form> 
                @endunless  

                <a href="{{ route('links.edit', $link)}}">{{ $link->name }}</a>
                @can('destroy', $link)
                    <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Tem certeza?')"">
                        @csrf
                        @method('DELETE')
                        
                        <button>Deletar</button>
                    </form>   
                @endcan
            </li>
        @endforeach
    </ul>
</div>
</x-layout.app> --}}