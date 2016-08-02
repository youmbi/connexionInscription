<!DOCTYPE html>
<html>
<head>
<title>NG-Conseil :: Louis | Connexion / Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>web font-->
<!-- //web font -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- //js -->
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>Connexion / Inscription</h1>
		<div class="login-form">
			<div class="sap_tabs w3ls-tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Connexion</span></li> 
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Inscription</span></li>
					</ul>	
					<div class="clear"> </div>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-agileits-top"> 
								<form action="#" method="post">
									<p>Votre e-mail </p>
									<input type="text" name="email" required/>
									<p>Mot de passe</p>
									<input type="password" name="Password" required/>	 
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Se souvenir de moi ?</label> 
									<input type="submit" value="Se connecter">
								</form>  
							</div>
							<div class="login-agileits-bottom"> 
								<p><a href="#">Mot de passe oublié?</a></p>
							</div> 
						</div> 
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top sign-up"> 
								<form action="#" method="post">
									<p>Votre nom </p>
									<input type="text" name="username"  required=""/>
									<p>Votre e-mail </p>
									<input type="text" name="email"  required=""/>
									<p>Password</p>
									<input type="password" name="Password" placeholder="" required/>	
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Accepter les conditions d'utilisation</label> 
									<input type="submit" value="Valider">
								</form>  
							</div>
						</div>
					</div>							
				</div>	 
			</div> 
			<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="copyright">
		<p> © 2016 Louis Youmbi . All rights reserved</p>
	</div>
	<!-- //copyright --> 
</body>
</html>