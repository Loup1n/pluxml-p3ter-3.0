<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="grid" role="main">

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		
		<section class="main col sml-12 med-9">
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
        </section>
        
        <section class="article-footer col sml-12 med-9">        
    		<?php include(dirname(__FILE__).'/footer.php'); ?>
		</section>	
		
	</main>


