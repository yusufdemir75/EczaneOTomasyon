<?php
include 'baglanti.php';

        $urunsor = $baglanti->prepare("SELECT * FROM ilaclar WHERE id=:id");
        $urunsor->execute(
            array(
            'id'=>$_GET['id']
            

                ) );
        $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Stok Düzenleme Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
		body {
			min-height: 100vh;
     width: 100%;
     background-color: #485461;
     background-image: linear-gradient(135deg, #485461 0%, #28313b 74%);
     overflow-x: hidden;
    transform-style: preserve-3d;
		 }
	</style>
  </head>
<body>
<div class="container">


<form action="islem-stok.php" method="post" style="padding-top: 35px;">
  <div class="form-group">
    <label for="exampleInputEmail1">Barkod</label>
    <input name="barkod"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="ilac_id" value="<?php echo $uruncek['id'] ?>" type="hidden" class="form-control" id="exampleInputPassword1" +>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Adet</label>
    <input name="adet"    type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="fiyat"  value="<?php echo $uruncek['fiyat'] ?>"  type="hidden" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Üretim Tarihi</label>
    <input name="uretim_tarihi"    type="text" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Son Kullanım Tarihi</label>
    <input name="son_kullanim"    type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="kategori"  value="<?php echo $uruncek['kategori'] ?>"  type="hidden" class="form-control" id="exampleInputPassword1" >
  </div>

  <input type="hidden" name="id"  value="<?php echo $uruncek['id'] ?>">
 
  <button name="stokekle" type="submit" class="btn btn-primary">Stok Ekle</button>
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>