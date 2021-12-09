<div class="content-wrapper">
    <div class="content-header">
        <h1 class="m-0">Data Mahasiswa</h1>
    </div>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i> Tambah Data Mahasiswa </button>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $mhs->nama ?> </td>
                    <td> <?php echo $mhs->nim ?> </td>
                    <td> <?php echo $mhs->tgl_lahir ?> </td>
                    <td> <?php echo $mhs->jurusan ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT MAHASISWA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() . 'mahasiswa/tambah_aksi'; ?> ">
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>

                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>