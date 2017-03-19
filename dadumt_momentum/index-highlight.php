<?php if (of_get_option('highlight_checkbox') == 1): ?>
				<div class="row">
					<!-- Define highlight item 1 -->
					<div class="4u">
						<section class="highlight">
							<a href="<?php echo of_get_option('highlight_1_link'); ?>">
								<span class="image fit" id="highlight_1_picture"><img src="<?php echo of_get_option('highlight_1_picture'); ?>" alt=""></span>
								<header>
									<h2 id="highlight_1_title"><?php echo of_get_option('highlight_1_title'); ?></h2>
									<p id="highlight_1_content"><?php echo of_get_option('highlight_1_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
					
					<!-- Define highlight item 2 -->
					<div class="4u"> 
						<section class="highlight alt">
							<a href="<?php echo of_get_option('highlight_2_link'); ?>">
								<span class="image fit" id="highlight_2_picture"><img src="<?php echo of_get_option('highlight_2_picture'); ?>" alt=""></span>
								<header>
									<h2 id="highlight_2_title"><?php echo of_get_option('highlight_2_title'); ?></h2>
									<p id="highlight_2_content"><?php echo of_get_option('highlight_2_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
					
					<!-- Define highlight item 3 -->
					<div class="4u"> 
						<section class="highlight alt2">
							<a href="<?php echo of_get_option('highlight_3_link'); ?>">
								<span class="image fit" id="highlight_3_picture"><img src="<?php echo of_get_option('highlight_3_picture'); ?>" alt=""></span>
								<header>
									<h2 id="highlight_3_title"><?php echo of_get_option('highlight_3_title'); ?></h2>
									<p id="highlight_3_content"><?php echo of_get_option('highlight_3_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
				</div>
<?php endif; ?>