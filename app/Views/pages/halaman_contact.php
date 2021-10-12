<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="w3-container w3-padding-64 w3-center">
    <h1>Kontak kami</h1>
    <p>Jika ada saran atau sanggahan</p>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-15" id="contact">
    <div class="w3-row">
        <div class="w3-col m5">
            <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
            <h3>Address</h3>
            <p>Swing by for a cup of coffee, or whatever.</p>
            <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
            <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
            <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
        </div>
        <div class="w3-col m7">
            <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                <div class="w3-section">
                    <label>Name</label>
                    <input class="w3-input" type="text" name="Name" required>
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input" type="text" name="Email" required>
                </div>
                <div class="w3-section">
                    <label>Message</label>
                    <input class="w3-input" type="text" name="Message" required>
                </div>
                <input class="w3-check" type="checkbox" checked name="Like">
                <label>I Like it!</label>
                <button type="submit" class="w3-button w3-right w3-theme">Send</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>