
<?php
    //get the data from the form
    $product_desciption = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');

    //caculate the discount and discountted price
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //apply current formartting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%"; 
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <div id="data">
        <label for="">Product Description:</label>
        <input type="text" name="product_descrption"><br>
        <label for="">List Price:</label> 
        <input type="text" name="list-prince"><br>
        <label for="Discount Percent:"></label>
        <input type="text" name="discount_percent"><span>%</span><br>
    </div>
    <div id="button">
        <label for="">&nbsp;</label>
        <input type="submit" value="caculate discount"><br>
    </div>
</form>
    <main>
        <h1>Product Discount</h1>
        
        <label for="">Product Descripton:</label>
        <span><?php echo htmlspecialchars($product_desciption); ?></span><br>

        <label for="">List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label for="">Standard Amount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label for="">Discount Amount</label>
        <span><?php echo $discount_f; ?></span>

        <label for="">Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span>
    </main>
</body>
</html>