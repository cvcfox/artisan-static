<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="body">
 
    <section>
    	<header>
	        <nav>
	            <img class="logo" src="https://cjamesfox.com/img/logo.jpg" /><br>
	            <ul>
	                <li><a href="/">Home</a></li>
	                <li><a href="https://instagram.com/cjamesfox" target="_blank">Instagram</a></li>
	                <li><a href="/rates">Rates</a></li>
	                <li><a href="/about">About</a></li>
	                <li><a href="/contact">Contact</a></li>
	            </ul>
	        </nav>
	       
    	</header>
        <article class="article">
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
            <small>
                &copy; <span data-year></span> {{ $page->owner->name }} &nbsp;&bull;&nbsp;
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
