<x-nav-bar></x-nav-bar>

<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form class="bkg-centered" method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" />
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$product->description}}" />
        <input type="submit" value="Update" />
    </form>
</body>