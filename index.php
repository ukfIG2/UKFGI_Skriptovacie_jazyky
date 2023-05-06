<?php
    include('partials/header.php');
  ?>
	<!--banner section start -->
	<div class="banner_section layout_padding">
		<div class="container">
			<h1 class="banner_taital">Web eLements Templates</h1>
			<h2 class="free_text">Free Multipurpose Responsive 
            Landing Page </h2>
            <div class="read_bt">
            	<div class="read_text"><a href="#">Read More</a></div>
            </div>
		</div>
	</div>
	<!--banner section end -->
	<!--bg_main section start -->
	<div class="container">
		<div class="bg_main"><img src="images/bg-main.png"></div>
	</div>
	<!--bg_main section end -->
	<!--about section start -->
	<div class="about_section">
		<div class="container">
			<h1 class="about_text">about web elements</h1>
			<p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
			<div class="about_bg"><img src="images/about-bg.png"></div>
			<p class="lorem_text">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
			<div class="read_bt_main">
            	<div class="read_text_2"><a href="#">Read More</a></div>
            </div>
		</div>
	</div>
	<!--about section end -->
	<!--service section start -->

	<?php
		include('partials/portfolio.php');
	?>

	<!--service section end -->
	<!--contact section start -->
	<div class="contact_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="contact_text">Requeste a call back</h1>
					<div class="contact_main">
    			        <div class="mail_section">
    			        	<input type="Name" class="mail_text" placeholder="Name" name="Name">
    			        	<input type="Name" class="mail_text" placeholder="Email" name="Email">
    			        	<input type="Name" class="mail_text" placeholder="Phone" name="Phone">
    			        	<select>
                              <option value="volvo">Select elements</option>
                              <option value="saab">One</option>
                              <option value="opel">Two</option>
                              <option value="audi">Three</option>
                            </select>
    			        	<textarea class="massage_text" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
    			        	<div class="send_bt">
				                <div class="send_text"><a href="#">SEND</a></div>
			                </div>
    			        </div>
    		        </div>
				</div>
				<div class="col-md-6">
					<div class="contact_bg"><img src="images/contact-bg.png"></div>
				</div>
			</div>
		</div>
	</div>
	<!--contact section end -->
	<!--client section start -->
	<div class="client_section layout_padding">
		<div class="container">
			<h1 class="about_text">what is say clients</h1>
			<p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq</p>
			<div class="client_section_2 layout_padding">
				<h1 class="client_text">Consectetur adipiscing </h1>
			    <p class="ipsum_text_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                <div class="icon_4"><img src="images/icon-4.png"></div>
			</div>
		</div>
	</div>
	<!--client section end -->
	<?php
    include('partials/footer.php');
  ?>
</html>