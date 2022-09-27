<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEA FOOD</title>
    <!-- CSS only -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Menu NavBar -->
		<?php include("./pages/connect.php");?>
        <header class="align-items-center justify-content-between">
            <div id="nav">
                <?php include("./pages/nav.php");?>
            </div>
        </header>
		<!-- Contenu -->
		<div class="container-fluid ">
			<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php include("./pages/container.php");?>
					</div>
			</div>
		</div>
		<!-- Footer -->
		<footer>
            <?php include("./pages/footer.php");?>
        </footer>
    		<!-- JavaScript Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
			crossorigin="anonymous"
		></script>
</body>
</html>