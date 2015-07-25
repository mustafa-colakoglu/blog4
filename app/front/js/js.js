$(document).ready(function(){
	var kategoriAcik = 0;
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
});