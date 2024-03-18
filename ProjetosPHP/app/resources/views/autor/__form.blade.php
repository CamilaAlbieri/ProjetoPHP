<form   action="{{ route('autor.store')}}" method="POST">   
        @csrf
        <div>

            <Label>Nome</Label>
            <input type="text"
                    name="nome"
                    id="nome"
                    value="{{ isset($registro->nome) ? $registro->nome : '' }}"> 
                    @error('nome')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        <div>
            <Label>Apelido</Label>
            <input type="text"
                    name="apelido"
                    id="apelido"
                    value="{{ isset($registro->apelido) ? $registro->apelido : '' }}">
                    @error('apelido')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        <div>
            <Label>Cidade</Label>
            <input type="text"
                    name="cidade"
                    id="cidade"
                    value="{{ isset($registro->cidade) ? $registro->cidade : '' }}">
                    @error('cidade')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        <div>
            <Label>Bairro</Label>
            <input type="text"
                    name="bairro"
                    id="bairro"
                    value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
                    @error('bairro')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        <div>
            <Label>Cep</Label>
            <input type="text"
                    name="cep"
                    id="cep"
                    value="{{ isset($registro->cep) ? $registro->cep : '' }}">
                    @error('cep')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        <div>
            <Label>Email</Label>
            <input type="text"
                    name="email"
                    id="email"
                    value="{{ isset($registro->email) ? $registro->email : '' }}">
                    @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        <div>
            <Label>Telefone</Label>
            <input type="text"
                    name="telefone"
                    id="telefone"
                    value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
                    @error('telefone')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
    