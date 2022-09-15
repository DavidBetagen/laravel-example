<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Livewire')
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')
    <div>
        <livewire:counter /> 
    </div>

    @livewireScripts
    
@endsection