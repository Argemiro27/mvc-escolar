<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/app.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap"
        rel="stylesheet">

</head>

<body class="antialiased">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-5 col-md-3 collapse width m-0 p-0 sidebar" id="collapseExample">
                <img src="assets/icon.png" height="100" class="mt-3" alt="">
                <div class="btn-nav" id="accordionExample">
                    <div class="" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-nav-link" type="button" data-toggle="collapse"
                                aria-controls="collapseOne">
                                <i class="bi bi-house-fill"></i> Home
                            </button>
                        </h2>
                    </div>
                    <div class="btn-nav" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-nav-link" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-list"></i> Listagem
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <i class="bi bi-book"></i> Alunos
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">

                <div class="row">

                    <div class="col-12">

                        <!-- As a link -->
                        <nav class="navbar rounded-bottom">
                            <button class="btn sticky-top" data-toggle="collapse" href="#collapseExample" id=""
                                role="button">
                                <i class="bi bi-list"></i>
                            </button>
                            <div class="nav-right">
                                <button class="btn sticky-top">
                                    <i class="bi bi-bell"></i>
                                </button>
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                    style="width: 50px;" alt="Avatar" />
                            </div>
                        </nav>
                        <div class="card p-4 m-3 content-area">
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
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Remover">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Anexar Arquivo">
                                            <i class="bi bi-paperclip"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="Baixar PDF">
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
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Remover">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Anexar Arquivo">
                                            <i class="bi bi-paperclip"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Baixar PDF">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Trigger the click event on the button that controls the menu
            $('[data-toggle="collapse"]').trigger('click');
        });
    </script>
</body>

</html>
