        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header"><?=$judul?></h1>
<div class="col-md-offset-3 col-md-8 col-md-offset-1 panel panel-default">
<form class="form-horizontal panel-body" method="POST" action="<?=site_url('kelas/act_edit')?>">
  <input type="hidden" name="id_kelas" value="<?=$data_kelas->id_kelas?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_kelas" value="<?=$data_kelas->nama_kelas?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?=site_url('kelas')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>
</div>