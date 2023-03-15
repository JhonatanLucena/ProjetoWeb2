<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/ProjetoWeb2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="/ProjetoWeb2/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Cadastro de Campus</title>
</head>
<body>
    <div class="container text-center">    
        <h1>Cadastrar Campus</h1>
        <form action="" method="post">
            <div class="row">
                <div class="col col-md-6">
                    <label class="form-label" for="idnomeCampus">Nome do Campus:</label>
                    <input class="form-control" type="text" name="nomeCampus" id="idnomeCampus">
                </div>
                <div class="col col-md-3">
                    <label class="form-label" for="idCEP">CEP</label>
                    <input class="form-control" type="text" name="CEP" id="idCEP">
                </div>
            </div>
            <input class="btn btn-primary mt-2" type="submit" value="Salvar"> 
        </form>
    </div>
</body>
</html>