<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ناوبری سایت</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet"
          integrity="sha384-+qdLa9g4Y9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    @livewireStyles
</head>

<body class="bg-light">

<div class="container my-5 p-4 bg-white rounded shadow-sm text-center">
    <div class="row justify-content-center">
        <div class="col-auto">
{{--            <a href="/about" wire:navigate class="btn btn-outline-primary mx-2">درباره ما</a>--}}
{{--            <a href="/contact-us" wire:navigate class="btn btn-outline-primary mx-2">تماس با ما</a>--}}
{{--            @livewire('user-list')--}}
{{--            @livewire('user-list2');--}}
{{--            @livewire('messages');--}}
{{--            @livewire('user-list3')--}}
{{--            @livewire('message-list')--}}
{{--            @livewire('update-profile')--}}
            @livewire('show-product')
        </div>
    </div>
</div>

@livewireScripts

</body>

</html>
