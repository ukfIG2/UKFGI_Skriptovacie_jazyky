	<!--footer section start -->
	<div class="footer_section layout_padding">
		<div class="container">
			<div class="footer_main">
				<form class="input-group mb-3" action="include/Subscribers/insert.php" method="post">
                    <input type="email" class="form-control" placeholder="Enter your email" name="Email">
                    <input type="submit" class="input-group-append" value="Odoslať" name="subscribe_us">
				</form>
                <h1 class="year_text">2023</h1>
                <h1 class="landing_text">Free Multipurpose Responsive  Landing Page </h1>
			</div>
			<div class="social_icon">
				<ul>
					<?php
						
						$social = $Social->get_social();
						
						for ($i=0;$i<count($social);$i++){
							echo '<li><a href="'.$social[$i]->url.'"><img src="'.$social[$i]->image.'"></a></li>';
						}
					?>
					<!--<li><a href="#"><img src="images/fb-icon.png"></a></li>
					<li><a href="#"><img src="images/twitter-icon.png"></a></li>
					<li><a href="#"><img src="images/linkdin-icon.png"></a></li>
					<li><a href="#"><img src="images/instagram-icon.png"></a></li>
					<li><a href="#"><img src="images/youtub-icon.png"></a></li>-->
				</ul>
			</div>
		</div>
	</div>
	<!--footer section end -->
    <?php
    include('partials/copyright.php');
  ?>
	
    <?php
    include('partials/javascript.php');
  ?>

</body>