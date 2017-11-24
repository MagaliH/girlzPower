<?php


function lulu($pdo, $p){
$perPage = 5;
$req = $pdo->query("SELECT COUNT(*) AS total FROM films");
$result =$req->fetch();
$total = $result['total'];

$nbPage = ceil($total/$perPage);
    
 
if(isset($p) && !empty($p) && ctype_digit($p) == 1){
    if($p >$nbPage){
        
        $current = $nbPage;
        
    }else{
        $current =$p;
    }
}else{
    $current = 1;
}  
   
    $firstOfPage = ($current-1)*$perPage;
    
    $reqFilms = $pdo->query("SELECT*FROM films ORDER BY id_film ASC LIMIT $firstOfPage, $perPage");
    $films = $reqFilms->fetchAll();
    var_dump($films);
}


?>