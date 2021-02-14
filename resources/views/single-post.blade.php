@extends('landpage')

@section('content')
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
            
                    <div class="card-header">
                        <h4 class="text-center"> Employee Details</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{$post->name}}</h1>
                        <p class="font-italic text-primary">{{$post->designation}}</p>
                        <p>{{$post->salary}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection