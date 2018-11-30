  <?php
    $time=0;
 include("DB.php");
   if(isset($_POST['submit'])){
       $destination=$_POST['A'];
       $type=$_POST['type'];
       $source=$_POST['source'];

      $q="select * from trains where destination=? AND type=?";
      $q2="select * from trains where destination=?";
      $r1=$db->getRow("select * from station where name=?",array($source));
      $r2=$db->getRow("select * from station where name=?",array($destination));


        if($r1[0]<$r2[0]){  
          if($type=="All"){
            $rows= $db->getRows($q2,array('aswan'));

          }
           else{
     $rows= $db->getRows($q,array('aswan',$type));

             }
     }
       else{
             if($type=="All"){
            $rows= $db->getRows($q2,array('cairo'));
          }
           else{
     $rows= $db->getRows($q,array('cairo',$type));
             }
       }
   }
       echo "<table align='center'><tr><th>train number</th>
         <th>source</th>
          <th>destination</th>
           <th>type</th>
            <th>sourrce time</th>
             <th>destination time</th>
       ";
       foreach($rows as $row){
          echo "<tr>
              <td>$row[0]</td>
               <td>$source</td>
                <td>$destination</td>
                 <td>$row[3]</td>
                  <td>$row[4]</td>
                   <td>$row[5]</td>
          </tr>";
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
                 background-image:url(bg1.jpg);
                 background-size: cover;
             }

                  </style>
              <head>
       </html>
