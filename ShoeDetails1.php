<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Details</title>
    <link rel="stylesheet" href="./shoeDetails.css">
</head>
<body>
    
    <?php
    $categoryErr=$colorErr=$heightErr=$widthErr=$materialErr="";
    $category=$color=$height=$width=$material="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $category= test_input($_POST["category"]);
        $color = test_input($_POST["color"]);
        $height = test_input($_POST["height"]);
        $width = test_input($_POST["width"]);
        $material = test_input($_POST["material"]);



    /*if(empty($_POST["category"])){
        $categoryErr="Select a category";
    }else{
        $category=test_input($_POST["category"]);
    }

    if(empty($_POST["color"])){
        $colorErr="Select one color";
    }else{
        $color=test_input($_POST["color"]);
    }

    if(empty($_POST["height"])){
        $heightErr="Enter your foot height";
    }else{
        $height=test_input($_POST["height"]);
    }

    if(empty($_POST["width"])){
        $widthErr="Enter your foot width";
    }else{
        $width=test_input($_POST["width"]);
    }

    if(empty($_POST["material"])){
        $materialErr="Select a material";
    }else{
        $material=test_input($_POST["material"]);
    }*/
    
}

function test_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>



    <section class="details" id="details">
        <h1 class="heading">Shoe Details</h1>
        <div class="row">

            <div class="image">
                <img src="./Images/image/shoes1.png" alt="shoe-2">
            </div>

            <fieldset>
                <h1>Nike Shoe</h1>
                <p>Shoe Type : <i> Men</i></p>
                <p>Available Colors : <i>You can Customize</i></p>
                <p>Available Size : <i>You can Customize </i></p>
                <p>Intended Use : <i>Formal wear, Sports</i></p>
                <p>Shoe Price :<strong style="background-color:yellow;"> $ 120.00</strong> </p>
                <a href="#designBy" class="btn">Customize</a>
            </fieldset>
            <a href="./home.html" class="back">Back to Home</a>
        </div>

    </section>

    <!--CUSTOMIZED-->
    <section class="designBy" id="designBy">
        <h1 class="heading">Design By You</h1>
            <div class="container">
                <div class="right">
                    <form id="shoe-form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <table>
                            <tr>
                                <td><label for="category">Category:</label></td>
                                <td>
                                    <input type="radio" id="men" name="category" value="Men" <?php if(isset($category) && $category=="men") echo "checked";?>>
                                    <label for="men">Men</label>        
                                    <input type="radio" id="women" name="category" value="Women" <?php if(isset($category) && $category=="women") echo "checked";?>>
                                    <label for="women">Women</label>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="color">Color:</label></td>
                                <td>
                                    <select id="color" name="color">
                                        <option value="Red">Red</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Gray">Gray</option>
                                        <option value="Black">Black</option>
                                        <option value="White">White</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="height">Foot Height (cm):</label></td>
                                <td><input type="number" id="height" name="height" value="<?php echo $height;?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="width">Foot Width (cm):</label></td>
                                <td><input type="number" id="width" name="width" value="<?php echo $width;?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="material">Material:</label></td>
                                <td>
                                    <select id="material" name="material">
                                        <option value="Leather">Leather</option>
                                        <option value="Canvas">Canvas</option>
                                        <option value="Suede">Suede</option>
                                        <option value="Synthetic">Synthetic</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="quatity">Quantity :</label></td>
                                <td><input type="number" id="quantity" name="quantity" value="<?php echo $quantity;?>" required></td>
                            </tr>
                        </table>
                            <button type="submit" class="btnCustom">Order Now</button>
                            
                    </form>
                </div>
            </div>
    </section>
    

</body>
</html>