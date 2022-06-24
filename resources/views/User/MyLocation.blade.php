<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", inntal scale=1.0">
	<title>My donation</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/32d1afc9f7.js" crossorigin="anonymous"></script>


</head>
<body>
	<div class ="header"> 
	<div class="container">
		<div class="navbar">
		        <a href="index.html"><img src="logoo.jpg"></a>

			        <ul id="menuItems">
					<li><a href="{{url('home')}}"><i class="fa-solid fa-house-user"></i><b>Home</b></a></li>
			        	  <li><a href="{{url('Aboutus')}}"><i class="fa-solid fa-user"></i><b>About us</b></a></li>
			        	   <li><a href="{{url('Contact')}}"><i class="fa-solid fa-location-pin"></i><b>My Location</b></a></li>
			        	    <li><a href="{{url('Donation')}}"><i class="fa-solid fa-box-dollar"></i><b>My Donation</b></a></li>
							<li>
			        	    @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                
            @endif
           </li>
			        	    
			        </ul>
		        <img src="navigation.jpg" class="menu-icon" onclick="menutoggle()">
            </div>
    </div>



<!------------location form-------->
<section class="mylocation">
	<div class="contact">
		
  
<h1> google map</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7131.593297595222!2d87.68548162128396!3d26.65499257160554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39e58e22e6fd0d93%3A0xf4a2f3e1d0667061!2sMM5Q%2B4J8%20Damak%20Electricity%20Authority%20Office%2C%20Damak%2057217%2C%20Nepal!3m2!1d26.6577883!2d87.6890889!4m5!1s0x39e58f88c23b625f%3A0x9d9448457bd81303!2sShiva%20Mandir%2C%20MM2R%2BW49%2C%20Damak%208!3m2!1d26.6523!2d87.6903722!5e0!3m2!1sen!2snp!4v1654687552822!5m2!1sen!2snp" width="1100" height="400" style="border: 60px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>







	</div>
	<div class="contactus">
		<h2> Contact Info</h2>
		<h2><i class="fa-solid fa-phone"></i>Phone</h2>
		<p><b> 023-582607</b></p>
		<h2><i class="fa-solid fa-location-dot"></i>Address</h2>
		<p><b>damak-01,Jhapa nepal</b></p>
		<h2><i class="fa-solid fa-envelope"></i>Email</h2>
		<p><b>waste.foodmanagmentSystem@gmail.com</b></p>
	</div>



	<div class="contact-form">
		<form action="{{url('submitContact')}}" method="POST">
			@csrf
			<h1> contact form</h1>
    		<div class="input-group5">
    			<input type="" name="name" id="name" required>
    			<label for="name"><i class="fa-solid fa-user"></i>Full Name</label>

    		</div>
    		<div class="input-group5">
    			<input type="" name="address" id="address" required>
    			<label for="address"><i class="fa-solid fa-location-pin"></i> Address</label>
    			
    		</div>
    		<div class="input-group5">
    			<input type="email" name="email" id="email" required>
    			<label for="email"><i class="fa-solid fa-envelope"></i> Email</label>

    			
    		</div>
    			<div class="input-group5">
    			<input type="phone" name="phone" id="phone" required>
    			<label for="phone number"><i class="fa-solid fa-envelope"></i>Phone Number</label>


    			
    		</div>
    		<div class="input-group">
    			<textarea id="message" name="message" rows="3" required></textarea>
    			<label for="message"><i class="fa-regular fa-comments"></i>Message</label>
    			
    		</div>
    		<div class="row11">
    			<button type="Submit"><i class="fa-solid fa-hands-holding-heart"></i>Send</button>
    		<button type="cancel"><i class="fa-solid fa-ban"></i>Cancel</button>
    			
    		</div>
			</div>
</section>
   


















<!------------footer--------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download our app</h3>
				<p>download our app for anroid and IOS</p>
				
			</div>
			<div class="footer-col-2">
				<img src="logoo.jpg" width="250px">
				<p> our main motive is to kill the hunger of orphanage through donation.</p>	
			</div>
			<div class="footer-col-3">
				<h3>links</h3>
				<ul>
					<li>reutrns ploicy</li>
					<li>join affilate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>our social media</h3>
				<ul>
					<li><i class="fa-brands fa-facebook"></i>facebook</li>
					<li><i class="fa-brands fa-twitter-square"></i>twitter</li>
					<li><i class="fa-brands fa-instagram-square"></i>instagram</li>
					<li><i class="fa-brands fa-youtube"></i>youtube</li>
				</ul>
				
			</div>

		</div>
		<hr>
		<p class="copyright"> @@Copyright 2022 - food waste managment system</p>
	</div>
</div>
<!-------js for toggle menu---->
<script>
	var menuItems = document.getElementById("menuItems");
	menuItems.style.maxHeight ="0px";
	function menutoggle(){
		if(menuItems.style.maxHeight=="0px")
		{
			menuItems.style.maxHeight ="200px";
		}
		else{
			menuItems.style.maxHeight ="0px";
		}
	}
	
</script>

</body>
</html>
	
