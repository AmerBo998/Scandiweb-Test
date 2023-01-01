<?php 
include_once("classes/getdata.php");    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
</head>
<body>
    
<div class="header">
    <div class="wrapper">
    <p class="title">Product list</p>
    <div class="btns"><a href="add-product.php" class="add_btn">ADD</a>
        <button class="mass_del" type='submit' id="delete-product-button"  form="mass_delete">MASS DELETE</button></div>
    </div>
</div>
<hr>
<form id='mass_delete' action="actions/delete.php" method="POST">
<?php 

$product=new GetData();
$product->showData();

?>

<hr>
<div class="footer">Scandiweb test assignment</div></form>


</body>
</html>