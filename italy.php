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
            <h1>Фотографии из Италии</h1>
            
            <div class="autoplay">
                <div><img src="img/italy/italy-1.jpg" alt="photo"></div>
                <div><img src="img/italy/italy-2.jpg" alt="photo"></div>
                <div><img src="img/italy/italy-3.jpg" alt="photo"></div>
                <div><img src="img/italy/italy-4.jpg" alt="photo"></div>
                <div><img src="img/italy/italy-5.jpg" alt="photo"></div>
                <div><img src="img/italy/italy-6.jpg" alt="photo"></div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script>
        $(document).ready(function(){
          $('.autoplay').slick({
              dots: true,
              infinite: true,
              speed: 300,
              slidesToShow: 1,
              centerMode: true,
              variableWidth: true,
              autoplay: true,
              arrows: false
            });
        });
    </script>
</body>
</html>