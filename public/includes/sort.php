<?php
if(isset($_POST['sort'])){
	$req = false;
	$sort = $_POST['sort']; 
	$req = '<div class="row">
				<div class="col-1">
					<div class="project">
						<a href="#">
							<img src="projects/project/01.png" alt="photo">
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
			</div>' . $sort;

	$projects = array(
		'project' => array(
			"id" => "a32s1d165a46sqwe",
			"company_name" => "sisters corner",
			"project_type" => "Брендинг",
			"poster" => "01.png"
		)
	);

	echo json_encode($projects);
	exit;
}



?>

<?php
$array = array(
    "dimension1" => array(
        "key1" => "value1",
        "key2" => "value2"
    )
);
?>