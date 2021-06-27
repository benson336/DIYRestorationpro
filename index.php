<?php include("includes/ini.php"); ?>
<?php include("includes/header.php"); ?>

<body>
<!--START Nav Bar-->
	<nav class="navbar navbar-expand-lg navColor navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php">OSPREY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#about">ABOUT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">TEAM</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#blog">BLOG</a>
					</li>
					<?php
					if(isset($_SESSION["userid"])){
						echo "<li class='nav-item'><a class='nav-link' href='admin.php'>DASHBOARD</a></li>";
						echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Log out</a></li>";
					} else {
						echo "<li class='nav-item'><a class='nav-link' href='login.php'>Sign In</a></li>";
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
<!--END Nav Bar-->

<!--START Jumbotron-->
<div class="jumbotron jumboStyle">
	<div class="container">
		<div class="row">
			<div class="col-md-6 margin-top-50">
				<div class="customFormTitle">
  				<h1><span style="font-size:50px;"><strong>HI,</span> WE'RE WATER DAMAGE</strong></h1>
  				<h1><strong>RESTORATION PRO</strong></h1>
  				<h4><span><i>HIGHLY TRAINED RESTORATION SPECIALISTS</i></h4>
  				<p>When you are dealing with water damage, immediate action is crucial. OSPREY franchise professionals respond immediately and use advanced equipment and techniques to remove the water quickly. </p>
  				<p>
   				<a class="btn btn-warning btn-lg" href="#" role="button">DISCOVER MORE</a>
   			
				  </p>
				</div>
			</div>
<!--END Jumbotron-->		  

<!--Register Form-->
			<div class="col-md-5 margin-top-50">
				<!--START PHP Success Message-->
				<?php if($greeting != ''): ?>
				<div class="alert alert-success"><?php echo $greeting;?></div>
				<?php endif; ?>
				<!--END PHP Message-->

				<!--START PHP Error Message-->
				<?php if($warning != ''): ?>
				<div class="alert alert-danger"><?php echo $warning;?></div>
				<?php endif; ?>
				<!--END PHP Error Message-->

				<form method="POST" action="" class="needs-validation customForm" novalidate>
					<div class="form-row">
						<div class="form-group col-lg-12">
							<h5>SIGN UP TO FIND OUT MORE!</h5>
						</div>
						<div class="form-group col-lg-12">
							<input type="text" name="username" class="form-control" placeholder="User Name*" value="" required>
							<?php if(!empty($username_error)){?>
							<p><?php echo $username_error?></p>
							<?php } ?>
						</div>
						<div class="form-group col-lg-12">
							<input type="password" name="password" class="form-control" placeholder="Password*" value="" required>
							<?php if(!empty($password_error)){?>
							<p><?php echo $password_error?></p>
							<?php } ?>
						</div>
						<div class="form-group col-lg-12">
							<input type="email" name="email" class="form-control" placeholder="email*" value="" required>
							<?php if(!empty($email_error)){?>
							<p><?php echo $email_error?></p>
							<?php } ?>
						</div>
						<div class="form-group col-lg-12">
							<input type="number" name="phone" class="form-control" placeholder="Phone Number*" value="" required>
							<?php if(!empty($phone_error)){?>
							<p><?php echo $phone_error?></p>
							<?php } ?>
						</div>
			
						<!--START Prevent spam, automated submission Field-->
						<div class="form-group col-lg-12">
							<input class="preventSpam" type="text" name="preventSpam" class="form-control" placeholder="preventSpam">
						</div>
						<!--END Prevent spam, automated submission Field-->
						<div class="form-group col-lg-12">
							<p>We will never spam you, or sell your email to third parties.</p>
						</div>
						<div class="form-group col-lg-12">
							<button type="submit" name="submit" class="btn btn-warning">Register Now</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
<!--END Jumbotron-->

<!--START Section 1-->
<div class="section_1" id="about">
<div class="container">
	<div class="row">
		<div class="col-md-6 d-flex justify-content-center">
			<img src="img/Hotel5-2.jpg" width="85%">
		</div>
		<div class="col-md-6">
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Provide 24/7 Emergency Service
							</button>
						</h2>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Highly Trained Water Restoration Specialists
							</button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Faster to Any Size Disaster
							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								FREE PREMIUM SUPPORT
							</button>
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--END Section 1-->
<div class="container">
	<div class="row">
		<div class="col-md-12 d-flex justify-content-center">
		<img src="img/image2.png" class="img-fluid" alt="Responsive image" width="70%">
		</div>
	</div>
</div>

<!--START Section 2-->
<div class="section_2 margin-top-10">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h6>A Trusted Leader in the Restoration Industry</h6>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		</div>
		<div class="col-md-6">
			<h6>Preferred Vendor for Many National</h6>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h6>Provide 24/7 Emergency Service</h6>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		</div>
		<div class="col-md-6">
			<h6>Faster to Any Size Disaster</h6>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 align-center margin-top-10">
			<button type="submit" name="submit" class="btn btn-warning">DISCOVER MORE</button>
		</div>
		<div class="col-md-6 align-center margin-top-10">
			<button type="submit" name="submit" class="btn btn-warning">DISCOVER MORE</button>
		</div>
	</div>
</div>
</div>
<!--END Section 2-->

<!--START Section 3-->
<div class="section_3 margin-top-50" id="team">
<div class="container">
	<div class="row">
		<div class="col-md-12 align-center">
			<h4>OUR TEAM</h4>
			<h2>BEHIND THE SCENES</h2>
			<hr width="20%" color="#FFD700">
		</div>
	</div>
	<div class="row margin-top-50" id="users">
	</div>
</div>
</div>
		<script>
			function loadUser(){
	  		var request = new XMLHttpRequest();
    		request.open('GET', 'https://api.github.com/users', true);

   			request.onload = function(){
        		if(this.status == 200){
            		var users = JSON.parse(this.responseText);
					var output = '';
					for(var i=0; i<=7; i++){
						output += 
						'<div class="col-md-3 col-sm-6 align-center">'
						+'<img src="'+users[i].avatar_url+'"class="img-fluid" alt="Responsive image" width="70%" style="border-radius:50%">'
						+'<h6 class="margin-top-10"><strong>'+users[i].login+'</strong></h6>'
						+'<h6 class="color-yellow">Staff</h6>'
						+'<p>quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor</p>'
						+'</div>';
					}
					document.getElementById('users').innerHTML = output;
        		}
			}
				request.send();
			}
			loadUser();
		</script>
<!--END Section 3-->

<!--START Section 4-->
<div class="section_4 margin-top-50" id="blog">
<div class="container">
	<div class="row">
		<div class="col-md-12 align-center">
			<h4>FROM THE BLOG</h4>
			<h2>CHECK OUT LATEST NEWS</h2>
			<hr width="20%" color="#FFD700">
		</div>
	</div>
	<div class="row margin-top-50" id="posts">
	</div>
</div>
</div>
	<script>
			function loadPost(){
				
	  		var request = new XMLHttpRequest();
    		request.open('GET', 'http://api.mediastack.com/v1/news?access_key=fdb4317f069dcba7d275d99e86d58e7d&keywords=water%20damage&countries=us', true);

   			request.onload = function(){
        		if(this.status == 200){
					
					var posts = JSON.parse(this.responseText);
					console.log(posts);
					var output = '';
					for(var i=0; i<=2; i++){
					output += 
						'<div class="col-md-4 col-xs-12 align-left">'
						+'<img src="'+posts.data[i].image+'" class="img-fluid" alt="Responsive image" width="85%">'
						+'<h6 class="margin-top-10">'+posts.data[i].title+'</h6>'
						+'<p class="textFont-14 margin-top-10">'+posts.data[i].description+'</p>'
						+'<div class="margin-top-10">'
						+'<button type="submit" name="submit" class="btn btn-warning"><a href="'+posts.data[i].url+'" target="_blank">READ MORE>></a></button>'
						+'</div>'
						+'</div>';
					}
					document.getElementById('posts').innerHTML = output;
        		}
			}
				request.send();
			}
			loadPost();
		</script>
<!--END Section 4-->

<!--START Footer -->
<footer class="page-footer font-small pt-5 margin-top-50">
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
      	<h5>SUBSCRIBE TO OUR NEWS LETTER</h5>
		<p>Be amongst first to know about news and upcoming features</p>
       <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-warning my-0" type="button">SUBSCRIBE</button>
          </div>
        </form>
      </li>    
   </ul>
</footer>
<!--END Footer -->
  </body>
</html>