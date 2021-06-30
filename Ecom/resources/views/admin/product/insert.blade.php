@extends('admin.adminbase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Brand</label>
                                <input type="text" name="brand" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Category</label>
                                <select name="category" class="form-control">
                                    @foreach ($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Mrp</label>
                                <input type="number" name="mrp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description"rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
