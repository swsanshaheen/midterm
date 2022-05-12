@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row" style="margin-bottom: 100px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">


                    <h3>Products</h3>
                <a class="btn btn-primary" href="{{url('/create-product')}}" >Add</a>
               <hr>

            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach($products as $key=>$value)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->price}}$</td>
                <td>{{$value->quantity}}</td>
                <td>
                    <a class="btn btn-info" href="{{url('/edit-product/'.$value->id)}}">Edit</a>


                     <a href="" onclick="if(confirm('Do you want to delete this product?'))event.preventDefault(); document.getElementById('delete-{{$value->id}}').submit();" class="btn btn-danger">Delete</a>
                  <form id="delete-{{$value->id}}" method="post" action="{{url('delete-product/'.$value->id)}}" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    @endsection
