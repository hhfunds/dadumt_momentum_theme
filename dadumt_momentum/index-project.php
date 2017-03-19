<?php if (of_get_option('project_checkbox') == 1): ?>
			<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<!-- Project Wrapper item 1 -->
							<div class="12u">
								<article id="content">
									<h2 id="project_1_title"><?php echo of_get_option('project_1_title'); ?></h2>
									<a id="project_1_picture" href="<?php echo of_get_option('project_1_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_1_picture'); ?>" alt=""></a>
									<p id="project_1_content"><?php echo of_get_option('project_1_content'); ?></p>
									<footer id="project_1_link">
										<a href="<?php echo of_get_option('project_1_link'); ?>" class="button icon fa-arrow-circle-right">了解更多</a>
									</footer>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 2 -->
										<li class="first">
											<a href="<?php echo of_get_option('project_2_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_2_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_2_link'); ?>"><?php echo of_get_option('project_2_title'); ?></a></h3>
											<p><?php echo of_get_option('project_2_content'); ?></p>
										</li>
										<!-- Project Wrapper item 3 -->
										<li>
											<a href="<?php echo of_get_option('project_3_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_3_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_3_link'); ?>"><?php echo of_get_option('project_3_title'); ?></a></h3>
											<p><?php echo of_get_option('project_3_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 4 -->
										<li class="first">
											<a href="<?php echo of_get_option('project_4_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_4_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_4_link'); ?>"><?php echo of_get_option('project_4_title'); ?></a></h3>
											<p><?php echo of_get_option('project_4_content'); ?></p>
										</li>
										<!-- Project Wrapper item 5 -->
										<li>
											<a href="<?php echo of_get_option('project_5_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_5_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_5_link'); ?>"><?php echo of_get_option('project_5_title'); ?></a></h3>
											<p><?php echo of_get_option('project_5_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 6 -->
										<li class="first">
										</li>
										<li>
											<a href="<?php echo of_get_option('project_6_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_6_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_6_link'); ?>"><?php echo of_get_option('project_6_title'); ?></a></h3>
											<p><?php echo of_get_option('project_6_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 7 -->
										<li class="first">
										</li>
										<li>
											<a href="<?php echo of_get_option('project_7_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_7_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_7_link'); ?>"><?php echo of_get_option('project_7_title'); ?></a></h3>
											<p><?php echo of_get_option('project_7_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</div>

			</div>
<?php endif; ?>