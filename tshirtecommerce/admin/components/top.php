<!-- start: HEADER -->
<div class="navbar navbar-inverse">
	<!-- start: TOP NAVIGATION CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<!-- start: RESPONSIVE MENU TOGGLER -->
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="clip-list-2"></span>
			</button>
			<!-- end: RESPONSIVE MENU TOGGLER -->
			
			<!-- start: LOGO -->
			<a class="navbar-brand" href="<?php echo site_url();?>">
				<img src="<?php echo site_url('assets/images/logo.png'); ?>" alt="http://tshirtecommerce.com" />
			</a>
			<!-- end: LOGO -->
		</div>
		
		<div class="navbar-tools">
			<ul class="nav navbar-right">						
							
			
				<!-- start: USER DROPDOWN -->
				<li class="current-user">
					<a href="<?php echo site_url('index.php/user/logout'); ?>">
						<?php lang('logout'); ?> &nbsp;<i class="clip-exit"></i>
					</a>
				</li>
				<!-- end: USER DROPDOWN -->
			</ul>
			<!-- end: TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->