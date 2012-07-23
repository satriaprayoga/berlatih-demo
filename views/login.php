<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Berlatih-Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo CSS_DIR; ?>bootstrap.css" rel="stylesheet">
        <link href="<?php echo CSS_DIR; ?>bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo CSS_DIR; ?>login.css" rel="stylesheet">
    </head>
    <body class="login">
        <div class="container">
            <h3>Login Demo</h3>
            <form id="login-form" class="well" action="login/auth" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">username</label>
                        <div class="controls">
                            <input type="text" class="input-large" placeholder="Username" name="username" id="username"/>
                        </div>
                    </div>
                    <div class="control-group">
                         <label class="control-label" for="password">password</label>
                         <div class="controls">
                             <input type="password" class="input-large" placeholder="Password" name="password" id="password"/><br />
                         </div>
                    </div>
             
                
                </fieldset>
                <div class="pull-right">
                    <button type="submit" class="btn btn-warning">Login</button>
                </div>

            </form>
            satriaprayoga &copy; 2012
            <div class="pull-right">
                <a href="#">Sign In</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Need Help</a>
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo JS_DIR; ?>/bootstrap.js"  type="text/javascript"></script>
    </body>
</html>
