<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .user-details {
            text-align: center;
        }
        .user-card-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 800px;
            margin-top: 50px;
        }
        .user-card {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-left: 10px;
            margin: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .user-image {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="user-details">
        <img class="user-image" src="{{ $userData['avatar_url'] }}" alt="Avatar">
        <h1>{{ $userData['name'] }}</h1>
        <p>Nome de Usuário: {{ $userData['login'] }}</p>
        <p>Seguidores: {{ $userData['followers'] }}</p>
        <p>Repositórios Públicos: {{ $userData['public_repos'] }}</p>
        <div class="user-card-container">
            <div class="user-card">
                <p>Localização: {{ $userData['location'] }}</p>
                <p>Email: {{ $userData['email'] }}</p>
            </div>
            <div class="user-card">
                <p>Biografia:{{ $userData['bio'] }}</p>
            </div>
        </div>
        <a class="back-button" href="/">Voltar</a>
    </div>
</body>
</html>


