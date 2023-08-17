<x-nav-bar></x-nav-bar>

<body>
    <h1>Products</h1>
    <div>
        @if(session('success'))
        <p>{{session('success')}}</p>
        @endif
    </div>
    <div class="bkg">
        <table>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('product.edit', ['product' => $product])}}">Edit</a></td>
                <td>
                    <form action="{{route('product.destroy', ['product' => $product])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="likeATag" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>