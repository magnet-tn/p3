@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

@section('headline')
    <h1>Lorem Ipsum Generator</h1>
@endsection

@section('content')

	<div class="row">

        <div class="col-md-4">

            <h2>Select which unit of text is needed</h2>
            <form method='POST' action='/lorem'>

                {{ csrf_field() }}
                <!-- <input type='hidden' value='{{ csrf_token() }}' name='_token'> -->

                <label>
                    <input name="address" type="radio"> Paragraph
                </label>

                <label>
                    <input name="address" type="radio"> Sentence
                </label>

                <label>
                    <input name="address" type="radio"> Word
                </label>

                <label>How many units of text? (max 20):
                    <input type='integer' id='numberOfLoremUnits' name='numberOfLoremUnits' value='{{ old("numberOfLoremUnits") }}' min="1" max="20">
                </label></br>

                <input type='submit' value='Generate Text'>

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
            @if(isset($loremUnits))
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
            @endif
        </div>

    </div>

@endsection
