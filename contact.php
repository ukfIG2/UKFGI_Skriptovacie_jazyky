<?php
    include('partials/header.php');
  ?>
  	<!--contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="contact_text">Requeste a call back</h1>
                    <div class="contact_main">
                        <form class="mail_section" action="include/Kontakt/insert.php" method="post">
                            <input type="text" class="mail_text" placeholder="Surname and Name" name="contact_name">
                            <input type="email" class="mail_text" placeholder="Email" name="contact_email" required>
                            <input type="text" class="mail_text" placeholder="Phone" name="contact_phone">
                            
                            <label for="co"></label> <!--Musi tam byt label, inak to nepojde-->
                            <select id="co" name="contact_element">
                              <option value="-1">Select elements</option>
                              <option value="saab">One</option>
                              <option value="opel">Two</option>
                              <option value="audi">Three</option>
                            </select>
                            
                            <textarea class="massage_text" placeholder="Massage" rows="5" id="comment" name="contact_message"></textarea>
                             <input type="checkbox" required><label for=""> Súhlasím so spracovaním osobných údajov.</label><br>
                             <input type="submit" class="send_bt" value="Odoslať" name="contact_us">
                            
</form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_bg"><img src="images/contact-bg.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!--contact section end -->
	<?php
    include('partials/footer.php');
  ?>
</html>