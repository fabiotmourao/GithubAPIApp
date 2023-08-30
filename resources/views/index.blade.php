<!DOCTYPE html>
<html>

<head>
    <title>Consumindo API/Github</title>

    <style>
        .search-form {
            margin-top: 20px;
        }

        .search-input {
            width: 200px;
            padding: 10px;
            font-size: 16px;
        }

        .search-button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div style="text-align: center; margin-top: 200px;">
        <h1>Consulta de Usuário GitHub</h1>
        <form class="search-form" action="/search" method="POST">
            @csrf
            <input class="search-input" type="text" name="username" placeholder="Nome de Usuário">
            <button class="search-button" type="submit">Buscar</button>
        </form>
    </div>
    @if (session('error'))
        <div style="text-align: center; margin-top: 20px; color: red;">
            {{ session('error') }}
        </div>
    @endif
</body>

</html>
