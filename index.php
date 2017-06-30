<!DOCTYPE html>

<html>
<head>
	<title>example</title>
</head>

<body>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"><!-- Bootstrap -->
	<link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" rel="stylesheet">
	<script crossorigin="anonymous" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
	</script> 
	<script crossorigin="anonymous" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
	</script> 
	<script crossorigin="anonymous" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
	</script>
	<link href="eh.css" rel="stylesheet" type="text/css"><!-- Logo -->


	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<header>
					<a href="http://danskerne.se"><img alt="Logo" class="img-responsive" src="http://i.imgur.com/qNWXosa.png?1" title="Danskerne i Sverige"></a>
				</header>
			</div>
	    </div>
		
		<!-- Logo -->
		<!--Aesthetic-->

		<hr class="line">
		<!--Aesthetic-->
		<!-- Navbar with center links that collapse into the vertical mobile menu -->


		<nav class="navbar navbar-light navbar-toggleable-sm justify-content-center">
			<button class="navbar-toggler navbar-toggler-right" data-target="#collapsingNavbar3" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>

			<div class="navbar-collapse collapse" id="collapsingNavbar3">
				<ul class="navbar-nav mx-auto w-100 justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="http://danskerne.se">Forside</a>
					</li>


					<li class="nav-item">
						<a class="nav-link" href="#Arkiv">Arkiv</a>
					</li>


					<li class="nav-item">
						<a class="nav-link" href="#Om">Om</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Navbar with center links that collapse into the vertical mobile menu -->


		<footer class="footer">
			<!-- End Nav, Contact, Copyright, Disclaimer & Social media links -->


			<div class="footerContainer">
				<div class="text-center">
					<nav class="navbar navbar-light navbar-toggleable-sm justify-content-center">
						<ul class="navbar-nav mx-auto w-100 justify-content-center">
							<li class="nav-item">
								<a class="nav-link" href="http://danskerne.se">Forside</a>
							</li>


							<li class="nav-item">
								<a class="nav-link" href="#Arkiv">Arkiv</a>
							</li>
						</ul>
					</nav>


					<p class="kon-cop-dom"><a href="#Kontakt">Kontakt</a> | 



&copy; <?php
  $fromYear = 2003; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Danskerne.se  <!-- PHP_date-->



  
                                                                          | <a class="link" href="http://one.me/enacooar" target="_blank">Domain host</a></p>
				</div>
			</div>
			<!-- Social media links-->


			<div class="text-center">
				<nav class="navbar navbar-light navbar-toggleable-sm justify-content-center">
					<div class="hovericon column">
						<div class="navbar-nav mx-auto w-100 justify-content-center" style="margin-left: 2em">
							<div>
								<figure>
									<a alt="Følj os på Instagram." href="" target="_blank"><img alt="Følj os på Pinterest." class="icons" src="http://i.imgur.com/Mdt2usq.png" title="Følj os på Pinterest."></a>
								</figure>
							</div>


							<div>
								<figure>
									<a alt="Følj os på Instagram." href="" target="_blank"><img alt="Følj os på Instagram." class="icons" src="http://i.imgur.com/nGbgnuD.png" title="Følj os på Instagram."></a>
								</figure>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<!-- Social media links-->
		</footer>
	</div>
</body>
</html>
