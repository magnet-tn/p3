@extends('layouts.master')

@section('title', 'User Data Generator')

@section('headline')
    <h1>User Data Generator</h1>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-4">

            <h2>Select Data to Include</h2>
            <p>Choose how many users to generate</p>
            <form method='POST' action='/user'>

                {{ csrf_field() }}
                <!-- <input type='hidden' value='{{ csrf_token() }}' name='_token'> -->

                <label>Users: (max 200)
                    <input type='integer' name='numberOfUsers' value='{{ old("numberOfUsers") }}' min="1" max="200">
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
        </div>

        <div class="col-md-8">
            <div id="Users">
                @foreach($users as $user)
                    <p class="user full">{{ $user['name'] }}
                    <p>{{ $user['username'] }}</p>
                    @if(isset($user['gender']))
                        <p class="gender">{{ $user['gender']}}</p>
                    @endif
                    @if(isset($user['dob']))
                        <p>{{ $user['dob'] }}</p>
                    @endif
                    @if(isset($user['password']))
                        <p>{{ $user['password'] }}<br>
                    @endif
                    @if(isset($user['phone']))
                        <p>{{ $user['phone']}}</p>
                    @endif
                @endforeach
            </div>
        </div>

    </div>

@endsection
