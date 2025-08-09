<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">
</head>
<body>
<div class="container mt-5">
    <nav class="mb-4 d-flex gap-3">
        <a href="/" class="btn btn-link">داشبورد</a>
        <a href="/tasks" class="btn btn-link">لیست وظایف</a>
        <a href="/about" class="btn btn-link">درباره ما</a>
    </nav>

    <main>
        {{$slot}}
    </main>
</div>
</body>
</html>
