<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - PT Edu Tekno Indonesia</title>
    <style>
        :root { --blue: #10a6df; --navy: #20226e; --ink: #242833; --muted: #667085; --line: #e7eaf0; --soft: #f5f8fb; --danger: #d92d20; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background: var(--soft); }
        a { color: inherit; text-decoration: none; }
        button, input, textarea { font: inherit; }
        .admin-shell { display: grid; grid-template-columns: 260px 1fr; min-height: 100vh; }
        .sidebar { padding: 28px 22px; color: white; background: var(--navy); }
        .brand { margin-bottom: 34px; font-size: 22px; font-weight: 800; }
        .brand span { color: var(--blue); }
        .nav a, .logout button { display: block; width: 100%; margin-bottom: 8px; padding: 12px 14px; border: 0; border-radius: 7px; color: white; text-align: left; background: transparent; cursor: pointer; }
        .nav a:hover, .nav a.active, .logout button:hover { background: rgba(255,255,255,.12); }
        .main { padding: 34px; }
        .topbar { display: flex; align-items: center; justify-content: space-between; gap: 18px; margin-bottom: 26px; }
        h1 { margin: 0; font-size: 32px; }
        .button { display: inline-flex; align-items: center; justify-content: center; min-height: 42px; padding: 10px 16px; border: 0; border-radius: 7px; color: white; font-weight: 700; background: var(--blue); cursor: pointer; }
        .button.secondary { color: var(--ink); background: white; border: 1px solid var(--line); }
        .button.danger { background: var(--danger); }
        .card { padding: 22px; border: 1px solid var(--line); border-radius: 8px; background: white; box-shadow: 0 14px 30px rgba(17, 24, 39, .06); }
        .grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
        .stat strong { display: block; font-size: 34px; }
        .stat span { color: var(--muted); }
        .alert { margin-bottom: 18px; padding: 12px 14px; border-radius: 7px; color: #06603b; background: #dff8eb; }
        .errors { margin-bottom: 18px; padding: 12px 14px; border-radius: 7px; color: #912018; background: #fee4e2; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 12px; border-bottom: 1px solid var(--line); text-align: left; vertical-align: middle; }
        th { color: var(--muted); font-size: 13px; text-transform: uppercase; }
        .thumb { display: grid; width: 54px; height: 54px; place-items: center; border-radius: 50%; color: var(--navy); font-weight: 800; background: #eaf7fd; }
        .thumb img { width: 54px; height: 54px; object-fit: cover; border-radius: 50%; }
        .actions { display: flex; gap: 8px; align-items: center; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
        .field.full { grid-column: 1 / -1; }
        label { display: block; margin-bottom: 7px; font-weight: 700; }
        input[type="text"], input[type="email"], input[type="password"], input[type="number"], input[type="file"], textarea { width: 100%; padding: 12px 13px; border: 1px solid var(--line); border-radius: 7px; background: white; }
        textarea { min-height: 150px; resize: vertical; }
        .check { display: flex; gap: 8px; align-items: center; margin-top: 30px; }
        .muted { color: var(--muted); }
        .pagination { margin-top: 18px; }
        @media (max-width: 860px) { .admin-shell { grid-template-columns: 1fr; } .sidebar { position: static; } .grid, .form-grid { grid-template-columns: 1fr; } .main { padding: 20px; } .topbar { align-items: flex-start; flex-direction: column; } }
    </style>
</head>
<body>
    <div class="admin-shell">
        <aside class="sidebar">
            <div class="brand"><span>EDU</span>TEKNO</div>
            <nav class="nav">
                <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="{{ request()->routeIs('admin.customers.*') ? 'active' : '' }}" href="{{ route('admin.customers.index') }}">Pelanggan</a>
                <a class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.testimonials.index') }}">Testimoni</a>
                <a href="{{ url('/') }}" target="_blank">Lihat Website</a>
            </nav>
            <form class="logout" method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit">Keluar</button>
            </form>
        </aside>
        <main class="main">
            @if (session('status'))
                <div class="alert">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
