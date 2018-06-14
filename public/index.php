<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>360 creative - branding agency</title>
	<link rel="stylesheet" href="css/ui.css">
	<link rel="stylesheet" href="css/main_page.css">

  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
</head>
<body>
	<div class="menu">
		<ul>
			<li class="menu_close" id="navbar_close"><span class="icon-close"></span></li>
			<li class="highlighted_text" rel="branding">branding</li>
			<li class="highlighted_text" rel="web">web</li>
			<li class="highlighted_text" rel="package">package</li>
			<li class="highlighted_text" rel="smm">smm</li>
			<li class="highlighted_text"><a href="contacts.html">contacts</a></li>
		</ul>
	</div>

	<div class="grid">
		<div class="header">
			<div class="left_text"><div class="burger" id="navbar_open"><span class="icon-menu"></span></div></div>
			<div class="logo"><img src="Logo.svg" alt=""></div>	 
			<div class="right_text">branding</div>
		</div>


		<div class="content">
			<div class="row">
				<div class="col-1">
					<div class="project">
						<a href="#">
							<img src="projects/project/08.png" alt="photo">
						</a>
						<div class="description">
							<div class="highlighted_text_min">sisters corner</div>
							<div class="secondary_text"><a href="#">Брендинг</a></div>
						</div>
					</div>
				</div>
				<div class="col-1">
					<div class="project">
						<a href="#">
							<img src="projects/project/06.png" alt="photo">
						</a>
						<div class="description">
							<div class="highlighted_text_min">Season agriculture</div>
							<div class="secondary_text"><a href="#">Брендинг</a></div>
						</div>
					</div>
				</div>
				<div class="col-1">
					<div class="project">
						<a data-href="project.php?project=roots-branding" href="project.php?project=roots-branding">
							<img src="projects/project/06.png" alt="photo">
						</a>
						<div class="description">
							<div class="highlighted_text_min">Season agriculture</div>
							<div class="secondary_text"><a href="#">Брендинг</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="divider"></div>

		<div class="footer">
			<div class="flex_container">
				<div class="flex-column">
					<div class="highlighted_text">three sixty creative agency</div>
				</div>
				<div class="flex-column">
					<div class="highlighted_text">Office</div> <br>
					<div class="secondary_text">
						Uzbekistan, Tashkent city <br> Mirabad region, T. Shevchenko st.,34
					</div> 
				</div>
				<div class="flex-column">
					<div class="highlighted_text">contacts</div>  <br>
					<div class="secondary_text">
						998 99 832 33 55 <br>	
						998 90 174 12 27 <br>
						info@360creative.agency
					</div> 
				</div>
			</div>
			<div class="copyright secondary_text">
				<div class="other_pages">
					<div class="page"><a href="#">Press</a></div>
					<div class="page"><a href="#">Work with Us</a></div>
					<div class="page"><a href="#">Partnership</a></div>
					<div class="page"><a href="#">Your Privacy</a></div>
					<div class="page"><a href="#">Contact</a></div>
					</div>
				<div>© 2018 Threesixty. All Rights Reserved.</div>
			</div>	
		</div>
	</div>
</body>
</html>

<script>
	$(".burger").click(function () {
		$(".menu").addClass("active");
		console.log("open");
	});
	$(".menu_close").click(function () {
		$(".menu").removeClass("active");
		console.log("close");
	})
/*
	$(`a[href*="sort"]`).click(function (e) {
		e.preventDefault();
		$(".project").css({"opacity":"0", "visibility": "hidden"});
		setTimeout(function() {
			$(".project").css({"opacity":"1", "visibility": "visible"});
		}, 1000);
		return false;
	})*/
</script>

<script>
	$(document).ready(function () {
		$(".project").css({"opacity":"1", "visibility": "visible"});
	});
	$(function(){
	  var output = $('.content');
	  $('li[rel]').on('click', function(){
	  	var requester = $(this).attr("rel");
	  	$(".project").css({"opacity":"0", "visibility": "hidden"});
	  	setTimeout(function() {
		    $.ajax({
				url: 'include/sort.php', 
				type: 'POS', 
				dataType: 'jso', 
				data: {sort : `${requester}`}, 
				error: function(req, text, error){
					output.text("Хьюстон, У нас проблемы!");
					$(function(){
						$.ajax({
							url: 'includes/sendMail.php',
							type: "POST",
							dataType: "html",
							data: {send_message : 1, theme : `Ошибка при выборе пункта меню. ошибки: request = ${req}, text: ${text}, error: ${error}`},
							error: function (req, text, error) {
								output.append("<br><br>К сожалению администрация не смогла узнать об ошибке, пожалуйста сделайте скриншот и отправьте на support@360creative.com");
								output.append(text +" || " + error);
							},
							success: function () {
								output.append("<br>Администрация узнала об этом и уже работает над исправлением этой ошибки.");
							},
						})
					});
				},

				success: function(json){ 
					$(".project").remove();

					// output.html(json); 
					// setTimeout(function() {
					// 	$(".project").css({"opacity":"1", "visibility": "visible"});
					// }, 300);
				}
		    });
		}, 300);
	  });
	});
</script>