<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACK . "/header.php"); ?>

<?php 

if(!isset($_SESSION['username'])) {


//redirect("../../public/index.php");

}


 ?>

        <div id="page-wrapper">

            <div class="container-fluid">


              <?php 


                if(isset($_GET['orders'])){


                    include(TEMPLATE_BACK . "/orders.php");


                }
                

                elseif(isset($_GET['categories'])){


                    include(TEMPLATE_BACK . "/categories.php");


                }

                 elseif(isset($_GET['products'])){


                    include(TEMPLATE_BACK . "/products.php");


                }


                 elseif(isset($_GET['add_product'])){


                    include(TEMPLATE_BACK . "/add_product.php");


                }


                 elseif(isset($_GET['edit_product'])){


                    include(TEMPLATE_BACK . "/edit_product.php");


                }

                elseif(isset($_GET['users'])){


                    include(TEMPLATE_BACK . "/users.php");


                }


                elseif(isset($_GET['add_user'])){


                    include(TEMPLATE_BACK . "/add_user.php");


                }


                 elseif(isset($_GET['edit_user'])){


                    include(TEMPLATE_BACK . "/edit_user.php");


                }


                  elseif(isset($_GET['reports'])){


                    include(TEMPLATE_BACK . "/reports.php");


                }



                 elseif(isset($_GET['slides'])){


                    include(TEMPLATE_BACK . "/slides.php");


                }


                 elseif(isset($_GET['delete_order_id'])){


                    include(TEMPLATE_BACK . "/delete_order.php");


                }

                 elseif(isset($_GET['delete_product_id'])){


                    include(TEMPLATE_BACK . "/delete_product.php");


                }

                 elseif(isset($_GET['delete_category_id'])){


                    include(TEMPLATE_BACK . "/delete_category.php");


                }


                 elseif(isset($_GET['delete_report_id'])){


                    include(TEMPLATE_BACK . "/delete_report.php");


                }

                 elseif(isset($_GET['delete_user_id'])){


                    include(TEMPLATE_BACK . "/delete_user.php");


                }


                 elseif(isset($_GET['delete_slide_id'])){


                    include(TEMPLATE_BACK . "/delete_slide.php");


                }
                else {include(TEMPLATE_BACK . "/admin_content.php");}


                 ?>
             

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include("../../resources/templates/back/footer.php"); ?> <!-- /#funguje ale je prazdne -->

