<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html lang="ru" dir="ltr">
	<head>
		<title>Поиск - Володин Владимир - Сайт Резюме</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Володин владимир" />
		<meta name="generator" content="Incomedia WebSite X5 Evolution 10.0.8.35 - www.websitex5.com" />
		<meta name="viewport" content="width=1100" />
		<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		<link rel="alternate" type="application/rss+xml" title="" href="blog/x5feed.xml" />
		
		<script type="text/javascript" src="res/jquery.js?35"></script>
		<script type="text/javascript" src="res/x5engine.js?35"></script>
		
		<script type="text/javascript">x5engine.boot.push('x5engine.imSearch.Load()')</script>
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Поиск - Володин Владимир - Сайт Резюме</h1>
				
				<div onclick="return x5engine.imShowBox({ swipeImg: 'res/imSwipe.png', closeImg: 'res/imClose.png', loadingImg: 'res/imLoad.gif', effect: 'fade', background: '#000000', textColor: '#000000', boxColor: '#FFFFFF', startIndex: 0, loadingImg: 'res/imLoad.gif', closeImg: 'res/imClose.png', media:[{type: 'image', url: 'files/2.jpg', width: 184, height: 240, description: ''}]}, 0, this);" style="position: absolute; top: 20px; left: 9px; width: 216px; height: 59px; cursor: pointer;"></div>
				<div onclick="return x5engine.imShowBox({ swipeImg: 'res/imSwipe.png', closeImg: 'res/imClose.png', loadingImg: 'res/imLoad.gif', effect: 'fade', background: '#000000', textColor: '#000000', boxColor: '#FFFFFF', startIndex: 0, loadingImg: 'res/imLoad.gif', closeImg: 'res/imClose.png', media:[{type: 'image', url: 'files/2.jpg', width: 184, height: 240, description: ''}]}, 0, this);" style="position: absolute; top: 72px; left: 8px; width: 507px; height: 52px; cursor: pointer;"></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
			<a id="imGoToMenu"></a><p class="imHidden">Главное меню:</p>
			<div id="imMnMn" class="auto">
				<!-- Menu -->
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Резуьтаты поиска</h2><?php
$search = new imSearch();
$search->search(@$_GET['search'], @$_GET['page']);
?>				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>
		
	</body>
</html>
