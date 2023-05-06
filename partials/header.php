<?php
  include("include/config.php")
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include('partials/head.php');
  ?>
<body>
<header>
	<!--header section start -->
	<div class="header_section">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                  <?php
                    print_menu($Header_menu);
                  ?> 
                  </ul>
                </div>
            </nav>
		</div>
	</div>
</header>
	<!--header section end -->