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
            <h1>Aplicación chat</h1>
            <div class="panel panel-default">                
                <div class="panel-body">
                    <div id="comments-container"></div>
                </div>                
                <div class="panel-footer" style="height: 145px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="comments">Por favor deja tu comentario aquí:</label>
                            <input type="text" autocomplete="off" autocorrect="off" class="form-control" id="comments" name="comments">
                            <div class="input-group col-sm-6 form-inline" id="name_user" style="margin-top: 15px;">    
                                <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Tu nombre aquí!">
                                <span class="input-group-btn">
                                    <button type="button" id="btn-name" name="btn-name" class="btn btn-info"> + </button>
                                </span>
                            </div>
                            <span class="label label-info" id="success_name"></span>
                        </div>
                        <button type="submit" id="submit-btn" name="submit-btn" class="btn btn-primary pull-right">Enviar!</button>
                    </form>
                </div>                
            </div>            
        </div>    

        <script src="js/firebase.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/app.js"></script>
        <script src="js/username.js"></script>
    </body>    
</html>