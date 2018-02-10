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
            <div id="sidebar"class="col s12 l2 sidenav blue">
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
                        <a href="index.html">
                        <img id="logo" src="img/logo.png" alt="Logo Moneyfi" />
                        </a>
                    </div>
                    <div class="col s6 right-align">
                        <a><?php echo $_SESSION['username'] ?></a>
                        <a href="login.php?url=index" class="center light-blue-text"><i class="material-icons">account_circle</i></a>
                    </div>
                </div>
					<div class = "col">
					<h4>We are Sorry!</h4>
					<h5>This site is unknown to us.</h5>
					<h6>If you believe this is an error please report it.</h6>
					<h6>Moneyfi Media AG</h6>
				</div>
              
              <!-- Pagination -->
                <ul class="pagination hide">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
        
        <!-- Scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/feed-update.js"> </script>
		<script> $('.chips').material_chip();
  $('.chips-initial').material_chip({
    data: [{
      tag: 'Apple',
    }, {
      tag: 'Microsoft',
    }, {
      tag: 'Google',
    }],
  });
  $('.chips-placeholder').material_chip({
    placeholder: 'Qualifications',
    secondaryPlaceholder: '+Tag',
  });
  $('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'Apple': null,
        'Microsoft': null,
        'Google': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
  </script>
    </body>
</html>
     