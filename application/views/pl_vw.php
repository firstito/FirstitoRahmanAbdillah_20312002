<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <center><h1>BIG FOUR EPL KLASEMEN</h1></center>

    <div class="container_zzz">
    <img src="<?= base_url('assets/pl/cty.jpg') ?>" alt="Manchester City">
    <img src="<?= base_url('assets/pl/ars.jpg') ?>" alt="Arsenal">
    <img src="<?= base_url('assets/pl/tth.jpg') ?>" alt="Totenham">
    <img src="<?= base_url('assets/pl/chl.jpg') ?>" alt="Chelsea">
    </div>
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>