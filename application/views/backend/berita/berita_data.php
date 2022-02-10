<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
    </head> 

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            
            <!-- Top Navbar -->
            <?php $this->load->view('_partials/navbar.php');?>
            <!-- /Top Navbar -->

            <!-- Left Sidebar -->
            <?php $this->load->view('_partials/sidebar.php');?>
            <!-- /Left Sidebar -->
            
            <!-- Main Content -->
            <div class="content-wrapper">
            
            <!-- Breadcrumb -->
            <?php $this->load->view('_partials/breadcrumb.php');?>
            <!-- /Breadcrumb -->
            
                <section class="content">
                    <div class="card">
                        <!-- Navbar Content -->
                        <div class="card-header">
                            <h3 class="card-title">Data Berita</h3>
                            <div class="card-tools">
                                <a href="<?= base_url('admin/Berita/tambah')?>">
                                <button type="button" class="btn btn-block btn-primary">
                                    Tambah Data
                                </button>
                                </a>
                            </div>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date Insert</th>
                                        <th>Judul Berita</th>
                                        <th>Nama Petugas</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i = 1;
                                    foreach($dataBerita as $rowBerita){?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$rowBerita->date_insert_berita?></td>
                                        <td><?=$rowBerita->judul_berita?></td>
                                        <?php
                                            foreach($dataPetugas as $rowPetugas){
                                                if($rowBerita->id_petugas_berita == $rowPetugas->id_petugas){?>
                                                    <td><?=$rowPetugas->nama_petugas?></td>
                                        <?php  } } ?>
                                        
                                        <?php if($rowBerita->status_berita == 1){ ?>
                                            <td class=" ">Publish</td>
                                        <?php }else if($rowBerita->status_berita == 2){ ?>
                                            <td class=" ">Draft</td>
                                        <?php } ?>

                                        <td>
                                            <a href="<?= base_url('admin/Berita/view/'.$rowBerita->id_berita)?>">
                                                <button class="btn btn-sm btn-success" id="btn-lihat">View</button>
                                            </a>

                                            <a href="<?= base_url('admin/Berita/edit/'.$rowBerita->id_berita)?>">
                                                <button class="btn btn-sm btn-warning" id="btn-lihat">Edit</button>
                                            </a>
                                            
                                            <a href="<?= base_url('admin/Berita/hapus/'.$rowBerita->id_berita)?>" onclick="return confirm('Anda yakin mau menghapus berita ini ?')">
                                                <button class="btn btn-sm btn-danger" id="btn-delete">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Page Content -->
                        <!-- Footer Content -->
                        <!-- <div class="card-footer">
                            Footer
                        </div> -->
                        <!-- /Footer Content -->
                    </div>
                </section>   
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            <?php $this->load->view('_partials/footer.php');?>
            <!-- /Footer -->
        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
    </body>
</html>