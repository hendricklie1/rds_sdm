<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h4 class="box-title"></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12" style="margin-bottom: 10px;">
					<a class="btn btn-default" href="<?php echo base_url();?>pegawai/kehadiran/tambah"><i class="fa fa-plus"></i> Tambah Kehadiran</a>
				</div>
				<div class="col-md-12" style="margin-top:10px;">
					<div class="table-responsive">
						<table class="table table-bordered" id="tbl_kehadiran" style="font-size:12px;">
							<thead>
								<tr>
									<th class="text-uppercase text-center" style="width:40px;">No</th>
                                    <th class="text-uppercase text-center">Nama</th>
                                    <th class="text-uppercase text-center">Tanggal</th>
                                    <th class="text-uppercase text-center">Status</th>
                                    <th class="text-uppercase text-center">Masuk</th>
                                    <th class="text-uppercase text-center">Keluar</th>
                                    <th class="text-uppercase text-center">Terlambat</th>
                                    <th class="text-uppercase text-center">Izin</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$('#tbl_kehadiran').DataTable({
		'ordering':false
	});
});
</script>