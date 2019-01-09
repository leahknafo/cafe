<?php
    require_once 'bl-report.php';
    require_once 'report-html-helper.php';
    
    $blr = new BusinessLogicReports;
    $rhh = new ReportsHtmlHelper;
    $resultsArray = $blr->categoryAmountReport();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafe</title>
    <link href='node_modules/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
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
                            <li><a href="view-add.php">add product</a></li>
                            <li><a href="view-get-all-products.php">get-all-products.php</a></li>
                            <li><a href="view-report.php">get reports</a></li>
                          </ul>
                        </div>
                      </nav>
                    </header>
    <?php echo $rhh->categoryAmountReportHtml($resultsArray); ?>
</body>
</html>