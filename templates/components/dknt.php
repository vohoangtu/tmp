<div class="footer-news col-sm-3">
    <h2 class="footer-title"><?= dangkynhantin ?></h2>
    <p class="newsletter-slogan"><?= slogandangkynhantin ?></p>
    <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="newsletter-input">
            <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="<?= nhapemail ?>" required />
            <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
        </div>
        <div class="newsletter-button">
            <input type="submit" class="btn btn-sm btn-danger w-100" name="submit-newsletter" value="<?= gui ?>" disabled>
            <input type="hidden" class="btn btn-sm btn-danger w-100" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
        </div>
    </form>
</div>