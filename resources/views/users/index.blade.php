<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Usuários</h1>
    @if (session('success'))
        <div style="background:#e8ffe8;border:1px solid #b7e2b7;padding:8px;margin-bottom:12px;border-radius:6px;">
            {{ session('success') }}
        </div>
    @endif

    <p><a href="{{route('users.create')}}">+ Novo Usuário</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}">Ver</a>
                        <a href="{{ route('users.edit' , $user) }}">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum usuário encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
