<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar instituição') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="form-row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="width: 100%; margin-top: 50px; margin-bottom: 50px;">
                    <div class="card-header">
                        Instituições > Cadastrar instituição
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Instituicao</h5>
                        @if(session('success'))
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 5px;">
                                    <div class="alert alert-success" role="alert">
                                        <p>{{session('success')}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <form id="criar-instituicao-form" method="POST" action="{{route('instituicao.criar')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="image">Imagem</label>
                                    <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">

                                    @error('image')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control @error('nome') is-invalid @enderror" autofocus required value="">

                                    @error('nome')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="categoria">Categoria</label>
                                    <input type="text" id="categoria" name="categoria" class="form-control @error('categoria') is-invalid @enderror" required value="">

                                    @error('categoria')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="pais">Pais</label>
                                    <input type="text" id="pais" name="pais" class="form-control @error('pais') is-invalid @enderror" required value="">

                                    @error('pais')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" id="estado" name="estado" class="form-control @error('estado') is-invalid @enderror" required value="">

                                    @error('estado')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" id="cidade" name="cidade" class="form-control @error('cidade') is-invalid @enderror" required value="">

                                    @error('cidade')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" id="endereco" name="endereco" class="form-control @error('endereco') is-invalid @enderror" required value="">

                                    @error('endereco')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="cep">Cep</label>
                                    <input type="text" id="cep" name="cep" class="form-control @error('cep') is-invalid @enderror" required value="">

                                    @error('cep')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" id="telefone" name="telefone" class="form-control @error('telefone') is-invalid @enderror" required value="">

                                    @error('telefone')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required value="">

                                    @error('email')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="site">Site</label>
                                    <input type="text" id="site" name="site" class="form-control @error('site') is-invalid @enderror" required value="">

                                    @error('site')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="datafundacao">Data da fundação</label>
                                    <input type="date" id="datafundacao" name="datafundacao" class="form-control @error('datafundacao') is-invalid @enderror" required value="">

                                    @error('datafundacao')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="coordenador">Coordenador</label>
                                    <input type="text" id="coordenador" name="coordenador" class="form-control @error('coordenador') is-invalid @enderror" required value="">

                                    @error('coordenador')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" id="latitude" name="latitude" class="form-control @error('latitude') is-invalid @enderror" required value="">

                                    @error('latitude')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" id="longitude" name="longitude" class="form-control @error('longitude') is-invalid @enderror" required value="">

                                    @error('longitude')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="info">Informação</label>
                                    <input type="text" id="info" name="informacao" class="form-control @error('informacao') is-invalid @enderror" value="">

                                    @error('informacao')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">
                        <div class="form-row">
                            <div class="col-md-6 form-group"></div>
                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-success" form="criar-instituicao-form" style="width: 100%">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>