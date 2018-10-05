<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <style type="text/css">
            header.masthead {
                position: relative;
                background-color: #343a40;  
                background-size: cover;
                padding-top: 8rem;
                padding-bottom: 8rem;
            }

            header.masthead .overlay {
                position: absolute;
                background-color: #212529;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity: 0.3;
            }

        </style>
        <title></title>
    </head>
    <body>
        <!-- Navegação -->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Página inicial</a>
                <a class="btn btn-primary" href="login.php">Administração</a>
            </div>
        </nav>

        <!-- Formulário -->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h1 class="mb-5">Tem vontade de estudar com a gente? Cadastre-se e entraremos em contato quando tivermos novas turmas...</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <!-- Não esqueça de alterar o action -->
                        <form name="Cadastro" action="" method="POST">
                            <div class="form-row">                                
                                <div class="col-12 col-md-9 mb-2 mb-md-0">
                                    <div class="form-group">
                                        <label>Selecione o curso que você tem interesse:</label>
                                        <select name="curso" class="form-control">
                                            <option value="informatica">Técnico em Informática</option>
                                            <option value="telecomunicacoes">Técnico em Telecomunicações</option>
                                            <option value="enfermagem">Técnico em Enfermagem</option>
                                            <option value="eletronica">Técnico em Eletrôncia</option>                                               
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-9 mb-2 mb-md-0">
                                    <input type="email" name="email" required="required" class="form-control form-control-lg" placeholder="Digite seu email...">
                                </div>
                                <div class="col-12 col-md-2">
                                    <button type="submit" class="btn btn-block btn-lg btn-primary">Enviar!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>         

        </header>   

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
