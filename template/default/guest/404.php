<?php
$page_title = "Error 404";
 include 'includes/header.php';?>


		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">ERROR 404</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="<?=domain;?>" title="">Home</a></li>
								<li class="dot">/</li>
								<li>Error 404</li>
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		</div><!-- /.page-title -->

		<section class="error-404 not-found">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-error center">
							<header class="page-header">
								<h1 class="title-404 nothing">404</h1>							
								<div class="sub-title-404">
									<p>Oops! This Page is Not Found</p>
									<p>Please go back to <a href="<?=domain;?>" title=""><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Home</a> and try to find out once </p>
								</div><!-- .SUB-title-404 -->
							</header><!-- .page-header -->


							<!-- /.form-search-error -->
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.error-404 -->	
<?php include 'includes/footer.php';?>

