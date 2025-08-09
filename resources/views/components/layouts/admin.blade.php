<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>پنل مدیریت</title>

    <!-- فونت Vazirmatn -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn-font@v33.003/Vazirmatn-font-face.css" rel="stylesheet" />

    <!-- بوت‌استرپ RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" />

    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            min-height: 100vh;
            color: #333;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            right: 0;
            width: 260px;
            background-color: #fff;
            box-shadow: -3px 0 8px rgba(0,0,0,0.1);
            padding-top: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .sidebar h4 {
            margin-bottom: 1.5rem;
            font-weight: 700;
            color: #0d6efd;
            text-align: center;
            letter-spacing: 1px;
        }

        .nav-link {
            color: #495057;
            font-weight: 500;
            padding: 0.75rem 1.25rem;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 6px;
            margin-bottom: 0.3rem;
        }
        .nav-link:hover, .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(13, 110, 253, 0.4);
        }

        .content {
            margin-right: 260px;
            padding: 30px 40px;
            background-color: white;
            min-height: 100vh;
            box-shadow: inset 0 0 15px rgba(0,0,0,0.05);
            border-radius: 8px 0 0 8px;
        }

        /* واکنش‌گرا برای موبایل */
        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                box-shadow: none;
                padding: 1rem;
            }
            .content {
                margin: 0;
                padding: 20px 15px;
                border-radius: 0;
            }
        }
    </style>

    @livewireStyles
</head>
<body>
<div class="d-flex flex-column flex-md-row">
    <nav class="sidebar">
        <h4>پنل ادمین</h4>
        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.categories') ? 'active' : '' }}" href="{{ route('admin.categories') }}">دسته‌بندی‌ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.posts') ? 'active' : '' }}" href="{{ route('admin.posts') }}">مطالب</a>
            </li>
        </ul>
    </nav>
    <main class="content w-100">
        {{ $slot }}
    </main>
</div>

@livewireScripts
</body>
</html>
