<?php
$path = "arquivos/";
$directorio = dir($path);

echo "Lista de Arquivos no directório '<strong>".$path."</strong>':<br />";
while($arquivo = $directorio -> read()){
    if($arquivo != "." && $arquivo != ".."){
        echo "<a href='".$path.$arquivo."'>".$arquivo."<a/><br />";
    }
}
$directorio -> close();
?>