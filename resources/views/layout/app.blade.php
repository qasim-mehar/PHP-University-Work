<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TaskMaster</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
        }

        nav {
            background: linear-gradient(to right, #7950f2, #f72585);
            padding: 15px 30px;
            display: flex;
            justify-content: center;
            gap: 25px;
            font-weight: 500;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffe066;
        }

        .content {
            flex: 1;
            padding: 40px 20px;
        }

        .glass {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        footer {
            background-color: #111;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            margin-top: auto;
        }

        footer i {
            color: #f72585;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/home"><i class="bi bi-house-door-fill me-1"></i>Home</a>
            <a href="/students"><i class="bi bi-people-fill me-1"></i>Manage Tasks</a>
            <a href="/about"><i class="bi bi-info-circle-fill me-1"></i>About</a>
           
            <a href="/contact"><i class="bi bi-envelope-fill me-1"></i>Contact</a>
            
        </nav>
    </header>

    <div class="content container">
        <div class="glass">
            @yield('content')
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} TaskMaster. Built with <i class="bi bi-heart-fill"></i> for productivity.
    </footer>
</body>
</html>
