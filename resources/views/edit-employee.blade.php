@extends('landpage')

@section('content')
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
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
                        <h4 class="text-center">Edit Employee</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.employee')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}">
                            <div class="form-group">
                                <label for="name">Employee Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Insert employee name" value="{{$post->name}}"/>
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" class="form-control" placeholder="Insert designation" value="{{$post->designation}}"/>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="number" name="salary" class="form-control" placeholder="Insert salary" value="{{$post->salary}}"/>
                            </div>
                            <button type="submit" class="btn btn-success">Save Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection