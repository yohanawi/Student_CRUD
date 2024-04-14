@extends('layouts.app')

@section('content')
    <div class="col-lg-12 text-center">
        <h1 class="page-title">New Student</h1>
    </div>
    <div class="d-flex mt-5 justify-content-center">
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input class="form-control" name="name" type="text" placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label for="exampleInputImage" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleInputAge" class="form-label">Age</label>
                <input class="form-control" name="age" type="text" placeholder="Enter Age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div>
        @endsection

        @push('css')
            <style>
                .page-title {
                    padding-top: 10vh;
                    color: #000
                }
            </style>
        @endpush
