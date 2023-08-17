<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>



    @auth

    <a href="/product">Product</a>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @else

    <a href="/loginform">Login</a>


    @endauth


    @auth
    @else

    <form action="/register" method="POST">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Password">
            @error('password_confirmation')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Sign Up</button>

    </form>
    @endauth

</body>

</html>