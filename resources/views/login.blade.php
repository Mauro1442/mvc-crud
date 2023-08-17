<x-nav-bar></x-nav-bar>

<body>
    @auth
    @else
    <form class="bkg-centered" action="/log" method="POST">
        @csrf
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
            <button type="submit">Login</button>
    </form>
    @endauth
</body>