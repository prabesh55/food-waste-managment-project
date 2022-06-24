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
			        	   <li><a href="{{url('MyLocations')}}"><i class="fa-solid fa-location-pin"></i><b>My Location</b></a></li>
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



<!------------donation form-------->
    <section class="donationcart">
    	<div class="myform">
    	<h3> My Donation form </h3>
    </div>
    	<form  action="{{url('submitDonation')}}" method="POST">
			@csrf
    		<div class="input-group">
    			<input type="" name="name" id="name" required>
    			<label for="name"><i class="fa-solid fa-user"></i> Your Name</label>

    		</div>
    		<div class="input-group">
    			<input type="" name="address" id="address" required>
    			<label for="address"><i class="fa-solid fa-location-pin"></i> Address</label>
    			
    		</div>
    		<div class="input-group">
    			<input type="email" name="email" id="email" required>
    			<label for="phone number"><i class="fa-solid fa-envelope"></i> Email</label>

    			
    		</div>
    		<div class="input-group">
    			<input type="Food Name" name="foodname" id=" Food name" required>
    			<label for="Food name"><i class="fa-solid fa-pot-food"></i> Food name</label>
    			
    		</div>
    		
    		<div class="input-group">
    			<input type="cooked time" name="cookedtime" id="Cooked time" required>
    			<label for=""><i class="fa-regular fa-clock"></i> Cooked Time</label>
    			
    		</div>
		<div class="input-group">
    	
		<label for=""> Food Category</label><br><br>
			
		<select name="catogary">
			<option value="vegeterian" >vegeterian</option>
			<option value="non-vegeterian" >non-vegeterian</option>
			<option value="vegan" >vegan</option>
		</select>
</div>
	
			
    		<div class="input-group">
    			<input type="quantity" name="quantity" id="quantity" required>
    			<label for=""><i class="fa-solid fa-scale-balanced"></i>Quantity</label>
    			
    		</div>
    		<div class="input-group">
    			<textarea id="message" name="message" rows="5" required></textarea>
    			<label for="message"><i class="fa-regular fa-comments"></i> Comment</label>
    			
    		</div>
    		<div class="row11">
    			<button type="Submit"><i class="fa-solid fa-hands-holding-heart"></i>Donate Now</button>
    		<button type="cancel"><i class="fa-solid fa-ban"></i>Cancel Donation</button>
    			
    		</div>

 

    	</form>
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
	

