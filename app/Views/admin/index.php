<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Analytics</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card card-animate">
        <div class="card-body">
          ss
        </div><!-- end card body -->
    </div>
    <div class="card card-animate">
      <div class="card-body">
        <div id="jeniskelamin_chart" data-colors='["--vz-primary", "--vz-primary-rgb, .75", "--vz-primary-rgb, 0.60"]' class="apex-charts" dir="ltr"></div>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="card card-animate">
      <div class="card-body">
        <div id="pensiun_chart" data-colors='["--vz-primary", "--vz-primary-rgb, .75", "--vz-primary-rgb, 0.60"]' class="apex-charts" dir="ltr"></div>
      </div>
    </div>
  </div>

</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<?= $this->endSection() ?>
