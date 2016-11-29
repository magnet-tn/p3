@extends('layouts.master')

@section('title', 'Developers BF')


@section('headline')
    <h1>Developers BF</h1>

        <p>Welcome. This is <em>Developer’s BF </em>.
            We have some tools to help you quickly create filler content
            and users to test your web applications.</p>


    <h4>Ipsum Lorem<span class="sscript">*</span></sup> Generator</h4>

    <p>Uses Joshtronic API to generate lorem filler text in
        denominations of paragraphs, sentences or words.</p>

    <h4>Random User Generator</h4>

    <p>Uses the RandomUser API to generate users with
        various properties, including name, gender, address, date of birth,
        username, password and a brief bio using lorem ipsum.</p>
@endsection

@section('content')


    <span class="sscript">*</span><span class="footnote">Lorem ipsum is actually
        scrambled Latin that used to mock up a page, allowing designers and to
        consider the graphical design and layout, without getting distracted by
        meaningful content.</span>
@endsection
