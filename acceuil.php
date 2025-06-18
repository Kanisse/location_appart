
<?php 
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<style>
  body{
    background-color:#FFA;
}
.details {
            border: 1.5px solid grey;
            color: #212121;
            width: 100%;
            height: auto;
            box-shadow: 0px 0px 10px #212121;
        }

        .cart {
            background-color: #212121;
            color: white;
            margin-top: 10px;
            font-size: 12px;
            font-weight: 900;
            width: 100%;
            height: 39px;
            padding-top: 9px;
            box-shadow: 0px 5px 10px  #212121;
        }

        .card {
            width: fit-content;
        }

        .card-body {
            width: fit-content;
        }

        .btn {
            border-radius: 0;
        }

        .img-thumbnail {
            border: none;
        }

        .card {
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            border-radius: 5px;
            padding-bottom: 10px;
        }
</style>
  </head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
<?php
    $st =$pdo -> query("SELECT * FROM apartments where is_available =1");
    while ($row = $st -> fetch (PDO::FETCH_ASSOC)){
    $id = $row['id'];
  $st1 = $pdo -> 
  query("select * from apartment_photos 
  where apartment_id= $id");
  $row1 = $st1 -> fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="card col-md-3 col-sm-6 col-10 m-3">
    <img class='mx-auto img-thumbnail'
          src="images/<?php echo $row1["photo_url"] ?>"
  width="300px" height="200px"/>
  <div class="card-body text-center mx-auto">
                <div class='cvp'>
                    <h5 class="card-title font-weight-bold"><?php echo $row["title"]; ?></h5>
                    <p class="card-text">$<?php echo $row["price_per_night"]; ?></p>
                    <a href="details.php?id=<?php echo $row["id"]; ?>" class="btn details px-auto">view details</a><br />

                    <a href="reserver.php?id=<?php echo $row["id"]; ?>" class="btn cart px-auto">Reserver</a>
                </div>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>


</body>
</html>