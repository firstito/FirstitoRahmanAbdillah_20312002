<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <center><h1>Big Six Top Score EPL</h1></center>

    <div class="container_yyy">
        <img src="<?= base_url('assets/tse/haland.jpg') ?>" alt="haland">
        <img src="<?= base_url('assets/tse/kane.jpg') ?>" alt="kane">
        <img src="<?= base_url('assets/tse/mitrovic.jpg') ?>" alt="mitrovic">
        <img src="<?= base_url('assets/tse/gabjes.jpg') ?>" alt="gabjes">
        <img src="<?= base_url('assets/tse/firmino.jpg') ?>" alt="firmino">
        <img src="<?= base_url('assets/tse/poden.jpg') ?>" alt="poden">
    </div>
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>