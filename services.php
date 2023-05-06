<?php
    include('partials/header.php');
  ?>
  	<!--service section start -->
    <div class="service_section layout_padding margin_0">
        <div class="container">
            <h1 class="about_text">services</h1>
            <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq</p>
            <div class="service_section_2">
                <div class="row">
                     <?php
                  
                    $portfolio = $Portfolio->get_portfolio();
                     //print_r($portfolio);
                     for ($i=0;$i<count($portfolio);$i++){
                        echo '<div class="col-sm-12 col-lg-4">';
                        echo '<div class="icon_1"><img src="'.$portfolio[$i]->image.'"></div>';
                        echo '<h1 class="website_text">'.$portfolio[$i]->name.'</h1>';
                        echo '<p class="dolor_text">'.$portfolio[$i]->Text.'</p>';
                        echo "</div>";
                     }
                     /*for($i=0;$i<=8;$i++){
                        echo "lebo";
                     }*/
                     ?>
                
                </div>
            </div>
        </div>
    </div>
    <!--service section end -->
	<?php
    include('partials/footer.php');
  ?>
</html>