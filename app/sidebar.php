 <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
             <img src="../wiyai.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
             <a href="#" class="d-block"><?php echo $_SESSION['nama'] . ' | ' . $_SESSION['level']; ?></a>
         </div>
     </div>

     <!-- SidebarSearch Form -->


     <!-- Sidebar Menu -->
     <?php
        if ($_SESSION['level'] == 'superadmin') {
            include('menu/superadmin.php');
        } else {
            include('menu/operator.php');
        }
        ?>

     <!-- /.sidebar-menu -->
 </div>