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

            <!-- Main Content -->
            <section class="content">
            <form action="<?=base_url('admin/Pengumuman/editPengumuman')?>" enctype="multipart/form-data" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Pengumuman</h3>
                                </div>
                                <div class="card-body">

                                    <input type="hidden" id="id_pgm" name="id_pgm" class="form-control" value="<?=$dataPengumuman->id_pgm?>" readonly>
                                    <!-- Waktu -->
                                    <input type="hidden" name="date_insert_pgm" value="<?=$dataPengumuman->date_insert_pgm?>" class="form-control" readonly>
                                    <input type="hidden" name="date_update_pgm" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control" readonly>

                                    <!-- ID Penulis/Admin -->
                                    <input type="hidden" name="id_petugas_pgm" class="form-control" value="<?=$this->fungsi->petugas_login()->id_petugas?>" readonly>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="judul_pgm" value="<?=$dataPengumuman->judul_pgm?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="ketJudul_pgm" value="<?=$dataPengumuman->ketJudul_pgm?>" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="konten_pgm" id="compose-textarea" class="form-control" style="height: 300px"><?=$dataPengumuman->konten_pgm?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="cover_pgm">Gambar Cover</label>
                                        <input type="file" class="form-control-file" name="cover_pgm">
                                        <input type="text" id="cover_pgm_old" name="cover_pgm_old" class="form-control" value="<?=$dataPengumuman->cover_pgm?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" id="status_pgm" name="status_pgm">
                                            <option value="1">Publish</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>

                                    <a href="<?= base_url('admin/Pengumuman')?>">
                                        <button type="button" class="btn btn-danger btn-block">Cancel</button>
                                    </a><p></p>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                </div>
                </form>
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