<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developers BF' --}}
        @yield('title','Developers BF')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/milligram/1.1.0/milligram.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href="/css/developersBF.css" type='text/css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="img/TroubleU-icon.png">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    <section>
        {{-- Page headline will be yielded here --}}
        @yield('headline')
    </section>

    <header>
        <a href='/'>
        <img
        src='/img/logo.png'
        alt='TroubleU Logo'
        width='100px'
        class='logo'>
        </a>
    </header>

    <nav>
        <ul>
            <li><a href='/lorem'>go to lorem ipsum generator</a></li>
            <li><a href='/user'>go to user generator</a></li>
        </ul>
    </nav>


    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
     &copy; {{ date('Y') }} &nbsp;&nbsp;
     <a href='https://github.com/magnet-tn/p3' target='_blank'><i class='fa fa-github'></i> View on Github</a> &nbsp;&nbsp;
     <a href='http://p3.troubleu.com' target='_blank'><i class='fa fa-link'></i> View Live</a>
 </footer>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
