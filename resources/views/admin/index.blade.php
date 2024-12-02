@extends('Layouts.master')
@section('content')
   <h1>{{$page}}</h1>
   <div class="row">
        <div class="col-md-6 mx-auto">
            <a href="{{route('admin.create')}}" class="btn btn-primary mb-2">Create Post</a>
            <table class="table table-bordered">
                <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Operations</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>
                            <a href="{{route('admin.edit',['admin' =>$post->id])}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('admin.delete',$post->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
   </div>
@endsection
