<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\style.css">
    <title>Warehouse</title>
</head>

<body>
    <div id="container">
        <header>
            <nav id="main-menu">
                <ul>
                    @auth
                    <li><a href="/product">Warehouse</a></li>
                    <li><a href="/product/create">Add a product</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="likeATag" type="submit">Logout</button>
                        </form>
                    </li>
                    @else
                    <li><a href="/">Sign In</a></li>
                    <li><a href="/login">Login</a></li>
                    @endauth
                </ul>
            </nav>
            <div id="content">
            </div>
        </header>
    </div>
</body>

</html>