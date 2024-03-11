<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <Label>Nome</Label>
            <input type="text"
                    name="nome"
                    id="nome"
                    value="{{ isset($registro->nome) ? $registro->nome : '' }}"> 
        </div>
        <div>
            <Label>Apelido</Label>
            <input type="text"
                    name="apelido"
                    id="apelido"
                    value="{{ isset($registro->apelido) ? $registro->apelido : '' }}">
        </div>
        <div>
            <Label>Cidade</Label>
            <input type="text"
                    name="cidade"
                    id="cidade"
                    value="{{ isset($registro->cidade) ? $registro->cidade : '' }}">
        </div>
        <div>
            <Label>Bairro</Label>
            <input type="text"
                    name="bairro"
                    id="bairro"
                    value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
        </div>
        <div>
            <Label>Cep</Label>
            <input type="text"
                    name="cep"
                    id="cep"
                    value="{{ isset($registro->cep) ? $registro->cep : '' }}">
        </div>
        <div>
            <Label>Email</Label>
            <input type="text"
                    name="email"
                    id="email"
                    value="{{ isset($registro->email) ? $registro->email : '' }}">
        </div>
        <div>
            <Label>Telefone</Label>
            <input type="text"
                    name="telefone"
                    id="telefone"
                    value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
        </div>
        <a href="{{route('autor.index') }}">Cancelar</a>
    </form>
    </div>
</body>
</html>