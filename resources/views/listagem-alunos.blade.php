@extends('layouts.app')

@section('content')
    <h2 class="mb-3">Listagem de alunos</h2>
    <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-font btn-success"><i class="bi bi-plus"></i> ADICIONAR ALUNO</button>
    </div>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Ações</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Classe</th>
                <th>Telefone</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dados dos alunos (falsos, porém realísticos) -->
            <tr>
                <td>
                    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Editar">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Remover">
                        <i class="bi bi-trash"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Anexar Arquivo">
                        <i class="bi bi-paperclip"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-sm " data-toggle="tooltip" data-placement="top"
                        title="Baixar PDF">
                        <i class="bi bi-download"></i>
                    </a>
                </td>
                <td>1</td>
                <td>Maria Oliveira</td>
                <td>9A</td>
                <td>(555) 123-4567</td>
                <td>123.456.789-01</td>
            </tr>

            <!-- Adicione mais linhas conforme necessário -->
            <tr>
                <td>
                    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Editar">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Remover">
                        <i class="bi bi-trash"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Anexar Arquivo">
                        <i class="bi bi-paperclip"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top"
                        title="Baixar PDF">
                        <i class="bi bi-download"></i>
                    </a>
                </td>
                <td>2</td>
                <td>Carlos Pereira</td>
                <td>8B</td>
                <td>(555) 987-6543</td>
                <td>987.654.321-00</td>
            </tr>


        </tbody>
    </table>
@endsection
