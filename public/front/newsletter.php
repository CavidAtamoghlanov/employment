<?php include_once 'connect.php'; ?>

<?php
    $newsletter = htmlspecialchars($_POST['newsletter']);
    if (!filter_var($newsletter, FILTER_VALIDATE_EMAIL)) {
        echo "2";
        exit;
    }else{
        $stmt = $db->prepare("SELECT count(*) FROM newsletter WHERE email= :email"); 
        $stmt->bindParam(':email', $email);
        $email = $newsletter;
        $stmt->execute();
        $rowcount = $stmt->fetchColumn(); 
        $stmt = null;
    
        if( $rowcount == 0 ){
            $stmt1 = $db->prepare("INSERT INTO newsletter (email) VALUES ( :mail )"); 
            $stmt1->bindParam(':mail', $email1);
            $email1 = $newsletter;
            $stmt1->execute();
            $stmt1 = null;
            echo "1";
        }else{
            echo "0";
        }
    }
    $db = null;
?>