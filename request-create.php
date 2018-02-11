<?php
    @session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || empty($_SESSION['username']) || empty($_SESSION['password'])) {
        header('Location: login.php?url=request-create');
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
            <div class="col s12 m3 l2 sidenav blue">
                <a href="index.php">Feed</a>
                <a href="request-create.php">New Request</a>
                  <a href="accounts.php">Account</a>
                  <a href="clients.php">Clients</a>
                  <a href="settings.php">Settings</a>
                  <a href="about.php">About</a>
            </div>
            <div id="content" class="col s12 l10">
                <div class="topnav row valign-wrapper">
                    <div class="col s6">
                        <a href="index.php">
                        <img id="logo" src="img/logo.png" alt="Logo Moneyfi" />
                        </a>
                    </div>
                    <div class="col s6 right-align">
                        <a><?php echo $_SESSION['username'] ?></a>
                        <a class="center light-blue-text"><i class="material-icons">account_circle</i></a>
                    </div>
                </div>
  
  
  <div class="col s12 m9 l10">
    <form id="feed-create-form" action="http://localhost:8080/feed/create" method="POST">
        <div id="error">
        
        </div>
      <div class="row">
        <div class="input-field col s6">
          
          <input id="title" name="title" type="text" class="validate">
          <label for="title">Request Title</label>
        </div>
        <div class="input-field col s6">
          
          <input id="company" name="company" type="text" class="validate">
          <label for="company">Company/Group</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          
          <textarea id="content" name="content" class="materialize-textarea"></textarea>
          <label for="content">Request Description</label>
        </div>
      </div>
      <div class="input-field col s6">
          
          <input id="datum" name="datum" type="text" class="datum alidate">
          <label for="datum">Date</label>
        </div>
      <div class="input-field col s3">
          
          <input id="timefrom" name="timefrom" type="text" class="time validate">
          <label for="timefrom">From</label>
      </div>
      <div class="input-field col s3">
          
          <input id="timeuntil" name="timeuntil" type="text" class="time validate">
          <label for="timeuntil">Until</label>
      </div>
      <div class="input-field col s6">
            
            <input id="pplwanted" name="pplwanted" type="text" class="validate">
            <label for="pplwanted">Number of People</label>
        </div>
      <div class="input-field col s6">
        
        <input id="money" name="money" type="text" class="validate">
        <label for="money">Money</label>
      </div>
    <div class="row">
      <div class="input-field col s12">
       
        <input 
              id="location" name="location" type="text" class="validate">
        <label for="location">Location</label>
      </div>
    </div>
    <div class="row">
        <div class="col s12">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
        </div>
    </div>
    </form>
  </div>
            </div>
        </div>
        </div>
      
      
        
        <!-- Scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="js/feed-create.js"></script>

          <script>  
              $(document).ready(function() {
                Materialize.updateTextFields();
              });
          </script>
    </body>
</html>
