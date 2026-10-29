<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroClima Garut</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f7f6; 
            color: #333; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header { background-color: #2e7d32; color: white; padding: 20px; text-align: center; }
        nav { background-color: #1b5e20; display: flex; justify-content: center; padding: 10px; }
        nav a { color: white; text-decoration: none; padding: 10px 20px; margin: 0 5px; border-radius: 4px; font-weight: bold; }
        nav a:hover { background-color: #388e3c; }

        .container { 
            width: 80%; 
            margin: 30px auto; 
            background: white; 
            padding: 25px; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
            flex: 1;
        }

        footer { 
            background-color: #2e7d32; 
            color: white; 
            text-align: center; 
            padding: 15px; 
            margin-top: auto;
        }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #e8f5e9; }
        .status-kering { color: #d32f2f; font-weight: bold; }
        .status-optimal { color: #388e3c; font-weight: bold; }
        .status-lembap { color: #0288d1; font-weight: bold; }
        .btn { background-color: #2e7d32; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn:hover { background-color: #1b5e20; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input, .form-group select { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    </style>
</head>
<body>

    <header>
        <h1>AgroClima Kabupaten Garut</h1>
    </header>

    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 AgroClima Kelompok Tani Makmur Kabupaten Garut</p>
    </footer>

</body>
</html>