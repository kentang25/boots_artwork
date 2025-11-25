<?= $this->extend('layout_front/layout'); ?>
<?= $this->section('content'); ?>

<div class="container">

    <div class="about d-flex flex-column align-items-center text-center mt-5 mb-5">

        <!-- FOTO -->
        <img src="/img/about.jpg" 
             alt="About Boots Artwork" 
             class="img-fluid mb-4 about-img" 
             loading="lazy">

        <!-- TEKS -->
        <p class="about-text">
            This is me behind the darkness of Boots Artwork.  
            From these works, I pour out my feelings of sadness,
            anxiety, destruction, and failure to face this terrible world.  
            I hope you also feel what I feel.
        </p>

        <p class="about-text">
            If you feel what I feel, we are the same —  
            we are humans covered in a sense of destruction and chaos in this world.  
            I can create artwork that reflects what we have felt all this time.
        </p>

        <!-- KONTAK -->
        <div class="contact-section text-center mt-5 mb-5">
            <span class="contact-item d-block d-md-inline mx-3 my-2">
                <i class="fa-regular fa-envelope"></i> adenbudi@gmail.com
            </span><br>

            <span class="contact-item d-block d-md-inline mx-3 my-2">
                <i class="fa-brands fa-instagram"></i> boots_artwork
            </span>
        </div>

    </div>

</div>

<!-- CSS -->
<style>
/* FOTO RESPONSIVE */
.about-img {
    width: 100%;
    max-width: 450px;  /* Biar tidak terlalu besar */
    border-radius: 8px;
}

/* TEKS UTAMA */
.about-text {
    color: #ddd;
    line-height: 1.8;
    font-size: 1.1rem;
    max-width: 850px;
}

/* KONTAK */
.contact-section {
    background: linear-gradient(180deg, #000 0%, #111 100%);
    padding: 2rem;
    border: 1px solid #550000;
    border-radius: 12px;
    box-shadow: 0 0 25px rgba(255, 0, 0, 0.15);
    font-family: "Cinzel Decorative", serif;
    width: 100%;
    max-width: 650px;
    margin: auto;
}

.contact-item {
    color: #b30000;
    font-size: 1.2rem;
    font-weight: bold;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    text-shadow: 0 0 8px #900;
    display: inline-block;
}

.contact-item i {
    margin-right: 8px;
}

/* HOVER EFEK */
.contact-item:hover {
    color: #ff0000;
    text-shadow: 0 0 15px #f00, 0 0 25px #900;
    transform: scale(1.05);
}

/* RESPONSIVE UNTUK HP */
@media (max-width: 576px) {
    .about-text {
        font-size: 1rem;
        padding: 0 10px;
    }

    .contact-item {
        font-size: 1.1rem;
    }
}
</style>

<?= $this->endSection(); ?>
