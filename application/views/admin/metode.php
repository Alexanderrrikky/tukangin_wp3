<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Tukangin |<?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">


            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahMetodbayarModal">Tambah menu baru</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">metode</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($metode as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['m_bayar']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/editPembayaran/') . $m['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/hapuspembayaran/') . $m['id'] ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $title . ' ' . $m['m_bayar']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> hapus</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="tambahMetodbayarModal" tabindex="-1" role="dialog" aria-labelledby="tambahMetodbayarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahMetodbayarModalLabel">Tambah menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('tukangin/metodebayar'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="m_bayar" name="m_bayar" placeholder="metode bayar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>