@extends('Layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <h1>Create Post</h1>
        <form action="{{route('admin.store')}}" method="POST" >
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter the Post Title" >
                   @error('title')
                   <p class="text-danger">{{$message}}</p>
                   @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" placeholder="Enter the Post Description" id="description" ls="30" rows="10" class="form-control"></textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
