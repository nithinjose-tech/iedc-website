<style>
            .banner-img-height {
                height: 380px;
            }

            @media screen and (max-width: 600px) {
                .banner-img-height {
                    height: 150px;
                }
            }

            .first-letter {
                font-size: 80px;
            }

            .custom-para {
                line-height: 40px;
            }
        </style>
<section class="banner-img-height" id="page-title" style="background-color: #181918;" data-parallax-image="<?= base_url() ?>assets/front/images/banner/EVENTS.png">
</section>
<section class="p-b-0">
	<div class="container">
    <div class="heading-text heading-line text-center">
                <h3>Gallery</h3>
            </div>
		<div class="heading-text heading-section">			
			<span align="justify" class="lead">Check Out our gallery collection</span>
		</div>
	</div>
	<div class="portfolio">

		<div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
			<?php
			foreach (array_reverse($galleryInfo) as $row) {
			?>
				<div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media" id="<?= $row['uEvent'] ?>">
					<div class="portfolio-item-wrap">
						<div class="portfolio-image">
							<img src="<?= base_url() ?>assets/uploads/images/updates/<?= $row['imageLink'] ?>" alt="<?= $row['uTitle'] ?>">
						</div>
						<div class="portfolio-description">
							<a href="javascript:;">
								<h3><?= $row['uTitle'] ?></h3>
								<span>
									<b>
										<?php if ($row['uDate'] != NULL) { ?>
											Date : <?= $row['uDate'] ?><br>
										
										<?php } ?>
									</b>
								</span>
								
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>