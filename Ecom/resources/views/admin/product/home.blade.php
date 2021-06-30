@extends('admin.adminbase')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <a href="{{route('product.create')}}" class="btn btn-success">Insert Product</a>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Mrp</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($product as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->title}}</td>
                        <td>{{$pro->brand}}</td>
                        <td>{{$pro->category->title}}</td>
                        <td>{{$pro->description}}</td>
                        <td>{{$pro->mrp}}</td>
                        <td>{{$pro->price}}</td>
                        <td>
                            <form action="{{ route('product.destroy',['product'=>$pro->id]) }}" method="POST">
                                <input type="hidden" value="delete" name="_method">
                               
                                @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection