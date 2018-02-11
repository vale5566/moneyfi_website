<?php
    @session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || empty($_SESSION['username']) || empty($_SESSION['password'])) {
        header('Location: login.php?url=clients');
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
                        <a href="index.php">
                        <img id="logo" src="img/logo.png" alt="Logo Moneyfi" />
                        </a>
                    </div>
                    <div class="col s6 right-align">
                        <a><?php echo $_SESSION['username'] ?></a>
                        <a class="center light-blue-text"><i class="material-icons">account_circle</i></a>
                    </div>
                </div>
				
				<div class = "col">
					<h4>Clients </h4>
					
					  <form action="#">
						<p>
						  <input name="group1" type="radio" id="test1" checked="checked" />
						  <label for="test1">personal</label>
						</p>
						<p>
						  <input name="group1" type="radio" id="test2" />
						  <label for="test2">local group</label>
						</p>
						<p>
						  <input class="with-gap" name="group1" type="radio" id="test3" disabled="disabled" />
						  <label for="test3">company</label>
						</p>
					  </form>
				
					<!--<div class="chips"></div>-->
					  <!--<div class="chips chips-initial"></div>-->
					  <div class = "row"style = "margin-top: 20px">
						  <div class = "col l4 m5 s6">
							  <button class="btn waves-effect waves-light left  " type="submit" name="action">Create new Group   
							  <i class="material-icons">create</i> 
							  </button>
						  </div>
						  <div class = "col l4 m5 s6">
							  <button class="btn waves-effect waves-light left  " type="submit" name="action">Submit  
							  <i class="material-icons">send</i> 
							  </button>
						  </div>
					  </div>
					<!--<div class="chips chips-autocomplete"></div>-->
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
     
