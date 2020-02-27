<?php include "_base/head-login.php";?>



<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Inventory</b></a>	
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Masukan NIK dan Password Anda</p>

		<center>
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert'><p style='background-color:yellow'>Maaf ada yang salah</p></p></div>";
				}else if($_GET['pesan'] == "logout"){
					echo "<div class='alert'><p style='background-color:yellow'>Anda telah logout</p></p></div>";
				}else if($_GET['pesan'] == "belum_login"){
					echo "<div class='alert'><p style='background-color:yellow'>Anda harus login</p></p></div>";
				}
			}
			?>
		</center>
      <form action="check.php" method="post">
        <div class="input-group mb-3">
          <input type="name" name="nik" class="form-control" placeholder="NIK">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-6">
			<button type="submit" class="btn btn-block bg-gradient-success" value="login">Masuk <i class="nav-icon fas fa-hand-point-right"></i></button>
          </div>
		  <div class="col-6">
			<a href="#">
				<button type="reset" class="btn btn-block bg-gradient-danger">Reset</i></button>
			</a>
          </div>
        </div>
      </form><br>
	  <center>
		<b><?php echo date ('l, d-m-Y');?></b>
	  </center>
		<br>
    </div>
  </div>
</div>

<?php include "_foot/foot-login.php";?>