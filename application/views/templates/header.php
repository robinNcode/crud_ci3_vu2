<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= APP_TITLE ?></title>
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
</head>

<body>
