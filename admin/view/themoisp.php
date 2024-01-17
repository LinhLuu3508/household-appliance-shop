<div class="sp-admin container">
	<!-- <h2>THÊM MỚI SẢN PHẨM</h2> -->
	<!-- <form action="index.php?pg=sanpham_add" method="post" enctype="multipart/form-data">
		<label for="">Danh mục sản phẩm</label>
		<select name="iddm" id="">
			<option value="0">Chọn danh mục</option>
			<?php
			if (isset($dsdm)) {
				foreach ($dsdm as $dm) {
					echo ' <option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
				}
			}
			?>
		</select>
		<br>
		<label for="">Tên sản phẩm</label>
		<input type="text" name="name" id="">
		<br>
		<label for="">Hình ảnh</label>
		<input type="file" name="img" id="">
		<?php
		if (isset($uploadOk) && ($uploadOk) == 0) {
			echo "<font color='red'><br>Yêu cầu chọn đúng file hình ảnh có định dạng .png .jpg hoặc jpeg !</font>";
		}
		?>
		<br>
		<label for="">Giá</label>
		<input type="text" name="price" id="">
		<br>
		<input type="submit" name="themmoi" value="Thêm mới">
	</form> -->
	<!-- <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">THÊM MỚI SẢN PHẨM</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
							<tr>
							  <th>ID no.</th>
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Email</th>
							  <th>&nbsp;</th>
							</tr>
						  </thead>
						  <tbody>
							<tr class="alert" role="alert">
							  <th scope="row">001</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>markotto@email.com</td>
							  <td>
								  <a href="#" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							  </a>
							</td>
							</tr>
							<tr class="alert" role="alert">
							  <th scope="row">002</th>
							  <td>Jacob</td>
							  <td>Thornton</td>
							  <td>jacobthornton@email.com</td>
							  <td>
								  <a href="#" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							  </a>
							</td>
							</tr>
							<tr class="alert" role="alert">
							  <th scope="row">003</th>
							  <td>Larry</td>
							  <td>the Bird</td>
							  <td>larrybird@email.com</td>
							  <td>
								  <a href="#" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							  </a>
							</td>
							</tr>
							<tr class="alert" role="alert">
							  <th scope="row">004</th>
							  <td>John</td>
							  <td>Doe</td>
							  <td>johndoe@email.com</td>
							  <td>
								  <a href="#" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							  </a>
							</td>
							</tr>
							<tr class="alert" role="alert">
							  <th scope="row">005</th>
							  <td>Gary</td>
							  <td>Bird</td>
							  <td>garybird@email.com</td>
							  <td>
								  <a href="#" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							  </a>
							</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section>
		<div class="container-fluid">
			<div class="row ">
				<div class="col-lg-10 col-md-8 ml-auto">
					<div class="row align-items-center pt-md-5 mt-md-5 mb-5">
						<div class="col-8">
							<div class="card">
								<div class="card-title text-center mt-3">
									<h3>Thêm mới sản phẩm</h3>
								</div>
								<div class="card-body">
									<form action="index.php?pg=sanpham_add" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="productname">Danh mục sản phẩm:</label><br>
											<select class="form-control" name="iddm" id="">
												<option value="0">Chọn danh mục</option>
												<?php
												if (isset($dsdm)) {
													foreach ($dsdm as $dm) {
														echo ' <option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
													}
												}
												?>
											</select>
											<div class="invalid-feedback">Product Name Can't Be Empty</div>
										</div>
										<div class="form-group">
											<label for="productname">Tên sản phẩm:</label>
											<input type="text" name="name" class="form-control" id="productname"
												placeholder="Nhập tên sản phẩm">
											<div class="invalid-feedback">Tên sản phẩm không thể bỏ trống</div>
										</div>
										<br>
										<!-- <div class="form-group">
											<label for="productid">Product Id:</label>
											<input type="text" class="form-control" id="productid"
												placeholder="Enter Product Id">
											<div class="invalid-feedback">Product ID Can't Be Empty</div>
										</div> -->
										<div class="form-group">
											<label for="productprice">Giá:</label>
											<input type="text" name="price" class="form-control" id="productprice"
												placeholder="Nhập giá sản phẩm">
											<div class="invalid-feedback">Giá không thể bỏ trống</div>

										</div>
										<p>Hình ảnh:</p>
										<div class="custom-file">
											<!-- <input type="file" name="img" class="custom-file-input" id="productimage"
												required>
											<label class="custom-file-label" for="productimage">Chọn tệp...</label>
											<div class="invalid-feedback">Không hổ trợ định dạng tệp</div> -->
											<input type="file" name="img" id="">
										</div>
										<input type="submit" name="themmoi" value="Thêm mới"
											class="btn btn-dark mt-5 mx-auto d-block">
										<!-- <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Add
											Product</button> -->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>