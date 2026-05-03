<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - PT Edu Tekno Indonesia</title>
    <style>
        body { display: grid; min-height: 100vh; place-items: center; margin: 0; font-family: ui-sans-serif, system-ui, sans-serif; background: #eef5fb; }
        .card { width: min(420px, calc(100% - 32px)); padding: 30px; border-radius: 8px; background: white; box-shadow: 0 20px 50px rgba(17,24,39,.12); }
        h1 { margin: 0 0 22px; font-size: 28px; }
        label { display: block; margin: 14px 0 7px; font-weight: 700; }
        input { width: 100%; padding: 12px 13px; border: 1px solid #e7eaf0; border-radius: 7px; box-sizing: border-box; }
        button { width: 100%; margin-top: 20px; padding: 13px; border: 0; border-radius: 7px; color: white; font-weight: 800; background: #10a6df; cursor: pointer; }
        .error { margin-bottom: 14px; padding: 12px; border-radius: 7px; color: #912018; background: #fee4e2; }
        .hint { margin-top: 18px; color: #667085; font-size: 14px; line-height: 1.5; }
    </style>
</head>
<body>
    <form class="card" method="POST" action="{{ route('admin.login.store') }}">
        @csrf
        <h1>Login Admin</h1>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        <button type="submit">Masuk</button>
        <p class="hint">Default lokal: admin@edutekno.test / admin12345. Ubah di file .env sebelum production.</p>
    </form>
</body>
</html>
