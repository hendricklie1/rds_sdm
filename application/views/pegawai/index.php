<?php 
$user = $crud->getDataWhere('pegawai',array('id'=>$this->session->userdata('id_pegawai')))->row_array();
?>
<div class="box box-primary">
	<div class="box-header">
		<h4 class="box-title">Input Pegawai</h4>
	</div>
	<div class="box-body">
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-12">
				<div id="alert-profile"></div>
			</div>
		</div>
		<form id="form-pegawai">
			<input type="hidden" name="id_pegawai value="<?php echo $user['id'];?>">
			<div class="row">
				<div class="col-md-2">
					<label class="text-uppercase">Nip</label>
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="nip" value="<?php echo $user['nip'];?>">
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-2">
					<label class="text-uppercase">Nama</label>
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="nama" value="<?php echo $user['nama'];?>">
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-2">
					<label class="text-uppercase">Jenis Kelamin</label>
				</div>
				<div class="col-md-8">
					<label class="radio-inline"><input type="radio" name="gender" value="pria" <?php if($user['jenis_kel'] == 'pria'){echo 'checked';}?>>Pria</label>
					<label class="radio-inline"><input type="radio" name="gender" value="wanita" <?php if($user['jenis_kel'] == 'wanita'){echo 'checked';}?>>Wanita</label>
				</div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-2">
					<label class="text-uppercase">Tanggal Lahir</label>
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control datepicker" name="tgllahir" value="<?php if($user['tanggal_lahir']!=null){echo date('d-m-Y',strtotime($user['tanggal_lahir']));}?>" autocomplete="off">
				</div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-2">
					<label class="text-uppercase">Agama</label>
				</div>
				<div class="col-md-8">
				<input type="text" class="form-control" name="agama" value="<?php echo $user['agama'];?>">
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-2">
					<label class="text-uppercase">Status</label>
				</div>
				<div class="col-md-8">
					<label class="radio-inline"><input type="radio" name="status" value="aktif" <?php if($user['status'] == 'aktif'){echo 'checked';}?>>aktif</label>
					<label class="radio-inline"><input type="radio" name="status" value="tidak aktif" <?php if($user['status'] == 'tidak aktif'){echo 'checked';}?>>tidak aktif</label>
				</div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-2">
					<label class="text-uppercase">Pendidikan</label>
				</div>
				<div class="col-md-8">
				<input type="text" class="form-control" name="pendidikan" value="<?php echo $user['pendidikan'];?>">
				</div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-2">
					<label class="text-uppercase">Alamat</label>
				</div>
				<div class="col-md-8">
					<textarea class="form-control" name="alamat" style="height:100px;resize:none;"><?php echo $user['alamat'];?></textarea>
				</div>
			</div>
			<div class="row" style="margin-top:20px;">
				<div class="col-md-12">
					<div class="text-center">
						<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="box box-primary">
	<div class="box-header">
		<h4 class="box-title">Ubah Password</h4>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<div id="alert-password"></div>
			</div>
		</div>
		<form id="form-password">
			<input type="hidden" name="id_user" value="<?php echo $user['id'];?>">
			<div class="row">
				<div class="col-md-2">
					<label class="text-uppercase">Password Baru</label>
				</div>
				<div class="col-md-8">
					<input type="password" class="form-control" name="password">
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-2">
					<label class="text-uppercase">Konfirm Password</label>
				</div>
				<div class="col-md-8">
					<input type="password" class="form-control" name="cpassword">
				</div>
			</div>
			<div class="row" style="margin-top:20px;">
				<div class="col-md-12">
					<div class="text-center">
						<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Ubah</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
$('#form-profile').submit(function(e){
  e.preventDefault();

  var form = $('#form-profile');
  $.ajax({
    url:'./profile/updateprofile',
    type:'POST',
    data:form.serialize(),
    beforeSend:function(){
      $('#alert-profile').html('<div class="alert alert-warning"><i class="fa fa-spinner fa-spin"></i> Updating data ...</div>');
    },success:function(data){
      $('#alert-profile').html(data);
    },error:function(xhr){
      $('#alert-profile').html('<div class="alert alert-danger">'+xhr.responseText+'</div>');
    }
  });
});

$('#form-password').submit(function(e){
  e.preventDefault();

  var form = $('#form-password');
  $.ajax({
    url:'./profile/updatepassword',
    type:'POST',
    data:form.serialize(),
    beforeSend:function(){
      $('#alert-password').html('<div class="alert alert-warning"><i class="fa fa-spinner fa-spin"></i> Updating data ...</div>');
    },success:function(data){
    	if(data == '<div class="alert alert-success">Update password berhasil</div>'){
    		$('#alert-password').html(data);
    		setTimeout(function(){
    			location.href='<?php echo base_url();?>login';
    		},3000);
    	}else{
    		$('#alert-password').html(data);
    	}
    },error:function(xhr){
      $('#alert-password').html('<div class="alert alert-danger">'+xhr.responseText+'</div>');
    }
  });
});
</script>