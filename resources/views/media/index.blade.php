<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Amazon S3')
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')
    <div class="mt-5 text-center">
        <form action="{{ url('/media-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image">
            <button type="submit">Upload</button>
        </form>
    </div>    
@endsection