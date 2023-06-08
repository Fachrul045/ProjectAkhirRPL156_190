<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Input Menu Kopi Admin</title>
</head>
<style>
    body {
        background-color: #282A3A;
        margin: 0;
    }

    .main {
        font-weight: bold;
    }

    .login {
        background-color: rgba(23, 23, 66, 0.932);
        width: 400px;
        text-align: center;
        padding: 40px;
        box-sizing: border-box;
        border-radius: 12px;
    }

    .main-login {
        display: flex;
        justify-content: center;
        font-size: 40px;
        font-family: 'roboto';
        flex-direction: column;
        align-items: center;
        height: 100vh;
        box-sizing: border-box;
        color: rgb(231, 231, 231);
    }

    p {
        font-size: 20px;
    }



    .login .inputan {
        font-family: 'roboto';
        position: relative;
        width: 100%;
        margin-bottom: 10px;
    }

    .login .inputan input {
        height: 50px;
        width: 100%;
        color: white;
        background-color: transparent;
        padding: 0 20px;
        box-sizing: border-box;
        font-size: 18px;
        border: 2px solid white;
        border-radius: 8px;
    }

    .login .inputan span {
        position: absolute;
        top: 22px;
        left: 20px;
        font-weight: 100;
        padding: 0px;
        font-size: 15px;
        text-transform: capitalize;
        background-color: transparent;
        transition: 0.5s;
    }

    .login .inputan input:focus~span,
    .login .inputan input:valid~span {
        top: -11px;
        left: 10px;
        font-size: 12px;
        padding: 2px 4px;
        border-radius: 5px;
    }

    .login .inputan-button input[type="submit"] {
        font-family: 'roboto';
        font-size: 15px;

        background-color: rgb(0, 238, 12);
        border: none;
        text-transform: uppercase;
        font-weight: bold;
        color: white;
        cursor: pointer;
        width: 100%;
        border-radius: 8px;
    }

    .login .inputan-button input[type="submit"]:hover {
        width: 100%;
        background-color: rgb(99, 238, 123);

    }

    .login .inputan-button input {
        height: 35px;
        width: 100%;
        padding: 0 30px;
        box-sizing: border-box;
        font-size: 10px;
        border: 3px solid white;
        border-radius: 15px;
    }

    .no-account {
        font-weight: 100;
        font-size: 13px;
        color: white;
    }
</style>

<body>
    <div class="main-login">
        <form method="POST" action="input_process.php">
            <div class="login">
                <center>

                   
                    <a style="font-size: 30px; font-weight: bold; font-family: 'roboto';">Input Menu Kopi
                        <hr size="1px" width="100%" color="white" />
                        
                    </a>
                    <div class="warning" style="font-size: 15px;">
                    <?php
                    
                        if (isset($_GET['message'])) {
                            if ($_GET['message'] == 'berhasil') {
                                echo "Submit Berhasil";
                            } elseif ($_GET['message'] == "register_gagal") {
                                echo "Submit gagal. Coba lagi!";
                            }
                        }
                        ?>
                        
                </center>

                <div class="inputan">
                    <input type="text" name="nama_kopi" required="">
                    <span>Nama Kopi</span>
                </div>
                <div class="inputan">
                    <input type="text" name="harga_kopi" required="">
                    <span>Harga Kopi</span>
                </div>
                <div class="inputan">
                    <input type="hidden" name="status_kopi" required="" readonly >
                    
                </div>
                <div class="inputan-button">
                    <input type="submit" value="Submit">
                </div>
               
            </div>
        </form>
    </div>
</body>

</html>