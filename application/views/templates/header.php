<html>

<head>
	<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
	<title>CodeIgniter Blog</title>
</head>
<body>

	<nav class="navbar navbar-dark bg-primary">
		<div class="container">

			<div class="navbar-header">
				<a href="<?php echo base_url() ?>" class="navbar-brand">ciBlog</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar">
					<li class="nav-item"><a class="nav-link active" href="<?php echo base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?php echo base_url() ?>about">About</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?php echo base_url() ?>favourites">Favourites</a></li>


					<?php if ($this->ion_auth->logged_in()) : ?>
						<li class="nav-item"><a class="nav-link active" href="<?php echo base_url() ?>favourites/create">Add</a></li>
						<li class="nav-item"><a class="btn btn-outline-danger" href="<?php echo base_url() ?>logout">Logout</a></li>
					<?php endif; ?>

					<?php if (!$this->ion_auth->logged_in()) : ?>
						<li class="nav-item"><a class="btn btn-outline-light" href="<?php echo base_url() ?>login">Login</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

<div class="container">
