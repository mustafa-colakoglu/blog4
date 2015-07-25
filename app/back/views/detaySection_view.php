<section>
	<ul class="anaSayfaPosts detayPost">
		<?php
			foreach($yaziDetay as $yazi){
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
						<div class="begeniSayi"><?php echo $yorumSayi; ?> Yorum</div>
					</div>
					<div class="kisa">
						<h2 class="baslik"><?php echo $baslik; ?></h2>
						<p>
							<?php
								echo $yazi;
							?>
						</p>
					</div>
				</div>
				<div class="tags">
					<h4>TAGS</h4>
					<?php
						$tags = explode(",",$keywords);
						$tag="";
					?>
					<span>
						<?php
							for($i=0;$i<count($tags);$i++){
								$tag=$tag.'<a href="'.MSGet::getSite().'/tag/'.$tags[$i].'">'.$tags[$i].'</a>, ';
							}
							echo rtrim($tag,", ");
						?>
					</span>
				</div>
			</li>
			<?php
			}
		?>
	</ul>
	<div class="yorumSayi">
		<?php echo $yorumSayi; ?> Yorum
	</div>
	<div class="yorumYap">
		<h4>Yorum Yap</h4>
		<form action="" method="post">
			<input type="text" name="adSoyad" placeholder="Adın Soyadın" />
			<input type="text" name="ePosta" placeholder="E-posta Adresin" />
			<textarea name="yorum" placeholder="Yorumunuz"></textarea>
			<input type="submit" value="Yorum Yap" />
		</form>
	</div>
	<div class="yorumlar">
	<?php
		foreach($yorumlar as $yorum){
		extract($yorum);
		?>
		<div class="yorumTek" id="<?php echo $id; ?>">
			<div class="yorumSol">
				<div class="yorumResim">
				
				</div>
			</div>
			<div class="yorumSag">
				<h3 class="yorumYapan">
					<?php echo $adiSoyadi; ?>
				</h3>
				<p class="yorumYorum">
					<?php echo $yorum; ?>
				</p>
			</div>
		</div>
		<?php
		}
	?>
		</div>
	</div>
</section>
</div>
</body>
</html>