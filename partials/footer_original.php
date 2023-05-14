	<!--footer section start -->
	<div class="footer_section layout_padding">
		<div class="container">
			<div class="footer_main">
				<div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">subscribe Now</span>
                    </div>
                </div>
                <h1 class="year_text">2020</h1>
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