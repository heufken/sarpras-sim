<!-- views/partials/sidebar.php -->

<section>
    <div id="mySidebar" class="sidebar">
        <button class="closebtn" onclick="closeNav()">☰</button>
        <div class="sidebar-header">
            <strong>OPSI</strong>
        </div>
        <center>
            <a href="<?php echo base_url().'user/show' ?>">USER</a>
            <a href="<?php echo base_url().'asset' ?>">DATA</a>
            <a href="<?php echo base_url().'kondisi_sarpras' ?>">KONDISI</a>
            <a href="<?php echo base_url().'pegawai' ?>">PENGELOLA</a>
        </center>
    </div>
</section>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("mySidebar").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("mySidebar").style.display = "block";
    }
</script>
