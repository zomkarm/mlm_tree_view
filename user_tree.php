<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	

  <script>
  	$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
	});
  </script>
</head>
<body>
<div id="maindiv ">
	<div class="content ">
		<div class="container ">
			<div class="row ">

				<div class="col-xl-12 col-md-12">
					<br>
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h2 class="page-title">User Tree</h2>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="d-flex justify-content-center" >
								<div class="card-body" style="background-color: white;">
									<div class="table-responsive">

										<form id="searchTree" class="form-inline d-flex justify-content-center" method="post" action="">
											<div class="form-group mx-sm-3 mb-2">
												<label for="inputPassword2">User ID &nbsp;&nbsp;&nbsp;</label>
												<input type="text" class="form-control" id="inputID" name="inputID" value="" placeholder="">
											</div>
											<input type="submit" id="searchData" class="btn btn-primary mb-2" value="Search">
										</form>					
									</div>
						</div>
					
					<div class="row" id="treedata">
						<div class="col-md-12">
							<div class="card" style="background-color: white;border:0px !important;">
								<div class=" card-body" style="background-color: white;">
									<div class="tree ">
										<ul>
											<li>
												<div class="col-auto" >
													<a style="background:  white;font-weight: bold;" class="border border-success usrImg" data-id="">
														<img style="border-style: outset;" class="rounded-circle" height="80px" width="80px" src="1.jpg"><br />
														<label style="color:black">Chris<br></label>
													</a>
												</div>
												<ul>
													<?php
													
													/* Dummy Data */
													$treedata=array(array(
																"id"=>"1",
																"name"=>"omkar",
																"total_downline"=>"3",
																),
																array(
																"id"=>"2",
																"name"=>"Alfred",
																"total_downline"=>"3",
																),
																array(
																"id"=>"3",
																"name"=>"Thomas",
																"total_downline"=>"3",
																)
															);

													if (sizeof($treedata) > 0) {
															foreach ($treedata as $data) {
																$aaid = $data['id'];
																$name = $data['name'];
																$cnt=1;

													?>
																<li>
																	<div class="col" style="font-weight: bold;">
																		<?php $cnt++; 
																		 $Ddata = "Total Downline :" . $data['total_downline']; ?>
																		<a style="background-color: white;font-weight: bold;" id="nodeBox" data-toggle="tooltip" data-trigger="hover" data-html="true" data-placement="top" title="<?php echo "ID : " . $data['id'] . "\n" . $Ddata; ?>" data-content="Total Downline : <?= $Ddata ?>"  class="border border-success usrImg" data-id="<?= $data['id']; ?>" data-name="<?= $data['name'] ?>">
																			<img style="border-style: outset" class="rounded-circle imgdata" height="80px" width="80px" src="3.jpg"></a><br>
																		<?= $data['name'] ?><br>
																		<?= $data['id'] ?><br><br>
																	</div>
																</li>
													<?php
														}
													}
													?>
												</ul>
											</li>
										</ul>

									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		
</body>
</html>