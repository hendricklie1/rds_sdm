<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<form action="./savedata" method="POST">
					<div class="col-md-12">
						<div class="col-md-2">
							<label class="text-uppercase">Kode</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="kode" value="" required>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">NIP</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="nip" required>
						</div>
					</div>
                    <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Nama</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="nama" required>
						</div>
					</div>
                    <div class="row" style="margin-top:10px;">
				<div class="col-md-2">
					<label class="text-uppercase">Gender</label>
				</div>
				<div class="col-md-8">
					<label class="radio-inline"><input type="radio" name="gender" value="pria">Pria</label>
					<label class="radio-inline"><input type="radio" name="gender" value="wanita">Wanita</label>
				</div>
			</div>
            <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Tempat Lahir</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="ttl" required>
						</div>
					</div>
            <div class="row" style="margin-top:15px;">
				<div class="col-md-2">
					<label class="text-uppercase">Tanggal Lahir</label>
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control datepicker" name="tgllahir" value="" autocomplete="off">
				</div>
			</div>
            <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Agama</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="agama" required>
						</div>
					</div>
                    <div class="row" style="margin-top:10px;">
				<div class="col-md-2">
					<label class="text-uppercase">Status</label>
				</div>
				<div class="col-md-8">
					<label class="radio-inline"><input type="radio" name="status" value="aktif">Aktif</label>
					<label class="radio-inline"><input type="radio" name="status" value="tidak aktif">Tidak Aktif</label>
				</div>
			</div>
            <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Pendidikan</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="pendidikan" required>
						</div>
					</div>
                    <div class="row" style="margin-top:15px;">
				<div class="col-md-2">
					<label class="text-uppercase">Alamat</label>
				</div>
				<div class="col-md-8">
					<textarea class="form-control" name="alamat" style="height:100px;resize:none;"></textarea>
				</div>
			</div>
            <div class="col-md-12" style="margin-top:10px;">
						<div class="text-center">
							<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
						</div>	
					</div>
				</form>
			</div>
		</div>
	</div>
</div>