<section class="appointment-one appointment-one__home-one">

    <img src="Frontend/assets/images/shapes/appointment-map-1-1.png" class="appointment-one__map-1" alt="">
    <img src="Frontend/assets/images/shapes/appointment-map-1-2.png" class="appointment-one__map-2" alt="">

    <img src="Frontend/assets/img/s33.jpg" class="appointment-one__moc" alt="">

    <img src="Frontend/assets/images/resources/appointment-person-1-1.png" class="appointment-one__moc" alt="">

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="block-title text-left">
                    <p class="has-line">07. Appointment</p>
                    <h3>Want to Hear More About <br> Oberlin Hospice?</h3>
                </div><!-- /.block-title -->
                <form action="Frontend/assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                    <div class="row">
                        <div class="col-md-6">

                            <input type="text" placeholder="Full Name" name="full_name">

                            <input type="text" placeholder="Full Name" name="name">

                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <input type="text" placeholder="Email Address" name="email">
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <input type="text" placeholder="Phone Number" name="phone">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="hidden" placeholder="Phone Number" name="discussion_id">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <select name="discussion" class="selectpicker">
                                <option value="">Discussion For</option>
                                <option value="">Basic Query</option>
                                <option value="">Patient Admission</option>
                            </select><!-- /.selectpicker -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-12 text-left">
                            <button type="submit" class="thm-btn contact-one__btn">Submit Now</button>
                            <!-- /.thm-btn contact-one__btn -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </form>
                <div class="result"></div><!-- /.result -->

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
