<?php
include_once './inc/header.php';
include_once './inc/slider.php';
?>
<!-- /.offcanvas-info -->
<div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text">
    <div class="container inner text-center">
        <div class="space90"></div>
        <h1 class="page-title">Contact Us</h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
    </div>
    <!-- /.container -->
</div>
<!-- /.wrapper -->
<div class="wrapper gray-wrapper">
    <div class="container inner">
        <div class="row text-center gutter-60">
            <div class="col-md-4">
                <div class="icon icon-svg mb-20"><img src="style/images/icons/ui-gps.png" alt="" /></div>
                <p class="mb-0">No: 697, Jalan Damansara,<br> Taman Tun Dr Ismail, 60000 Kuala Lumpur, Malaysia</p>
            </div>
            <!--/column -->
            <div class="col-md-4">
                <div class="icon icon-svg mb-20"><img src="style/images/icons/co-telephone.png" alt="" /></div>
                <p class="mb-0">+60 16-548 4973<br> +94 81 205 0437 </p>
            </div>
            <!--/column -->
            <div class="col-md-4">
                <div class="icon icon-svg mb-20"><img src="style/images/icons/co-email-5.png" alt="" /></div>
                <p class="mb-0"><a class="nocolor" href="mailto:hello@etronicsolutions.com">hello@etronicsolutions.com</a><br>
                    <!--<a class="nocolor" href="mailto:#">asistant@email.com</a>-->
                </p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.wrapper -->
<div class="wrapper light-wrapper">
    <div class="image-block-wrapper">
        <div class="image-block col-lg-6 p-0">
            <div class="google-map map-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.4564967931838!2d-122.03250858386237!3d37.33169997984258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5b6e94ffe23%3A0x63bb79532baa6af4!2sApple+Campus!5e0!3m2!1sen!2str!4v1553850783971!5m2!1sen!2str" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
            </div>
            <!--/.google-map -->
        </div>
        <!--/.image-block -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box d-flex pr-25">
                        <div class="align-self-center">
                            <h3>Drop Us a Line</h3>
                            <p>Fusce dapibus tellus commodo tortor mauris condimentum utellus porta fermentum sem malesuada magna.</p>
                            <div class="space30"></div>
                            <form id="contact-form" method="post" action="contact/contact.php">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="form-row">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name *" required="required" data-error="First Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-group">
                                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last Name *" required="required" data-error="Last Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-group">
                                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Message is required."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-send" value="Send message">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!--/.container-fluid -->
    </div>
    <!--/.image-block-wrapper -->
</div>
<!-- /.wrapper -->
<?php
include_once './inc/footer.php';
?>