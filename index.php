<html>
    <head>
        <title>Caça-Palavras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>        
        <?php
        if (isset($_POST['enviar']))
        {
        ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>Caça-palavras <a href='index.php' class='btn btn-primary pull-right' type='button'>Voltar</a></h1>
                        </div>
                        <?php
                            include_once 'class/passatempo.class.php';
                            $matriz = new Passatempo();
                            $largura = (int) $_POST['largura'];
                            $altura  = (int) $_POST['altura'];
                            $arrayPalavras = explode(';', $_POST['palavras']);
                            $completar = false;
                            if (isset($_POST['completar']))
                            {
                                $completar = true;
                            }
                            $matriz->novoCacaPalavras($largura, $altura, $completar, $arrayPalavras);
                        ?>                        
                    </div>
                </div>
            </div>
        <?php
        }
        else{
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>Montar o caça-palavras</h1>
                        </div>
                        <form role="form" class="form-horizontal" action="index.php" method="POST">
                            <div class="form-group">
                                <label for="largura" class="control-label col-sm-2">
                                    Largura
                                </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="largura" id="largura">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="altura" class="control-label col-sm-2">
                                    Altura
                                </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="altura" id="altura">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="palavras" class="control-label col-sm-2">
                                    Palavras
                                </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="palavras" id="palavras">
                                    <span class="text-info">Separar palavras por ; (ponto e vírgula)</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="palavras" class="control-label col-sm-2">
                                    Completar painel
                                </label>
                                <div class="col-sm-8">
                                    <input type="checkbox" value="completar" name="completar" id="completar"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button type="submit" name="enviar" value="enviar" class="btn btn-default">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </body>
</html>