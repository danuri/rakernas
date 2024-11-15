<?= $this->extend('admin/template') ?>

<?= $this->section('style') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Peserta Rakernas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li><a href="<?= base_url('assets/template_rakernas.xlsx');?>">Download template</a> <a href="javascript: void(0);" class="btn btn-success text-light" onclick="$('#lampiran').click()">Import</a></li>
                    <li><button type="button" name="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Peserta</button></li>
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
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered" id="datatables">
					<thead>
						<tr>
							<th>NIP</th>
							<th>NAMA</th>
							<th>JABATAN</th>
							<th>SESI 1</th>
							<th>SESI 2</th>
							<th>SESI 3</th>
							<th>SESI 4</th>
							<th>SESI 5</th>
							<th>SESI 6</th>
							<th>OPTION</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<div id="tambahModal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('admin/peserta/addpeserta') ?>" method="post" id="addform">
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                    <input type="number" class="form-control" placeholder="Cari NIP" name="nip" id="nip" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="searchpegawai()">Cari</button>
                  </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama1" value="" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Jabatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jabatan" id="jabatan1" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">ID Card</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomor" value="">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#addform').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('admin/peserta/updatepeserta') ?>" method="post" id="updateform">
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nip" id="nip2" value="" readonly>
                    <input type="hidden" class="form-control" name="id" id="id" value="" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama2" value="" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Jabatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jabatan" id="jabatan2" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">ID Card</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomor" id="nomor2" value="">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#updateform').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url()?>assets/display/vendor/jquery-form/jquery.form.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	var table = $('#datatables').DataTable({
		processing: true,
		serverSide: true,
		ajax: {
			url: '<?= site_url('admin/peserta/getdata')?>'
		},
		columns: [
			{data: 'nip'},
			{data: 'nama'},
			{data: 'jabatan'},
			{data: 'sesi_1'},
			{data: 'sesi_2'},
			{data: 'sesi_3'},
			{data: 'sesi_4'},
			{data: 'sesi_5'},
			{data: 'sesi_6'},
			{data: 'action', orderable: false}
		]
	});

	$('#addform').ajaxForm({
		success : function(responseText, statusText, xhr, $form) {
			if(responseText == 'success'){
				$('#tambahModal').modal('hide');
				table.ajax.reload();
			}
		},
		clearForm : true
	});
});

function searchpegawai() {
  $('#nama').val();
  axios.get('<?= site_url() ?>ajax/pegawai/'+$('#nip').val())
  .then(function (response) {
    $('#nama1').val(response.data.data.NAMA_LENGKAP);
    $('#jabatan1').val(response.data.data.KETERANGAN);
  })
  .catch(function (error) {
    alert('Data tidak ditemukan');
  })
  .finally(function () {
    // always executed
  });
}

function edit(id) {
	axios.get('<?= site_url() ?>admin/peserta/getpeserta/'+id)
  .then(function (response) {
		console.log(response.data);
    $('#id').val(response.data.id);
    $('#nip2').val(response.data.nip);
    $('#nama2').val(response.data.nama);
    $('#jabatan2').val(response.data.jabatan);
    $('#nomor2').val(response.data.nomor);
  })
  .finally(function () {
    // always executed
  });
	$('#editModal').modal('show');
	$('#nomor').focus();
}
</script>
<?= $this->endSection() ?>
