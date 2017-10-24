<!DOCTYPE html>
<html lang="en">
       <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <style type="text/css">
.fancy {
color: #6e2caf;
font-size:350%;
}
</style>
    <title>Jogo PW</title>
    <body>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div style="padding-top: 30px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dados do jogo</h3>
                        </div>

                        <div class="panel-body"> 

                            <p>Tentativas:
                                <?= $_SESSION['tentativas'] ?>
                            </p>

                            <p>Jogador:
                                <?= $_SESSION['nome'] ?>
                            </p>
                          
                        </div>
                    </div>

                </div>

            </div>
        </div>
    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1 class="fancy">DIGITE O NÚMERO!</h1></center>
    <form method="post" action="/game">
                    <div class="form-group">                      
                        <input class="form-control" type="text" name="num" id="num" autofocus value="">
                    </div>
                       <center> <button class="btn btn-lg btn-info" type="">Chutar!</button><center>
    </form>

                        <center><p><?=$msg?></p></center>

    
    </body>
</html>

