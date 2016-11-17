@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

@section('content')
    <h1>Choose text qty</h1>
    <form method='POST' action='/lorem'>

        {{ csrf_field() }}
        <!-- <input type='hidden' value='{{ csrf_token() }}' name='_token'> -->

        <label>How many?: </label>
        <input type='integer' name='numberOfLoremUnits' value='{{ old("numberOfLoremUnits") }}'>

        <label>
            <input name="address" type="radio"> Paragraph
        </label>

        <label>
            <input name="address" type="radio"> Sentence
        </label>

        <label>
            <input name="address" type="radio"> Word
        </label>

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
