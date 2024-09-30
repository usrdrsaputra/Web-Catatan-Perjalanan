<?php
include('../inc/koneksi.php');
$sql = mysqli_query ($koneksi,"SELECT * FROM `user` INNER JOIN biodata ON biodata.id_user = user.id_user");
$data = mysqli_fetch_array($sql);
?>


<body class="bg-light">
	<div class="container">
     	<div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-3 pt-3">
             	<div class="row z-depth-3">
                 	<div class="col-sm-4 bg-info rounded-left">
        		        <div class="card-block text-center text-white mt-5">
                		     <?php
                                                    if($data['foto'] == ""){
                                                        ?>
                                                    <img src="img/foto1.jpg" width="100" class="img-fluid rounded-circle" alt="">
                                                            <?php
                                                    }
                                                    else{
                                                    ?>
                                                    <img src="img/<?php echo $data['foto'];?>" width="100" class="img-fluid rounded-circle" alt="foto">
                                                    <?php
                                                    }
                                                    ?>
                    		<h5 class="font-weight-bold mt-4"><?php echo $data['nama_lengkap'];?></h5>
                    		<p><?php echo $data['profesi']; ?></p><a class="far fa-edit fa-2x mb-4" href="?page=edit_profil&&id_user=<?php echo $data['id_user'];?>" ></a>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h4 class="mt-3 text-center">Informasi</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $data['email'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Phone:</p>
                           		<h6 class="text-muted"> <?php echo $data['no_hp'];?> </h6>
                        	</div>
                    	</div>
                    		
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Jenis kelamin</p>
                          	  	<h6 class="text-muted"><?php echo $data['jenis_kelamin'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Alamat</p>
                            	<h6 class="text-muted"><?Php echo $data['alamat']; ?></h6>
                        	</div>
                    	</div>
                	   	<hr class="bg-primary">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
            	        	<li><a href="#!"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
        	            	<li><a href="#!"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
    	                	<li><a href="#!"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
	</div>
