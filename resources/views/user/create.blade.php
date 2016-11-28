@extends('layouts.master')

     &nbsp; &nbsp;<a href="/">Home</a>

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

                <label for="users">Users: (max 100)
                    <input type='integer' name='userQty' value='{{ old("userQty") }}' min="1" max="100">
                @if(count($errors) > 0)
                    <ul class="val-error">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <label>


                <label>
                    <input name="gender" type="checkbox"> Gender
                </label>

                <label>
                    <input name="address" type="checkbox"> Address
                </label>

                <label>
                    <input name="dob" type="checkbox"> Date of Birth
                </label>

                <label>
                    <input name="username" type="checkbox"> Username
                </label>

                <label>
                    <input name="password" type="checkbox"> Password
                </label></br>

                <input type='submit' value='Generate Users'>

            </form>
        </div>



        <div class="col-md-8">
            <div id="Users">
                @foreach($users as $user)
                    <p> <span class="fullname">{{ $user['name'] }}</span>
                    @if(isset($user['gender']))
                        <span>-  {{ $user['gender'] }}</span>
                    @endif
                    <br/>
                    @if(isset($user['address']))
                        {{ $user['address'] }}<br/>
                    @endif
                    @if(isset($user['dob']))
                        {{ $user['dob'] }}<br/>
                    @endif
                    @if(isset($user['username']))
                        {{ $user['username'] }}<br/>
                    @endif
                    @if(isset($user['password']))
                        {{ $user['password'] }}<br/>
                    @endif
                    {{ $user['break'] }}
                @endforeach
            </div>
        </div>


    </div>

@endsection
