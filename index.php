<?php

$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'akedo';
$password = 'doraminG23!';
try {
    $dbh = new PDO($dsn, $user, $password);
  	
  	$sql = "select * from sample;";
	$result = $dbh -> query($sql);
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}	
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INDEX</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fruir">
            <div class="nav-header">
                <a class="navbar-brand" href="index.html">LAMP SAMPLE PAGE</a>
            </div>
        </div>
    </nav>

    <div class="jambotoron jambotoron-fluid">
        <div class="container">
            <h1 class="display-4">
                DB Manager -sample_db-
            </h1>
            <p class="read">
                LAMP環境を構築し、データベース管理webアプリを作成しています。<br>デザインはBootstrapを使用
            </p>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#select" class="nav-link active" data-toggle="tab">select</a>
            </li>
            <li class="nav-item">
                <a href="#insert" class="nav-link" data-toggle="tab">insert</a>
            </li>
            <li class="nav-item">
                <a href="#update" class="nav-link" data-toggle="tab">update</a>
            </li>
            <li class="nav-item">
                <a href="#delete" class="nav-link" data-toggle="tab">delete</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="select">
                <table class="table table-hover mt-3">
                    <caption>Sample DB show user table</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php foreach($result as $value){ ?>
                        <tr>
                            <th><?php echo '$value[id]'; ?></th>
                            <td><?php echo '$value[name]'; ?></td>
                            <td><?php echo '$value[age]'; ?></td>
						</tr>
						<?php}?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="insert">
                <p>sample tabs2</p>
            </div>
            <div class="tab-pane" id="update">
                <p>sample tabs3</p>
            </div>
            <div class="tab-pane" id="delete">
                <p>sample tabs4</p>
            </div>
        </div>

    </div>

    

</body>

</html>