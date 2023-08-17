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
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/>
        </div>
        <div class="form-group">
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}"/>
            <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}"/>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>
        <input type="submit" value="Update"/>

    </form>
</body>