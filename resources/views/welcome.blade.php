<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @livewireStyles

</head>

<body>

    <div class="container border m-5 p-5">
        <div class="row">
            <div class="col">
{{--                {{session()->get('myCourses')}}--}}
                {{-- <livewire:create-post /> --}}
                {{-- <livewire:course /> --}}
                {{-- @livewire('Dashboard')
                <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1> --}}
{{--                  <livewire:product :price="243234"></livewire:product>--}}
                <livewire:counter :initialCount="1"></livewire:counter>
            </div>
        </div>
    </div>



    @livewireScripts

</body>

</html>
