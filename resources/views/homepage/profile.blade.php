@extends('homepage.base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('upload/'.$student->dp) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h2 class="p-4">sonu kumar</h2>
                    </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Gender</th>
                                <td>{{ $student->gender}}</td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td>{{$student->contact}}</td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td>{{ $student->nationality}}</td>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <td>{{ $student->dob}}</td>
                            </tr>
                            <tr>
                                <th>Skills</th>
                                <td>{{ $student->skills}}</td>
                            </tr>
                            <tr>
                                <th>School Name</th>
                                <td>{{ $student->school_name}}</td>
                            </tr>
                        </table>
                    
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container-fluid  bg-secondary p-5">
                    <div class="container text-white">
                        <h2 class="display-4">Wlecome In Student Portal</h2>
                        <p class="lead mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ipsa enim inventore officiis, nam soluta similique dolorum ad repellendus 
                            distinctio porro deserunt expedita quibusdam quam nisi mollitia dolores aut.
                             Nisi, maiores.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection