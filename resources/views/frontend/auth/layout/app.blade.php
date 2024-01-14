<!DOCTYPE html>
<html>

<head>
    <title>सिफारिस तथा प्रमाणित प्रकृया व्यवस्थापन प्रणाली</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
@include('frontend.auth.css.css')

@stack('extra_css_style')

<body style="font-family: kalimati;" class="login">
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="myCard" style="">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('frontend.auth.js.script')

    {{-- add extra script --}}
    @stack('extra_js_script')
</body>

</html>
