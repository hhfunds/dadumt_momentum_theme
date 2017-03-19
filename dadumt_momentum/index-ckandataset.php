			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
						<div class="12u">
							<?php if (momentum_ckan_status() && of_get_option('datasetsinfo_checkbox') == 1 ): ?>
							<article id="content">
								<h2 id="datasetsinfo_title"><?php echo of_get_option('datasetsinfo_title'); ?></h2>
								</br>
								<a href="<?php echo of_get_option('datasetsinfo_link'); ?>" class="image left" style="text-decoration:none; color:#000000;">
									<p class="totaldatasets" style="font-size:60px; line-height:65px; margin-bottom:0; text-align:center; ">0<?php $totaldatasets = dadumtckan_get_number_of_all_datasets(); ?></p>
									<p style="text-align:center; ">共　個資料集</p>
									<p class="proj01datasets" style="font-size:30px; line-height:65px; margin-bottom:0; text-align:center; ">0<?php $proj01datasets = dadumtckan_do_shortcode_get_number_of_query_datasets("cd607293-060e-481c-bb56-0ccb2b1ae77e"); ?></p>
									<p style="text-align:center; ">總計畫</p>
									<p class="proj02datasets" style="font-size:30px; line-height:65px; margin-bottom:0; text-align:center; ">0<?php $proj02datasets = dadumtckan_do_shortcode_get_number_of_query_datasets("8c5ced7f-de83-480d-9383-b0c1e6e94d89"); ?></p>
									<p style="text-align:center; ">生物監測暨生態保育</p>
								</a>
									<a href="<?php echo of_get_option('datasetsinfo_link'); ?>" class="image left" style="text-decoration:none; color:#000000;">
									<p class="proj03datasets" style="font-size:30px; line-height:65px; margin-bottom:0; text-align:center; ">0<?php $proj03datasets = dadumtckan_do_shortcode_get_number_of_query_datasets("69453fc8-a4d4-4a66-99c3-d431979b3495"); ?></p>
									<p style="text-align:center; ">歷史和人文</p>
									<p class="proj04datasets" style="font-size:30px; line-height:65px; margin-bottom:0; text-align:center; ">0<?php $proj04datasets = dadumtckan_do_shortcode_get_number_of_query_datasets("2f9adf3b-6b09-4c18-b0a0-33478ff7fa7d"); ?></p>
									<p style="text-align:center; ">產業資源</p>
									<p class="proj05datasets" style="font-size:30px; line-height:65px; margin-bottom:0; text-align:center; ">0<?php $proj05datasets = dadumtckan_do_shortcode_get_number_of_query_datasets("770f643f-a5a9-4ada-ac3c-d5e692ead288"); ?></p>
									<p style="text-align:center; ">圖資地理資訊</p>
								</a>
								<p id="datasetsinfo_content"><?php echo of_get_option('datasetsinfo_content'); ?></p>
								<footer stytle="text-align:right; ">
									<a id="datasetsinfo_link" href="<?php echo of_get_option('datasetsinfo_link'); ?>" class="button icon fa-arrow-circle-right">了解更多</a>
								</footer>
							</article>
							<?php else: ?>
							<article id="content">
								<h2 id="datasetsinfo_title"><?php momentum_ckan_error(); ?></h2>
							</article>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			
<script>
$(window).scroll(function () {
            var scrollTop = $(this).scrollTop();
            var scrollHeight1 = $(".totaldatasets").offset().top;
			var scrollHeight2 = $(".proj01datasets").offset().top;
			var scrollHeight3 = $(".proj02datasets").offset().top;
            var windowHeight = $(this).height();
            if ((scrollTop + windowHeight) > scrollHeight1) {
				
				$('.totaldatasets').numerator( {
				easing: 'linear',
				duration: 2000,
				delimiter: ',',
				rounding: 0,
				toValue: <?php echo $totaldatasets; ?>
				} )
				
				$('.proj03datasets').numerator( {
				easing: 'linear',
				duration: 2000,
				delimiter: ',',
				rounding: 0,
				toValue: <?php echo $proj03datasets; ?>
				} )
			}
				
			if ((scrollTop + windowHeight) > scrollHeight2) {
				
				$('.proj01datasets').numerator( {
				easing: 'linear',
				duration: 2000,
				delimiter: ',',
				rounding: 0,
				toValue: <?php echo $proj01datasets; ?>
				} )
				
				$('.proj04datasets').numerator( {
				easing: 'linear',
				duration: 2000,
				delimiter: ',',
				rounding: 0,
				toValue: <?php echo $proj04datasets; ?>
				} )
			}
			
			if ((scrollTop + windowHeight) > scrollHeight3) {
				
				$('.proj02datasets').numerator( {
				easing: 'linear',
				duration: 2000,
				delimiter: ',',
				rounding: 0,
				toValue: <?php echo $proj02datasets; ?>
				} )
				
				$('.proj05datasets').numerator( {
				easing: 'linear',
				duration: 2000,
				delimiter: ',',
				rounding: 0,
				toValue: <?php echo $proj05datasets; ?>
				} )
			}
})
</script>