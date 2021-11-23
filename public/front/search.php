<?php include_once 'connect.php'; ?>

<?php
if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $search)){

    $search = htmlspecialchars(strtolower($_POST['search']));
    
    $stmt = $db->prepare("SELECT * FROM search WHERE search = :search"); 
    $stmt->bindParam(':search', $search_wild);
    $search_wild = $search;
    $stmt->execute();
    $word = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ( count($word) == 0 ){

        $stmt1 = $db->prepare("INSERT INTO search (search,quantity) VALUES ( :search1, :quantity )"); 
        $stmt1->bindParam(':search1', $search1);
        $stmt1->bindParam(':quantity', $quantity);
        $search1 = $search;
        $quantity = "1";
        $stmt1->execute();
        $stmt1 = null; 

    }else{
        
        $quantity1 = (int)$word[0]['quantity'];
        $quantity1 +=1;
        $stmt2 = $db->prepare("UPDATE search SET quantity= :quantity WHERE id= :id");   
        $stmt2->bindParam(':quantity', $q);
        
        $stmt2->bindParam(':id', $id);
        $q = $quantity1;
        $id = $word[0]['id'];
        $stmt2->execute();
        $stmt2 = null;

    }

    $stmt = null;
    $db = null;
}
?>