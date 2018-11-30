<?php
    include ('DB.php');

   if (isset($_POST['submit'])){
       $source=$_POST['source'];
       $destination=$_POST['A'];
       $type=$_POST['type'];


       echo "<table align='center'><tr>
             <th>source</th>
              <th>destination</th>
               <th>type</th>
                <th>car number:</th>
                 <th>seat number:</th>
       ";
        $count=1;
        $c=0;
         if ($c<101){
             $db->insertRow('insert into res(state)value(?)',array(1));
            $rows= $db->getRows('select * from res');
            foreach ($rows as $row){
               $c= $row[0];
            }
             $count +=1;

             if ($c <21){
                 echo "<tr>
              <td>$source</td>
               <td>$destination</td>
                <td>$type</td>
                 <td>1</td>
                   <td>$c</td>
          </tr>";

             }
             elseif ($c >20 & $c <41){
                 echo "<tr>
              <td>$source</td>
               <td>$destination</td>
                <td>$type</td>
                 <td>2</td>
                   <td>$c</td>
          </tr>";

             }

             elseif ($c >40 & $c <61){
                 echo "<tr>
              <td>$source</td>
               <td>$destination</td>
                <td>$type</td>
                 <td>2</td>
                   <td>$c</td>
          </tr>";

             }
       }
   }
?>

<html>
<head>
    <style>
        table th {
            padding: 10px;
            background-color: #48577D;
            color: #fff;
            text-align: left;
        }
        table td {
            padding: 5px;
        }
        table tr {
            background-color: #d3dcf2;
        }
        body{
            background-image:url(2.jpg);
            background-size:cover;

        }

    </style>
    <head>
</html>

