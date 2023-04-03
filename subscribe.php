<?php

    session_start();
    require_once ('vendor/autoload.php');
    include 'db.php';
    
    
    \Stripe\Stripe::setApiKey('your_stripe_secret_key');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $token = $_POST['stripeToken'];
        $email = $_SESSION['email'];
        
        try {
            $customer = \Stripe\Customer::create([
                'email' => $email,
                'source' => $token,
            ]);
    
            $subscription = \Stripe\Subscription::create([
                'customer' => $customer->id,
                'items' => [['plan' => 'your_plan_id']],
        ]);

        $user_id = $_SESSION["id"];
        $stripe_customer_id = $customer->id;
        $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
        $address = mysqli_real_escape_string($conn, $_POST["address"]);

        $sql = "INSERT INTO payments (user_id, stripe_customer_id, subscription_id, full_name, address) VALUES ($user_id, '$stripe_customer_id', '{$subscription->id}', '$full_name', '$address')";


        $sql = "UPDATE users SET stripe_customer_id='$stripe_customer_id' WHERE id=$user_id";

        if (mysqli_query($conn, $sql)) {
            header("Location: profile.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } catch (\Stripe\Error\Card $e) {
        $error = $e->getMessage();
    } catch (\Stripe\Error\RateLimit $e) {
        $error = $e->getMessage();
    } catch (\Stripe\Error\InvalidRequest $e) {
        $error = $e->getMessage();
    } catch (\Stripe\Error\Authentication $e) {
        $error = $e->getMessage();
    } catch (\Stripe\Error\ApiConnection $e) {
        $error = $e->getMessage();
    } catch (\Stripe\Error\Base $e) {
        $error = $e->getMessage();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->


<!-- Add the following code where the subscription form should appear -->
<form action="subscribe.php" method="POST" id="payment-form">
    <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>

    <button>Subscribe</button>
</form>






<!-- Footer below, should remain the same for all webpages and should be copied over -->

<?php 

include_once 'footer.php'

?>





</body>



</html>