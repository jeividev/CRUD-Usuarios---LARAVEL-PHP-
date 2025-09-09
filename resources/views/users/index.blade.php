<!doctype html>
<html lang="pt_BR">
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

    <p><a href="{{route('users.create')}}}">+ Novo Usuário</a></p>

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
                        <a href="{{ route('users.show', $user) }}}">Ver</a>
                        <a href="{{ route('users.edit') , $user->id}}">Editar</a>
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
