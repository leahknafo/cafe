<?php
    require_once './coffee-bl.php';
    $bl = new BusinessLogicCoffee;
    if (!empty($_POST['erase'])) {
      $bl->delete($_POST['erase']);  
    }
    $arrayOfCoffee = $bl->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
        <link href="project.css" rel="stylesheet"/>
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
                    <main>

 <div class="container"> 
 <form action='<?php echo basename($_SERVER['PHP_SELF']); ?>'method='POST'>          
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>name</th>
                              <th>category</th>
                              <th>price</th>
                              <th>amount</th>
                              <th>picture</th>
                              <th>date</th>
                              <th>delete</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($arrayOfCoffee as $item) { ?> 
                            <tr>
                            <td><?php echo $item->getProductId()?></td>
                            <td><?php echo $item->getProductName()?></td>
                            <td><?php echo $item->getProductCategory()?></td>
                              <td><?php echo $item->getProductPrice() ?>$</td>
                              <td><?php echo $item->getProductAmount() ?></td>
                              <td>
	<img src="<?php echo $item->getProductPicture() ?>" style="width:100px; height:100px;"/>
	</td>
                              <td><?php echo $item->getProductDate() ?></td>
                              <td><button value='<?php echo $item->getProductId() ?>' name='erase'>delete</button></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        </form> 
                      </div>
                    </main>
                  
                   
    
</body>
</html>