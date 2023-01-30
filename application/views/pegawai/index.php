<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h4 class="box-title"></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12" style="margin-bottom: 10px;">
					<a class="btn btn-default" href="<?php echo base_url();?>pegawai/datapegawai/tambah"><i class="fa fa-plus"></i> Tambah Pegawai</a>
				</div>
				<div class="col-md-12" style="margin-top:10px;">
					<div class="table-responsive">
						<table class="table table-bordered" id="tbl_pegawai" style="font-size:12px;">
							<thead>
								<tr>
									<th class="text-uppercase text-center" style="width:150px;">Kode Pegawai</th>
									<th class="text-uppercase text-center" style="width:250px;">NIP</th>
									<th class="text-uppercase text-center" style="width:90px;">Nama</th>
									<th class="text-uppercase text-center" style="width:95px;">Jenis Kelamin</th>
									<th class="text-uppercase text-center">Tempat lahir</th>
									<th class="text-uppercase text-center">Tanggal lahir</th>
									<th class="text-uppercase text-center">Agama</th>
									<th class="text-uppercase text-center">Status</th>
									<th class="text-uppercase text-center">Pendidikan</th>
									<th class="text-uppercase text-center">alamat</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($pegawai as $p):?>
								<tr>
									<td class="text-center">
										<a href="<?php echo base_url();?>main/product/detail?id=<?php echo $p->id;?>"><?php echo $p->kode;?></a>
									</td>
									<td class="text-center"><?php echo $p->nama;?></td>
									<td class="pull-right">
										<?php echo $p->jumlah;?>
									</td>
									<td><?php echo $p->satuan;?></td>
									<td class="text-right"><?php echo $p->matauang.' '.number_format($p->harga,2,',','.');?></td>
									<td class="text-center"><?php echo $p->katagori;?></td>
								</tr>
								<?php endforeach;?>
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
	$('#tbl_pegawai').DataTable({
		'ordering':false
	});
});
</script>