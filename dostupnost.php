<?php session_start();?>


<!DOCTYPE html>
<html>
  <head>
    <title>Rozvrh</title>
    <link rel="stylesheet" href="design.css" text="text/css">
    <meta charset="utf-8">
  </head>
<body>

<?php
if(isset($_SESSION['status']))
{
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}  
{  //echo "<h4>".$_SESSION['dump']."</h4>";
}  
?>

    <form action="vyplneni.php" method="post">
<div class="container">
<br><label for="den"> Zvolte den </label>
  <select id="den" name="den">
        <option value="0">Vyberte den</option>
        <option value="po">Pondělí</option>
        <option value="ut">Úterý</option>
        <option value="str">Středa</option>
        <option value="ct">Čtvrtek</option>
        <option value="pa">Pátek</option>
</select>


<br><label for="hodina"> Zvolte Hodinu</label>
  <select id="hodina" name="hodina">
        <option value="0">Vyberte hodinu</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
        <option value="4">4</option>
         <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
</select>

<br><label for="místnost"> Zvolte místnost</label>
  <select id="mistnost" name="mistnost">
        <option value="0"> Vyberte učebnu</option>
      <option value="D104">D104</option>
      <option value="D105">D105 </option>
      <option value="D106">D106 </option>
      <option value="D110">D110 </option>
      <option value="D112">D112 </option>
      <option value="D202">D202 </option>
      <option value="D203">D203 </option>
      <option value="D204">D204 </option>
      <option value="D205">D205 </option>
      <option value="D206">D206 </option>
      <option value="D207">D207 </option>
      <option value="D208">D208 </option>
      <option value="D209">D209 </option>
      <option value="D302">D302 </option>
      <option value="D303">D303 </option>
      <option value="D304">D304 </option>
      <option value="D305">D305 </option>
      <option value="D310">D310 </option>
      <option value="D312">D312 </option>
      <option value="H002">H002 </option>
      <option value="H003">H003 </option>
      <option value="H004">H004 </option>
      <option value="H011">H011 </option>
      <option value="H012">H012 </option>
      <option value="H101">H101 </option>
      <option value="H102">H102 </option>
      <option value="H103">H103 </option>
      <option value="H104">H104 </option>
      <option value="H011">H011 </option>
      <option value="H012">H012</option>
      <option value="H101">H101 </option>
      <option value="H102">H102 </option>
      <option value="H103">H103 </option>
      <option value="H104">H104 </option>
      <option value="H107">H107 </option>
      <option value="H108">H108 </option>
      <option value="H109">H109 </option>
      <option value="H110">H110 </option>
      <option value="H202">H202 </option>
      <option value="H203">H203 </option>
      <option value="H204">H204 </option>
      <option value="H206">H206 </option>
      <option value="H207">H207 </option>
      <option value="H210">H210 </option>
      <option value="H211">H211 </option>
      <option value="H212">H212 </option>
      <option value="H302">H302 </option>
      <option value="H303">H303</option>
      <option value="H304">H304 </option>
      <option value="H307">H307 </option>
      <option value="H310">H310 </option>
      <option value="H311">H311 </option>
      <option value="H312">H312 </option>
      <option value="SA">SA</option>
      <option value="SH">SH </option>
   
      
      
      </select> 
      <?php 
      

      echo "<input name='ucitel' value=".$_SESSION['user_name']." hidden>";

?>
      <br><button type="submit" name="save_select">uložit změny</button><br>
</div>
</form>
<div style="text-align: center"><a href="home.php">Vrátit se zpět</a></div> 

  </body>
</html>
