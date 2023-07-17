<?php
use common\models\base\Book;

?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../web/css/style.css">
	<title>Book Word</title>
</head>

<body>
	<header>

		<div class="logo">
			<img src = "../views/layouts/hochtml/uploads/logo.png">
		</div>

		<div class = "menu">
			<li><a href="">Trang chủ</a></li>
			<li><a href="">Sách</a></li>
			<li><a href="">Thể loại</a></li>
			<li><a href="">Tác giả</a></li>
			<li><a href="">Đăng nhập</a></li>
			<li><a href="">Đăng kí</a></li>

		</div>

		<div class ="icon">
			<li><input placeholder="Tìm kiếm" type = "text"><i class= fas fa-search></i></li>
			<li><a href="">Profile</a></li>
		</div>

	</header>
	
	<section id="Slider">

		<div class = "aspect-ratio-43">
			<img src ="../views/layouts/hochtml/uploads/bìa1.jpeg">
			<img src ="../views/layouts/hochtml/uploads/bia2.jpeg">
		</div>
	</section>
	<br>
	<h1 class= "title">Sản phẩm nổi bật</h1>
	<h3 class= "slogan"> Cùng đến với những tựa sách hàng đầu của chúng tôi. Bạn chắc chắn sẽ tìm thấy những gì bạn đang tìm kiếm.</h3>
	<div class="view-img">
		<?php
		$books = Book::find()->all();
		if ($books):
			foreach ($books as $book):

		?>
		<img src="<?php echo '../../uploads/' .$book->image?>">
		<?php
			endforeach;
		endif;
		?>
	</div>
	
	
</body>






<script>
	const imgPosition = document.querySelectorAll(".aspect-ratio-43 img")
	const imgContainer = document.querySelector(".aspect-ratio-43")
	let imgNumber =imgPosition.length
	let main = 0
	imgPosition.forEach(function(image,main){
		image.style.left = main*100 + "%" // căn các ảnh theo chiều ngang
	})
	function imgSlide () { //sau 5s main tang 1, the cha se dich sang trai 
		main++;
		
		if(main>=imgNumber) {main=0}
		imgContainer.style.left = "-" +main*100+ "%"
		
	}
	
	setInterval(imgSlide,5000)
</script>



</html>