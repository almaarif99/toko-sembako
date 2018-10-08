

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>Hi. This is Verti.</h2>
								<p>It's a free responsive site template by HTML5 UP</p>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="#" class="button large icon fa-arrow-circle-right">Ok let's go</a></li>
									<li><a href="#" class="button alt large icon fa-question-circle">More info</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<?php foreach ($makan as $key): ?>
								<div class="col-4 col-12-medium">

									<!-- Box -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?= base_url('asset/img/cat.jpg'); ?>" alt="" /></a>
											<div class="inner">
												<header>
													<h2><?= $key['nama_barang']; ?></h2>
													<p>Maybe here as well I think</p>
												</header>
												<p><?= $key['dicripsi']; ?></p>
											</div>
										</section>

								</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Interesting stuff</h3>
											<div class="grid">
												<div class="row gtr-50">


													<div class="col-6"><a href="#" class="image fit"><img src="<?= base_url('asset/img/cat.jpg'); ?>" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="<?= base_url('asset/img/dell.jpg'); ?>" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="<?= base_url('asset/img/razer.jpg'); ?>" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="<?= base_url('asset/img/cat.jpg'); ?>" alt="" /></a></div>
												</div>
											</div>
											<a href="#" class="button icon fa-file-text-o">More</a>
										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>So what's this all about?</h2>
											<p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href="http://html5up.net">HTML5 UP</a>.
											Verti is released under the <a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
											<a href="#" class="button icon fa-arrow-circle-right">Continue Reading</a>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>
