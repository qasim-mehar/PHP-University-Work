<!DOCTYPE html>
<html>
<head>
    <title>My Site</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        footer {
            background-color: #f1f1f1;
            color: #333;
            text-align: center;
            padding: 15px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="text-align: center;">Site Header</h1>
        <nav>
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/products">Products</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} MySite. All rights reserved.
    </footer>
</body>
</html>
