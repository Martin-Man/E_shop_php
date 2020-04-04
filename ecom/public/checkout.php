<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
      <h1>Pokladňa</h1>

        <!-- odosielanie do thank_you.php-->
<form action="" method="post">


    <table class="table table-striped">
        <thead>
          <tr>
           <th>Produkt</th>
           <th>Cena</th>
           <th>Množstvo</th>
           <th>Spolu</th>
     
          </tr>
        </thead>
        <tbody>


          <?php cart(); ?>



        </tbody>
    </table>


<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Súčet</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Položky:</th>
<td><span class="amount"><?php 
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>
<tr class="shipping">
<th>Doprava a manipulácia</th>
<td>Doprava zdarma</td>
</tr>

<tr class="order-total">
<th>Celková suma objednávky</th>
<td><strong><span class="amount"><?php 
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?> &euro;



</span></strong> </td>
</tr>


</tbody>

</table>

</div>
    <!-- CART TOTALS-->
    

 </div><!--Main Content-->
        
            <!--
        <input type="hidden" name="$product_title" value="<?php 
echo isset($_SESSION['product_title']) ? $_SESSION['product_title'] : $_SESSION['product_title'] = "0"; ?>">
        <input type="hidden" name="product_quantity" value="<?php 
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>">
        <input type="hidden" name="order_status" value="<?php 
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>">
assasssaaasasas<br />
        <?php

echo mt_rand(5, 15);
        ?>
                -->
        <br />
<!--form address-->

                <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="firstname">Meno</label>
                    <input type="text" class="form-control" id="firstname" name="Name" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="lastname">Priezvisko</label>
                    <input type="text" class="form-control" id="lastname" name="Surname" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="company">Spoločnosť</label>
                    <input type="text" class="form-control" id="company" name="Company">
                </div>
            </div>
            <div class="col-sm-6 col-sm-4">
                <div class="form-group">
                    <label for="street">Ulica</label>
                    <input type="text" class="form-control" id="street" name="Street">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="company">PSČ</label>
                    <input type="text" class="form-control" name="Zip_code">
                </div>
            </div>
            <div class="col-sm-6 col-sm-4">
                <div class="form-group">
                    <label for="street">Mesto</label>
                    <input type="text" class="form-control" name="City">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="company">Mobil</label>
                    <input type="text" class="form-control" id="Phone" name="Phone" required>
                </div>
            </div>
            <div class="col-sm-6 col-sm-4">
                <div class="form-group">
                    <label for="street">Email</label>
                    <input type="text" class="form-control" name="Email">
                </div>
            </div>
        </div>


<input type="submit" name="submit" formaction="thank_you.php"> <!-- odosielanie do thank_you.php-->

</form>

    </div>
    <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
