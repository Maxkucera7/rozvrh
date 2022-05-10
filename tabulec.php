<!DOCTYPE html>
<html>

<head>
    <style>
        th {
            text-align: center;
            height: 50px;
            width: 7.27%;
        }
        
        td {
            text-align: left;
            height: 100px;
            padding-left: 1%
        }
    </style>
    <meta charset="utf-8">
</head>
<?php
include "db_conn.php";
$sql= "SELECT * FROM tabulka";
$records=mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_array($records)){
array_push($data,$row);
}

$pondeli=array();
$utery=array();
$streda=array();
$ctvrtek=array();
$patek=array();
foreach($data as $dat) #každou hodnotu z data bude dat 
{
    if($dat[0]=="po")array_push($pondeli,$dat);
    if($dat[0]=="ut")array_push($utery,$dat);
    if($dat[0]=="str")array_push($streda,$dat);
    if($dat[0]=="ct")array_push($ctvrtek,$dat);
    if($dat[0]=="pa")array_push($patek,$dat);

}
sort($pondeli);
sort($utery);
sort($streda);
sort($ctvrtek);
sort($patek);


?>
<body>
    <table border="5" cellspacing="0" align="center" width="79.97%">
        <thead>
        <tr>
            <th>
                <br><b>Den/Hodina</b>
            </th>
            <th>
                <b>1<br>8:00-8:45</b>
            </th>
            <th>
                <b>2<br>8:55-9:40</b>
            </th>
            <th>
                <b>3<br>9:55-10:40</b>
            </th>
            <th>
                <b>4<br>10:50-11:35</b>
            </th>
            <th>
                <b>5<br>11:40-12:25</b>
            </th>
            <th>
                <b>6<br>12:30-13:15</b>
            </th>
            <th>
                <b>7<br>13:20-14:05</b>
            </th>
            <th>
                <b>8<br>14:10-14:55</b>
            </th>
            <th>
                <b>9<br>14:55-15:15</b>
            </th>
            <th>
                <b>10<br>15:20-16:05</b>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="text-align: center; padding:0">
                <b>Pondělí</b>
            </td>
            <?php
$last=0;
foreach($pondeli as $hod)
{
    for($i=1+$last;$i<=10;$i++)
    {   
    if($hod[1]==$i){
        echo"<td bgcolor=\"#04AA6D\"><b>".$hod[3]."<br>".$hod[2]."</b></td>";
        $last=1;
        break;
    }
else{
echo"<td></td>";
}
    }
}
for($i=1+$last;$i<=10;$i++);
{
    echo"<td></td>";

}

?>
        </tr>
        <tr>
            <td style="text-align: center; padding:0">
                <b>Úterý</b>
            </td>
            <?php
$last=0;
foreach($utery as $hod)
{
    for($i=1+$last;$i<=10;$i++)
    {   
    if($hod[1]==$i){
        echo"<td bgcolor=\"#04AA6D\"><b>".$hod[3]."<br>".$hod[2]."</b></td>";
        $last=1;
        break;
    }
else{
echo"<td></td>";
}
    }
}
for($i=1+$last;$i<=10;$i++);
{
    echo"<td></td>";

}

?>
        </tr>
        <tr>
            <td style="text-align: center; padding:0">
                <b>Středa</b>
            </td>
            <?php
$last=0;
foreach($streda as $hod)
{
    for($i=1+$last;$i<=10;$i++)
    {   
    if($hod[1]==$i){
        echo"<td bgcolor=\"#04AA6D\"><b>".$hod[3]."<br>".$hod[2]."</b></td>";
        $last=1;
        break;
    }
else{
echo"<td></td>";
}
    }
}
for($i=1+$last;$i<=10;$i++);
{
    echo"<td></td>";

}

?>
        </tr>
        <tr>
            <td style="text-align: center; padding:0">
                <b>Čtvrtek</b>
            </td>
            <?php
$last=0;
foreach($ctvrtek as $hod)
{
    for($i=1+$last;$i<=10;$i++)
    {   
    if($hod[1]==$i){
        echo"<td bgcolor=\"#04AA6D\"><b>".$hod[3]."<br>".$hod[2]."</b></td>";
        $last=1;
        break;
    }
else{
echo"<td></td>";
}
    }
}
for($i=1+$last;$i<=10;$i++);
{
    echo"<td></td>";

}

?>
        </tr>
        <tr>
            <td style="text-align: center; padding:0">
                <b>Pátek</b>
            </td>
            <?php
$last=0;
foreach($patek as $hod)
{
    for($i=1+$last;$i<=10;$i++)
    {   
    if($hod[1]==$i){
        echo"<td bgcolor=\"\"><b>".$hod[3]."<br>".$hod[2]."</b></td>";
        $last=1;
        break;
    }
else{
echo"<td></td>";
}
    }
}
for($i=1+$last;$i<=10;$i++);
{
    echo"<td></td>";

}

?>
        </tr>
</tbody>
    </table>
</body>

</html>