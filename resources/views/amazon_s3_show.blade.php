
<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Amazone S3')
 
@section('content')
<div>
    <img src="{{ $image->url }}" alt="">
</div>
@endsection