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

    <a href="/">Sign Up</a>


    @endauth

    @auth
    @else

    <form action="/login" method="POST">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
            @error('name')
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

        <button type="submit">Login</button>

    </form>
    @endauth

</body>

</html>