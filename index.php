<?php

    include_once 'header.php'

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->







<body class="d-flex flex-column min-vh-100">
    <!-- Header content (e.g., navigation) comes from header.php -->


    <main>
        <!-- Hero Section -->
        <section class="jumbotron text-center">
            <h1 class="display-4">Welcome to The Aotearoa Party</h1>
            <p class="lead">Championing Freedom, Justice, and Prosperity for All</p>
            <a href="signup.php" class="btn btn-primary">Join Us</a>
        </section>

        <!-- Values Section -->
        <section class="container my-5">
            <h2 class="text-center mb-5">Our Core Values</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/freedom.jpg" class="card-img-top" alt="Freedom">
                        <div class="card-body">
                            <h5 class="card-title">Freedom</h5>
                            <p class="card-text">We believe in individual liberty and the protection of personal freedoms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/justice.jpg" class="card-img-top" alt="Justice">
                        <div class="card-body">
                            <h5 class="card-title">Justice</h5>
                            <p class="card-text">We stand for equality under the law and the fair treatment of all citizens.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/prosperity.jpg" class="card-img-top" alt="Prosperity">
                        <div class="card-body">
                            <h5 class="card-title">Prosperity</h5>
                            <p class="card-text">We promote economic growth and prosperity for all through free-market principles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="container my-5">
            <h2 class="text-center mb-5">Latest News</h2>
            <div class="row">
                <!-- Add news articles here -->
            </div>
            <div class="text-center">
                <a href="news.php" class="btn btn-secondary">View All News</a>
            </div>
        </section>

        <!-- Events Section -->
        <section class="container my-5">
            <h2 class="text-center mb-5">Upcoming Events</h2>
            <div class="row">
                <!-- Add events here -->
            </div>
            <div class="text-center">
                <a href="events.php" class="btn btn-secondary">View All Events</a>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2>Join the Movement</h2>
            <p class="lead">Become a part of The Aotearoa Party and help us make a difference in our nation.</p>
            <div class="row">
                <div class="col-md-6">
                    <a href="signup.php" class="btn btn-light">Sign Up</a>
                </div>
                <div class="col-md-6">
                    <a href="volunteer.php" class="btn btn-light">Volunteer for Us</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer below, should remain the same for all webpages and should be copied over -->

<?php

    include_once 'footer.php'

?>






</body>



</html>