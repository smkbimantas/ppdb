<!-- Custom Tabs -->
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-user"></i>&nbsp; Identitas</a></li>
    <li>
		<a href="javascript:;" data-toggle="modal" data-target="#myModalBerkas"><i class="fa fa-plus"></i>&nbsp;&nbsp;Upload Berkas</a>
	</li>
	<li><a href="#tab_2" data-toggle="tab"><i class="fa fa-file"></i>&nbsp; Berkas Pendukung lainnya</a></li>
    <li class="pull-right">
    	<button type="button" class="btn btn-box-tool" onclick="location.reload()" title="Collapse">
        <i class="fa fa-refresh"></i></button>
    </li>

	
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">

		<div class="row">
			<div class="col-md-12" style="margin-bottom: 10px;">
					<a href="<?php echo site_url('peserta/create');?>" class="btn bg-blue btn-flat" data-toggle="tooltip" title="Tambah Peserta Baru"><i class='fa fa-plus'></i> Tambah Peserta Baru</a>                         
					<a href="<?php echo site_url('peserta/status/'.$id_peserta);?>" class="btn bg-purple btn-flat" data-toggle="tooltip" title="Status"><i class='fa fa-check'></i></a>                         
					<a href="<?php echo site_url('peserta/printform/'.$id_peserta);?>" class="btn btn-success btn-flat" data-toggle="tooltip" title="Print Formulir" target="blank"><i class='fa fa-print'></i></a>
					<a href="<?php echo site_url('peserta/printSKL/'.$id_peserta);?>" class="btn btn-info btn-flat" data-toggle="tooltip" title="Print SKL" target="blank"><i class='fa fa-print'></i></a>                     
					<a href="<?php echo site_url('peserta/update/'.$id_peserta);?>" class="btn btn-warning btn-flat" data-toggle="tooltip" title="Edit"><i class='fa fa-edit'></i></a>								
			</div>
		</div>

		<div class="row">
		    <div class="col-xs-12 col-md-12">
		        <div class="box box-primary">
		            <div class="box-header">
		                <h3 class="box-title">Peserta Detail</h3>
						<marquee width="100%" direction="left" height="auto;">
							<?php 
								$user = $this->ion_auth->user()->row();
								$firstname = $user->first_name ?? 'Hai Panitia';
							?>
							<h4 style="color:red;font-weight: bolder;"><?php echo "{$firstname},  jangan lupa upload berkas persyaratan calon peserta didik yang Anda input!"; ?></h4>
						</marquee>
						<div class="box-tools pull-right">
		                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
		                    title="Collapse">
		                    <i class="fa fa-minus"></i></button>
		                    <button type="button" class="btn btn-box-tool" onclick="location.reload()" title="Collapse">
		                    <i class="fa fa-refresh"></i></button>
		                </div>
		            </div>
		            <!-- /.box-header -->
			        <div class="box-body">
			        <div class="col-xs-12 col-md-7"> 
						

			            <table class="table">
							<tr><td><span class="label label-success">Data Registrasi</span></td><td></td></tr>                	
							<tr><td>No Pendaftaran</td><td><?php echo $no_pendaftaran; ?></td></tr>
							<tr><td>Referensi</td><td><?php echo $referensi; ?></td></tr>
							<tr><td>Tanggal Daftar</td><td><?php echo date('d F Y', strtotime($tanggal_daftar)); ?></td></tr>
							<tr><td>Tahun Pelajaran</td><td><?php echo $tahun_pelajaran; ?></td></tr>    
							<tr><td>Jalur Pendaftaran</td><td><?php echo $jalur; ?></td></tr>
							<tr><td>Sekolah Pilihan 2</td><td><?php echo $pilihan_sekolah_lain; ?></td></tr>
							<tr><td>Jurusan Pilihan Satu</td><td><?php echo $nama_jurusan; ?></td></tr>
							<tr><td>Jurusan Pilihan Dua</td><td><?php echo $pilihan_dua; ?></td></tr>
							<tr><td>Asal Sekolah</td><td><?php echo $asal_sekolah; ?></td></tr>
							<tr><td>Asal Sekolah Dasar</td><td><?php echo $asal_sekolah_dasar; ?></td></tr>
							<tr><td>No Ujian Nasional</td><td><?php echo $no_un; ?></td></tr>
							<tr><td>No Seri Ijazah</td><td><?php echo $no_seri_ijazah; ?></td></tr>
							<tr><td>No Seri SKHU</td><td><?php echo $no_seri_skhu; ?></td></tr>	
							<tr><td><span class="label label-success">Data Pribadi</span></td><td></td></tr>
							<tr><td>Nama Peserta</td><td><?php echo $nama_peserta; ?></td></tr>
							<tr><td>Jenis Kelamin</td>
							    <td>
								    <?php if ($jenis_kelamin=="L"){
										echo "Laki-laki";
								    } else {
								    	echo "Perempuan";
								    } ?>				    		
							    </td>
							</tr>
							<tr><td>NISN</td><td><?php echo $nisn; ?></td></tr>
							<tr><td>NIK</td><td><?php echo $nik; ?></td></tr>
							<tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
							<tr><td>Tanggal Lahir</td><td><?php echo date('d F Y', strtotime($tanggal_lahir)); ?></td></tr>
							<tr><td>No Registrasi Akta Lahir</td><td><?php echo $no_registrasi_akta_lahir; ?></td></tr>
							<tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
							<tr><td>Kewarganegaraan</td><td><?php echo $kewarganegaraan; ?></td></tr>
							<tr><td>Berkebutuhan Khusus</td><td><?php echo $berkebutuhan_khusus; ?></td></tr>
							<tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
							<tr><td>RT</td><td><?php echo $rt; ?></td></tr>
							<tr><td>RW</td><td><?php echo $rw; ?></td></tr>
							<tr><td>Nama Dusun</td><td><?php echo $nama_dusun; ?></td></tr>
							<tr><td>Nama Kelurahan</td><td><?php echo $nama_kelurahan; ?></td></tr>
							<tr><td>Kecamatan</td><td><?php echo $kecamatan; ?></td></tr>
							<tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
							<tr><td>Latitude</td><td><?php echo $latitude; ?></td></tr>
							<tr><td>Longitude</td><td><?php echo $longitude; ?></td></tr>
							<tr><td>Tempat Tinggal</td><td><?php echo $tempat_tinggal; ?></td></tr>
							<tr><td>Moda Transportasi</td><td><?php echo $moda_transportasi; ?></td></tr>
							<tr><td>No KKS</td><td><?php echo $no_kks; ?></td></tr>
							<tr><td>Anak Ke</td><td><?php echo $anak_ke; ?></td></tr>
							<tr><td>Penerima KPS/PKH</td><td><?php echo $penerima_kps_pkh; ?></td></tr>
							<tr><td>No KPS/PKH</td><td><?php echo $no_kps_pkh; ?></td></tr>
							<tr><td>Penerima KIP</td><td><?php echo $penerima_kip; ?></td></tr>
							<tr><td>No KIP</td><td><?php echo $no_kip; ?></td></tr>
							<tr><td>Nama Tertera di KIP</td><td><?php echo $nama_tertera_di_kip; ?></td></tr>
							<tr><td>Terima Fisik Kartu KIP</td><td><?php echo $terima_fisik_kartu_kip; ?></td></tr>
							<tr><td>Jenis Ekstrakurikuler</td><td><?php echo $jenis_ekstrakurikuler; ?></td></tr>
							<tr><td><span class="label label-success">Data Orangtua/Wali</span></td><td></td></tr>
							<tr><td><span class="label label-info">Data Ayah</span></td><td></td></tr>
							<tr><td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td></tr>
							<tr><td>NIK Ayah</td><td><?php echo $nik_ayah; ?></td></tr>
							<tr><td>Tahun Lahir Ayah</td><td><?php echo $tahun_lahir_ayah; ?></td></tr>
							<tr><td>Pendidikan Ayah</td><td><?php echo $pendidikan_ayah; ?></td></tr>
							<tr><td>Pekerjaan Ayah</td><td><?php echo $pekerjaan_ayah; ?></td></tr>
							<tr><td>Penghasilan Bulanan Ayah</td><td><?php echo $penghasilan_bulanan_ayah; ?></td></tr>
							<tr><td>Berkebutuhan Khusus Ayah</td><td><?php echo $berkebutuhan_khusus_ayah; ?></td></tr>
							<tr><td><span class="label label-info">Data Ibu</span></td><td></td></tr>				    
							<tr><td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td></tr>
							<tr><td>NIK Ibu</td><td><?php echo $nik_ibu; ?></td></tr>
							<tr><td>Tahun Lahir Ibu</td><td><?php echo $tahun_lahir_ibu; ?></td></tr>
							<tr><td>Pendidikan Ibu</td><td><?php echo $pendidikan_ibu; ?></td></tr>
							<tr><td>Pekerjaan Ibu</td><td><?php echo $pekerjaan_ibu; ?></td></tr>
							<tr><td>Penghasilan Bulanan Ibu</td><td><?php echo $penghasilan_bulanan_ibu; ?></td></tr>
							<tr><td>Berkebutuhan Khusus Ibu</td><td><?php echo $berkebutuhan_khusus_ibu; ?></td></tr>
							<tr><td><span class="label label-info">Data Wali</span></td><td></td></tr>				    
							<tr><td>Nama Wali</td><td><?php echo $nama_wali; ?></td></tr>
							<tr><td>NIK Wali</td><td><?php echo $nik_wali; ?></td></tr>
							<tr><td>Tahun Lahir Wali</td><td><?php echo $tahun_lahir_wali; ?></td></tr>
							<tr><td>Pendidikan Wali</td><td><?php echo $pendidikan_wali; ?></td></tr>
							<tr><td>Pekerjaan Wali</td><td><?php echo $pekerjaan_wali; ?></td></tr>
							<tr><td>Penghasilan Bulanan Wali</td><td><?php echo $penghasilan_bulanan_wali; ?></td></tr>
							<tr><td><span class="label label-success">Data Kontak</span></td><td></td></tr>				    
							<tr><td>No Telepon Rumah</td><td><?php echo $no_telepon_rumah; ?></td></tr>
							<tr><td>Nomor HP</td><td><?php echo $nomor_hp; ?></td></tr>
							<tr><td>Email</td><td><?php echo $email; ?></td></tr>
							<tr><td><span class="label label-success">Data Priodik</span></td><td></td></tr>				    
							<tr><td>Tinggi Badan</td><td><?php echo $tinggi_badan.' cm'; ?></td></tr>
							<tr><td>Berat Badan</td><td><?php echo $berat_badan.' kg'; ?></td></tr>
							<tr><td>Ukuran Seragam</td><td><?php echo $ukuran_seragam; ?></td></tr>
							<tr><td>Jarak ke sekolah</td><td><?php echo $jarak; ?></td></tr>				    
							<tr><td>Jumlah Saudara Kandung</td><td><?php echo $jumlah_saudara_kandung; ?></td></tr>
							<tr><td><span class="label label-success">Data Nilai</span></td><td></td></tr>				    
							<tr><td>Nilai Rapor</td><td><?php echo $nilai_rapor; ?></td></tr>	
							<tr><td>Nilai USBN</td><td><?php echo $nilai_usbn; ?></td></tr>		
							<tr><td>Nilai UN</td><td><?php echo $nilai_unbk_unkp; ?></td></tr>	
							<!-- <tr><td>Poin Jarak</td><td><?php echo $skor_jarak; ?></td></tr>-->
							<tr><td><span class="label label-success">Data Status</span></td><td></td></tr>				    
							<tr><td>Status Pendaftaran</td>
							    <td>
								    <?php if ($status=="Belum diverifikasi"){?>
										<span class="label label-warning"><?php echo $status; ?></span>
								    <?php } else if ($status=="Sudah diverifikasi") {?>
								    	<span class="label label-success"><?php echo $status; ?></span>
								    <?php } else if ($status=="Berkas Kurang") {?>
								    	<span class="label label-danger"><?php echo $status; ?></span>
								    <?php } ?>
							    </td>
							</tr>
							<tr><td>Status Hasil</td>
							    <td>
								    <?php if ($status_hasil=="Cadangan"){?>
										<span class="label label-warning"><?php echo $status_hasil; ?></span>
								    <?php } else if ($status_hasil=="Di Terima") {?>
								    	<span class="label label-success"><?php echo $status_hasil; ?></span>
								    <?php } else if ($status_hasil=="Tidak di terima") {?>
								    	<span class="label label-danger"><?php echo $status_hasil; ?></span>
								    <?php } else if ($status_hasil=="Belum ada") {?>
								    	<span class="label label-primary"><?php echo $status_hasil; ?></span>
								    <?php } ?>
							    </td>
							</tr>
							<tr><td>Status Daftar Ulang</td>
							    <td>
								    <?php if ($status_daftar_ulang=="Belum daftar ulang"){?>
										<span class="label label-warning"><?php echo $status_daftar_ulang; ?></span>
								    <?php } else if ($status_daftar_ulang=="Sudah daftar ulang") {?>
								    	<span class="label label-success"><?php echo $status_daftar_ulang; ?></span>
								    <?php } else if ($status_daftar_ulang=="Tidak daftar ulang") {?>
								    	<span class="label label-danger"><?php echo $status_daftar_ulang; ?></span>
								    <?php } else if ($status_daftar_ulang=="Menunggu") {?>
								    	<span class="label label-primary"><?php echo $status_daftar_ulang; ?></span>
								    <?php } ?>				    		
							    </td>
							</tr>
							<tr><td>Catatan</td><td><?php echo $catatan; ?></td></tr>	
							<tr><td>Created by</td><td><?php echo $created_by; ?></td></tr>	
							<tr><td>Created at</td><td><?php echo $created_at; ?></td></tr>	
							<tr>
								<td><a href="<?php echo site_url('peserta') ?>" class="<?= $this->config->item('botton')?>">Kembali</a></td>
							</tr>
						</table>	
					</div>
		            <div class="col-xs-12 col-md-5">     
						<?php if ($berkas_limit) {
							foreach ($berkas_limit as $value) { ?>
			                    <?php if ($value->tipe_berkas==".gif" || $value->tipe_berkas==".jpg" || $value->tipe_berkas==".png" || $value->tipe_berkas==".PNG" || $value->tipe_berkas==".JPG" || $value->tipe_berkas==".GIF" ) { ?>
			                        <img src="<?php echo base_url('assets/uploads/attachment/'.$value->nama_berkas) ?>" width="100%">
			                    <?php } else if ($value->tipe_berkas==".pdf") { ?>
			                    	<embed src="<?php echo base_url('assets/uploads/attachment/'.$value->nama_berkas) ?>" width="100%" height="450px" type="application/pdf" >
			                    <?php } ?>  
							<?php }
						} ?>
		            </div>			
			        </div>
				</div>
			</div>
		</div>      
    </div>

    <div class="tab-pane" id="tab_2">
		<div class="row">
		    <div class="col-xs-12 col-md-12">
	   	        
				<div class="col-xs-12 col-md-12">
					<?php if ($berkas) {
						foreach ($berkas as $value) { ?>
		                    <?php if ($value->tipe_berkas==".gif" || $value->tipe_berkas==".jpg" || $value->tipe_berkas==".png" || $value->tipe_berkas==".PNG" || $value->tipe_berkas==".JPG" || $value->tipe_berkas==".GIF" ) { ?>
		                        <img src="<?php echo base_url('assets/uploads/attachment/'.$value->nama_berkas) ?>" width="49%">
		                    <?php } else if ($value->tipe_berkas==".pdf") { ?>
		                    	<embed src="<?php echo base_url('assets/uploads/attachment/'.$value->nama_berkas) ?>" width="49%"height="500px" type="application/pdf" >
		                    <?php } ?>  
						<?php }
					} ?>
            	</div>
		    </div>        
		</div>
    </div>
    
  </div>
