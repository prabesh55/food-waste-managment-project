<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", inntal scale=1.0">
	<title>food waste managment system</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/32d1afc9f7.js" crossorigin="anonymous"></script>


</head>
<body>
	<div class ="header">
		<div class="container">
			<div class="navbar">
				<a href="index.html"><img src="logoo.jpg"></a>
				   
		        <form action="{{url('/search')}}" method= "get">
				@csrf
				<input type="text" name="search" style="color:blue;">
		        	<input type="submit" value="search" class="btn btn-sucess">
		        	
		        </form>


			        <ul id="menuItems">
			 

			        	 <li><a href="{{url('home')}}"><i class="fa-solid fa-house-user"></i><b>Home</b></a></li>
			        	  <li><a href="{{url('Aboutus')}}"><i class="fa-solid fa-user"></i><b>About us</b></a></li>
			        	   <li><a href="{{url('MyLocations')}}"><i class="fa-solid fa-location-pin"></i><b>My Location</b></a></li>
			        	    <li><a href="{{url('Donation')}}"><i class="fa-solid fa-box-dollar"></i><b>My Donation</b></a></li>
                            <li>
			        	    @if (Route::has('login'))
                    @auth
					<x-app-layout>
    
	                </x-app-layout>
                    @else
                        <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                
            @endif
           </li>
			        	    
			       
		        <img src="navigation.jpg" class="menu-icon" onclick="menutoggle()">
		    </ul>
            </div>
    <div class="row">
    	<div class="col-2">
    		<h1>Donate for better life<br>Feed hungry</h1>
    		<p>Donation is the service of mankind<br>Donation is  not option its a choice a greatness of humanity</p>
    		<a href="My Donation.html" class="btn">Donate now &#8594;</a>
    	</div>
    	<div class="col-2">
    		<img src="food1.jpg">

    	</div>
    </div>
</div>


<!--------- our services------>
<section class ="services">
	<h1>our services gallary</h1>
	<p>  donation services are being offer by us as well as packge donation services</p>

	<div class="row -15">
		<div class="service-col">
		<img src="food5.jpg">
		<div class="layer">
			<h3>  nutrioning child</h3>
		</div>
	</div>
	<div class="service-col">
		<img src="food6.jpg">
		<div class="layer">
			<h3> nutrioning child</h3>
		</div>
	</div>
	<div class="service-col">
		<img src="food8.jpg">
		<div class="layer">
			<h3> nutration to adults</h3>
		</div>
	</div>



	
</section>



<!-------Our ------>
<section  class="aboutUs">
	<h1> About us</h1>
	<p> choose us is the best choices of yours</p>
	<div class="row12">
		<div class="about-col">
			<h3> vision</h3>
			<p> our vission   is to kill the hunger and save the humanity</p>

	</div>
	<div class="about-col">
			<h3> mission</h3>
			<p>The mission of the Capital Area Food Bank is to help our neighbors thrive by creating more equitable access to food and opportunity through community partnerships. </p>

	</div>
	<div class="about-col">
			<h3> values</h3>
			<p> We believe that access to nutritious food is a basic human right. We are committed to responding to the needs of our community through food distribution and support services.</p>

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

</div>

</body>
</html>
	

