<?php
   require 'header.php';
?>
    <main>
    	<div><section>
       <h2>Sign Up</h2>

       <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "emptyfields") {
                 echo '<p>Fill in all fields !</p>';
              }
                elseif ($_GET['error'] == "invaliduidmail") {
                 echo '<p>Fill in all fields !</p>';
              }

            }

       ?>

  <form  action="includes/signup.inc.php" method="POST">
  <input type="text" name="uid" placeholder="User name"><br><br>
  <input type="text" name="mail" placeholder="Email"><br><br>
  <input type="Password" name="pwd" placeholder="Password"><br><br>
  <input type="Password" name="pwd-repeat" placeholder="Repeat Password"><br><br>
  <button type="sumbit" name="signup-sumbit">SignUp</button>

</form>

      </section>
    		</div>
    </main>

<?php
   require 'footer.php';
?>