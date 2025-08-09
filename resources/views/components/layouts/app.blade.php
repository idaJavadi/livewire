<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بلاگ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">
    <style>
        body{
            font-family: Vazirmatn, sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
        {{$slot}}
    </div>
</div>
@livewireScripts
</body>
</html>
