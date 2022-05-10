
<?php
session_start();
include "db_conn.php";
if (isset($_POST['save_select'])) {
    $den = $_POST['den'];
    $hodina = $_POST['hodina'];
    $mistnost = $_POST['mistnost'];
    $ucitel = $_POST['ucitel'];

    if ($den == "0" || $hodina == 0 || $mistnost == "0") {
        $_SESSION['status'] = "Zadejte správne hodnoty";
        header("location:dostupnost.php");
    } else {
        mysqli_data_seek($records,0);
        global $conn;
        $sql ="SELECT * FROM tabulka where den='" . $den . "' and hodina='" . $hodina . "'";
        $records = mysqli_query($conn, $sql);
     
    
        if(mysqli_num_rows($records)==0){ 
            $query = "INSERT INTO tabulka (den,hodina,mistnost,ucitel) VALUES ('$den',$hodina,'$mistnost','$ucitel')";
            $query_run = mysqli_query($conn, $query);
            
            if ($query_run) {
                $_SESSION['status'] = "Uloženo";

                header("location:dostupnost.php");
            } else {
                $_SESSION['status'] = "Neuloženo";
                header("location:dostupnost.php");
            }
        } else {
            $_SESSION['status'] = "Tato hodina je již obsazena, prosím zvolte jinou hodinu";
            header("location:dostupnost.php");
        }
    }
}



?>