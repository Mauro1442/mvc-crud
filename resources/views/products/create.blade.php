<x-nav-bar></x-nav-bar>

<body>
    <h1>Add a Product</h1>
    <div>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach    
                </ul>
            </div>
        @endif
    </div>
    <form class="bkg-centered" method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"/>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="Quantity"/>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"/>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"/>
        <input type="submit" value="Add"/>
    </form>
</body>
</html>