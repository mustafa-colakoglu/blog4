<?php
	if(count(@$yazilar)==0){
		echo "bukadar";
	}
	else{
			foreach($yazilar as $yazi){
			extract($yazi);
			?>
			<li>
				<div class="solKisim">
					<div class="tarih">
					<?php echo $tarih; ?>
					</div>
				</div>
				<div class="sagKisim">
					<div class="bilgiler">
						<a href="<?php echo MSGet::getSite(); ?>/kategori/<?php echo $kategoriId; ?>" class="kategorisi"><?php echo $kategoriAdi; ?></a>
						<img src="<?php echo MSGet::getSite(); ?>/images/kalp.png" class="kalp" />
						<div class="begeniSayi"><?php echo $begeniSayi; ?> Begenme</div>
						<img src="<?php echo MSGet::getSite(); ?>/images/yorum.png" class="yorum" />
						<div class="begeniSayi">15 Yorum</div>
					</div>
					<div class="kisa">
						<h2 class="baslik"><?php echo $baslik; ?></h2>
						<p>
							<?php
								echo substr($yazi,0,500);
							?>
						</p>
					</div>
					<div class="devaminiOku">
						<a href="<?php echo MSGet::getSite(); ?>/detay/<?php echo $id; ?>">Devamını Oku</a>
					</div>
				</div>
			</li>
			<?php
			}
	}
?>