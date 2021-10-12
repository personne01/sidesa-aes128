<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="myPage">




    <!-- Image Header -->
    <div class="w3-display-container w3-animate-opacity">
        <img src="/img/bgdesk1.jpg" alt="boat" style="width:100%;min-height:400px;max-height:600px;">
    </div>

    <!-- Modal -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-top">
            <header class="w3-container w3-teal w3-display-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
                <h4>Oh snap! We just showed you a modal..</h4>
                <h5>Because we can <i class="fa fa-smile-o"></i></h5>
            </header>
            <div class="w3-container">
                <p>Cool huh? Ok, enough teasing around..</p>
                <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal footer</p>
            </footer>
        </div>
    </div>

    <!-- Team Container -->
    <div class="w3-container w3-padding-64 w3-center" id="team">
        <h2>Profil</h2>
        <p>Pekabat Desa Janti</p>

        <div class="w3-row"><br>

            <div class="w3-quarter">
                <img src="/img/oni.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Johnny Walker</h3>
                <p>Web Designer</p>
            </div>

            <div class="w3-quarter">
                <img src="/img/pendik.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Rebecca Flex</h3>
                <p>Support</p>
            </div>

            <div class="w3-quarter">
                <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Jan Ringo</h3>
                <p>Boss man</p>
            </div>

            <div class="w3-quarter">
                <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Kai Ringo</h3>
                <p>Fixer</p>
            </div>

        </div>
    </div>

    <!-- Work Row -->
    <div class="w3-row-padding w3-padding-64 w3-theme-l2" id="work">

        <div class="w3-quarter">
            <h2>Our Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="/w3images/snow.jpg" alt="Snow" style="width:100%">
                <div class="w3-container">
                    <h3>Customer 1</h3>
                    <h4>Trade</h4>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
                <div class="w3-container">
                    <h3>Customer 2</h3>
                    <h4>Trade</h4>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
                <div class="w3-container">
                    <h3>Customer 3</h3>
                    <h4>Trade</h4>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                </div>
            </div>
        </div>

    </div>





    <?= $this->endSection(); ?>