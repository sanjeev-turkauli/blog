<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(Str::contains(request()->url(), 'admin'))
     @component('components.livewire.admin.header')@endcomponent
    @elseif(Str::contains(request()->url(), 'session'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://kit.fontawesome.com/33770a1487.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{url('assets/frontend/auth/css/style.css')}}">
    @else
    <link rel="stylesheet" href="{{url('assets/frontend/css/global.css')}}">
    @component('components.livewire.header')@endcomponent
    @endif

    @livewireStyles
</head>

<body>

    @if(Str::contains(request()->url(), 'admin'))
    {{$slot}}

    @component('components.livewire.admin.footer')@endcomponent
    @elseif(Str::contains(request()->url(), 'session'))

    {{$slot}}
    @livewireScripts
    @else

    @livewire('navbar')

    {{$slot}}

    @livewireScripts
    @component('components.livewire.footer')@endcomponent

    @endif

</body>

</html>