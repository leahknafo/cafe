<?php
require_once './coffee-bl.php';
require_once './category-bl.php';
$bl = new BusinessLogicCoffee;
$cbl = new BusinessLogicCategory;
$path='images/';
if(!empty($_FILES['input'])){
move_uploaded_file($_FILES['input']['tmp_name'],$path.$_FILES['input']['name']);
};
if (!empty($_POST['productName']) && !empty($_POST['productCategory']) &&  !empty($_POST['productPrice']) && !empty($_POST['productAmount']) && !empty($_POST['productDate'])) {
    $coffee = new CoffeeModel([
        'product_name' =>  $_POST['productName'],
        'product_category' => $_POST['productCategory'],
        'product_price' => $_POST['productPrice'],
        'product_amount' => $_POST['productAmount'],
        'product_picture' => $path.$_FILES['input']['name'],
        'product_date' => $_POST['productDate']
    ]);
 
    $bl->set($coffee);
}
$arrayOfCoffee = $bl->get();
$arrayOfCategory = $cbl->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add flight</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
        
</head>
<body>
<header>
                <nav class="navbar navbar-default">
                        <div class="container-fluid">
                          <div class="navbar-header">
                            <a class="navbar-brand" href="#">coffee</a>
                          </div>
                          <ul class="nav navbar-nav">
                            <li><a href="coffee-add.php">add product</a></li>
                            <li><a href="coffee-get-all-products.php">get-all-products.php</a></li>
                            <li><a href="report-view.php">get reports</a></li>
                          </ul>
                        </div>
                      </nav>
                    </header>
                    <div class='container'>
                    <form action='<?php echo basename($_SERVER['PHP_SELF']); ?>' method='POST' enctype="multipart/form-data" >
                    <h2>add new product</h2>
                    <div class="row">
                    <div class="form-group col-lg-2">
                    <label>name
                        <input type="text" class="form-control" id="usr" name="productName">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-2">
                    <label>category
                    <select class="form-control" id="sel1" name="productCategory">
                                    <?php foreach ($arrayOfCategory as $item) { ?>
                                            <option value='<?php echo $item->getCategoryId()?>'><?php echo $item->getCategoryName() ?></option>
                                            <?php } ?>
                                          </select>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-2">
                    <label>price
                        <input type="number" class="form-control" id="usr" name="productPrice">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-2">
                    <label>amount
                        <input type="number" class="form-control" id="usr" name="productAmount">
                        </label>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-lg-2">
                <label>product picture
                <input type="file" class="form-control" id="usr" name='input'>
                </label>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-2">
                    <label>date
                        <input type="date" class="form-control" id="usr" name="productDate">
                        </label>
                    </div>
                </div>
                <button name='send' type="submit" class="btn btn-default">add</button>
                    
                                        

                            </form>
                            </div>
    
</body>
</html>