<?php  $this->load->view($template . "/_partials/header") ?>

<body class="grey lighten-4">

<!-- BEGIN MENU -->
<?php  $this->load->view($template . "/_partials/navbar") ?>
<!-- END MENU -->

<div class="container" style="margin-top: 30px">
    <?php $this->load->view($inner_view); ?>
</div>

<?php  $this->load->view($template . "/_partials/footer") ?>

