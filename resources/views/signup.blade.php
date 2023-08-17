<x-nav-bar></x-nav-bar>

<body>
    @auth
    @else
        <form class="bkg-centered"  action="/register" method="POST">
            @csrf
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
                @error('name')
                <p>{{ $message }}</p>
                @enderror
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                @error('email')
                <p>{{ $message }}</p>
                @enderror
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
                @error('password')
                <p>{{ $message }}</p>
                @enderror
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Password">
                @error('password_confirmation')
                <p>{{ $message }}</p>
                @enderror
            <button type="submit">Sign Up</button>
        </form>

    @endauth
</body>