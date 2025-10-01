<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mon Premier Site Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .nav {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .nav-links {
            display: flex;
            align-items: center;
        }
        .nav a {
            text-decoration: none;
            color: #007bff;
            margin-right: 15px;
            padding: 8px 15px;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .nav a:hover {
            background-color: #007bff;
            color: white;
        }
        .nav-auth {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .nav-auth form {
            display: inline;
            margin: 0;
        }
        .nav-auth button {
            background: none;
            border: 1px solid #dc3545;
            color: #dc3545;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .nav-auth button:hover {
            background-color: #dc3545;
            color: white;
        }
        .user-info {
            color: #28a745;
            font-weight: bold;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-links">
            <a href="/">Accueil</a>
            <a href="/a-propos">À propos</a>
            <a href="/contact">Contact</a>
            <a href="/articles">Articles</a>
        </div>
        
        <div class="nav-auth">
            @auth
                <!-- Utilisateur connecté -->
                <span class="user-info">👋 {{ Auth::user()->name }}</span>
                <a href="/dashboard">Tableau de bord</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            @else
                <!-- Utilisateur non connecté -->
                <a href="{{ route('login') }}">Connexion</a>
                <a href="{{ route('register') }}">Inscription</a>
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p style="text-align: center; margin-top: 40px; color: #777;">&copy; 2024 Mon Premier Site Laravel</p>
    </footer>
</body>
</html>