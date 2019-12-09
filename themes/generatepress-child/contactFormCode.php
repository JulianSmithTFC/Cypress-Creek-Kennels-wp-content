<form id="contact-form" name="contact-form" action="<?php echo get_stylesheet_directory_uri(); ?>/mail.php" method="POST">

    <div class="row">
        <div class="col">
            <input type="text" id="fname" name="fname" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <input type="text" id="lname" name="lname" class="form-control" placeholder="Last name">
        </div>
    </div>
    <br/>
    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
    <input type="email" id="phone" name="phone" class="form-control mb-4" placeholder="Phone Number">

    <textarea class="form-control rounded-0"  id="message" name="message" rows="3" placeholder="Message"></textarea>

</form>
<br/>
<div class="text-center text-md-left">
    <a class="btn btn-primary entoll-blockThree-button contactForm-button" onclick="document.getElementById('contact-form').submit();">Send</a>
</div>