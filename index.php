<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento Correios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <script type="text/JavaScript" src="code.js"></script>

        <form method="POST" action="generate.php">

        <form>
            <h1><b>Declaração de Conteúdo</b></h1>
            <p>Correios e Sedex</p>

            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" name="colaborador" class="form-control" placeholder="Nome">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" name="endereco" class="form-control" placeholder="Endereço 1">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" name="endereco2" class="form-control" placeholder="Endereço 2">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" name="cep" class="form-control" placeholder="CEP">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" name="estado" class="form-control" placeholder="Estado">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                </div>
            </div>

            <div class="form-group">
                    <button name="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-confirm btn-sm" onclick="myFunction()">Dark Mode</button>
            </div>
            
        </div>

</body>
</html>