@extends('admin.adminbase')


@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="{{route('dashboards')}}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{route('students')}}" class="list-group-item list-group-item-action">Students</a>
                    <form action="{{route('logout')}}" method="POST">
                        <input type="submit" class="list-group-item list-group-item-action bg-danger text-white" value="Logout">
                    @csrf
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>Education</th>
                        <th>Skills</th>
                    </tr>

                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->contact}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->nationality}}</td>
                            <td>{{$student->education}}</td>
                            <td>{{$student->skills}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection