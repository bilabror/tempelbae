<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?=$data['title'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="pastebin clone build with php" name="description" />
  <meta content="Bil Abror" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">


  <!-- plugins -->
  <link href="<?= BASEURL; ?>public/assets/plugins/prism/prism.css" rel="stylesheet" type="text/css">
  <link href="<?= BASEURL; ?>public/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="<?= BASEURL; ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= BASEURL; ?>public/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <pre class="language-markup"><code class="language-markup"><?=$data['tempel_text'] ?></code></pre>

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


  <!-- App js -->
  <script src="<?= BASEURL; ?>public/assets/js/app.js"></script>

  <script>
    // Select2
    $(".select2").select2({
      width: '100%'
    });


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