<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online school</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <style media="screen">
            .html_component h1 {
                font-size: 4rem;
                font-weight: bold;
            }

            .html_component p {
                color: red;
            }
        </style>
    </head>
    <body>
        @if ($errors->any())
            <h4>Errors: </h4>
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <h4>{{ session('status') }}: </h4>
            <p>{{ session('message') }}</p>
        @endif

        {{ $slot }}

        @once
            @push('footer_scripts')
                <script>
                $(function() {
                    $('.summernote').summernote({
                      placeholder: 'Hello stand alone ui',
                      tabsize: 2,
                      height: 120,
                      toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'help']]
                      ]
                    });
                });
                </script>
            @endpush
        @endonce


        @stack('modals')

        @stack('footer_scripts')

        @livewireScripts
    </body>
</html>
