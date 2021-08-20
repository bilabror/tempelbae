<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">

          <h4 class="mt-0 header-title">List Data Tempel</h4>
          <p class="text-muted mb-4 font-13">
          </p>
          <div class="table-responsive">

            <table id="datatable" class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Tempel ID</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['report'] as $val): ?>
                <tr>
                  <td><?=$val['report_name'] ?></td>
                  <td><?=$val['report_email'] ?></td>
                  <td><?=$val['report_message'] ?></td>
                  <td><a href="<?=BASEURL.'paste/'.$val['tempel_param'] ?>"><?=$val['tempel_param'] ?></a></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
</div>
<!-- container -->