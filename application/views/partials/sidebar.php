<!-- views/partials/sidebar.php -->

<div class="sidebar">
  <ul class="list-group">
    <a href="<?= base_url('dashboard'); ?>" class="list-group-item list-group-item-action">
      Dashboard
    </a>
    <a href="#" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#submenu-sarpras" aria-expanded="false" aria-controls="submenu-sarpras">
      Manajemen Sarpras
    </a>
    <div class="collapse" id="submenu-sarpras">
      <a href="<?= base_url('asset'); ?>" class="list-group-item list-group-item-action ml-3">Data Fasilitas</a>
      <a href="#" class="list-group-item list-group-item-action ml-3">Data Barang</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">
      Settings
    </a>
    <a href="#" class="list-group-item list-group-item-action">
      Logout
    </a>
  </ul>
</div>
