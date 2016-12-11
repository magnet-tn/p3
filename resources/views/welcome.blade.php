@extends('layouts.master')

@section('title')
    Developers BF
@endsection


@section('headline')

    <h1> @yield('title')</h1>



    <p>Welcome. This is <em>Developer’s BF </em>.
        We have some tools to help you quickly create filler content
        and users to test your web applications.</p>


    <h4>Lorem Ipsum<span class="sscript">*</span> Generator</h4>

    <p>Uses Joshtronic API to generate lorem filler text in
        denominations of paragraphs, sentences or words.</p>

    <h4>Random User Generator</h4>

    <p>Uses the RandomUser API to generate users with
        various properties, including name, gender, address, date of birth,
        username, password and a brief bio using lorem ipsum.</p>

@endsection



@section('body')
<div>
    <span class="footnote"><span class="sscript">*</span>Lorem ipsum is actually
        scrambled Latin that used to mock up a page, allowing designers and to
        consider the graphical design and layout, without getting distracted by
        meaningful content.</span>
    </div>
    @endsection
