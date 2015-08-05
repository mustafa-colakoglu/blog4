<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Hakkımda</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="<?php echo MSGet::getSite(); ?>/css/reset.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo MSGet::getSite(); ?>/css/style.css" type="text/css" />
	<script type="text/javascript" src="<?php echo MSGet::getSite(); ?>/js/jquery.js"></script>
	<script type="text/javascript">
		var site = "<?php echo MSGet::getSite(); ?>";
	</script>
	<script type="text/javascript" src="<?php echo MSGet::getSite(); ?>/js/js.js"></script>
</head>
<body>
	<div id="genel">
		<header>
			<div class="kapak"><img src="<?php echo MSGet::getSite(); ?>/images/kapak.jpg" alt="yağmurlu bir gün" /></div>
			<menu class="anaMenu">
				<div class="solMenu">
					<ul class="sol">
						<li><a href="<?php echo MSGet::getSite(); ?>/anasayfa">Anasayfa</a></li>
						<li><a href="<?php echo MSGet::getSite(); ?>/hakkimda" class="selected">Hakkımda</a></li>
					</ul>
				</div>
				<img src="<?php echo MSGet::getSite(); ?>/images/resim.jpg" class="resim" alt="profil" />
				<div class="sagMenu">
					<ul class="sag">
						<li>
							<a href="#" class="kategori">Kategoriler</a>
							<ul class="altKategori">
								<?php
								$limit = count($kategoriler)-1;
								$sayac = 0;
								foreach($kategoriler as $kategori){
									extract($kategori);
									if($limit != $sayac){
									?>
									<li><a href="<?php echo MSGet::getSite(); ?>/kategori/<?php echo $id; ?>"><?php echo $kategoriAdi; ?></a></li>
									<?php
									}
									else{
									?>
									<li><a href="<?php echo MSGet::getSite(); ?>/kategori/<?php echo $id; ?>" class="sonAlt"><?php echo $kategoriAdi; ?></a></li>
									<?php
									}
								}
								?>
							</ul>
						</li>
						<li><a href="<?php echo MSGet::getSite(); ?>/iletisim">İletişim</a></li>
					</ul>
				</div>
			</menu>
		</header>