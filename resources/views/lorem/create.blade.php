@extends('layouts.master')
     &nbsp; &nbsp;<a href="/">Home</a>
@section('title', 'Lorem Ipsum Generator')

@section('headline')
    <h1>Lorem Ipsum Generator</h1>
@endsection

@section('content')

	<div class="row">

        <div class="col-md-4">

            <h2>Select which unit of text is needed</h2>
            <form method='POST' action='/lorem'><!-- action was 'lorem' -->

                {{ csrf_field() }}
                <!-- <input type='hidden' value='{{ csrf_token() }}' name='_token'> -->

                <label>
                    <input type="radio" name="unitType" value="paragraph" checked> Paragraph
                    <input type="radio" name="unitType" value="sentence"> Sentence
                    <input type="radio" name="unitType" value="word"> Word
                </label>

                <label>How many units of text? (max 20):
                    <input type='integer' id='unitQty' name='unitQty' value='{{ old("unitQty") }}' min="1" max="20">
                </label></br>

                @if(count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <input type='submit' value='Generate Text'>


            </form>
        </div>

        <div class="col-md-8">
            @if(isset($loremUnits))
                <div id="lorem text">
                    @foreach($loremUnits as $loremUnit)
                        <p>{{ $loremUnit }}</p>
                    @endforeach
            </div>
            @endif
        </div>

    </div>

@endsection
