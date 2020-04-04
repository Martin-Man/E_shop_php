<?php
require_once("config.php");

  if(isset($_GET['add'])) {

    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). " ");
    confirm($query);

    while($row = fetch_array($query)) {

      if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

        $_SESSION['product_' . $_GET['add']]+=1;
        redirect("../public/checkout.php");

      } else {

        set_message("Mame len " . $row['product_quantity'] . " " . "{$row['product_title']}" . " na sklade");
        redirect("../public/checkout.php");

      }
    }
  }

  if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {

      unset($_SESSION['item_total']);
      unset($_SESSION['item_quantity']);
      redirect("../public/checkout.php");

    } else {
      redirect("../public/checkout.php");
     }
  }

 if(isset($_GET['delete'])) {

  $_SESSION['product_' . $_GET['delete']] = '0';
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);

  redirect("../public/checkout.php");
 }

function cart() {



$total = 0;
$product_title = 0;
$item_quantity = 0;
$item_name = 1;
$item_number =1;
$amount = 1;
$quantity =1;
foreach ($_SESSION as $name => $value) {

if($value > 0 ) {

if(substr($name, 0, 8 ) == "product_") {

$length = strlen($name);

$id = substr($name, 8 , $length);

$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
confirm($query);

while($row = fetch_array($query)) {

$sub = $row['product_price']*$value;
$item_quantity +=$value;

$product_image = display_image($row['product_image']);

//$product_title = {['product_title']};

$product = <<<DELIMETER

<tr>
  <td>{$row['product_title']}<br>

  <img width='100' src='../resources/{$product_image}'>

  </td>
  <td>{$row['product_price']} &euro;</td>
  <td>{$value}</td>
  <td>{$sub} &euro;</td>
  <td><a class='btn btn-warning' href="../resources/cart.php?remove={$row['product_id']}"><span class='glyphicon glyphicon-minus'></span></a>   <a class='btn btn-success' href="../resources/cart.php?add={$row['product_id']}"><span class='glyphicon glyphicon-plus'></span></a>
<a class='btn btn-danger' href="../resources/cart.php?delete={$row['product_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
  </tr>

<input type="hidden" name="product_title[]" value="{$row['product_title']}">
<input type="hidden" name="product_id[]" value="{$row['product_id']}">
<input type="hidden" name="product_price[]" value="{$row['product_price']}">
<input type="hidden" name="product_quantity[]" value="$value">

DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;

    $_SESSION['item_total'] = $total += $sub;
    $_SESSION['item_quantity'] = $item_quantity;

   // $_SESSION['product_title'] = $product_title;
}
           }
      }
    }
}


//function show_paypal() {


//if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {


//$paypal_button = <<<DELIMETER

//    <input type="image" name="upload" border="0"
//src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
//alt="PayPal - The safer, easier way to pay online">


//DELIMETER;

//return $paypal_button;

 // }

//}
// použite¾ne len ak ide paypal --- použivam v thank_you.php
function process_transaction() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Name = $Surname = $Company = $Street = "";
        $Zip_code = $City = $Phone = $Email = "";

        $total = $product_price = $Company = 0;
        $item_quantity = 0;

        foreach ($_SESSION as $name => $value) {

            if($value > 0 ) {

                if(substr($name, 0, 8 ) == "product_") {

                    $length = strlen($name - 8);
                    $id = substr($name, 8 , $length);
                    $Name = escape_string($_POST["Name"]);
                    $Surname = escape_string($_POST["Surname"]);
                    $Company = escape_string($_POST["Company"]);
                    $Street = escape_string($_POST["Street"]);
                    $Zip_code = escape_string($_POST["Zip_code"]);
                    $City = escape_string($_POST["City"]);
                    $Phone = escape_string($_POST["Phone"]);
                    $Email = escape_string($_POST["Email"]);

                    $send_order = query("INSERT INTO orders (Name, Surname, Company, Street, Zip_code, City, Phone,  Email) VALUES('{$Name}', '{$Surname}','{$Company}','{$Street}','{$Zip_code}', '{$City}','{$Phone}','{$Email}')");
                    $last_id =last_id();
                    confirm($send_order);

                    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
                    confirm($query);
                   // $product_price = ['product_price'];
                  //  $product_title = ['product_title'];
                  //  $insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}')");
                  //  confirm($insert_report);

                    while($row = fetch_array($query)) {
                       $product_price = $row['product_price'];
                       $product_title = $row['product_title'];
                       $sub = $row['product_price']*$value;
                       $item_quantity +=$value;


                       $insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}')");
                        confirm($insert_report);
                    }
                    $total += $sub;
                   // echo $item_quantity;
                }
            }
        }
        session_destroy();
    } else {
        redirect("thank_you.php");
    }
}

?>