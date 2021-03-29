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

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    </head>
    <body>
        <div class="min-h-screen bg-gray-100 pb-12">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <x-tag.container>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <x-comp.alert type="error">
                            {{ $error }}
                        </x-comp.alert>
                    @endforeach
                @endif

                @if (session('status'))
                    <x-comp.alert type="{{ session('status') }}">
                        {{ session('message') }}
                    </x-comp.alert>
                @endif

                {{ $slot }}

            </x-tag.container>
        </div>

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
