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
    height: 400px;
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
        <table class="table">
   

          <div class="warning text-center" style="font-size: 15px;">
          </div>
        </div>
        <div class="form-input col-5">
          <center><h2>Bahan dan Barang</h2></center>
        <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Bahan dan Barang</th>
        <th scope="col">Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../connection/connection.php';
      $no = 1;
      $mysql = "SELECT bahan.bahan, jumlah, id_bahan from bahan";

      $myquery = mysqli_query($connect, $mysql);
      while ($data = mysqli_fetch_array($myquery)) {
      ?>
        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $data['bahan']?></td>
          <td><?= $data['jumlah']?></td>
          <td>
            
            <a type="submit" href="edit_bahan.php?id_bahan=<?= $data['id_bahan'] ?>" name="edit_button" class="btn btn-outline-light">Edit</button>
          </td>
        </tr>
      <?php $no++;
      } ?>
    </tbody>

  </table>
         
                <div class="col">
                <a class="btn btn-primary" href="input.php">Input Data Kopi</a>
                </div>
              </div>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>