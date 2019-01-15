<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сайт путешественника</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <?php include 'header.php'; ?>
            <h1>Фотографии из Парижа</h1>
            
            <div class="slider">
              <div><img src="img/paris/paris-1.jpg" alt="photo"></div>
              <div><img src="img/paris/paris-2.jpg" alt="photo"></div>
              <div><img src="img/paris/paris-3.jpg" alt="photo"></div>
              <div><img src="img/paris/paris-4.jpg" alt="photo"></div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script>
        $(document).ready(function(){
          $('.slider').slick({

          });
        });
    </script>
</body>
</html>