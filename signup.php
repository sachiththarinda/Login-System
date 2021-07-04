<?php
   require "header.php";
   
?>


    <main>
    	<div class="signin"><section>
       <h2>Sign Up</h2>

       <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "emptyfields") {
                 echo '<p>Fill in all fields !</p>';
              }
                elseif ($_GET['error'] == "invaliduidmail") {
                 echo '<p>Fill in all fields !</p>';
              }
              elseif ($_GET['error'] == "passwordcheckuid") {
                 echo '<p>Fill in all fields !</p>';
              }
               elseif ($_GET['error'] == "passwordcheckuid") {
                 echo '<p>Fill in all fields !</p>';
              }
               elseif ($_GET['error'] == "passwordcheckuid") {
                 echo '<p>Fill in all fields !</p>';
              }



            }

       ?>

  <form  class="" action="includes/signup.inc.php" method="POST">
  <input type="text" name="uid" placeholder="User name"><br><br>
  <input type="text" name="mail" placeholder="Email"><br><br>
  <input type="Password" name="pwd" placeholder="Password"><br><br>
  <input type="Password" name="pwd-repeat" placeholder="Repeat Password"><br><br>
 <button type="sumbit" name="signup-sumbit" style="border: none;
    width: 190px; background: white; color: #000; font-size: 16px;  line-height: 25px; padding: 10px 0; border-redius: 12px; cursor: pointer; ">Sign Up</button>
 <!--  <input type="button" name="signup-sumbit" value="SignUp">-->

</form>

      </section>
    		</div>
    </main>

<?php
   require 'footer.php';
?>