</div>


<!-- Modal Berkas -->
<div class="modal fade" id="myModalBerkas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header <?= $this->config->item('header')?>">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fas fa-copy"></i>&nbsp; Berkas Pendukung</h4>
      </div>
      <div class="modal-body">    
        <div class="row">           
            <form action="<?php echo site_url('peserta/upload_berkas/'.$nomer->id_peserta) ?>" method="post" enctype="multipart/form-data">
                <div class="col-xs-12 col-md-12">
                  <?php if ($formulir->foto=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Foto Berwarna 3x4</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Foto 3x4"/>
                      </div>             
                  <?php } ?>
                  <?php if ($formulir->foto_full=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Foto Seluruh Badan</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Foto Seluruh Badan"/>
                      </div>             
                  <?php } ?>
                  <?php if ($formulir->skl_skhu=='Ya'){ ?>  
                      <div class="form-group">
                        <label for="varchar">SKL/SKHU/Ijazah</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="SKL/SKHU/Ijazah" />
                      </div>      
                  <?php } ?>
                  <?php if ($formulir->rapor=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Nilai Rapor Semester 1-5</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Nilai Rapor/Semester"/>
                      </div>             
                  <?php } ?>
                  <?php if ($formulir->akte_kelahiran=='Ya'){ ?>
                      <div class="form-group">                      
                        <label for="varchar">Akta Kelahiran</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Akta Kelahiran" />  
                      </div>
                  <?php } ?>
                  <?php if ($formulir->kartu_keluarga=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Kartu Keluarga</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Kartu Keluarga" /> 
                      </div>
                  <?php } ?>  
                  <?php if ($formulir->ktp_ortu=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">KTP Orangtua</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="KTP Orangtua" /> 
                      </div>
                  <?php } ?>
                  <?php if ($formulir->sptjm=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Surat Pertanggungjawaban Mutlak Orangtua</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Surat Pertanggungjawaban Mutlak Orangtua" /> 
                      </div>
                  <?php } ?> 
                  <?php if ($formulir->sp=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Surat Penugasan dari Instansi</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Surat Penugasan dari Instansi" /> 
                      </div>
                  <?php } ?>                                       
                  <?php if ($formulir->skd=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Surat Keterangan Domisili</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Surat Keterangan Domisili" />                          
                      </div>                   
                  <?php } ?> 
                  <?php if ($formulir->sktm=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Surat Keterangan Tidak Mampu</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Surat Keterangan Tidak Mampu" />                          
                      </div>                   
                  <?php } ?>    
                  <?php if ($formulir->kartu_bantuan=='Ya'){ ?>
                      <div class="form-group">
                        <label for="varchar">Kartu PKH/KPS/KIP</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />  
                        <input type="hidden" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" value="Kartu PKH/KPS/KIP" />                          
                      </div>                   
                  <?php } ?>                                  
                </div>                    
                  <?php if ($formulir->berkaslain=='Ya'){ ?>
                    <div class="col-xs-12 col-md-6"> 
                      <div class="form-group">
                        <label for="varchar">Berkas lainnya</label>
                        <input type="hidden" class="form-control" name="id_peserta[]" value="<?php echo $nomer->id_peserta; ?>"/>
                        <input type="file" class="form-control" name="berkas[]" />
                      </div>
                    </div>                       
                    <div class="col-xs-12 col-md-6"> 
                      <div class="form-group">
                        <label for="varchar">Keterangan Berkas</label>                                            
                        <input type="text" class="form-control" name="keterangan_berkas[]" placeholder="Keterangan Berkas" />
                      </div> 
                    </div>   
                  <?php } ?> 
                  <div class="col-xs-12 col-md-6"> 
                    <div class="form-group">    
                        <button type="submit" class="<?= $this->config->item('botton')?>">Upload Berkas</button>
                    </div>
                  </div>              
            </form> 
        </div> 
		<div class="callout callout-info">
		Berkas yang akan diupload harus sesuai ketentuan
		<li>format berkas : pdf</li>
		<li>ukuran max : 5 mb</li>               
		</div>  
                                             
      </div>
    </div>
  </div>
</div>
<!-- end Modal Berkas -->

<?php if(isset($_GET['upload-berkas'])):?>

<script type="text/javascript">
    window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#myModalBerkas").modal('show');
    }
</script>

<?php endif?>
