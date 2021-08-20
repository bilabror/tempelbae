<footer class="footer text-center text-sm-left">
  &copy; <?=date('Y') ?> Tempelbin <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Bil Abror</span>
</footer>
</div>
<!-- end page content -->
</div>
</div>
<!-- end page-wrapper -->

<!-- jQuery  -->
<script src="<?= BASEURL; ?>public/assets/js/jquery.min.js"></script>
<script src="<?= BASEURL; ?>public/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL; ?>public/assets/js/metisMenu.min.js"></script>
<script src="<?= BASEURL; ?>public/assets/js/waves.min.js"></script>
<script src="<?= BASEURL; ?>public/assets/js/jquery.slimscroll.min.js"></script>

<!-- plugins -->
<script src="<?= BASEURL; ?>public/assets/plugins/select2/select2.min.js"></script>
<script src="<?= BASEURL; ?>public/assets/plugins/prism/prism.js"></script>
<script src="<?= BASEURL; ?>public/assets/plugins/clipboard/clipboard.min.js"></script>
<!-- Required datatable js -->
<script src="<?= BASEURL; ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL; ?>public/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>


<!-- App js -->
<script src="<?= BASEURL; ?>public/assets/js/app.js"></script>

<script>
// Select2
$(".select2").select2({
width: '100%'
});

$('#datatable').DataTable();

var clipboard = new ClipboardJS('.btn');

clipboard.on('success', function(e) {
console.log(e);
});

clipboard.on('error', function(e) {
console.log(e);
});
</script>

</body>
</html>