

            

            <section id="contact" class="contact section-bg">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        
                        <div class="col-md-6">
                            <div class="footer-form">
                                <h2>Scan Any Document</h2>

                                <form  method="post" action="">
                                           
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="a" placeholder="Enter title of the document" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="e" placeholder="Enter Page No" />
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control" name="cate">
                                                    <option value="">Select Document Language</option>
                                                    <option value="Hindi">Hindi</option>            
                                                    <option value="English">English</option>                                
                                                </select>
                                            </div>

                                            <div class="form-group plus-captcha">
                                                
                                                <p class="plus-text" style="color: #fff;">
                                                    <span class="">7</span>+<span class="">2</span>=
                                                </p>

                                                <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Please enter Total" required />

                                                <input type="hidden" class="form-control" name="captchatotal" id="captchatotal" value="9" />
                                            </div>

                                            <div class="form-submit">
                                                <input type="submit" value="Submit" class="btn btn-primary" onClick="return bannerformValidation();" />
                                            </div>
                                        </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-wrap">
                                <div class="row">
                                    <div class="col-lg-12 info">
                                        <i class="fa-solid fa-compass"></i>

                                        <h4>Problem Statement</h4>

                                        <p>OCR & ............... </p>
                                    </div>

                                    <div class="col-lg-12 info mt-5">
                                        <i class="fa-brands fa-square-whatsapp"></i>

                                        <h4>Team Name</h4>

                                        <p>test  </p>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </main>

        <div class="copyright">
            <div class="container-fluid">
                

                <p>All Rights Reserved - © 2022</p>

                
            </div>
        </div>

        

        <div class="modal fade" id="Enquiry_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title">Scan Document</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <div class="fixed-form fixed">
                            <img src="logo.png" id="form-logo" />

                            <p class="fixed-form-p">OCR Device</p>

                            <form  method="post" action="">
                                           
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="a" placeholder="Enter title of the document" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="e" placeholder="Enter Page No" />
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control" name="cate">
                                                    <option value="">Select Document Language</option>
                                                    <option value="Hindi">Hindi</option>            
                                                    <option value="English">English</option>                                
                                                </select>
                                            </div>

                                            <div class="form-group plus-captcha">
                                                
                                                <p class="plus-text" style="color: #fff;">
                                                    <span class="">7</span>+<span class="">2</span>=
                                                </p>

                                                <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Please enter Total" required />

                                                <input type="hidden" class="form-control" name="captchatotal" id="captchatotal" value="9" />
                                            </div>

                                            <div class="form-submit">
                                                <input type="submit" value="Submit" class="btn btn-primary" onClick="return bannerformValidation();" />
                                            </div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <script src="../code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

        <script src="../cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">
            function downloadbrochureValidation() {
                if (document.downloadbrochure.name.value == "") {
                    alert("Please enter your Name.");
                    document.downloadbrochure.name.focus();
                    return false;
                }
                if (document.downloadbrochure.name.value.length < 3) {
                    alert("Please enter minimum 3 characters.");
                    document.downloadbrochure.name.focus();
                    return false;
                }
                if (document.downloadbrochure.name.value.length > 32) {
                    alert("Please enter less than 32 characters.");
                    document.bestdeal.name.focus();
                    return false;
                }
                if (document.downloadbrochure.email.value == "") {
                    alert("Please enter your Email.");
                    document.downloadbrochure.email.focus();
                    return false;
                }
                if (!document.downloadbrochure.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                    alert("Please enter valid Email.");
                    document.downloadbrochure.email.focus();
                    return false;
                }
                if (document.downloadbrochure.phone.value == "") {
                    alert("Please enter your Mobile No.");
                    document.downloadbrochure.phone.focus();
                    return false;
                }
                if (document.downloadbrochure.phone.value.length < 10) {
                    alert("Please enter your valid Mobile No.");
                    document.downloadbrochure.phone.focus();
                    return false;
                }
                if (document.downloadbrochure.captcha.value == "") {
                    alert("Please enter captcha code.");

                    document.downloadbrochure.captcha.focus();

                    return false;
                }

                if (document.downloadbrochure.captcha.value != document.downloadbrochure.captchatotal.value) {
                    alert("Please enter captcha code.");

                    document.downloadbrochure.captcha.focus();

                    return false;
                }
            }
        </script>
        <script type="text/javascript">
            function getbestdealValidation() {
                if (document.getbestdeal.name.value == "") {
                    alert("Please enter your Name.");
                    document.getbestdeal.name.focus();
                    return false;
                }
                if (document.getbestdeal.name.value.length < 3) {
                    alert("Please enter minimum 3 characters.");
                    document.getbestdeal.name.focus();
                    return false;
                }
                if (document.getbestdeal.name.value.length > 32) {
                    alert("Please enter less than 32 characters.");
                    document.getbestdeal.name.focus();
                    return false;
                }
                if (document.getbestdeal.email.value == "") {
                    alert("Please enter your Email.");
                    document.getbestdeal.email.focus();
                    return false;
                }
                if (!document.getbestdeal.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                    alert("Please enter valid Email.");
                    document.getbestdeal.email.focus();
                    return false;
                }
                if (document.getbestdeal.phone.value == "") {
                    alert("Please enter your Mobile No.");
                    document.getbestdeal.phone.focus();
                    return false;
                }
                if (document.getbestdeal.phone.value.length < 10) {
                    alert("Please enter your valid Mobile No.");
                    document.getbestdeal.phone.focus();
                    return false;
                }
                if (document.getbestdeal.captcha.value == "") {
                    alert("Please enter captcha code.");

                    document.getbestdeal.captcha.focus();

                    return false;
                }

                if (document.getbestdeal.captcha.value != document.getbestdeal.captchatotal.value) {
                    alert("Please enter captcha code.");

                    document.getbestdeal.captcha.focus();

                    return false;
                }
            }
        </script>
        <script type="text/javascript">
            function contactformValidation() {
                if (document.contactform.name.value == "") {
                    alert("Please enter your Name.");
                    document.contactform.name.focus();
                    return false;
                }
                if (document.contactform.name.value.length < 3) {
                    alert("Please enter minimum 3 characters.");
                    document.contactform.name.focus();
                    return false;
                }
                if (document.contactform.name.value.length > 32) {
                    alert("Please enter less than 32 characters.");
                    document.contactform.name.focus();
                    return false;
                }
                if (document.contactform.email.value == "") {
                    alert("Please enter your Email.");
                    document.contactform.email.focus();
                    return false;
                }
                if (!document.contactform.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                    alert("Please enter valid Email.");
                    document.contactform.email.focus();
                    return false;
                }
                if (document.contactform.phone.value == "") {
                    alert("Please enter your Mobile No.");
                    document.contactform.phone.focus();
                    return false;
                }
                if (document.contactform.phone.value.length < 10) {
                    alert("Please enter your valid Mobile No.");
                    document.contactform.phone.focus();
                    return false;
                }
                if (document.contactform.message.value == "") {
                    alert("Please enter your Message.");
                    document.contactform.message.focus();
                    return false;
                }
                if (document.contactform.captcha.value == "") {
                    alert("Please enter captcha code.");

                    document.contactform.captcha.focus();

                    return false;
                }

                if (document.contactform.captcha.value != document.contactform.captchatotal.value) {
                    alert("Please enter captcha code.");

                    document.contactform.captcha.focus();

                    return false;
                }
            }
        </script>
        <script type="text/javascript">
            function bannerformValidation() {
                if (document.bannerform.name.value == "") {
                    alert("Please enter your Name.");
                    document.bannerform.name.focus();
                    return false;
                }
                if (document.bannerform.name.value.length < 3) {
                    alert("Please enter minimum 3 characters.");
                    document.bannerform.name.focus();
                    return false;
                }
                if (document.bannerform.name.value.length > 32) {
                    alert("Please enter less than 32 characters.");
                    document.bannerform.name.focus();
                    return false;
                }
                if (document.bannerform.email.value == "") {
                    alert("Please enter your Email.");
                    document.bannerform.email.focus();
                    return false;
                }
                if (!document.bannerform.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                    alert("Please enter valid Email.");
                    document.bannerform.email.focus();
                    return false;
                }
                if (document.bannerform.phone.value == "") {
                    alert("Please enter your Mobile No.");
                    document.bannerform.phone.focus();
                    return false;
                }
                if (document.bannerform.phone.value.length < 10) {
                    alert("Please enter your valid Mobile No.");
                    document.bannerform.phone.focus();
                    return false;
                }
                if (document.bannerform.captcha.value == "") {
                    alert("Please enter captcha code.");

                    document.bannerform.captcha.focus();

                    return false;
                }

                if (document.bannerform.captcha.value != document.bannerform.captchatotal.value) {
                    alert("Please enter captcha code.");

                    document.bannerform.captcha.focus();

                    return false;
                }
            }
        </script>
    </body>
</html>
