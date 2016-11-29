<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="grid" role="main">

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		
		<section class="col sml-12 med-9 med-right">

			<section class="main col">
				<article class="article" role="article">

					<header>
						<h1>
							<?php $plxShow->lang('ERROR'); ?>
						</h1>
					</header>
	
					<section>
						<p>
							<?php $plxShow->erreurMessage(); ?>
						</p>
					</section>

				</article>
	
			</section>
			
			<section class="article-footer-dark col">
				<?php include(dirname(__FILE__).'/footer.php'); ?>
			</section>

		</section>

	</main>



