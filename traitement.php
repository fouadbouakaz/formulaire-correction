<?php


var_dump($_FILES);



// on verifie si c'est une methode POST 
var_dump($_SERVER["REQUEST_METHOD"]);
var_dump($_POST);
if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["submit_btn"])){
    // ...on continue ...
    if($_FILES ["fichier"]["error"]!==0) {
        die; 
    // avec le else on l'ecrit de de cette maniere 
    }  
    $sizeMax = 2* 1_048-576;  //2mo
    if($_FILES["fichier"]["size"]>$sizeMax){
        die; //on stoppe
    }
} 
// extension qu'on souhaite autorisée
$authorizedExt = [
    "jpg",
    "png",
    "webp"
];
// extension du fichier uploadé
$params = explode(".",$_FILES['fichier']['name']);
$extension = end($params); //jpg, png

// on va verifier si l'extension est autorisée
if(!in_array($extension,$authorizeExt)){
    die;
}
?>