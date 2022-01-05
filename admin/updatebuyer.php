<?php
include "../koneksi/koneksi.php";
if(isset($_GET['no']))
{
 $sql_query="SELECT * FROM buyer WHERE no=".$_GET['no'];
 $result_set=mysql_query($sql_query);
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$no_hp      = $_POST['no_hp'];
$id_produk  = $_POST['id_produk'];
$jumlah		= $_POST['jumlah'];
$catatan	= $_POST['catatan'];
$no_rek_admin = $_POST['no_rek_admin'];
$nama_rek   = $_POST['nama_rek'];
$no_rek     = $_POST['no_rek'];
$alamat		= $_POST['alamat'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE buyer SET nama='$nama', email='$email', no_hp='$no_hp', id_produk='$id_produk', jumlah='$jumlah', catatan='$catatan', no_rek_admin='$no_rek_admin', nama_rek='$nama_rek', no_rek='$no_rek', alamat='$alamat' WHERE no=".$_GET['no'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='buyer.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Data Gagal Diupdate');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: buyer.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Barbershop | Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="beranda.php">Barbershop | Administrator</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">

	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Option <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="beranda.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="product.php"><i class="glyphicon glyphicon-briefcase"></i> Product</a></li>
					<li class="current"><a href="buyer.php"><i class="glyphicon glyphicon-shopping-cart"></i> Buyer</a></li>
					<li><a href="gallery.php"><i class="glyphicon glyphicon-picture"></i> <span>Gallery</span></a></li>
					<li><a href="price.php"><i class="glyphicon glyphicon-usd"></i> <span>Price</span></a></li>
					<li><a href="message.php"><i class="glyphicon glyphicon-comment"></i> Message</a></li>
					<li><a href="admin.php"><i class="glyphicon glyphicon-user"></i> Admin</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
	  			<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"><a href="beranda.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a> \ Update Buyer</div>
					          
					            <div class="panel-options">
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" method="post" enctype="multipart/form-data">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
								    <div class="col-sm-10">
								      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama" value="<?php echo $row['nama']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $row['email']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Handphone</label>
								    <div class="col-sm-10">
								      <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Nomor Handphone" value="<?php echo $row['no_hp']; ?>">
								    </div>
								  </div>
  								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">ID Produk</label>
								    <div class="col-sm-10">
								      <input type="text" name="id_produk" class="form-control" id="inputEmail3" placeholder="ID Produk" value="<?php echo $row['id_produk']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Jumlah</label>
								    <div class="col-sm-10">
								      <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="ID Produk" value="<?php echo $row['jumlah']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Catatan</label>
								    <div class="col-sm-10">
								      <input type="text" name="catatan" class="form-control" id="inputEmail3" placeholder="ID Produk" value="<?php echo $row['catatan']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Rekening Admin</label>
								    <div class="col-sm-10">
								      <input type="text" name="no_rek_admin" class="form-control" id="inputEmail3" placeholder="Nomor Rekening Admin" value="<?php echo $row['no_rek_admin']; ?>" readonly>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nama Rekening</label>
								    <div class="col-sm-10">
								      <input type="text" name="nama_rek" class="form-control" id="inputEmail3" placeholder="Nama Rekening" value="<?php echo $row['nama_rek']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Rekening</label>
								    <div class="col-sm-10">
								      <input type="text" name="no_rek" class="form-control" id="inputEmail3" placeholder="Nomor Rekening" value="<?php echo $row['no_rek']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
								    <div class="col-sm-10">
								      <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat" value="<?php echo $row['alamat']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary" name="btn-update">Save</button>
								      <button type="submit" class="btn btn-warning" name="btn-cancel">Cancel</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
			</div>
		</div>	
	</div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               All rights reserved &copy; - <?php echo date("Y"); ?> <a href="beranda.php">Barbershop</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>