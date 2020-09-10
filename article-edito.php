<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="grid" role="main">

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		
		<section class="col sml-12 med-9 med-right">

			<section class="main col">
				<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">
					<header class="grid">
						<h1 class="h2 col sml-12">
							<?php $plxShow->artTitle(); ?>
						</h1>
						<p class="col sml-12 med-9">
							<small>
								<strong><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></strong> -
								<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
								<a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
							</small>
						</p>
						<div class="share-icons col sml-12 med-3 text-right">
							<a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/share?url=<?php $plxShow->artUrl(); ?>&text=<?php $plxShow->artTitle(); ?>&via=P3terFr" rel="nofollow" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
							<a class="facebook" onclick="window.open(this.href);return false;" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?php $plxShow->artUrl(); ?>&t=<?php $plxShow->artTitle(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/facebook/facebook-32.png" alt="Facebook" /></a>
						</div>
					</header>
					<section>
						<strong><?php $plxShow->artChapo('',false) ?></strong>
						<?php $plxShow->artContent(false); ?>
					</section>
				</article>
	        </section>
	
	    	<section class="article-footer col"/>
				<div class="grid">
					<div class="col sml-12 med-4">
						<p><strong><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></strong></p>
						<p><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?></p>
						<p><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?></p>
						<strong>Partager</strong>
						<div class="share-icons">
							<a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/share?url=<?php $plxShow->artUrl(); ?>&text=<?php $plxShow->artTitle(); ?>&via=P3terFr" rel="nofollow" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
							<a class="facebook" onclick="window.open(this.href);return false;" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?php $plxShow->artUrl(); ?>&t=<?php $plxShow->artTitle(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/facebook/facebook-32.png" alt="Facebook" /></a>
						</div>
					</div>
					<div class="col sml-12 med-8">
						<?php include(dirname(__FILE__).'/related.php'); ?>
					</div>
	            </div>
			</section>
	        
			<section class="main col">
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>
			</section>
	
			<section class="article-footer-dark col">
				<?php include(dirname(__FILE__).'/footer.php'); ?>
			</section>

		</section>

	</main>
