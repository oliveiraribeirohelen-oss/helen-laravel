<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Contato</h1>

    @if (isset($dados))
        <h2>Dados Enviados:</h2>
        <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
        <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
        <p><strong>Telefone:</strong> {{ $dados['telefone'] }}</p>
    @else
        <form action="/contato" method="POST">
            @csrf
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone"><br><br>

            <button type="submit">Enviar</button>
        </form>
    @endif
</body>
</html>
