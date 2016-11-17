@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

@section('headline')
    <h1>Lorem Ipsum Generator</h1>
@endsection

@section('content')
    <h2>Choose what unit of text is needed</h2>
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

        <label>Choose how many text units to generate (max 20):
            <input type='integer' name='numberOfLoremUnits' value='{{ old("numberOfLoremUnits") }}'>
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
@endsection
