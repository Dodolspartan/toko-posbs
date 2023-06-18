   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse" style="background:#328f6b;">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="100" height="100"></a></p>
              	  <h5 class="centered">Dadi Farisa</h5>
              	  <h5 class="centered" style="font-family:poppins; font-font-weight:500;" >(<?php echo $hasil_profil['NIK'];?> )</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard" style="color:white;"></i>
                          <span style="font-family:poppins; color:white;">Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop" style="color:white;"></i>
                          <span style="font-family:poppins; color:white;">Master <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=barang" style="font-family:poppins;">Barang</a></li>
                          <li><a  href="index.php?page=kategori" style="font-family:poppins;">Kategori</a></li>
                          <li><a  href="index.php?page=user" style="font-family:poppins;">User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop" style="color:white;"></i>
                          <span style="font-family:poppins; color:white;">Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=jual" style="font-family:poppins;">Transaksi Jual</a></li>
                          <li><a  href="index.php?page=laporan" style="font-family:poppins;">Laporan Penjualan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cog" style="color:white;"></i>
                          <span style="font-family:poppins; color:white;">Setting <span style="padding-left:3px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a href="index.php?page=pengaturan" style="font-family:poppins;">Pengaturan Toko</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
