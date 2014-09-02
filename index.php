<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Firebase Chat Application</title>
        <link rel="shortcut icon" href="http://joshuaranda.com/img/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container">
            <h1>Aplicación de chat con Firebase</h1>
            <div class="panel panel-default">                
                <div class="panel-body">
                    <div id="comments-container"></div>
                </div>                
                <div class="panel-footer" style="height: 145px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="comments">Por favor deja tu comentario aquí:</label>
                            <input type="text" autocomplete="off" autocorrect="off" class="form-control" id="comments" name="comments">
                        </div>
                        <button type="submit" id="submit-btn" name="submit-btn" class="btn btn-primary pull-right">Enviar!</button>
                    </form>
                </div>                
            </div>            
        </div>    

        <script src="js/firebase.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>    
</html>