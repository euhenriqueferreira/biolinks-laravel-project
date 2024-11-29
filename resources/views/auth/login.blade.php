<div>
    <h1>Login</h1>

    @if($message = session()->get('message'))
        {{ $message }}
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf


        <div>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="password" name="password" placeholder="Senha">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>

        <button type="submit">Logar</button>
    </form>
</div>
