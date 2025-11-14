<?= $this->extend('layout_front/layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="about d-flex flex-column align-items-center justify-content-center mt-5 mb-5 text-center">
        <img src="/img/about.jpg" alt="[Your detailed alt text here]" class="img-fluid mb-3"
            style="width: 50%; height: auto;" loading="lazy">
        <p>This is me behind the darkness of boots artwork, from these works I pour out my feelings of sadness,
            anxiety, destruction,<br> failure to face this terrible world, I hope you also feel what I feel.
        </p>
        <p>If you feel what I feel, we are the same, we are humans who are covered in a sense of destruction and chaos
            in this world,<br> I can create artwork that we have felt all this time.
        </p>

        <!-- HTML -->
<div class="contact-section text-center mt-5 mb-5">
  <span class="contact-item mx-3">
    <i class="fa-regular fa-envelope"></i> adenbudi@gmail.com
  </span>
  <span class="contact-item mx-3">
    <i class="fa-brands fa-instagram"></i> boots_artwork
  </span>
</div>

<!-- CSS -->
<style>
.contact-section {
  background: linear-gradient(180deg, #000 0%, #111 100%);
  padding: 2rem;
  border: 1px solid #550000;
  border-radius: 12px;
  box-shadow: 0 0 25px rgba(255, 0, 0, 0.1);
  font-family: "Cinzel Decorative", serif;
}

.contact-item {
  color: #b30000;
  font-size: 1.3rem;
  font-weight: bold;
  letter-spacing: 2px;
  transition: all 0.3s ease;
  text-transform: uppercase;
  text-shadow: 0 0 8px #900;
  cursor: pointer;
}

.contact-item i {
  margin-right: 8px;
}

.contact-item:hover {
  color: #ff0000;
  text-shadow: 0 0 15px #f00, 0 0 30px #900;
  transform: scale(1.05);
}
</style>

<!-- Optional Google Font -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet"> -->

    </div>

</div>

<?= $this->endSection(); ?>