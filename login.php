<?php

include_once 'header.php';
    
if (isset($_GET['msg']) && $_GET['msg'] === 'login_required') {
    echo "<p>Please log in to access this page.</p>";
  }
?>

<!-- Header above, should remain the same for all webpages and should be copied over -->


<section class="signup-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/email">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Log In</button>
    </form>
    
    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>wrong username/email or password</p>";
        }  
       
        else if ($_GET["error"] == "none") {
            echo "<p>You have successfully signed up</p>";
        }    
        
    }
?>
</section>





<!-- Footer below, should remain the same for all webpages and should be copied over -->



<?php 

include_once 'footer.php'

?>




</body>



</html>