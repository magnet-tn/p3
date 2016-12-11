@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
@endsection

@section('home')
&nbsp; &nbsp;
<a class="home" href="/">
    <img alt="Home" src="/img/home_512.png" width="15"
    onmouseover="this.src='/img/home_512_gray.png'" onmouseout="this.src='/img/home_512.png'">
</a>
@endsection


@section('headline')
    <h1>@yield('title')</h1>
@endsection

@section('content')

<div class="row">

    <div class="col-md-6">

        <h2>Select which unit of text is needed</h2>
        <form method='POST' action='/lorem'><!-- action was 'lorem' -->
            <div class="container">
                {{ csrf_field() }}
                <!-- <input type='hidden' value='{{ csrf_token() }}' name='_token'> -->

                    <input type="radio" name="unitType" value="paragraph" checked> Paragraph
                    <input type="radio" name="unitType" value="sentence"> Sentence
                    <input type="radio" name="unitType" value="word"> Word

                <label>How many units of text would you like?<br/>

                    <div class="row">
                        <div class="col-md-2">

                            <input type='integer' id='unitQty'
                            name='unitQty' value='{{ old("unitQty") }}' min="1" max="100" placeholder="1-100">
                        </div>
                    </label>
                    <div class="col-md-4">
                        @if(count($errors) > 0)
                        <ul class="val-error">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <br/>
                <input type='submit' value='Generate Text'>
            </div>

        </form>
    </div>
</div>
<div class="col-md-8">
    @if(isset($text))
    <div id="lorem text">
        <?php echo "<strong>".$unitQty." ".$unitType."s: </strong><br/>" ?>
        <?php echo $text ?>
    </div>
    @endif
</div>
@endsection
