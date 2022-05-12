@extends('layout.app')
@section('content')

    <div class="container">
        <style>
            .uper {
                margin-top: 40px;
            }
        </style>
        <div class="card uper">
            <div class="card-header">
                Add Product
            </div>
            <div class="card-body">
                <form method="post" action="{{route('update-product',$product->id)}}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
    @endsection
