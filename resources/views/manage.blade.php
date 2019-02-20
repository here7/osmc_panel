<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DHeredia Media Center</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
    <h1>Oscm Panel</h1>
    <h4>- Dani Heredia -</h4>
        <ul>
            <li>
                <a href="">Video</a>
            </li>
            <ul>
                <li><a href="http://localhost:8080/video/all" target="_blank">View All</a></li>
                <li><a href="http://localhost:8080/video/id/2" target="_blank">View By Id (eg. 1)</a></li>
                {{--<li><a href="http://localhost:8080/video/type/SERIE" target="_blank">View By Type (eg. MOVIE)</a></li>--}}
                <li>
                    {!! Form::open(array('url' => '/manage/searchtype')) !!}
                    {{ Form::select('video_type', array( 'SERIE' => 'Serie',
                                                    'MOVIE' => 'Movie',
                                                    'TVSHOW' => 'TV Show',
                                                    'DOCUMENTARY' => 'Documentary'), 'Movie') }}

                    {{ Form::submit('Go') }}
                    {!! Form::close() !!}
                </li>
                <li>
                    {!! Form::open(array('url' => '/manage/search')) !!}

                    {{ Form::text('name') }}
                    {{ Form::submit('Send') }}

                    {!! Form::close() !!}
                </li>
            </ul>
        </ul>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
