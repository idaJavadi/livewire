<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-DOXMLfHhQKvFFp+rrTZwVLPvqIdhPVTT9csOnHSgW0WPX0eV5MCgtjCJbY6ERspu"
          crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />

    <style>
        body{
            font-family: Vazirmatn, sans-serif;
        }
    </style>

    @livewireStyles
</head>
<body>
    <div class="container" mt-5>
        <nav class="mb4">
            <a href="/"  class="btn btn-link" wire:navigate>داشبورد</a>
            <a href="/tasks" class="btn btn-link" wire:navigate>لیست وظایف</a>
            <a href="/about" class="btn btn-link" wire:navigate>درباره ما</a>
        </nav>

        <main>
            {{$slot}}
        </main>
    </div>
    @livewireScripts
</body>
</html>
