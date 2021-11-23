<?php 
 require_once 'connect.php';

   $query = "SELECT DISTINCT(`search`) , `quantity`  FROM `search` ORDER by `quantity` DESC limit 20 ";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo "  <table >
  <tr>
    <th colspan='3'>TOP 20 axtaris</th>
    
   
  </tr>
  <tr>
    <th>#</th>
    <th>Axtarilas soz</th>
    <th>Say</th>
   
  </tr>";
  $i =1;
  foreach($rows as $row){
    echo " <tr>
        <td>" . $i++."</td>
        <td>" .$row['search']."</td>
        <td>". $row['quantity']."</td>
    </tr>";
 }
 echo " </table>";


   



?>

<style>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
table, th, td {
  border: 1px solid black;
}



</style>