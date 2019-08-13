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
</head>
<body >
	<div class="container">
		<div class="text-xs-center">
			<h3 class="display-3"> Danh sách Đào </h3>
		</div>
	</div>
	<div class="container">
		<div class="row">
			
			

                <?php foreach ($mangketqua as $value) {
                    # code...
              ?>
              <div class="col-sm-4">
				<div class="card">
					<img class="card-img-top " alt="Cinque Terre" width="349" height="480" src="<?= $value['anhavatar'] ?>" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title ten"> <?= $value['ten'] ?></h4>
						<p class="card-text tuoi"> Tuổi: <b> <?= $value['tuoi'] ?></b> </p>
						<p class="card-text sdt"> Sdt:<b>  <?= $value['sdt'] ?></b>  </p>
						<p class="card-text sodonhang"> Giá hàng:  <?= $value['gia'] ?> </p>
						<p class="card-text linkfb"><small> <a href="#linkfb" class="btn btn-secondary btn-xs"> Facebook <i class="fa fa-chevron-right"></i></a></small></p>
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
                <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>index.php/nhansu/add_nhansu" id="demo">
                    <div class="form-group row">
                        <label for="anh" class="col-sm-0  col-form-label" style='margin-left: 300px;' > Ảnh </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="anhavatar" id="anhavatar" placeholder="Upload ảnh">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="row">
                        <label for="ten" class="col-sm-0 col-form-label" style='margin-left: 300px;' > Tên </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ten" id="ten" placeholder=" Hải Yến ">
                        </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="row">
                        <label for="linkfb" class="col-sm-0 col-form-label" >Link fb </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="linkfb" id="linkfb" placeholder=" ">
                        </div>
                        </div>
                    </div>

                      
                    </div>

                <div class="form-group row">
                        <div class="col-sm-4">
                            <div class="row">
                             <label for="tuoi" class="col-sm-0 col-form-label" style='margin-left: 100px;'> Tuổi </label>
                             <div class="col-sm-4">
                            <input type="number" class="form-control" name="tuoi" id="tuoi" placeholder=" Tuổi">
                             </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                        <div class="row">
                            <label for="sdt" class="col-sm-0 col-form-label" style='margin-left: 100px;'> Tel </label>
                                <div class="col-sm-4">
                            <input type="text" class="form-control" name="sdt" id="sdt" placeholder=" 09898989   ">
                                </div>
                            </div>  
                        </div>  
                        <div class="col-sm-4">
                        <div class="row">
                            <label for="gia" class="col-sm-0 col-form-label" style='margin-left: 100px;'> Giá hàng </label>
                                <div class="col-sm-6">
                            <input type="text" class="form-control" name="gia" id="gia" placeholder=" 1200$ ">
                                </div>
                            </div>  
                        </div>  
                </div>

            



                    <div class="form-group row">
                        <div class="offset-sm-5 col-sm-7">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
     
	</div>
</body>
</html>