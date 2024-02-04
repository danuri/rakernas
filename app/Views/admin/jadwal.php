<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Jadwal Kegiatan</h4>

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
  <div class="col-md-12">
    <div class="card card-animate">
        <div class="card-body">
          <form class="" action="index.html" method="post">
            <div class="ckeditor-classic"><?= get_option('jadwal_kegiatan')?></div>
          </form>
        </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url()?>/assets/admin/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script type="text/javascript">
  ClassicEditor.create(document.querySelector(".ckeditor-classic")).then(function(e) {
      e.ui.view.editable.element.style.height = "200px"
  }).catch(function(e) {
      console.error(e)
  })
</script>
<?= $this->endSection() ?>
