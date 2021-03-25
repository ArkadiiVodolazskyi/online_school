<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online school</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        {{-- Custom styles --}}
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        {{-- Favicon --}}
        <link rel="icon" href="{{ URL::asset('/img/favicon.svg') }}" type="image/x-icon"/>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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

        <main>
            <div class="wrapper">
                {{ $slot }}
            </div>
        </main>

        @once
            @push('footer_scripts')
                <script>
                $(function() {
                    $('.summernote').summernote({
                      placeholder: 'Type something...',
                      tabsize: 2,
                      dialogsFade: true,
                      toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                            ['fontsize', ['fontsize']],
                            ['height', ['height']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'help']]
                        ],
                    });
                });

                window.addEventListener('load', () => {
                    // Make SN Toolbar fixed on scroll
                    (function() {
                        const SNToolbar = document.querySelector('.summernote_editor .note-toolbar');

                        if (SNToolbar) {

                            SNTop = SNToolbar.getBoundingClientRect().top;

                            window.addEventListener('scroll', () => {
                                if (window.scrollY >= SNTop) {
                                    SNToolbar.classList.add('fixed');
                                } else {
                                    SNToolbar.classList.remove('fixed');
                                }
                            });

                        }
                    })();
                });

                </script>
            @endpush
        @endonce


        @stack('modals')

        @stack('footer_scripts')

        @livewireScripts
    </body>
</html>
