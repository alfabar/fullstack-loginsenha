<?php	
    require_once 'database_connection.php';
 
    if(isset($_POST['upload'])){
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];
        $allowed_ext = array("jpeg", "jpg", "gif", "png");
        $exp = explode(".", $file_name);
        $ext = end($exp);
        $path = "upload/".$file_name;
        if(in_array($ext, $allowed_ext)){
            if(move_uploaded_file($file_temp, $path)){
                try{
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO `image`(image_name, location)  VALUES ('$file_name', '$path')";
                    $conn->exec($sql);
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
 
                $conn = null;
                echo "<center><h3 class='text-danger'>Erro ao carregar</h3></center>";
                //header('location: index.php');
            }
        }else{
            echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
        }
    }
    
?>