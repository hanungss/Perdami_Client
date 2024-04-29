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