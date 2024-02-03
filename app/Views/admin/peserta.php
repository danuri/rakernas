<?= $this->extend('admin/template') ?>

<?= $this->section('style') ?>
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Peserta Rakernas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= base_url('assets/template_rakernas.xlsx');?>">Download template</a> <a href="javascript: void(0);" class="btn btn-success text-light" onclick="$('#lampiran').click()">Import</a></li>
                </ol>
            </div>
						<form method="POST" action="<?= site_url('admin/peserta/import') ?>" style="display: none;" id="formimport" enctype="multipart/form-data">
							<input type="file" name="lampiran" id="lampiran" onchange="$('#formimport').submit()">
						</form>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card card-animate">
      <div class="card-body">
        <?= $output; ?>
      </div>
    </div>
  </div>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<?= $this->endSection() ?>
