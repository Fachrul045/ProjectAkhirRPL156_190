<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="../style.css">
</head>
<style>
  .dropdown-input {
    background-color: #3A8891;
  }

  .main {
    background-color: #282A3A;
  }

  .form-input {
    background-color: #0E5E6F;
    border-radius: 20px;
  }

  .main-right {
    background-color: #3A8891;
    border-radius: 20px;
    height: 250px;
  }

  ::placeholder {

    color: white !important;
    opacity: 1;

  }
</style>

<body style="font-family: 'Poppins';">
  
  <div class="main-right">
    <div class="mt-3 w-100 container">
      <div class="title mt-3">
        <center>
          
        </center>
      </div>
      <div class="row">
        <div class="col-7">
        
  <form method="POST" action="menu_process.php">
      <h2> Pembayaran</h2>
      <div class="mb-3 text-center" style="width: 18rem;">
      <?php
      include '../connection/connection.php';
      $id_kopi = $_GET['id_kopi'];
     
      $query = mysqli_query($connect, "Select * from kopi where id_kopi = $id_kopi");
      $data_lab = mysqli_fetch_array($query)
      ?>
      
      <div class="mb-3">
      <input type="hidden" name = "id_kopi" value = "<?= $data_lab['id_kopi']?>">
     
        <input type="text"  value = "<?= $data_lab['nama']?>" name="nama" class="form-control" readonly>
        <br>
        <input type="text" value = "<?= $data_lab['harga']?>"  name="harga" class="form-control" readonly>
      </div>
      <div class="mb-3">
      
    </fieldset>
      
        <div class="button mt-3">
        <input type="submit" value="Bayar" class="btn btn-primary" aria-describedby="emailHelp">
      </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>