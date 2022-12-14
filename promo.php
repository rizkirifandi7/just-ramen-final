<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/icon/favicon.png">
    <title>Promo | just ramen</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  	<!-- CSS -->
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
  		include 'config.php';
  		$promo = mysqli_query($conn,"select * from promo");
  	?>
    <nav class="navbar navbar-expand-lg navbar-light py-4">
      <div class="container">
        <a class="navbar-brand mx-auto" href="index.php">just ramen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link" href="menu-ramen.php">Menu</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="promo.php">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="promo-title my-4">Promo</h1>
      <div class="row">
        <div class="col-12">
          <div class="card" style="background: white;">
            <div class="table-data">
      				<div class="order">
      					<table id="table_promo" class="border-bottom-0" style="border-collapse: separate; border-spacing: 1em;">
      						<thead class="">
      							<tr>
      								<th class="border-bottom-0"></th>
      							</tr>
      						</thead>
      						<tbody>
      							<?php
      					        while($row = mysqli_fetch_assoc($promo))
      					        {
      					            echo "
      											<tr class=''>
      						            <td class='promo-card'>
                                <div class='row'>
                                  <div class='col-8'>
                                    <h1 class='promo-title'>".$row['title_promo']."</h1>
                                    <p class='promo-desc mt-3 mb-0'>".$row['desc_promo']."</p>
                                  </div>

                                  <div class='col-1'></div>

                                  <div class='col-3 text-end'>
                                    <img class='w-100' style='max-height: 180px;' src='assets/img/promo/".$row['img_promo']."'></img>
                                  </div>
                                </div>


                              </td>
      					        		</tr>";
      					        }
      					    ?>
      						</tbody>
      					</table>
      				</div>
      			</div>
          </div>
        </div>
      </div>
    </div>

    <section class="footer">
      <div class="container">
        <footer class="row row-cols-4 py-5 mt-4">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <a href="index.html" class="navbar-brand d-flex align-items-center mb-3 d-inline-flex">just ramen</a>
            <p class="desc text-justify">a well known japanese restaurant in Bandung. Specialized on ramen and any japanese foods.</p>
          </div>

          <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <h5 class="nav-col mb-3">Social Media</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Twitter</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Instagram</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Facebook</a></li>
            </ul>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <h5 class="nav-col mb-3">Our Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 d-inline-flex">Home</a></li>
              <li class="nav-item mb-2"><a href="menu.php" class="nav-link p-0 d-inline-flex">Menu</a></li>
              <li class="nav-item mb-2"><a href="promo.php" class="nav-link p-0 d-inline-flex">Promo</a></li>
              <li class="nav-item mb-2"><a href="login.php" class="nav-link p-0 d-inline-flex">Login</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </section>

    
    <script src="js/jquery.js"></script>
  	<script src="js/bootstrap.js" charset="utf-8"></script>
  	<script type="text/javascript">
  			$(document).ready( function () {
  			$('#table_promo').DataTable({
          "ordering": false,
          searching: false,
  				pageLength: 5,
  				lengthMenu: [[5, 10, 20, -1], [5, 10, 15, 'All']],
  				paging: true,
  				language: {
  					search: '',
  					searchPlaceholder: "Search",
  					"lengthMenu": "Show _MENU_" },
  			});
  		} );
  	</script>
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  	<script src="js/script.js"></script>
  </body>
</html>
