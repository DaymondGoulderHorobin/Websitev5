<?php

    include_once 'header.php'

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->



<body class="d-flex flex-column min-vh-100">
    <!-- Header content (e.g., navigation) comes from header.php -->
   

    <main>
        <!-- Hero Section -->
        <section class="jumbotron text-center">
            <h1 class="display-4">Become a Volunteer</h1>
            <p class="lead">Join The Aotearoa Party and help us win the election!</p>
        </section>

        <!-- Volunteer Benefits Section -->
        <section class="container my-5">
            <h2 class="text-center mb-5">Why Volunteer With Us?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/community.jpg" class="card-img-top" alt="Community">
                        <div class="card-body">
                            <h5 class="card-title">Build Community</h5>
                            <p class="card-text">Connect with like-minded individuals and make lasting friendships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/skills.jpg" class="card-img-top" alt="Skills">
                        <div class="card-body">
                            <h5 class="card-title">Develop Skills</h5>
                            <p class="card-text">Gain valuable experience and develop new skills in a supportive environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/impact.jpg" class="card-img-top" alt="Impact">
                        <div class="card-body">
                            <h5 class="card-title">Make an Impact</h5>
                            <p class="card-text">Play an active role in shaping our nation's future by supporting the party's mission.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ways to Volunteer Section -->
        <section class="container my-5">
            <h2 class="text-center mb-5">Ways to Volunteer</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/door-knocking.jpg" class="img-fluid rounded-start" alt="Door Knocking">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Door Knocking</h5>
                                    <p class="card-text">Help spread the word about our party and its policies by engaging with the community door to door.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
<div class="col-md-4">
<img src="img/phone-banking.jpg" class="img-fluid rounded-start" alt="Phone Banking">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">Phone Banking</h5>
<p class="card-text">Connect with potential supporters through phone calls and discuss our party's initiatives.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
<img src="img/social-media.jpg" class="img-fluid rounded-start" alt="Social Media">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">Social Media</h5>
<p class="card-text">Promote our party's message and events on social media platforms to reach a wider audience.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
<img src="img/event-volunteer.jpg" class="img-fluid rounded-start" alt="Event Volunteer">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">Event Volunteer</h5>
<p class="card-text">Assist in organizing and hosting events that support our party's mission and engage the community.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Testimonial Section -->
<section class="container my-5">
        <h2 class="text-center mb-5">What Our Volunteers Say</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"Volunteering with The Aotearoa Party has been a great experience. I've made new friends and feel like I'm making a difference."</p>
                    <footer class="blockquote-footer">Jane, <cite title="Source Title">Auckland</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"I love being part of a team that shares the same values and is working to create a better future for our nation."</p>
                    <footer class="blockquote-footer">John, <cite title="Source Title">Wellington</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"The Aotearoa Party has given me the opportunity to develop new skills and contribute to positive change in our community."</p>
                    <footer class="blockquote-footer">Sarah, <cite title="Source Title">Christchurch</cite></footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Volunteer Sign-up Form Section -->
    <section class="container my-5">
        <h2 class="text-center mb-5">Sign Up to Volunteer</h2>
        <form action="volunteer_signup_process.php" method="post">
<div class="row">
<div class="col-md-6 mb-3">
<label for="firstName">First Name</label>
<input type="text" class="form-control" id="firstName" name="firstName" required>
</div>
<div class="col-md-6 mb-3">
<label for="lastName">Last Name</label>
<input type="text" class="form-control" id="lastName" name="lastName" required>
</div>
</div>
<div class="mb-3">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="mb-3">
<label for="phone">Phone</label>
<input type="text" class="form-control" id="phone" name="phone">
</div>
<div class="mb-3">
<label for="city">City</label>
<input type="text" class="form-control" id="city" name="city" required>
</div>
<div class="mb-3">
<label for="volunteerInterest">I am interested in:</label>
<select class="form-select" id="volunteerInterest" name="volunteerInterest" required>
<option selected>Choose...</option>
<option>Door Knocking</option>
<option>Phone Banking</option>
<option>Social Media</option>
<option>Event Volunteer</option>
</select>
</div>
<div class="mb-3">
<label for="comments">Additional Comments</label>
<textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
</div>
<div class="d-grid gap-2">
<button class="btn btn-primary" type="submit">Sign Up</button>
</div>
</form>
</section>
</main>



<!-- Footer below, should remain the same for all webpages and should be copied over -->

<?php 

include_once 'footer.php'

?>





</body>



</html>