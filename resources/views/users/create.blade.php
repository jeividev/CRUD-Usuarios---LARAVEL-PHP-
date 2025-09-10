<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Usuário</title>
    <style>
        label{
            display: block;
            margin-top: 12px;
        }
        input{
            width: 100%;
            padding: 8px;
        }
        .error{
            color: #b00020;
            font-size: 14px;
        }
        .box{
            max-width: 520px;
            margin: 20px auto;
            padding: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .actions{
            margin-top: 16px;
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>

    <div class="box">
        <h1>Criar Usuário</h1>

        @if ($errors->any())
            <div class="error">
                <p>Por favor, corrija os erros abaixo:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required maxlength="255">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required maxlength="255">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required minlength="8">
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="password_confirmation">Confirmar Senha:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <div class="actions">
                <button type="submit">Criar Usuário</button>
                <a href="{{ route('users.index') }}">Cancelar</a>
            </div>
        </form>
    </div>



</body>
</html>
