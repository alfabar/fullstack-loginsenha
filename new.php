<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
<body ng-app="myModule" ng-controller="myController">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Simple Image Upload Using PDO</h3>
        <hr style="border-top:1px dotted #ccc;">
        <div class="col-md-3">
            <form method="POST" enctype="multipart/form-data" action="upload.php">
                <div class="form-group">
                    <label>Upload here</label>
                    <input name="image" type="file" class="form-control" required="required"/>
                </div>
                <center><button class="btn btn-primary" name="upload">Upload</button></center>
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead class="text-info">
                    <tr>
                        <th>Image Name</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once 'database_connection.php';
 
                        $sql = "SELECT * FROM `image`";
                        $query = $conn->prepare($sql);
                        $query->execute();
 
                        while($fetch = $query->fetch()){
                    ?>
 
                    <tr>
                        <td><?php echo $fetch['image_name']?></td>
                        <td><?php echo $fetch['location']?></td>
                        <td><img src="<?= $fetch['location']; ?>" width="500px" alt=""></td>
                    </tr>
 
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>	
</html>