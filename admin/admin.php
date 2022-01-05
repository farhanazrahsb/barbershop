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
					<li><a href="buyer.php"><i class="glyphicon glyphicon-shopping-cart"></i> Buyer</a></li>
					<li><a href="gallery.php"><i class="glyphicon glyphicon-picture"></i> <span>Gallery</span></a></li>
					<li><a href="price.php"><i class="glyphicon glyphicon-usd"></i> <span>Price</span></a></li>
					<li><a href="message.php"><i class="glyphicon glyphicon-comment"></i> Message</a></li>
					<li class="current"><a href="admin.php"><i class="glyphicon glyphicon-user"></i> Admin</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

  			<div class="content-box-large">
  			<div class="content-box-header panel-heading">
	  		<div class="panel-title "><a href="beranda.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a> \ Admin</div>

		  	</div>
  				<div class="panel-heading">
					<div class="panel-title"></div>
				</div>
				<a href="inputadmin.php"><input type="submit" value="+ Add" class="btn btn-success"></a>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Admin</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Nama Bank</th>
								<th>Nomor Rekening</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						 <?php
				          include ('../koneksi/koneksi.php');

				          $query = mysql_query ("SELECT * FROM admin");
				          $no=1;
				          while ($var=mysql_fetch_array($query)) {
				            ?>
				            <tr>
				              <td><?php echo $no ?></td>
				              <td><?php echo $var ['id_admin']; ?></td>
				              <td><?php echo $var ['nama']; ?></td>
				              <td><?php echo $var ['email']; ?></td>
				              <td><?php echo $var ['nama_bank']; ?></td>
				              <td><?php echo $var ['no_rek_admin']; ?></td>
				              <td><?php echo "<a class='glyphicon glyphicon-edit' title='Edit' href='updateadmin.php?no=$var[no]'></a> |<a class='glyphicon glyphicon-trash' title='Hapus' href='deleteadmin.php?no=$var[no]'></a>"; ?></td>
				            </tr>

				            <?php
				            $no++;
				          }
				          ?>
						</tbody>
					</table>
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

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>