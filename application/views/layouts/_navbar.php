<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('/Home')?>">MYShopJawa</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">Maneg</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a href="admin-category.html" class="dropdown-item"> Kategori</a>
						<a href="admin-product.html" class="dropdown-item">Produk</a>
						<a href="admin-order.html" class="dropdown-item"> Order</a>
						<a href="admin-users.html" class="dropdown-item">Pengguna</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="cart.html" class="nav-link"> <i class="fas fa-shopping-cart"></i> Cart(0)</a>
				</li>
				<?php if(!$this->session->userdata('is_login')) :?>
				<li class="nav-item">
					<a href="<?= base_url('/Login')?>" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('/register')?>" class="nav-link">register</a>
				</li>
				<?php else:?>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false"><?= $this->session->userdata('name')?></a>
					<div class="dropdown-menu" aria-labelledby="dropdown-2">
						<a href="profile.html" class="dropdown-item"> Profile</a>
						<a href="orders.html" class="dropdown-item">Orders</a>
						<a href="<?= base_url('/logout')?>" class="dropdown-item">Logout</a>
					</div>
				</li>
			</ul>
			<?php endif?>
		</div>
	</div>
</nav>
