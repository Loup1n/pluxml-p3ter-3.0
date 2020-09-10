<?php if (!defined('PLX_ROOT')) exit; ?>

		<footer class="footer" role="contentinfo">

				<p>
					&copy; CCBYv3 <?php $plxShow->mainTitle('link'); ?> -
					<?php $plxShow->subTitle(); ?> -
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
					<?php $plxShow->httpEncoding() ?>
				</p>
				<nav class="share-icons">
					<a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/P3terFr" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
					<a class="github" onclick="window.open(this.href);return false;" title="Github" href="https://github.com/P3ter" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/github/github-32.png" alt="Github" /></a>
					<a class="flux" onclick="window.open(this.href);return false;" title="Flux RSS" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/rss/rss-32.png" alt="Flux RSS" /></a>
        		</nav>
				<ul class="menu">
					<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
					<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
				</ul>

		</footer>

    </div>

</body>

</html>
