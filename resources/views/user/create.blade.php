@extends('layouts.master')

@section('title', 'User Data Generator')

@section('headline')
    <h1>User Data Generator</h1>
@endsection

@section('content')
    <h2>Select Data to Include</h2>
    <p>Choose how many users to generate</p>
    <form method='POST' action='/user'>

        {{ csrf_field() }}
        <!-- <input type='hidden' value='{{ csrf_token() }}' name='_token'> -->

        <label>Users:
            <input type='integer' name='numberOfUsers' value='{{ old("numberOfUsers") }}'>
        <label>
        <label>
            <input name="address" type="checkbox"> Gender
        </label>

        <label>
            <input name="address" type="checkbox"> Date of Birth
        </label>

        <label>
            <input name="address" type="checkbox"> Username
        </label>

        <label>
            <input name="address" type="checkbox"> Password
        </label></br>

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
