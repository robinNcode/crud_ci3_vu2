<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? APP_TITLE ?></title>

    <!-- Default CSS stylesheets -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="<?= asset_url('bootstrap-4.6.2/css/bootstrap.min.css') ?>"/>

    <style>
        /* Add some basic styling for the loader */
        .page-loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
    </style>

    <!-- Additional CSS stylesheets for specific page -->
    <?php if (isset($css_files) && is_array($css_files)) : ?>
        <?php foreach ($css_files as $css_file) : ?>
            <link rel="stylesheet" href="<?= asset_url($css_file) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body>
<!-- Header -->
<?php //$this->load->view('includes/header'); ?>

<!-- Main Content -->
<div id="content">
    <?php if (isset($content_file_path)): ?>
    <?php $this->load->view($content_file_path); ?>
    <?php endif; ?>
</div>

<!-- Footer -->
<?php //$this->load->view('includes/footer'); ?>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= asset_url('bootstrap-4.6.2/js/bootstrap.min.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
<!-- Include Axios from CDN -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    let baseUrl = '<?= base_url() ?>';
</script>
<!-- Additional JS scripts for specific page -->
<?php if (isset($js_files) && is_array($js_files)) : ?>
    <?php foreach ($js_files as $js_file) : ?>
        <script src="<?= asset_url($js_file) ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>

</html>