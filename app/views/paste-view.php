<?php
$url = BASEURL.'paste/embed/'.$data['tempel']['tempel_param'];
$embed = '<iframe src="'.$url.'" width="100%" frameborder="0"></iframe>';

?>
<div class="container-fluid">
  <?php Flasher::flash(); ?>


  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Code Embed</h4>
          <p class="text-muted mb-4">
          </p>
          <div class="input-group">
            <input class="form-control" type="text" name="" id="clipboardInput" value="<?= htmlspecialchars('<iframe src="'.$url.'" frameborder="0"></iframe>'); ?>" />
            <div class="input-group-append">
              <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy mr-2"></i>Copy</button>
              <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut mr-2"></i>Cut</button>
            </div>
          </div>
        </div>
        <!--end card-body-->
      </div>
      <!--end card-->

    </div>
    <!-- end col -->
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Code Tempelbin by guest</h4>
          <pre class="language-markup"><code class="language-markup" id="clipboardParagraph"><?= $data['tempel']['tempel_text'] ?>
          </code></pre>
          <div class="mt-3">
            <button type="button" class="btn btn-info btn-clipboard mb-2" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Copy</button>
            <a href="<?=BASEURL.'paste/raw/'.$data['tempel']['tempel_param'] ?>" class="btn btn-primary btn-clipboard mb-2"><i class="far fa-eye mr-2"></i>Raw</a>
            <a href="<?=BASEURL.'paste/download/'.$data['tempel']['tempel_param'] ?>" class="btn btn-success btn-clipboard mb-2"><i class="fas fa-download mr-2"></i>Download</a>
            <a href="<?=BASEURL.'paste/clone/'.$data['tempel']['tempel_param'] ?>" class="btn btn-warning btn-clipboard mb-2"><i class="fas fa-reply-all mr-2"></i>Clone</a>
            <button type="button" class="btn btn-danger btn-clipboard mb-2" onclick="window.print(1)"><i class="fas fa-print mr-2"></i>Print</button>
            <a href="<?=BASEURL.'paste/report/'.$data['tempel']['tempel_param'] ?>" class="btn btn-danger btn-clipboard mb-2"><i class="fas fa-exclamation-triangle mr-2"></i>Report</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Raw Paste Data</h4>
          <textarea type="text" class="form-control" rows="10" id="clipboardTextarea"><?= $data['tempel']['tempel_text'] ?></textarea>
          <div class="mt-3">
            <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy mr-2"></i>Copy</button>
            <button type="button" class="btn btn-dark btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut mr-2"></i>Cut</button>
          </div>
        </div>
        <!--end card-body-->
      </div>
      <!--end card-->
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
</div>