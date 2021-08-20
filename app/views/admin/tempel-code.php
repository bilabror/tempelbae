<div class="container-fluid">
  <?php Flasher::flash(); ?>
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
                  <th>Title</th>
                  <th>User</th>
                  <th>Link</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['tempel'] as $val): ?>
                <tr>
                  <td><?=$val['tempel_title'] ?></td>
                  <td>Guest</td>
                  <td><a href="<?=BASEURL.'paste/'.$val['tempel_param'] ?>"><?=BASEURL.'paste/'.$val['tempel_param'] ?></a></td>
                  <td>
                    <a href="<?=BASEURL.'admin/deletetempel/'.$val['tempel_param'] ?>">Detele</a>
                  </td>
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