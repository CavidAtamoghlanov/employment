<?php
    header("Strict-Transport-Security:max-age=63072000");
    header("Referrer-Policy: no-referrer-when-downgrade");
    header('X-Content-Type-Options: nosniff');
    header("X-XSS-Protection: 1");
    header("X-Frame-Options: DENY");
    session_start();
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        if(isset( $_SESSION['token'] ) && $_SESSION['token'] === true){
            require_once 'connect.php';
            $rows = array();
            $rows1 = array();
            $rows2 = array();
            $search = htmlspecialchars($_POST['search']);
            $search = strtolower($search);
            $search1 = str_replace('e','ə',$search);
            
            if(preg_match('/[\'^£$%&*()}{@~?><>,|=_+¬]/', $search) == 0){
    

    $search_wildcard = "%$search%";
    $search_wildcard1 = "%$search1%";
    $query = "SELECT * FROM recruit WHERE job LIKE ? OR job LIKE ?
    UNION SELECT * FROM hellojob WHERE job LIKE ? OR job LIKE ?
    UNION SELECT * FROM progro WHERE job LIKE ? OR job LIKE ?
    -- UNION SELECT * FROM staffy WHERE job LIKE ? OR job LIKE ?
    UNION SELECT * FROM jobsearch WHERE job LIKE ? OR job LIKE ?

    UNION SELECT * FROM jobustan WHERE job LIKE ? OR job LIKE ?
    UNION SELECT * FROM offeraz WHERE job LIKE ? OR job LIKE ? 
    UNION SELECT * FROM boss	 WHERE job LIKE ? OR job LIKE ? 
    UNION SELECT * FROM azejob WHERE job LIKE ? OR job LIKE ?
    UNION SELECT * FROM busy WHERE job LIKE ? OR job LIKE ?


    UNION SELECT * FROM bancoaz WHERE job LIKE ? OR job LIKE ?
    UNION SELECT * FROM hcbaz WHERE job LIKE ? OR job LIKE ? 
    UNION SELECT * FROM positionaz WHERE job LIKE ? OR job LIKE ?
    ORDER BY id ASC , vip DESC";
    $params = array(
    
    // $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,

    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    
   
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1);
    $stmt = $db->prepare($query);
    $stmt->execute($params);

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null;
    if(strtolower($search) !== "hr"){
    $query = "SELECT * FROM recruit WHERE company LIKE   ? OR company LIKE ?
    UNION SELECT * FROM hellojob WHERE company LIKE   ? OR company LIKE ?
    UNION SELECT * FROM progro WHERE company LIKE ? OR company LIKE ?
    -- UNION SELECT * FROM staffy    WHERE company LIKE ? OR company LIKE ?
    UNION SELECT * FROM jobsearch WHERE company LIKE ? OR company LIKE ?

    UNION SELECT * FROM offeraz WHERE company LIKE ? OR company LIKE ?
    UNION SELECT * FROM boss WHERE company LIKE ? OR company LIKE ?
    UNION SELECT * FROM jobustan WHERE company LIKE ? OR company LIKE ?
    UNION SELECT * FROM azejob WHERE company LIKE ? OR job LIKE ?
    UNION SELECT * FROM busy WHERE company LIKE ? OR job LIKE ?

    -- UNION SELECT * FROM vakansiyaaz WHERE company LIKE ? OR company LIKE ?
    UNION SELECT * FROM positionaz WHERE company LIKE ? OR company LIKE ?  
    UNION SELECT * FROM hcbaz WHERE company LIKE ? OR company LIKE ?
    UNION SELECT * FROM bancoaz WHERE company LIKE ? OR company LIKE ?
    ORDER BY  id ASC ,vip,posted DESC ";
    $params = array(
    // $search_wildcard,$search_wildcard1,
    // $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,

    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,   

    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1);
    $stmt = $db->prepare($query);
    $stmt->execute($params);
    
    $rows1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;

    $query = "SELECT * FROM recruit WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM hellojob WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM progro WHERE job_descr LIKE ? OR job_descr LIKE ?
    -- UNION SELECT * FROM staffy WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM jobsearch WHERE job_descr LIKE ? OR job_descr LIKE ?

    UNION SELECT * FROM jobustan WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM offeraz WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM azejob WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM busy WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM boss WHERE job_descr LIKE ? OR job_descr LIKE ?

    -- UNION SELECT * FROM vakansiyaaz WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM positionaz WHERE job_descr LIKE ? OR job_descr LIKE ?  
    UNION SELECT * FROM hcbaz WHERE job_descr LIKE ? OR job_descr LIKE ?
    UNION SELECT * FROM bancoaz WHERE job_descr LIKE ? OR job_descr LIKE ?
    ORDER BY id ASC , vip,posted DESC ";
    $params = array(
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    // $search_wildcard,$search_wildcard1,

    // $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1, 
    $search_wildcard,$search_wildcard1, 
    $search_wildcard,$search_wildcard1, 
  
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1,
    $search_wildcard,$search_wildcard1);
    $stmt = $db->prepare($query);
    $stmt->execute($params);

    $rows2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;

    }
    header('Content-Type: application/json');
    echo json_encode(array_merge($rows,$rows1,$rows2));
    exit;
    }else{
    echo 1;
    exit;
    }
    }else{
    session_destroy();
    echo "505 Error";
    exit;
    }
    }else{
    echo "505 Error";
    session_destroy();
    exit;
    }
    $db = null;
    exit;
    ?>