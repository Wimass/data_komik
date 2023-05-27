<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="create" class="btn btn-primary mt-3">Tambah Data Komik</a>
            <h1 class="mt-2">Daftar Komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['penulis']; ?></td>
                            <td><?= $k['penerbit']; ?></td>
                            <td><?= $k['tahun_terbit']; ?></td>
                            <td>
                                <a href="/komik/edit/<?= $k['slug']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/komik/<?= $k['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus Komik yang ini ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>