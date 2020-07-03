<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CI-Blog</title>
	<link rel="icon" href="<?=base_url()?>/icon/favicon.ico" type="image/gif">
	<link rel="stylesheet" href="<?=base_url()?>/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="/">CI4 Blog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
                    <li class="nav-item">
					   <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                    </li>
				</ul>
                <ul class="navbar-nav">
                    <li><a href="/blog/create" class="btn btn-outline-success">Create Post</a></li>
                </ul>
			</div>
		</div>
	</nav>