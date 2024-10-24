<?php
define("ROOT", "../");

require_once "../utils/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["shots-upload"])) {
		$conn = getConnection();

		$imageName = $_POST["image-name"];
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);

		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$path = $imageName . "." . $imageFileType;
		$target_file = $target_dir . $path;

		$check = getimagesize($_FILES["image"]["tmp_name"]);

		if ($check == false) {
			die("File is not an image - " . $check["mime"] . ".");
		}

		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			if ($conn->query("INSERT INTO shots (name, path) VALUES ('$imageName', '$path')")) {
				echo "<script>alert('Uploaded');</script>";
			}
		}
	}
	if (isset($_POST["shot-update"])) {
		$conn = getConnection();

		$id = $_POST["id"];
		$visibility = $_POST["visibility"];

		$conn->execute_query("UPDATE shots SET visibility = '$visibility' WHERE id = '$id'");
	}
	if (isset($_POST["shot-delete"])) {
		$conn = getConnection();

		$id = $_POST["id"];

		$res = $conn->query("SELECT * FROM shots WHERE id = '$id'");
		$row = $res->fetch_assoc();

		$path = $row["path"];

		$conn->execute_query("DELETE FROM shots WHERE id = '$id'");
		$file = "../uploads/" . $path;

		if (file_exists($file)) {
			unlink($file);
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Control Pannel</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="keywords" />
	<meta content="" name="description" />

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon" />

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet" />

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

	<!-- Libraries Stylesheet -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
	<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template Stylesheet -->
	<link href="css/style.css" rel="stylesheet" />
</head>

<body>
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Spinner Start -->
		<div id="spinner"
			class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border" style="width: 3rem; height: 3rem; color: white" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->

		<!-- Sidebar Start -->
		<div class="sidebar pe-4 pb-3">
			<nav class="navbar bg-secondary navbar-dark">
				<a href="index.html" class="navbar-brand mx-4 mb-3" style="margin-top: 20px">
					<h5>T H I L I N A</h5>
				</a>
				<div class="navbar-nav w-100">
					<a href="index.html" class="nav-item nav-link active"><i
							class="fa fa-tachometer-alt me-2"></i>Gallery Manager</a>
					<a href="widget.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Messages</a>
					<!-- Theese commented code is for the nav items in sidebar -->

					<!-- <div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
						<div class="dropdown-menu bg-transparent border-0">
							<a href="button.html" class="dropdown-item">Buttons</a>
							<a href="typography.html" class="dropdown-item">Typography</a>
							<a href="element.html" class="dropdown-item">Other Elements</a>
						</div>
					</div> -->
					<!-- 
					<a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
					<a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
					<a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
						<div class="dropdown-menu bg-transparent border-0">
							<a href="signin.html" class="dropdown-item">Sign In</a>
							<a href="signup.html" class="dropdown-item">Sign Up</a>
							<a href="404.html" class="dropdown-item">404 Error</a>
							<a href="blank.html" class="dropdown-item">Blank Page</a>
						</div>
					</div> -->
				</div>
			</nav>
		</div>
		<!-- Sidebar End -->

		<!-- Content Start -->
		<div class="content">
			<!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
				<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
					<h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
				</a>
				<a href="#" class="sidebar-toggler flex-shrink-0">
					<i class="fa fa-bars" style="color: white"></i>
				</a>
				<div class="navbar-nav align-items-center ms-auto">
					<div class="nav-item dropdown">
						<div style="margin: 8px">
							<img class="rounded-circle me-lg-2" src="../images/me2.jpg" alt=""
								style="width: 40px; height: 40px" />
							<span style="font-size: smaller">Thilina Rathnayaka</span>
						</div>
					</div>
					<div class="px-4">
						<a class="btn btn-sm visit-site-btn" href="../index.html">Visit Site</a>
					</div>
				</div>
			</nav>
			<!-- Navbar End -->

			<!-- Top 4 cards -->
			<div class="container-fluid pt-2 px-2">
				<div class="row g-4">
					<div class="col-sm-6 col-xl-3">
						<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-chart-line fa-3x"></i>
							<div class="ms-3">
								<p class="mb-2">Today Sale</p>
								<h6 class="mb-0">1234</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-chart-bar fa-3x"></i>
							<div class="ms-3">
								<p class="mb-2">Total Sale</p>
								<h6 class="mb-0">$1234</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-chart-area fa-3x"></i>
							<div class="ms-3">
								<p class="mb-2">Today Revenue</p>
								<h6 class="mb-0">$1234</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-chart-pie fa-3x"></i>
							<div class="ms-3">
								<p class="mb-2">Total Revenue</p>
								<h6 class="mb-0">$1234</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Top 4 cards -->

			<!-- Home Page -->
			<div class="container-fluid pt-4 px-2">
				<div class="row g-4">
					<div class="h-100 rounded pb-2 pt-4">
						<h6 class="mb-2" style="margin-left: 20px; margin-bottom: 0px">Home Page Manager</h6>
					</div>
				</div>

				<div class="row g-4" style="margin-right: 5px">
					<div class="col-sm-12 col-md-4">
						<div class="h-100 bg-secondary rounded p-4">
							<div class="d-flex align-items-center justify-content-between mb-2">
								<h6 style="font-size: smaller" class="mb-0">Upload Images</h6>
							</div>
							<div>
								<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"
									enctype="multipart/form-data">
									<input type="hidden" name="shots-upload" />
									<div class="mb-3">
										<label for="imageName" class="form-label">Image Name</label>
										<input type="text" name="image-name" class="form-control" id="imageName"
											placeholder="Enter image name" />
									</div>

									<!-- Drag and Drop Area -->
									<div class="mb-3">
										<label for="imageFile" class="form-label">Choose Image File</label>
										<div class="upload-area" id="uploadArea">
											Drag & Drop Image Here or <br /><br />
											<input type="file" id="imageFile" name="image" class="form-control"
												accept="image/*" />
										</div>
									</div>

									<!-- Submit Button -->
									<button type="submit" class="btn btn-dark">Upload Image</button>
								</form>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-8">
						<div class="h-100 bg-secondary rounded p-2">
							<!-- Table 1 Start -->
							<div class="container-fluid pt-4 px-2">
								<div class="bg-secondary text-center rounded">
									<div class="d-flex align-items-center justify-content-between mb-2 mt-0">
										<h6 style="font-size: smaller" class="mb-0">Image List</h6>
									</div>
									<div class="table-responsive" style="font-size: smaller">
										<table class="table align-middle table-bordered table-hover mb-0">
											<thead>
												<tr class="text-white" style="align-items: center">
													<th scope="col">No</th>
													<th scope="col">Date</th>
													<th scope="col">Image Name</th>
													<th scope="col">Visibility</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$conn = getConnection();
												$result = $conn->query("SELECT * FROM shots");

												while ($row = $result->fetch_assoc()) {
													?>
													<tr>
														<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
															<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
															<td><?php echo $row["id"] ?></td>
															<td><?php echo $row["created"] ?></td>
															<td><?php echo $row["name"] ?></td>
															<td>
																<select name="visibility" id="">
																	<option <?php echo $row["visibility"] == "visible" ? "selected" : "" ?> value="visible">Visible</option>
																	<option <?php echo $row["visibility"] == "hidden" ? "selected" : "" ?> value="hidden">Hidden</option>
																</select>
															</td>
															<td>
																<input type="submit" class="btn btn-sm btn-primary"
																	name="shot-delete" value="Delete">
																<input type="submit" class="btn btn-sm btn-dark"
																	name="shot-update" value="Save">
															</td>
														</form>
													</tr>
													<?php
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- Table 1 End -->
						</div>
					</div>
				</div>
			</div>
			<!-- Home Page -->

			<!-- This is the category update and create section -->
			<div class="container-fluid pt-4 px-2">
				<div class="row g-4">
					<div class="h-100 rounded pb-2 pt-4">
						<h6 class="mb-2" style="margin-left: 20px; margin-bottom: 0px">Category Manager</h6>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="h-100 bg-secondary rounded p-4">
						<div>
							<!-- Add Category Button -->
							<div class="mb-3 text-end">
								<button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#categoryModal"
									onclick="openAddModal()">
									Add Category
								</button>
							</div>
							<!-- Category Table -->
							<table class="table table-bordered table-hover">
								<thead class="table-dark">
									<tr>
										<th>Category Name</th>
										<th>Description</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody id="categoryTableBody">
									<!-- Sample Data (Replace with dynamic data) -->
									<tr>
										<td>Nature</td>
										<td>Photos related to nature</td>
										<td><span class="badge bg-success">Active</span></td>
										<td>
											<button class="btn btn-warning btn-sm" data-bs-toggle="modal"
												data-bs-target="#categoryModal"
												onclick="openEditModal('Nature', 'Photos related to nature', true)">
												Edit
											</button>
											<button class="btn btn-danger btn-sm"
												onclick="deleteCategory()">Delete</button>
										</td>
									</tr>
									<tr>
										<td>Portraits</td>
										<td>Portrait photography</td>
										<td><span class="badge bg-danger">Inactive</span></td>
										<td>
											<button class="btn btn-warning btn-sm" data-bs-toggle="modal"
												data-bs-target="#categoryModal"
												onclick="openEditModal('Portraits', 'Portrait photography', false)">
												Edit
											</button>
											<button class="btn btn-danger btn-sm"
												onclick="deleteCategory()">Delete</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!-- Gallery Page -->
			<div class="container-fluid pt-4 px-2">
				<div class="row g-4">
					<div class="h-100 rounded pb-2 pt-4">
						<h6 class="mb-2" style="margin-left: 20px; margin-bottom: 0px">Gallery Page Manager</h6>
					</div>
				</div>

				<div class="row g-4" style="margin-right: 5px">
					<div class="col-sm-12 col-md-4">
						<div class="h-100 bg-secondary rounded p-4">
							<div class="d-flex align-items-center justify-content-between mb-2">
								<h6 style="font-size: small" class="mb-0">Upload Images</h6>
							</div>
							<div>
								<form>
									<!-- Image Name Field -->
									<div class="mb-3">
										<label for="imageName" class="form-label">Image Name</label>
										<input type="text" class="form-control" id="imageName"
											placeholder="Enter image name" />
									</div>

									<!-- Image Category Field -->
									<div class="mb-3">
										<label for="imageName" class="form-label">Category</label>

										<div class="dropdown">
											<button class="btn btn-dark2 dropdown-toggle" type="button"
												id="upload-categories" data-bs-toggle="dropdown" aria-expanded="false">
												Select Category
											</button>
											<ul class="dropdown-menu" aria-labelledby="upload-categories">
												<li>
													<a class="dropdown-item" href=""
														onclick="selectCategory('Nature')">Nature</a>
												</li>
												<li>
													<a class="dropdown-item" href=""
														onclick="selectCategory('Portraits')">Portraits</a>
												</li>
												<li>
													<a class="dropdown-item" href=""
														onclick="selectCategory('Events')">Events</a>
												</li>
												<li>
													<a class="dropdown-item" href=""
														onclick="selectCategory('Architecture')">Architecture</a>
												</li>
											</ul>
											<script>
												function selectCategory(category) {
													document.getElementById("upload-categories").innerText = category; // Update the button text to the selected category
												}
											</script>
										</div>
									</div>

									<!-- Drag and Drop Area -->
									<div class="mb-3">
										<label for="imageFile" class="form-label">Choose Image File</label>
										<div class="upload-area" id="uploadArea">
											Drag & Drop Image Here or <br /><br />
											<input type="file" id="imageFile" class="form-control" accept="image/*" />
										</div>
									</div>

									<!-- Submit Button -->
									<button type="submit" class="btn btn-dark">Upload Image</button>
								</form>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-8">
						<div class="h-100 bg-secondary rounded p-2">
							<!-- Table 1 Start -->
							<div class="container-fluid pt-4 px-2">
								<div class="bg-secondary text-center rounded">
									<div class="d-flex align-items-center justify-content-between mb-2 mt-0">
										<h6 style="font-size: smaller" class="mb-0">Image List</h6>
									</div>
									<div class="table-responsive" style="font-size: smaller">
										<table class="table align-middle table-bordered table-hover mb-0">
											<thead>
												<tr class="text-white" style="align-items: center">
													<th scope="col">No</th>
													<th scope="col">Date</th>
													<th scope="col">Image Name</th>
													<th scope="col">Category</th>
													<th scope="col">Visibility</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>01</td>
													<td>2024 09 12</td>
													<td>Milkyway</td>
													<td>Astrophotography</td>
													<td>
														<div class="dropdown-container">
															<div class="dropdown">
																<button style="font-size: small"
																	class="btn dropdown-toggle" type="button"
																	id="dropdownMenuButton" data-bs-toggle="dropdown"
																	aria-expanded="false">
																	Select Visibility
																</button>
																<ul class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton">
																	<li>
																		<a class="dropdown-item dropdown-item-public"
																			href="#"
																			onclick="updateDropdown('Public')">Public</a>
																	</li>
																	<li>
																		<a class="dropdown-item dropdown-item-hidden"
																			href="#"
																			onclick="updateDropdown('Hidden')">Hidden</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
													<td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- Table 1 End -->
						</div>
					</div>
				</div>
			</div>
			<!-- Gallery Page -->

			<!-- Footer Start -->
			<div class="container-fluid pt-4 px-4">
				<div class="rounded-top p-4">
					<div class="row">
						<div class="col-12 col-sm-6 text-center text-sm-start">
							&copy; <a href="#" style="font-size: smaller; color: white">Thilina Rathnayaka</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</div>
		<!-- Content End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-dark1 btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="lib/chart/chart.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/tempusdominus/js/moment.min.js"></script>
	<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="js/main.js"></script>
</body>

</html>