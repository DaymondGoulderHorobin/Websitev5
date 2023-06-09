<?php

    include_once 'header.php'

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->


<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdRepeat" placeholder="Repeat password">
        <button type="submit" name="submit">Sign Up</button>
    </form> 
    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email</p>";
        }  
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Fill in all fields</p>";
        }  
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Fill in all fields</p>";
        }  
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again</p>";
        }  
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>username or email has been taken</p>";
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