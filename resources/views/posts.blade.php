@extends('landpage')

@section('content')
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>  
                   @endif
                    <div class="card-header">
                        <h4 class="text-center">All Employee <a href="/add-post" class="btn btn-info float-right">+ Add new employee</a></h4>
                    </div>

                    <div class="card-body">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Designation</th>
                                   <th>Salary</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($posts as $post)
                                   <tr>
                                       <td>{{$post->id}}</td>
                                       <td>{{$post->name}}</td>
                                       <td>{{$post->designation}}</td>
                                       <td>{{$post->salary}}</td>
                                       <td><img src="{{asset('uploads/employee/'.$post->image)}}" style="width: 50px; height:50px;" alt="image"></td>
                                       <td>
                                           <a href="/employee/{{$post->id}}" class="btn btn-info">Details</a>
                                           <a href="/edit-employee/{{$post->id}}" class="btn btn-primary">Edit</a>
                                           <a href="/delete-employee/{{$post->id}}" class="btn btn-danger">Delete</a>
                                       </td>
                                   </tr>
                               @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection