<?php
    @session_start();
    if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        if(isset($_POST['url']) && !empty($_POST['url'])) {
            header('Location: url' + '.php');
        } else {
            header('Location: index.php');
        }
    } else {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
    }

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    
    <body>	
        <div class="row">
            <div id="sidebar" class="col s12 l2 sidenav blue">
                <a href="index.php">Feed</a>
                <a href="request-create.php">Request</a>
                  <a href="accounts.php">Account</a>
                  <a href="clients.php">Clients</a>
                  <a href="settings.php">Settings</a>
                  <a href="#">About</a>
            </div>
			
            <div id="content" class="col s12 l10">
			
                <div class="topnav row valign-wrapper">
                    <div class="col s6">
                        <a href="index.php">
                        <img id="logo" src="img/logo.png" alt="Logo Moneyfi" />
                        </a>
                    </div>
                    <div class="col s6 right-align">
                        <a href="login.php" class="center light-blue-text"><i class="material-icons">account_circle</i></a>
                    </div>
                </div>
		  <!-- Compiled and minified CSS -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

		  <!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<form id="login-form" action="login.php" method="POST">
      <div class="row">
        <div class="input-field col l3 m5 s9">
            <input id="username" name="username" value="<?php if(isset($_POST['username']) && !empty($_POST['username'])) {echo $_POST['username'];} ?>" type="text" class="<?php if(isset($_POST['username']) && empty($_POST['username'])) echo 'invalid'; ?>">
            <label data-error="empty..." for="username">username</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col l3 m5 s9">
            <input id="password" type="password" name="password" value="<?php if(isset($_POST['password']) && !empty($_POST['password'])) {echo $_POST['password'];} ?>" type="text" class="<?php if(isset($_POST['password']) && empty($_POST['password'])) echo 'invalid'; ?>">
            <label data-error="empty..." for="password">password</label>
         </div>
       </div>
      
      <div class="row">	
        <div class="col">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
            </button >
       </div>
      </div>
    </form>
      </div>
      </div>

  <script>  
      $(document).ready(function() {
        Materialize.updateTextFields();
      });
  </script>

      
        
        <!-- Scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>