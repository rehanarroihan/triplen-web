<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar container">
	<a href="index.html" class="navbar-brand sidebar-gone-hide"><img src="<?php echo base_url() ?>assets/front/media/Light.png" alt="logo" style="max-height: 40px" /></a>
	<div class="navbar-nav">
		<a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
	</div>
	<div class="nav-collapse">
		<a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
		<i class="fas fa-ellipsis-v"></i>
		</a>
		<ul class="navbar-nav">
			<!-- <li class="nav-item active"><a href="#" class="nav-link">My Triplen</a></li> -->
		</ul>
	</div>
	<form class="form-inline ml-auto">
		<ul class="navbar-nav">
			<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
		</ul>
		<div class="search-element">
			<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
			<button class="btn" type="submit"><i class="fas fa-search"></i></button>
			<div class="search-backdrop"></div>
		</div>
	</form>
	<ul class="navbar-nav navbar-right">
		<li class="dropdown dropdown-list-toggle">
			<a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
			<div class="dropdown-menu dropdown-list dropdown-menu-right">
				<div class="dropdown-header">
					Notifications
					<div class="float-right">
						<!-- <a href="#">Mark All As Read</a> -->
					</div>
				</div>
				<div class="dropdown-list-content dropdown-list-icons">
					<a href="#" class="dropdown-item dropdown-item-unread">
						<div class="dropdown-item-icon bg-info text-white">
							<i class="fas fa-bell"></i>
						</div>
						<div class="dropdown-item-desc">
							Welcome to Triplen, mulai tambah rencana liburanmu
							<div class="time">Sekarang</div>
						</div>
					</a>
				</div>
				<div class="dropdown-footer text-center">
					<a href="#">1 Notifikasi <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
				<img alt="image" :src="userData.img_url" class="rounded-circle mr-1">
				<div class="d-sm-none d-lg-inline-block">Halo, {{ userData.name }}</div>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<!-- <a href="features-profile.html" class="dropdown-item has-icon">
					<i class="far fa-user"></i> Profile
					</a>
					<a href="features-activities.html" class="dropdown-item has-icon">
					<i class="fas fa-bolt"></i> Activities
					</a>
					<a href="features-settings.html" class="dropdown-item has-icon">
					<i class="fas fa-cog"></i> Settings
					</a>
					<div class="dropdown-divider"></div> -->
				<a href="#" @click="logout" class="dropdown-item has-icon text-danger">
				<i class="fas fa-sign-out-alt"></i> Logout
				</a>
			</div>
		</li>
	</ul>
</nav>
<nav class="navbar navbar-secondary navbar-expand-lg">
	<div class="container">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a href="#" class="nav-link"><i class="far fa-list-alt"></i><span>My Triplen</span></a>
			</li>
		</ul>
	</div>
</nav>