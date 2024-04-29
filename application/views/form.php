
                                <!-- Form -->
                                <?php if(isset($error)) { echo $error; }; ?>
                                <form action="<?php echo base_url() ?>index.php/dashboard/submit_status_kelompok_1" onsubmit="return confirm('Apakah data anda sudah benar, ingin mengunggahnya sekarang?')" method="post">
                                    <!-- Wizard Progress Bar -->
                                    <div class="block-content block-content-sm">
                                        <div class="progress" data-wizard="progress" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- END Wizard Progress Bar -->

                                    <!-- Steps Content -->
                                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                                        <!-- Step 1 -->
                                        <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                                            <h2 class="content-heading">Sertifikat Kompetensi Lama</h2>
                                            <p class="text-muted">Silakan upload sertifikat kompetensi lama</p>
            <!-- DropZone JS -->            <p class="dropzone"></p>
                                            <form action="<?php echo site_url('/dropzone/upload'); ?>" class="dropzone"  >
                                            <div id="load" class="form-group row">
                                            </div>
                                            <hr/>
                                            <h6>Dokumen yang sudah anda upload</h6>
                                            <table class="table table-vcenter">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">#</th>
                                                        <th>Nama file</th>
                                                        <th>Waktu unggah</th>
                                                        <th>Ukuran file</th>
                                                        <th class="text-center" style="width: 100px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($cek_file))
                                                        foreach ($cek_file as $row){ ?>
                                                            <tr>
                                                                <th class="text-center" scope="row">#</th>
                                                                <td><?php echo $row->nama_file; ?></td>
                                                                <td><?php echo $row->waktu_unggah; ?></td>
                                                                <td><?php echo $row->ukuran; ?></td>
                                                                <td class="text-center">
                                                                    <div class="btn-group" class="js-swal-success btn btn-success">
                                                                        <?php echo '<a href="'.base_url().'index.php/dashboard/remove_file/'.$row->id_row.'"class="btn btn-sm btn-danger" title="Hapus" class="fa fa-times" " onclick="return confirm(\'Anda yakin akan menghapusnya?\')">Delete</a>'?>
                                                                    </div>
                                                                </td> 
                                                            </tr>
                                                        <?php } else { ?>
                                                                <td><small>#</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
                                            <h2 class="content-heading">Ijazah Dokter Spesialis Mata</h2>
                                            <p class="text-muted">Silakan upload ijazah spesialis mata</p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_ijazah"></p>
                                            <div class="form-group row">
                                            </div>
                                            <hr/>
                                            <h6>Dokumen yang sudah anda upload</h6>
                                            <table class="table table-vcenter">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">#</th>
                                                        <th>Nama file</th>
                                                        <th>Waktu unggah</th>
                                                        <th>Ukuran file</th>
                                                        <th class="text-center" style="width: 100px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($cek_ijazah))
                                                        foreach ($cek_ijazah as $row){ ?>
                                                            <tr>
                                                                <th class="text-center" scope="row">#</th>
                                                                <td><?php echo $row->nama_file; ?></td>
                                                                <td><?php echo $row->waktu_unggah; ?></td>
                                                                <td><?php echo $row->ukuran; ?></td>
                                                                <td class="text-center">
                                                                    <div class="btn-group">
                                                                        <?php echo '<a href="'.base_url().'index.php/dashboard/remove_file/'.$row->id_row.'"class="btn btn-sm btn-danger" title="Hapus" class="fa fa-times" " onclick="return confirm(\'Anda yakin akan menghapusnya?\')">Delete</a>'?>
                                                                    </div>
                                                                </td> 
                                                            </tr>
                                                        <?php } else { ?>
                                                                <td><small>#</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                                            <h2 class="content-heading">Rekomendasi Kepala Departemen/ Sertifikat pelatihan fakoemulsifikasi + bukti pengakuan KOI terhadap institusi penyelenggara</h2>
                                            <p class="text-muted">Silakan upload rekomendasi dari Kepala Departemen dari Institusi Pendidikan Dokter Spesialis (IPDS) yang menjelaskan bahwa tindakan bedah fakoemulsifikasi sudah termasuk di dalam kurikulum Pendidikan ATAU sertifikat pelatihan fakoemulsifikasi dan bukti pengakuan KOI terhadap institusi penyelenggara</p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_kadep"></p>
                                            <div class="form-group row">
                                            </div>
                                            <hr/>
                                            <h6>Dokumen yang sudah anda upload</h6>
                                            <table class="table table-vcenter">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">#</th>
                                                        <th>Nama file</th>
                                                        <th>Waktu unggah</th>
                                                        <th>Ukuran file</th>
                                                        <th class="text-center" style="width: 100px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($cek_kadep))
                                                        foreach ($cek_kadep as $row){ ?>
                                                            <tr>
                                                                <th class="text-center" scope="row">#</th>
                                                                <td><?php echo $row->nama_file; ?></td>
                                                                <td><?php echo $row->waktu_unggah; ?></td>
                                                                <td><?php echo $row->ukuran; ?></td>
                                                                <td class="text-center">
                                                                    <div class="btn-group">
                                                                        <?php echo '<a href="'.base_url().'index.php/dashboard/remove_file/'.$row->id_row.'"class="btn btn-sm btn-danger" title="Hapus" class="fa fa-times" " onclick="return confirm(\'Anda yakin akan menghapusnya?\')">Delete</a>'?>
                                                                    </div>
                                                                </td> 
                                                            </tr>
                                                        <?php } else { ?>
                                                                <td><small>#</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                                <td><small>data masih kosong</small></td>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END Step 3 -->

                                         <!-- Step 4 -->
                                        <div class="tab-pane" id="wizard-progress-step4" role="tabpanel" required>
                                            <h2 class="content-heading">Konfirmasi kebenaran data</h2>
                                            <p class="text-muted">Semua informasi yang saya sampaikan adalah benar, apabila di kemudian hari terdapat ketidaksesuaian informasi saya bersedia menerima sangsi berupa pencabutan sertifikat kompetensi.</p>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="term" value="<?=set_value('term')?>" required>
                                                <small class="text-danger"><?=form_error('term')?></small>
                                                <label class="custom-control-label" for="signup-terms">Saya menyetujuinya dan saya menjamin bahwa data yang saya upload adalah benar</label>
                                            </div>
                                        </div>
                                        <!-- END Step 4 -->
                                    </div>
                                    <!-- END Steps Content -->
                                    <form action="#" >

                                    <!-- Steps Navigation -->
                                    <div class="block-content block-content-sm block-content-full bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                    <i class="fa fa-angle-left mr-5"></i> Sebelumnya
                                                </button>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button type="button" class="btn btn-primary" data-wizard="next">
                                                    Selanjutnya <i class="fa fa-angle-right ml-5"></i>
                                                </button>
                                                 <input class=" btn btn-success" data-wizard="finish" type="submit" name="submit" value="submit" ">                                     
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                     <?php echo form_close();?>
                                    <!-- END Steps Navigation -->
                                </form>