@extends('Layouts.master')

@section('content')
    <h1 class="text-center py-3" style="color: #0066ff">{{__('messages.welcome')}}</h1>
 <div class="col-container">
    <div class="col-md-6 mx-auto">
        @if ($translation)
        <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Language</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{$translation->language ? ucfirst($translation->language->name) : ''}}</td>
                <td>{{$translation->name}}</td>
                <td>{{$translation->description}}</td>
            </tr>
        </tbody>
        </table>
        @else
        <h3 class="text-danger mx-auto" style="width: 50%">No record found.</h3>
        @endif
    </div>
 </div>
@endsection

