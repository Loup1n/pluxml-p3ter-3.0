
<?php
# paramétrage
$nb_arts = 5; 
$format='<li><a href="#art_url" title="#art_title">#art_title</a></li>';
# recherche des catégories actives de l'article en cours de lecture
$cat_ids = $plxShow->artActiveCatIds();
$cat_ids = ($cat_ids ? implode('|', $cat_ids) : '');
# recherche de tous les articles publiés dans les catégories actives de l'article en cours de lecture
$plxGlob_arts = clone $plxMotor->plxGlob_arts;
$motif = '/^[0-9]{4}.((?:[0-9]|home|,)*(?:'.str_pad($cat_ids,3,'0',STR_PAD_LEFT).')(?:[0-9]|home|,)*).[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/';
$aFiles = $plxGlob_arts->query($motif,'art','rsort',0,9999,'before');
if($aFiles and sizeof($aFiles)>1) {
	$arts = array();
	# recherche aléatoire des articles à recommander
	$random = array_rand($aFiles, ($nb_arts > sizeof($aFiles) ? sizeof($aFiles) : $nb_arts) );
	foreach($random as $numart) {
		# on ne liste pas l'article en cours de lecture 
		if($aFiles[$numart] <> basename($plxMotor->plxRecord_arts->f('filename'))) {
			$art = $plxMotor->parseArticle(PLX_ROOT.$plxMotor->aConf['racine_articles'].$aFiles[$numart]);
			$row = str_replace('#art_url',$plxMotor->urlRewrite('?article'.intval($art['numero']).'/'.$art['url']),$format);	
			$row = str_replace('#art_title',plxUtils::strCheck($art['title']),$row);	
			#$row = str_replace('#art_date',plxDate::formatDate($art['date'],'#num_day/#num_month/#num_year(4)'),$row);	
			$author = plxUtils::getValue($plxMotor->aUsers[$art['author']]['name']);
			$row = str_replace('#art_author',plxUtils::strCheck($author),$row);
			$arts[] = $row;		
		}
	}
	# affichage des résultats
	if($arts) {
		echo '<p>';
		echo '<strong>À lire également</strong>';
		echo '<ul class="unstyled-list">'.implode('', $arts).'</ul>';
		echo '</p>';
	}
}
?>