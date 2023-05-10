<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Main')
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')
    

    
@endsection