<?php include(dirname(__FILE__) . '/header.php'); ?>

	<main class="grid" role="main">

		<section class="main col sml-12">

			<article class="article static" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

				<header>
					<h1>
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>

				<section>
					<?php $plxShow->staticContent(); ?>
				</section>

			</article>
    	    
            <?php include(dirname(__FILE__).'/footer.php'); ?>

		</section>

	</main>



