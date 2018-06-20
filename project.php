<?php 
	if(!$_GET["project"]==""||!$_GET["project"]==""){

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $page_title ?>
	</title>
	<link rel="stylesheet" href="../css/ui.css">
	<link rel="stylesheet" href="css/project.css">

</head>
<body>
	<?php
		include_once '../includes/ui.php';	
		get_navbar($project_name);
	?>
	<div class="grid">
		<div class="content">
			<div class="row">
				<div class="col-3"><img src="../img/Neon-2.png"></div>
			</div>
			<div class="row">
				<div class="col-1"><img src="../img/human_young_woman.png"></div>
				<div class="col-1"><img src="../img/human_woman.png"></div>
				<div class="col-1"><img src="../img/Layer 10.png"></div>
			</div>
			<div class="row">
				<div class="col-1"><img src="../img/shutterstock_514961011.png"></div>
				<div class="col-2"><img src="../img/Enamel-Mug.png"></div>
			</div>
			<div class="row">
				<div class="col-3"><img src="../img/sauce_bottle_2.png"></div>
			</div>
			<div class="row">
				<div class="col-1"><form method="post"><label><div class="add_photo"><input type="file"><span class="icon-unsplash"></span></div></label></form></div>
				<div class="col-1"><form method="post"><label><div class="add_photo"><input type="file"><span class="icon-unsplash"></span></div></label></form></div>
				<div class="col-1"><form method="post"><label><div class="add_photo"><input type="file"><span class="icon-unsplash"></span></div></label></form></div>
			</div>
			<div class="row">
				<div class="col-2"><form method="post"><label><div class="add_photo"><input type="file"><span class="icon-unsplash"></span></div></label></form></div>
				<div class="col-1"><form method="post"><label><div class="add_photo"><input type="file"><span class="icon-unsplash"></span></div></label></form></div>
			</div>
			<div class="row">
				<div class="col-3"><form method="post"><label><div class="add_photo"><input type="file"><span class="icon-unsplash"></span></div></label></form></div>
			</div>
		</div>
	</div>
	<div class="fade_out"></div>
	<div class="fade_in"></div>
</body>
</html>
<script src="../js/jquery.js"></script>
<script>
	$(document).ready(function () {
            $(".fade_in").css({"opacity" : "0", "visibility":"hidden"});
	})
	$("a[data-href]").click(function () {
            $(".fade_out").css({"opacity" : "1", "visibility":"visibility"});
            var link = $(this).attr("data-href");
            setTimeout(function(){
                    window.location.href = link;
            }, 700);
	})
</script>

<?php
	`
	<div class="row">
		<div class="col-1"><img src="../img/human_young_woman.png"></div>
		<div class="col-1"><img src="../img/human_woman.png"></div>
		<div class="col-1"><img src="../img/Layer 10.png"></div>
	</div>
	`

	//создаём rows
	//в data вставляем его id 
	//

?>