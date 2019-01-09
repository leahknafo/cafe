<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show products</title>
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
                            <li><a href="coffee-get-all-products.php">get-all-products</a></li>
                            <li><a href="category-get-all.php">get reports</a></li>
                          </ul>
                        </div>
                      </nav>
                    </header>
                    <main>
<?php
    require_once './category-bl.php';
    require_once './coffee-bl.php';
    $bl = new BusinessLogicCategory;
    $cbl = new BusinessLogicCoffee;
    
    $arrayOfCategory = $bl->get();
    $arrayOfCoffee = $cbl->get();
    
    
?>
 <div class="container">           
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>name</th>
                              <th>amount</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($arrayOfCategory as $item) { ?> 
                            <tr>
                            <td><?php echo $item->getCategoryName()?></td>
                            <?php foreach ($arrayOfCoffee as $item) { ?>
                            <td><?php echo $item->getProductAmount()?></td>
                            </tr>
                            <?php }} ?>
                            
                            
                          </tbody>
                        </table>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>name</th>
                              <th>price</th>
                              <th>picture</th>
                            </tr>
                          </thead>
                     
                        </table>
                      </div>
                    </main>
                  
                   
    
</body>
</html>