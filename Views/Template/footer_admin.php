

<?php if($data['page_name'] == 'perfil') { ?>
<script src="https://cdn.agora.io/sdk/release/AgoraRTCSDK-3.5.2.js"></script>
<?php } ?>
<script>
    const base_url = '<?= base_url() ?>'
</script>

<!-- javascript -->
<script src="<?= media() ?>/js/core/bootstrap.bundle.min.js"></script>
<!-- Icons -->
<script src="<?= media() ?>/js/core/feather.min.js"></script>
<!-- Main Js -->
<script src="<?= media() ?>/js/core/plugins.init.js"></script>
<script src="<?= media() ?>/js/core/app.js"></script>
<script src="<?= media() ?>/js/plugins/sweetalert2.js"></script>

<?php if(isset($data['functions_js'])) { ?>
  <script src="<?= media() ?>/js/<?= $data['functions_js'] ?>.js"></script>
<?php } ?>

</body>
</html>