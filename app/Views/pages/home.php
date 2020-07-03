<?php require HEADER ?>

<?php $session = \Config\Services::session() ?>
<?php if (isset($session->success)): ?>
    <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
        <?= $session->success ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<section>
	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">CI-4 Blog</h1>
			<p class="lead">A Blog made with CodeIgniter.</p>
			<hr class="my-4">
			<p>Incididunt in ea non mollit do excepteur officia sint dolore.</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>	
		</div>
		
	</div>	
</section>

<section class="blog-section">
    <div class="container">
        <?php if ($posts): ?>
            <?php foreach ($posts as $post): ?>
                <h3><a href="/blog/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h3>
            <?php endforeach ?>
        <?php else: ?>
            <p class="text-center">No posts found.</p>
        <?php endif ?>            
    </div>
</section>

<?php require FOOTER ?>
