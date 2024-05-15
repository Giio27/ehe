<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='home') ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="home.php?x=home"><i class="bi bi-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='daftar_produk') ? 'active link-light' : 'link-dark' ; ?>" href="daftar_produk.php?x=daftar_produk"> <i class="bi bi-card-list"></i> Daftar Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='pemesanan') ? 'active link-light' : 'link-dark' ; ?>" href="pemesanan.php?x=pemesanan"> <i class="bi bi-cart4"></i> Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='info_pemesanan') ? 'active link-light' : 'link-dark' ; ?>" href="info_pesanan.php?x=info_pemesanan"><i class="bi bi-info-lg"></i> Info Pesanan</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    </div>