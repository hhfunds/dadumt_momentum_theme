<?php if (of_get_option('slider_checkbox') == 1): ?>
				<!-- 顯示圖片輪播 --> 
				<div class="row">
					<div class="12u">
						<div id="slider">
							<div class="viewer">
								<div class="reel">
									<!-- Define slider item 1 -->
									<div class="slide">
										<div class="info">
											<h2 id="slider_picture1_title"><?php echo of_get_option('slider_picture1_title'); ?></h2>
											<span id="slider_picture1_content"><?php echo of_get_option('slider_picture1_content'); ?></span>
										</div>
										<span id="slider_picture1"><img src="<?php echo of_get_option('slider_picture1'); ?>" alt="" /></span>
									</div>
									
									<!-- Define slider item 2 -->
									<div class="slide">
										<div class="info">
											<h2 id="slider_picture2_title"><?php echo of_get_option('slider_picture2_title'); ?></h2>
											<span id="slider_picture2_content"><?php echo of_get_option('slider_picture2_content'); ?></span>
										</div>
										<span id="slider_picture2"><img src="<?php echo of_get_option('slider_picture2'); ?>" alt="" /></span>
									</div>

									<!-- Define slider item 3 -->
									<div class="slide">
										<div class="info">
											<h2 id="slider_picture3_title"><?php echo of_get_option('slider_picture3_title'); ?></h2>
											<span id="slider_picture3_content"><?php echo of_get_option('slider_picture3_content'); ?></span>
										</div>
										<span id="slider_picture3"><img src="<?php echo of_get_option('slider_picture3'); ?>" alt="" /></span>
									</div>
											
								</div>
							</div>
							
							<!-- Define slider rotation indicator to be shown on buttom of slider -->
							<div class="indicator">
								<ul>
								<li class="active">1</li>
								<li>2</li>
								<li>3</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
<?php endif; ?>