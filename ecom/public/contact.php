<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontaktujte nás</h2>
                    <h3 class="section-subheading ">
                        <?php display_message(); ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" >

                        <?php send_message(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Vase Meno *" id="name" required data-validation-required-message="Prosím, zadajte vaše meno.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Vas Email *" id="email" required data-validation-required-message="Prosím, zadajte vašu e-mailovú adresu.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Vaše telefónne číslo *" id="phone" required data-validation-required-message="Zadajte vaše telefónne číslo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Vaša správa *" id="message" required data-validation-required-message="Zadajte správu."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button name="submit" type="submit" class="btn btn-xl">Poslať správu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "header.php") ?>