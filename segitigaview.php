<html>
  <head>
    <title>Hasil Perhitungan</title>
  </head>
  <body>
    <h2>Model Segitiga</h2>
    <!–- memanggil metode get_alas() dari objek $model -->
    Nilai alas segitiga: <?php echo $model->get_alas(); ?><br/>
    <!–- memanggil metode get_tinggi() dari objek $model -->
    Nilai tinggi segitiga: <?php echo $model->get_tinggi(); ?><br/>
    <!–- memanggil metode hitung_luas() dari objek $model -->
    Luas Segitiga: <?php echo $model->hitung_luas() ?><br/>
  </body>
</html>
