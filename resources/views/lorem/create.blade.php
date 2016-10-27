@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

@section('content')
    <h1>Choose text qty</h1>
    <form method='POST' action='/lorem'>

        {{ csrf_field() }}

        Paragraphs: <input type='integer' name='numberOfParagraphs' value='{{ old("numberOfParagraphs") }}'>

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
