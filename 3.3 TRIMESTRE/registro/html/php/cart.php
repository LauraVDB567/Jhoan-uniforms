<?php
session_star();


if(isset($_SESSION['carrito'])|| isset($_POST['titulo'])){
    if(isset($_SESSION['carrito'])){
        $carrito_mio=$_SESSION['carrito'];
         if isset($_POST['titulo']){

            $titulo=$_POST['titulo'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];
            $ref=$_POST['ref'];
            $donde=1;


            if($donde != -1){
                $cuanto=$carrito_mio[$donde]['cantidad']+ $cantidad;
                $carrito_mio[$donde]=array("titulo"=>$titulo,"precio"=> $precio, "cantidad" => $cuanto, "ref" => $ref);

            }else{
                $carrito_mio[]=array("titulo"=>$titulo, "precio"=> $precio, "cantidad" => $cantidad, "ref" =>ref);

            }
    }
}else{

    $titulo=$_POST ['titulo'];
    $precio=$_POST ['precio'];
    $cantidad=$_POST ['cantidad'];
    $ref=$_POST['ref'];
    $carrito_mio[]=array ("titulo"=>$titulo, "precio"=> $precio, "cantidad" => $cantidad, "ref" => $ref);

    
}

$_SESSION['carrito']=$carrito_mio;

}

header("location: ". $_SERVER['HTTP_REFERER']."");
?>