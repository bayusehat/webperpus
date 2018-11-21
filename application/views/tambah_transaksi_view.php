<br>
<form method="post" action="<?php echo base_url(); ?>index.php/t_transaksi/simpan/">
  <?php
    $notif = $this->session->flashdata('notif');

    if(!empty($notif)){
      echo '<div class="alert alert-success">'.$notif.'</div>';
    }
  ?>
<div class="form-group">
    <label for="exampleInputPassword1">No. Transaksi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="no_transaksi" 
    value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('Ymdhis'); ?>">
  </div>
<div class="form-group">
    <label for="exampleSelect2">Nama Anggota:</label>
    <select class="form-control" id="exampleSelect2" name="anggota">
      <option value="">Pilih</option>
      <?php 
      $anggota = $this->db->query("SELECT id_anggota,nama FROM daftar")->result();

      if(!empty($anggota)){
      	foreach ($anggota as $data) {
      		echo "<option value='".$data->id_anggota."'>".$data->nama."</option>";
      	}
      }
      ?>
      
    </select>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleSelect2">Kode Buku:</label>
    <select class="form-control" id="exampleSelect2" name="judul">
      <option value="">Pilih</option>
      <?php
      $jdl = $this->db->query("SELECT id_buku,judul FROM buku")->result();

      if(!empty($jdl)){
      	foreach ($jdl as $key) {
      		echo "<option value='".$key->id_buku."'>".$key->judul."</option>";
      	}
      	
      } 
      ?>
      
    </select>
  </div>
  <br>
 <div class="form-group">
    <label for="">Tanggal Pinjam</label>
    <input type="text" class="form-control" id="tgl_pinjam" placeholder="" name="tgl_pinjam" value="<?=date('Y-m-d')?>"readonly><br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Kembali</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="tgl_kembali" 
    value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="status" 
    value="Belum dikembalikan">
  </div>
  <div class="input-group">
  <input type="submit" name="submit" id="submit" value="Tambah" class="btn btn-info">
  </div>
  </form>