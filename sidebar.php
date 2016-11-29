<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside class="aside col sml-0 med-3" role="complementary">

		<header class="header sml-text-center med-text-left" role="banner">
			<h1 class="no-margin"><?php $plxShow->mainTitle('link'); ?></h1>
			<h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>
		</header>

		<nav class="nav" role="navigation">
			<div class="responsive-menu">
				<label for="menu"><?php $plxShow->lang('MENU'); ?></label>
				<input type="checkbox" id="menu">
				<ul class="unstyled-list">
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				</ul>
			</div>
		</nav>
        
        <nav class="share-icons">
            <a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/P3terFr" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
            <a class="googleplus" onclick="window.open(this.href);return false;" title="Google +" href="https://plus.google.com/+PedroCADETE" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/googleplus/googleplus-32.png" alt="Google Plus" /></a>
            <a class="github" onclick="window.open(this.href);return false;" title="Github" href="https://github.com/P3ter" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/github/github-32.png" alt="Github" /></a>
            <a class="flux" title="Flux RSS" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/rss/rss-32.png" alt="Flux RSS" /></a>
        </nav>

		<h3>
			<?php $plxShow->lang('CATEGORIES'); ?>
		</h3>

		<ul class="cat-list unstyled-list">
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
		</ul>

		<h3>Rechercher</h3>

		<?php eval($plxShow->callHook('MySearchForm')) ?>

		<h3>
			<?php $plxShow->lang('LATEST_ARTICLES'); ?>
		</h3>

		<ul class="lastart-list unstyled-list">
			<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('TAGS'); ?>
		</h3>

		<ul class="tag-list">
			<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('LATEST_COMMENTS'); ?>
		</h3>

		<ul class="lastcom-list unstyled-list">
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>

		<h3>
			RSS
		</h3>
		<ul class="rss-list unstyled-list">
			<li>
				<img class="rss" src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/rss/rss-16.png"/>
				<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a>
			</li>
			<li>
				<img class="rss" src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/rss/rss-16.png"/>
				<a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a>
			</li>
		</ul>

		<p class="copyright">
			Thème Navan réalisé par <a href="http://pluxopolis.net">Pluxopolis</a>
			<br />© 2015 - Sous licence Creative Commons BY NC.<br />
			<img src="<?php $plxShow->template(); ?>/img/CC-BYNC.png" title="" alt="CC-BY NC" />
			<img src="<?php $plxShow->template(); ?>/img/html5.png" title="" alt="html5" />
			<img src="<?php $plxShow->template(); ?>/img/w3c.png" title="" alt="w3c" />
		</p>		
		
	</aside>
