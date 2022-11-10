<?php
require_once('public/data.php');
require_once('public/menu.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECsite</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <div class="container">
          <div class="nav">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav nav-right">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled">Disabled</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="header-img">
        <h1 class="header-title">EC Site</h1>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <h1 class="con-title">contents</h1>
      <?php foreach ($menus as $menu): ?>
      <div class="contents">
        <img src="<?php echo $menu->getImage() ?>" alt="">
        <div class="con-text">
          <div class="menu-name">
            <h4><?php echo $menu->getName() ?></h4>
            <h5>¥<?php echo $menu->getPrice() ?></h5>
          </div>
          <p>.text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text</p>
          <a href="show.php"><button>詳しくはこちら</button></a>
        </div>
        <div class="con-text">
        <div class="menu-name">
            <h4>クリームパン</h4>
            <h5>¥300</h5>
          </div>
          <p>.text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text..text</p>
          <a href="show.php"><button>詳しくはこちら</button></a>
        </div>
        <img src="img/anpan.jpg" alt="">
      </div>
      <?php endforeach; ?>
    </div>
  </main>



  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>