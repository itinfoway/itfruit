<?php
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
?></section>
</div>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2019-<?= date("Y") ?> <a href="<?= base_url() ?>"><?= basename(base_url()) ?></a>.</strong> All rights
    reserved.
</footer>

</div>

<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assert/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url(); ?>assert/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assert/admin/dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assert/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url(); ?>assert/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>assert/admin/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assert/admin/dist/js/demo.js"></script>
</body>

<script>
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 3000
        });
<?php
if ($this->session->has_userdata("success")) {
    ?>
            Toast.fire({
                type: 'success',
                title: ' <?= $this->session->userdata("success") ?>'
            });
    <?php
    $this->session->unset_userdata("success");
}
?>
<?php
if ($this->session->has_userdata("error")) {
    ?>
            Toast.fire({
                type: 'error',
                title: ' <?= $this->session->userdata("error") ?>'
            });
    <?php
    $this->session->unset_userdata("error");
}
?>

    });
</script>
<script>
    $(function () {
        $('.select2').select2();
    });
</script>

</html>