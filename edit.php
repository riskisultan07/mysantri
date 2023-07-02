<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "absensi asrama";

// create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$email = "";
$phone = "";
$adrees = "";


$errormessage ="";
$successmessage ="";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
   // GET METHOD Shoe the data of the client

   if ( !isset($_GET["id"]) ) {
    header("location: /myshop/index.php");
    exit;
   }

   $id = $_GET["id"];

   // read the row of the selected client from database table
   $sql = "SELECT * FROM client WHERE id=$id";
   $result = $connection->query($ql);
   $row = $result->fetch_assoc();

   if(!$row) {
    header("location: /myshop/index.php");
    exit;   
    }

    $name = "";
    $nis ="";
    $alamat ="";
}
    else {
        //POST method: update the data of the clint

        $Nama = $_POST["nama"];
        $nis = $_POST["nis"];
        $alamat = $_POST["alamat"];
    


    do {
        if (empty($name) || empty($Nis) || empty($Asrama) )  {
            $errormessage = "All the frieds are required";
            break; 
       }
       
       $sql ="UPDATE clients " .
             "SET name = '$name', email = '$email', phone ='$phone', adress ='$addres'".
             "WHERE id = $id";
             
        $result = $connection->query($sql);

        if (!$result) {
            $errormessage = "invalid query correctly";

        }
         $succesmessage  = "client updated correctly";  
        
         header("location: /myshop/index.php");
        exit;

        }  while (true);
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="styleshee" hreft="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Data santri</h2>

        <?php
        if ( !empty($errormessage) ) {
            echo "
            <div class='alert alert-warning alert-dismissble fade show' role='alert'>
                 <strong>$errormessage</strong>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label=close'<
            </div>
            ";
        }

        ?>

        <form method="post">
            <input type="hidden" value="<?php echo $id; ?>">
            <div class="row mb-3">
            <label class="col-sm3 col-form-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm3 col-form-label">Nis</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="Nis" value="<?php echo $Nis; ?>">
                  </div>
                </div>                
                <div class="row mb-3">
                     <label class="col-sm3 col-form-label">Asrama</label>
                     <div class="col-sm-6">
                       <input type="text" class="form-control" name="Asrama" value="<?php echo $Asrama; ?>"> 
                     </div>
                </div>
<?php
if ( !empty($succesmessage) ) {
    echo "
    <div class='row mb-3'>
    <div class='offset-sm-3 col-sm-3 col-sm-6'>
    <div class='alert alert-warning alert-dismissble fade show' role='alert'>
                 <strong>$successmessage</strong>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label=close'<
              </div>
            </div>
        </div>
            ";
}
?>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">submit<button>
                    </div>
                     <div class="col-sm-3 d-grid">
                         <a class="btn btn-primary" href="/myshop/index.php" role="button">cancel</button>
                </div>
                </div>
           </form>  
    </div>
</body>
</html>