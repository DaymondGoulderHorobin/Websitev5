<?php

    include_once 'header.php';

    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->




 

  <div class="container">
        <h1 class="mt-5">User Profile</h1>
        <div id="userProfile"></div>
        <a href="fullmember.php" class="btn btn-primary mt-3">Become a Full Member</a>
        <a href="https://buy.stripe.com/5kA28V67TgsJ9fqaEE" class="btn btn-primary mt-3" id="stripeSubscriptionButton" style="display:none;">Subscribe with Stripe</a>
    </div>
</body>
</html>


<script src="https://js.stripe.com/v3/"></script>

<script>
   $.ajax({
        url: 'includes/profile.inc.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          console.log('AJAX request successful:', data); // Log the response data to the console
            let userProfileHtml = `
            <p><strong>ID:</strong> ${data.user_id}</p>
            <p><strong>Name:</strong> ${data.name}</p>
            <p><strong>Email:</strong> ${data.email}</p>
            <p><strong>Address:</strong> ${data.address}</p>
            <p><strong>Status:</strong> ${data.status}</p>
        `;
        $('#userProfile').html(userProfileHtml);

        if (data.status === 'full member') {
            $('#stripeSubscriptionButton').show();
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.error('AJAX request failed:', textStatus, errorThrown); // Log any errors to the console
    }
});
</script>


<!-- Footer below, should remain the same for all webpages and should be copied over -->

<?php

    include_once 'footer.php'

?>






</body>



</html>