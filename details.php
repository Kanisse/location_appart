<?php include("db.php");  
$id = $_GET['id'];
$st =$pdo -> query("SELECT * FROM  apartments WHERE id = $id");
$row =$st -> fetch(PDO::FETCH_ASSOC);
$ida= $row["id"];
$st1 =$pdo -> query("SELECT * FROM  apartment_photos WHERE apartment_id = $id");
$row1 =$st1 -> fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<style>
    body{
    background:#E0E0E0;
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
<div class='container-fluid'>
        <div class="card mx-auto col-md-6 col-10 mt-5">
            <img class='mx-auto img-thumbnail'
                src="images/<?php echo $row1["photo_url"]; ?>"
                width="auto" height="auto"/>
            <div class="card-body text-center mx-auto">
                <div class='cvp'>
<h5 class="card-title font-weight-bold">
    <?php echo $row["title"]; ?></h5>
    <h5 class="card-title font-weight-bold">
    <?php echo $row["area_m2"]; ?> m2</h5>
    <h5 class="card-title font-weight-bold">
   number of rooms :  <?php echo $row["number_of_rooms"]; ?></h5>
<p class="card-text">$<?php echo $row["price_per_night"]; ?></p>
<a href="#" class="btn cart px-auto">Reserver</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
">