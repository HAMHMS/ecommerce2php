<?php 

    include "includes/header.php";
    include "includes/sidebar.php";

?>
    
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Slider</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider</h1>
            </div>
        </div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <?php 

        if (!isset($_GET['action'])) {
            include 'views/slider/view_slider.php';
        }elseif($_GET['action'] == 'add') {
            include 'views/slider/add_slider.php';
        }elseif($_GET['action'] == 'edit') {
            include 'views/slider/edit_slider.php';
        }


         ?>
    </div>
</div><!--/.row-->
        
    </div>  <!--/.main-->
    
<?php 
    
    include 'includes/footer.php';

?>