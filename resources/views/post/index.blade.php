@extends('Layouts.master')
@section('content')
   <h1>{{__('messages.post')}}</h1>
   <div class="row">
        <div class="col-md-6 mx-auto">
            @foreach ($posts as $post)
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="#" class="btn btn-primary">show</a>
                </div>
            </div>
            @endforeach
        </div>
   </div>
@endsection
