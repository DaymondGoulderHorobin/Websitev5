<?php

    include_once 'header.php'

?>

<!-- Header above, should remain the same for all webpages and should be copied over -->



<main class="container mt-4">
        <div class="row">
        <div class="col-md-8">
            <article class="mb-4" id="post-1">
                <h2 class="mb-3">Blog Post Title 1</h2>
                <p class="text-muted">Published on March 30, 2023</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod velit, facere provident molestias repellendus quia officiis nihil soluta non cumque?</p>
                <p id="hidden-content-1" class="d-none">Here's the hidden content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ipsum dicta. Quisquam excepturi distinctio voluptates, maiores amet aspernatur reiciendis officiis.</p>
                    <a href="#" id="read-more-1" class="btn btn-primary read-more" data-show="false">Read More</a>
                </article>

            
            <article class="mb-4" id="post-2">
                <h2 class="mb-3">Blog Post Title 2</h2>
                <p class="text-muted">Published on March 30, 2023</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod velit, facere provident molestias repellendus quia officiis nihil soluta non cumque?</p>
                <p id="hidden-content-2" class="d-none">Here's the hidden content for the second article. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ipsum dicta. Quisquam excepturi distinctio voluptates, maiores amet aspernatur reiciendis officiis.</p>
                    <a href="#" id="read-more-2" class="btn btn-primary read-more" data-show="false">Read More</a>
                </article>

                <article class="mb-4" id="post-3">
                <h2 class="mb-3">Blog Post Title 2</h2>
                <p class="text-muted">Published on March 30, 2023</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod velit, facere provident molestias repellendus quia officiis nihil soluta non cumque?</p>
                <p id="hidden-content-3" class="d-none">Here's the hidden content for the second article. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ipsum dicta. Quisquam excepturi distinctio voluptates, maiores amet aspernatur reiciendis officiis.</p>
                    <a href="#" id="read-more-3" class="btn btn-primary read-more" data-show="false">Read More</a>
                </article>
                <!-- Add more articles as needed -->

            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        Recent Posts
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#post-1">Blog Post Title 1</a></li>
                        <li class="list-group-item"><a href="#post-2">Blog Post Title 2</a></li>
                        <li class="list-group-item"><a href="#post-3">Blog Post Title 3</a></li>
                    </ul>
                </div>

                <!-- Add more sidebar content as needed -->

            </div>
        </div>


        
   


<!-- Footer below, should remain the same for all webpages and should be copied over -->

<?php

    include_once 'footer.php'

?>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreLinks = document.querySelectorAll('.read-more');

            readMoreLinks.forEach(function(readMoreLink) {
                readMoreLink.addEventListener('click', function(event) {
                    event.preventDefault();

                    const hiddenContentId = readMoreLink.getAttribute('id').replace('read-more', 'hidden-content');
                    const hiddenContent = document.getElementById(hiddenContentId);

                    const showContent = readMoreLink.getAttribute('data-show') === 'true';
                    if (showContent) {
                        hiddenContent.classList.add('d-none');
                        readMoreLink.textContent = 'Read More';
                        readMoreLink.setAttribute('data-show', 'false');
                    } else {
                        hiddenContent.classList.remove('d-none');
                        readMoreLink.textContent = 'Read Less';
                        readMoreLink.setAttribute('data-show', 'true');
                    }
                });
            });
        });
    </script>



</body>



</html>