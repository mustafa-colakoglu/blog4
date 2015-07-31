$(document).ready(function(){
	var kategoriAcik = 0;
	var sayfa=0;
	$(".dahaFazlaYukle a").html("Yükleniyor . . .");
	$.ajax({
		type:'POST',
		url:site+"/ajaxYaziGetir",
		data:{'sayfa':sayfa},
		success:function(sonuc){
			if(sonuc=="bukadar"){
				$(".dahaFazlaYukle a").html("Daha Fazla Yazı Yok");
			}
			else{
				$(".anaSayfaPosts").html(sonuc);
				$(".dahaFazlaYukle a").html("Daha Fazla Yükle");
				sayfa++;
			}
		},
		error:function(){
			$(".dahaFazlaYukle a").html("Bağlantı Hatası");
		}
	});
	$(".kategori").click(function(){
		if(kategoriAcik == 0){
			$(".altKategori").show();
			kategoriAcik = 1;
		}
		else{
			$(".altKategori").hide();
			kategoriAcik = 0;
		}
	});
	$(".dahaFazlaYukle").click(function(){
		$(".dahaFazlaYukle a").html("Yükleniyor . . .");
		$.ajax({
			type:'POST',
			url:site+"/ajaxYaziGetir",
			data:{'sayfa':sayfa},
			success:function(sonuc){
				if(sonuc=="bukadar"){
					$(".dahaFazlaYukle a").html("Daha Fazla Yazı Yok");
				}
				else{
					$(".anaSayfaPosts").append(sonuc);
					$(".dahaFazlaYukle a").html("Daha Fazla Yükle");
					sayfa++;
				}
			},
			error:function(){
				$(".dahaFazlaYukle a").html("Bağlantı Hatası");
			}
		});
	});
});