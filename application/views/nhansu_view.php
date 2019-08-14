<!DOCTYPE html>
<html lang="en"><head>
	<title> Giao diện hiển thị danh sách Đào </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     
</head>
<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Trang Chủ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Xem Đào</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/nhansu"style="margin-left:1320px;" >Đăng Nhập</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Đăng Kí</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>index.php/nhansu">Đăng Xuất</a>
    </li>
  </ul>
</nav>
<br>
	<div class="container">
		<div class="text-xs-center">
			<h3 class="display-3"> Danh sách Đào </h3>
        </div>
       <!-- <a href="<?php echo base_url(); ?>index.php/nhansu"><i class="fa fa-sign-out" >Sign-out</i></a> -->
	</div>
	<div class="container">
		<div class="row">
                <?php foreach ($mangketqua as $value) {   ?>
              <div class="col-sm-4">
				<div class="card">
					<img class="card-img-top " alt="Cinque Terre" width="349" height="480" src="<?= $value['anhavatar'] ?>" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title ten"> <?= $value['ten'] ?></h4>
						<p class="card-text tuoi"> Tuổi: <b> <?= $value['tuoi'] ?></b> </p>
						<p class="card-text sdt"> Sdt:<b>  <?= $value['sdt'] ?></b>  </p>
						<p class="card-text sodonhang"> Giá đào:  <?= $value['gia'] ?> </p>
						<p class="card-text linkfb"><small> <a href="<?= $value['linkfb'] ?>" class="btn btn-secondary btn-xs"> Facebook <i class="fa fa-chevron-right"></i></a></small></p>
					</div>
                </div> <!-- end card  -->
                </div>
                 <?php } ?>        
        </div>	
        <div class="container">
            <div class="text-xs-center">
                <h3 class="display-3"> Thêm mới nhân sự </h3>
                <hr>
            </div>
        </div>	
            <div class="container">
<!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thêm mới</button>
                            <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                                <!-- Modal content-->
        <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>index.php/nhansu/add_nhansu" id="demo" style="border-style:solid; border-width:1px; border-color:black;background-color: #f2f2f2;width:750px;">
                    <div class="form-group row">
                        <label for="anh" class="col-sm-0  col-form-label" style='margin-left: 20px;' > <strong>Ảnh</strong> </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="anhavatar" id="anhavatar" placeholder="Upload ảnh">
                        </div>
                    </div>      
                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="row">
                                <label for="ten" class="col-sm-0 col-form-label" style='margin-left: 20px;' > <strong>Tên</strong> </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="ten" id="ten" placeholder=" Hải Yến ">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                                <label for="linkfb" class="col-sm-0 col-form-label"  > <strong>Linkfb</strong> </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="linkfb" id="linkfb" placeholder=" ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-4">
                            <div class="row">
                             <label for="tuoi" class="col-sm-0 col-form-label" style='margin-left: 20px;'> <strong>Tuổi</strong> </label>
                             <div class="col-sm-4">
                            <input type="number" class="form-control" name="tuoi" id="tuoi" placeholder=" Tuổi">
                             </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="row">
                            <label for="sdt" class="col-sm-0 col-form-label" > <strong>Tel</strong> </label>
                                <div class="col-sm-4">
                            <input type="text" class="form-control" name="sdt" id="sdt" placeholder=" 09898989   ">
                                </div>
                            </div>  
                        </div>  
                        <div class="col-sm-4">
                        <div class="row">
                            <label for="gia" class="col-sm-0 col-form-label" > <strong>Giá đào</strong> </label>
                                <div class="col-sm-6">
                            <input type="text" class="form-control" name="gia" id="gia" placeholder=" 1200$ ">
                                </div>
                            </div>  
                        </div>  
                </div>
                    <div class="form-group row">
                        <div class="offset-sm-5 col-sm-7">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                </div>  
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
	</div>
</body>
</html>