<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">
    <style>
        body{
            font-family: Vazirmatn, sans-serif;
        }
        .sidebar{
            height: 100vh;
            position: fixed;
            top: 0;
            right: 0;
            width: 250px;
            background-color: blanchedalmond;
        }
        .content{
            margin-right: 250px;
            padding: 20px;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div class="d-flex">
        <div class="sidebar p-3">
            <h4 class="text-center">پنل ادمین</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.categories')}}">داشبورد</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.posts')}}">داشبورد</a>
                </li>
            </ul>
        </div>
        <div class="content w-100">
            {{$slot}}
        </div>
    </div>
@livewireScripts
</body>
</html>
