@extends('layouts.base')

@section('content')
    <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <input type="text" name="name" placeholder="name" value="{{$pokemon->name}}" required>
        <input type="text" name="type" placeholder="type" value="{{$pokemon->type}}" required>
        <input type="number" name="power" placeholder="power" value="{{$pokemon->power}}" required>
        <button type="submit">Create pokemon</button>
        </form>
    @endsection