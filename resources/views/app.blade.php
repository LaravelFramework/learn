<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            border: 20px solid grey;
        }
    </style>
</head>
<body>
{{ trans( 'auth.failed' ) }}

<div class="container">
    <ul class="language_bar_chooser">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{$localeCode}}"
                   href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>

    @yield( 'content' )
</div>
</body>
</html>
