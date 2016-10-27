@extends('layouts.master')

@section('title', 'User Data Generator')

@section('content')
    <h1>Choose user qty</h1>
    <form method='POST' action='/user'>

        {{ csrf_field() }}

        Users: <input type='integer' name='numberOfUsers' value='{{ old("numberOfUsers") }}'>

        <input type='submit' value='Generate Users'>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
