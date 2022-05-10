<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Přihlášení </title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>

<body>
<form action="db.php" method="post">
    <div class="container">
        <h1 class="nadpis">Vítejte </h1>
        <?php if(isset($_GET['error'])){?>
          <p class="error"> <?php echo $_GET['error'];?> </p>
          <?php } ?>
                <div class="inputy">

                    <label for="uname">Uživatelské jméno</label>
                    <input type="text" placeholder="Uživatelské jméno" name="uname" id="uname" required>

                    <label for="pass">Heslo</label>
                    <input type="password" placeholder="Heslo" name="password" id="password" required>

                    <button type="Submit" class="registerbtn">Přihlásit se</button>  
                    
                </div>

    </div>
    <div class="pages/container signin">

        <p> Všechny práva vyhrazena 2022 </p>
    </div>
        </form>

</body>

</html>