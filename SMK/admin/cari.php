<?php 
include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"select * from tb_siswa");
                            while($d = mysqli_fetch_array($data)){
                        ?>
						<div class="table-row">
							<div class="serial"><?php echo $no++; ?></div>
							<div class="country"><?php echo $d['nama_siswa']; ?></div>
							<div class="visit"><?php echo $d['nis']; ?></div>
							<div class="country"><?php echo $d['jk_siswa']; ?></div>
							<div class="visit"><?php echo $d['agama_siswa']; ?></div>
							<div class="country"><?php echo $d['tmptlhr_siswa']; ?></div>
							<div class="country"><?php echo $d['tgllhr_siswa']; ?></div>
							<div class="percentage"><?php echo $d['alamat_siswa']; ?></div>
							<div class="country"><?php echo $d['telp_siswa']; ?></div>
                            <div class="country">
                                <a href="edit.php?id_siswa=<?php echo $d['id_siswa'];?>"><button>Edit</button></a>
                                <a href="hapus.php?id_siswa=<?php echo $d['id_siswa'];?>" onClick="return confirm('Hapus Data?')"><button>Hapus</button></a>
                            </div>
						</div>
                        <?php
                            }
                        ?>