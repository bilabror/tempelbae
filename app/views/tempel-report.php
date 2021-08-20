<?php
$url = BASEURL.'paste/embed/'.$data['tempel']['tempel_param'];
$embed = '<iframe src="'.$url.'" width="100%" frameborder="0"></iframe>';

?>
<div class="container-fluid">
  <?php Flasher::flash(); ?>


  <div class="row">
    <?php
    $url = BASEURL.'paste/embed/'.$data['tempel']['tempel_param'];
    $embed = '<iframe src="'.$url.'" width="100%" frameborder="0"></iframe>';

    ?>
    <div class="container-fluid">

      <div class="alert alert-danger border-0" role="alert">
        Please indicate why this paste is abusive and why you want it removed.
      </div>


      <div class="row">
        <div class="col-lg-6">


          <div class="card">
            <div class="card-body">
              <h4 class="mt-0 header-title">Report Code Tempel</h4>
              <p class="text-muted mb-4">
                Report Abuse For Tempel ID: <?= $data['tempel_param'] ?>
              </p>
              <form class="" method="post">
                <input type="hidden" name="tempel_param" id="tempel_param" value="<?=$data['tempel_param'] ?>" />
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="username">Your Full Name</label>
                      <input type="text" class="form-control" id="report_name" name="report_name" required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="useremail">Email address</label>
                      <input type="email" name="report_email" class="form-control" id="report_email" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea class="form-control" rows="5" id="report_message" name="report_message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 text-right">
                    <button type="submit" name="submit" class="btn btn-primary px-5 py-2">Report Abuse</button>
                  </div>
                </div>
              </form>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->

        </div>
        <!-- end col -->
      </div>

    </div>
  </div>

</div>