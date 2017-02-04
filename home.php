<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="grid" role="main">

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

		<section class="col sml-12 med-9 med-right">
			
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
        
	        <section class="article-header col">
				<header>
					<a href ="<?php $plxShow->artUrl() ?>">
						<h1><?php $plxShow->artTitle(); ?></h1>
	                	<?php eval($plxShow->callHook("showVignette")); ?>
	                </a>
				</header>
			</section>
			
			<section class="main col">
				<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">
					<header class="grid">
						<p class="col sml-12 med-9">
							<small>
								<strong><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></strong> -
								<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
								<?php $plxShow->artNbCom(); ?>
							</small>
						</p>
						<div class="share-icons col sml-12 med-3 text-right">
							<a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/share?url=<?php $plxShow->artUrl(); ?>&text=<?php $plxShow->artTitle(); ?>&via=P3terFr" rel="nofollow" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
							<a class="facebook" onclick="window.open(this.href);return false;" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?php $plxShow->artUrl(); ?>&t=<?php $plxShow->artTitle(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/facebook/facebook-32.png" alt="Facebook" /></a>
							<a class="googleplus" onclick="window.open(this.href);return false;" title="Google +" href="https://plus.google.com/share?url=<?php $plxShow->artUrl(); ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/googleplus/googleplus-32.png" alt="Google Plus" /></a>
						</div>
					</header>
					<section>
						<?php $plxShow->artChapo('Lire la suite',true) ?>
					</section>
					<footer>

						<p>
							<small>
								<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
								<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
							</small>
						</p>
					</footer>
				</article>
	        </section>

			<?php endwhile; ?>
			
			<section class="main col">
				<nav class="pagination text-center">
					<?php $plxShow->pagination(); ?>
				</nav>
			</section>

			<section class="article-footer-dark col">
				<?php include(dirname(__FILE__).'/footer.php'); ?>
			</section>

		</section>

	</main>

