<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>PISO | <?php if (basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "index" || basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "piso") { echo 'Welcome'; } else { echo ucfirst(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))); } ?></title>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
   <!-- Toastr -->
   <link rel="stylesheet" href="assets/adminlte/plugins/toastr/toastr.min.css">
   <!-- Template Main CSS File -->
   <link href="assets/adminlte/dist/css/adminlte.min.css" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">
   <div class="wrapper">