<div class="sidebar" data-background-color="dark">	
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url('assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" h aria-expanded="true">
								<span>
									<?= $_SESSION['users']->nama?>
									<span class="user-level"><?= $_SESSION['users']->id_user?></span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-warning">
						<li class="nav-item 
						<?php 
							$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							$active_class = (strpos($actual_link, 'dashboard/index.php') !== false) ? 'active' : '';
							echo $active_class;;
						?>">
							<a href="<?= base_url('dashboard/index.php')?>" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Finance</h4>
						</li>
						<li class="nav-item
						<?php 
							$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							$active_class = (strpos($actual_link, 'master-laporan') !== false) ? 'active' : '';
							echo $active_class;
						?>">
							<a href="<?= base_url('dashboard/master-laporan.php')?>">
								<i class="fas fa-chart-bar"></i>
								<p>Master Laporan</p>
							</a>
						</li>
						<li class="nav-item
						<?php 
							$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							$active_class = (strpos($actual_link, 'pemasukan') !== false) ? 'active' : '';
							echo $active_class;
						?>">
							<a href="<?= base_url('dashboard/pemasukan.php')?>">
								<i class="far fa-file-excel"></i>
								<p>Pemasukan Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="starter-template.html">
								<i class="fas fa-file-contract"></i>
								<p>Pengeluaran Report</p>
							</a>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">NASABAH</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#email-nav">
								<i class="far fa-user"></i>
								<p>User</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#messages-app-nav">
								<i class="far fa-paper-plane"></i>
								<p>Messages App</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="messages-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="messages.html">
											<span class="sub-item">Messages</span>
										</a>
									</li>
									<li>
										<a href="conversations.html">
											<span class="sub-item">Conversations</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="projects.html">
								<i class="fas fa-file-signature"></i>
								<p>Projects</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="boards.html">
								<i class="fas fa-th-list"></i>
								<p>Boards</p>
								<span class="badge badge-count">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="invoice.html">
								<i class="fas fa-file-invoice-dollar"></i>
								<p>Invoices</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->