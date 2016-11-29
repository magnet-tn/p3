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

                    <div class="row">
                        <div class="col-md-4">
                            <label>
                                <input name="gender" type="checkbox"> Gender
                            </label>

                            <label>
                                <input name="bio" type="checkbox"> Bio
                            </label>

                            <label>
                                <input name="address" type="checkbox"> Address
                            </label>
                        </div>

                        <div class="col-md-5">
                            <label>
                                <input name="dob" type="checkbox"> Date of Birth
                            </label>

                            <label>
                                <input name="username" type="checkbox"> Username
                            </label>

                            <label>
                                <input name="password" type="checkbox"> Password
                            </label></br>
                        </div>
                    </div>
                    <input type='submit' value='Generate Users'>


                </form>
            </div>
        </div>

        <div class="row">

            <div id="Users">
                <p><strong>Random Users Listing: </strong>(<?php echo $userQty." Users)" ?></p>
                @foreach($users as $user)
                <p> <span class="fullname">{{ $user['name'] }}</span>
                    @if(isset($user['gender']))
                    <span>-  {{ $user['gender'] }}</span>
                    @endif
                    <br/>
                    @if(isset($user['bio']))
                    {{ $user['bio'] }}<br/>
                    @endif
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




            @endsection
