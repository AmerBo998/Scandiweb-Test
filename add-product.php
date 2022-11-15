<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<link rel="stylesheet"  href="css/style.css">
<script src="js/script.js" ></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>
<body>

<div class="header">
    <div class="wrapper">
    <p class="title">Add product</p>
    <div class='btns'>
        <button class="mass_del" type='submit' form="product_form" style="width:fit-content;margin-right:20px;">Save</button>
        <a href="index.php" class="add_btn">Cancel</a></div>
    </div>
</div>
<hr>


<form id="product_form" action="actions/adding.php" method='POST'>
    <li>
        <label>SKU</label><input type='text' name="sku" id="sku" ><br>
            <span class="error"></span>
    </li>
<li>
    <label>Name</label>
        <input type='text' name="name" id="name" ><br>
            <span class="error"></span>
</li>
<li>
    <label>Price ($)</label>
        <input type='text' name="price" id="price" ><br>
            <span class="error"></span>
</li>
<br><br>
<label style="width:150px;" for="product_form" >Type switcher:</label>
    <select style="width:140px;" name="productType" id="productType" form="product_form" 
    method='POST' onchange="change()"  required >
        <option disabled selected>Type switcher</option>
        <option value="DVD" >DVD</option>
        <option value="Furniture" >Furniture</option>
        <option  value="Book" >Book</option>
  
    </select>
<br><br>
<div id="DVD">
    <li>
        <label>Size (MB)</label>
            <input type='text' name="size" id="size" ><br> 
                <span class="error"></span></li><br>
                    <span class="description">Please, provide disc size in MB.</span>
</div>
<div id="Furniture">
    <li>
        <label>Height (CM)</label>
            <input type='text'  name="height" id="height"  ><Br> 
                <span class="error"></span>
    </li>
<li>
          <label>Width (CM)</label>
              <input type='text' name="width" id="width" ><Br> 
                  <span class="error"></span>
</li>
<li>
     <label>Length (CM)</label>
         <input type='text' name='length' id="length" ><Br> 
             <span class="error"></span>
</li><br>
    <span class="description">Please, provide dimensions in HxWxL format.</span>
</div>
<div id="Book">
    <li>
         <label style="width:120px;">Weight (KG)</label>
             <input type='text'  name="weight" id="weight" /><Br> 
                 <span class="error"></span>
    </li>
<br>
    <span class="description">Please, provide book weight in KGs.</span>
</div>
</form><br><br>
<hr>
<div class="footer">Scandiweb test assignment</div>
    
</body>
</html>