

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          

          <!-- welcome user -->
          <div><h1>Login berhasil !</h1>
	        <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2></div>

          <!-- Content Row -->
            <div class="row">
             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href ="http://localhost/katalog_mesin/index.php/admin/mesin">Master Katalog Mesin</a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a class="text-xs font-weight-bold text-success text-uppercase mb-1" href ="http://localhost/katalog_mesin/admin/master_admin/user">Master Admin</a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
