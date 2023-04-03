<?php

    include_once 'header.php';

    if(isset($_POST['submit'])){
        $to = "goulderh@protonmail.ch";
        $subject = "New form submission";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $headers = "From: ".$name." <".$email.">\r\n";
        $headers .= "Reply-To: ".$email."\r\n";
        $headers .= "Content-type: text/html\r\n";
    
        $body = "<h2>New Form Submission</h2>
                 <p><strong>Name:</strong> ".$name."</p>
                 <p><strong>Email:</strong> ".$email."</p>
                 <p><strong>Phone:</strong> ".$phone."</p>
                 <p><strong>Message:</strong> ".$message."</p>";
    
        if(mail($to, $subject, $body, $headers)){
            echo "Thank you for contacting us, we will get back to you shortly.";
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
    

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->



<div class="form-container">
    <form id="contactForm" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="123-456-7890" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- Footer below, should remain the same for all webpages and should be copied over -->

<footer>
<?php 

include_once 'footer.php'

?>
</footer>






</body>



</html>