<!DOCTYPE html>
<html>

<head>
<title>OZGEN GIDA</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src=""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
    <!-- External Header Page -->
    <?php include("header.php"); ?>

    <div class="titleBody">
        <h2 class="heading">Hatay'dan gelen doğal lezzetler</h2>
        <p class="littleHeading">En taze, en doğal halleriyle ürünlerimiz...</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <a href="baharatlar.php">
                    <img src="images/spices.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Baharatlar</h5>
                    <p class="card-text">En taze haliyle...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="zeytin.php">
                    <img src="images/olive.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Zeytin</h5>
                    <p class="card-text">En yağlı haliyle...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="zeytinyağı.php">
                    <img src="images/oliveOil2.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Zeytinyağı</h5>
                    <p class="card-text">En en yağlı haliyle...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="salça.php">
                    <img src="images/salça.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Salça </h5>
                    <p class="card-text">En salça haliyle...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="kuruyemiş.php">
                    <img src="images/kuruyemiş.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Kuruyemiş</h5>
                    <p class="card-text">En kuru haliyle...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="yöreselÜrünler.php">
                    <img src="images/yöreselÜrünler.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Hatay Yöresel Ürünler</h5>
                    <p class="card-text">En yöresel haliyle...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="trendyolAdd">
        <h3 class="trendyolHeading">Mağazamızı Trendyol'da takip ediyor musunuz?</h3>
        <img src="images/trendyolLogo.svg" class="trendyolLogo">
        <h3><b><a class="trendyolHeading2" href="https://www.trendyol.com/magaza/ozgen-baharat-m-287075?sst=0">Hemen tıklayın, sipariş verin!</a></b></h3>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>