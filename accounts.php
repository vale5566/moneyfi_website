<?php
    @session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || empty($_SESSION['username']) || empty($_SESSION['password'])) {
        header('Location: login.php?url=accounts');
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
					
					<div class = "col">
						<div class = "row">
							<div class = "col l12 m12 s12">
					<h4>Name: <?php echo $_SESSION['username'] ?> </h4>
					<h4>E-Mail: jubeki99@gmail.com </h4>
							</div>
						</div>
					<div class = "row valign-wrapper">
						<div class = "col l7 m7 s7">
					<h4>Password: <?php echo str_repeat('*', strlen($_SESSION['password'])) ?> </h4>
						</div>
						<div class = "col l5 m5 s5">
								  <button class="btn waves-effect waves-light right" type="submit" name="action">change PW
								  <i class="right"></i> 
								  </button>
						</div>
					</div>
					
					  <!--<div class="chips"></div>-->
					  <!--<div class="chips chips-initial"></div>-->
					  <div class = "row">
						  <div class="chips chips-placeholder col s8"></div>
						  <div class "col s4">
							  <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
							  <i class="material-icons right">send</i> 
							  </button>
						  </div>
					  </div>
					  <!--<div class="chips chips-autocomplete"></div>-->
					
				  <form action="#">
					<p>
					  <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
					  <label for="filled-in-box">Please send me E-Mails for job requests.</label>
					</p>
					<p>
					  <input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" />
					  <label for="filled-in-box2">Please send me the Moneyfi newsletter.</label>
					</p>
					<p>
					  <input type="checkbox" class="filled-in" id="filled-in-box3" checked="checked"  disabled="disabled"/>
					  <label for="filled-in-box3">I accept the conditions.</label>
					</p>
				  </form>
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
     
