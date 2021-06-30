@extends('admin.adminbase')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Main</label>
                            <select name="parent_id" class="form-control">
                                <option value="null">Main</option>
                                @foreach($mainCategory as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                            @error('title')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control">{{old('description')}}</textarea>
                            @error('description')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="col-lg-8">
        <table class="table">
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>parent_id</th>
                <th>action</th>
            </tr>
            @foreach($categories as $cat)

            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->title}}</td>
                <td>
                    @isset($cat->parents)
                        {{$cat->parents->title}}
                    @else
                        Main
                    @endisset
                </td>
                <td>
                    <form action="{{route('category.destroy',['category'=>$cat->id])}}" method="POST" class="d-inline">
                        @csrf @method('delete')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                    <a href="" class="btn btn-success btn-sm">view</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
</div>

@endsection
