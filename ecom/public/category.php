<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Srdečné Vitame na stránke o Medometoch</h1>
            <p>
                Medomet patrí medzi najdôležitejšie včelárske potreby k získavania včelieho medu. Existuje niekoľko typov - tangenciálne, radiálne či zvratné. Každý typ sa vyrába v rôznych variantách ako napr. priemer bubna, pohon, množstvo a rozmery použitých rámikov atď. Pri výbere medometu je dôležitá výška rámika a počet včelstiev. Medomet je praktické mechanické zariadenie určené na získavanie včelieho medu zo včelích plástov. Odviečkované zásobné plásty sa umiestňujú naplocho k stenám medometu a po roztočení otočného bubna je z odviečkovaných buniek med vytáčaný na steny medometu, odkiaľ steká na dno a ústím vyteká do pripravenej nádoby na med. 
            </p>
            <p>
<a class="btn btn-primary btn-large call call2" href="../resources/cart.php?add=1">Kúpiť</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Produkty z kategorie</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

         <?php get_products_in_cat_page(); ?>


        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
