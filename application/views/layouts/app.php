<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title><?= isset($title) ? $title: 'MyShopJawa'?></title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">
	<!-- Bootstrap core CSS -->
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

		<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/fontawesome/css/all.min.css">
		<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css">
</head>
<body>
			<!-- navbar -->
			<?php $this->load->view('layouts/_navbar');   ?>
			<!-- end navbar -->

			
			<!-- content -->
			<?php $this->load->view($page);?>
			<!-- end content -->

			<script src="<?php echo base_url() ?>assets/libs/jquery/jquery-3.4.1.min.js" ></script>
			<script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/app.js"></script>
	</body>
</html>
