<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <h1>Listagem de Autores</h1>
    <div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Email</th>
                <th>Telefone</th>
                <Th>Ações</Th>
            </tr>
            <body>
                <!-- Se comunica com o php laravel com o php pagina -->
                @foreach($registros as $registro) <!-- Passa todos os registros para um de cada vez-->
                <tr>
                    <td>{{$registro->nome }}</td>
                    <td>{{$registro->apelido }}</td>
                    <td>{{$registro->cidade }}</td>
                    <td>{{$registro->bairro }}</td>
                    <td>{{$registro->cep }}</td>
                    <td>{{$registro->email }}</td>
                    <td>{{$registro->telefone }}</td>
                    <td>
                        <a href="{{url('/autor/edit', $registro->id)}}">Alteração</a>
                        <a href="{{url('/autor/destroy', $registro->id)}}">Exclusão</a>
                        <a href="{{url('/autor/show', $registro->id)}}">Consulta</a>
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
        <a href="{{url('/autor/create') }}">Incluir</a>
    </div>
</body>
</html>