<?php require HEADER ?>

<section>
    <div class="container">
        <article>
            <h1><?= $post['title'] ?></h1>
            <div class="details">
                Posted on: <?= date('D d-M-Y \a\t H:i', strtotime($post['created_at'])) ?> by <i>Me</i>
            </div>
            <br>
            <p><?= $post['body'] ?></p>
        </article>
    </div>
</section>

<?php require FOOTER ?>