<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Departments') | UniCare</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="department-shell">
        <header class="brand-bar">
            <a class="brand" href="{{ route('departments.index') }}" aria-label="UniCare departments">
                <svg class="brand-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                    <circle cx="20" cy="20" r="17.5" stroke="currentColor" stroke-width="2.5"/>
                    <path d="M11 28V18.5L20 13L29 18.5V28H11Z" fill="currentColor" fill-opacity=".12" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                    <path d="M16 28V21H24V28M20 13V9M17.5 9H22.5M15 18.5H16M24 18.5H25" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M29.5 7.5L32.5 10.5" stroke="#087F82" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>UniCare</span>
            </a>
        </header>
        <section class="department-content">
            @yield('content')
        </section>
    </main>
</body>
</html>