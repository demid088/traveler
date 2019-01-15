<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сайт путешественника</title>
    <link rel="stylesheet" href="magnific-popup.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery-3.3.1.js"></script>
	<script src="jquery.magnific-popup.js"></script>
</head>

<body>
    <div class="container">
        <div class="content">
            <?php include 'header.php'; ?>
            <h1>Фотографии из Венеции</h1>
            <div class="image-block">
                <a href="img/venice/venice-1.jpg"><img src="img/venice/venice-1.jpg" alt="photo"></a>
                <a href="img/venice/venice-2.jpg"><img src="img/venice/venice-2.jpg" alt="photo"></a>
				<a href="img/venice/venice-3.jpg"><img src="img/venice/venice-3.jpg" alt="photo"></a>
				<a href="img/venice/venice-4.jpg"><img src="img/venice/venice-4.jpg" alt="photo"></a>
				<a href="img/venice/venice-5.jpg"><img src="img/venice/venice-5.jpg" alt="photo"></a>
				<a href="img/venice/venice-6.jpg"><img src="img/venice/venice-6.jpg" alt="photo"></a>
            </div>
            <div class="image-block invisible">
                <a href="img/venice/venice-1.jpg"><img src="img/venice/venice-1.jpg" alt="photo"></a>
                <a href="img/venice/venice-2.jpg"><img src="img/venice/venice-2.jpg" alt="photo"></a>
				<a href="img/venice/venice-3.jpg"><img src="img/venice/venice-3.jpg" alt="photo"></a>
				<a href="img/venice/venice-4.jpg"><img src="img/venice/venice-4.jpg" alt="photo"></a>
				<a href="img/venice/venice-5.jpg"><img src="img/venice/venice-5.jpg" alt="photo"></a>
				<a href="img/venice/venice-6.jpg"><img src="img/venice/venice-6.jpg" alt="photo"></a>
            </div>
            <a class="show" href="#">Показать блок</a>
        </div>
        <?php include 'footer.php'; ?>
    </div>
	<script>
		$(document).ready(function(){
		    $('.image-block').magnificPopup({
              delegate: 'a',
              type: 'image'
            });
			$('.invisible').hide();
			$('.show').on('click', function(){
			    var linkText = $('.invisible').is(':visible') ? 'Показать блок' : 'Скрыть блок';
			    $('.show').text(linkText);
				$('.invisible').slideToggle();
			})
		});
	</script>
</body>
</html>