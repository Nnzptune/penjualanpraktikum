<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Barkode</th>
                <th>Name</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($barang as $barang) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $barang->barkode ?></td>
                <td><?php echo $barang->name ?></td>
                <td><?php echo $barang->satuan ?></td>
                <td><?php echo $barang->kategori ?></td>
                <td><?php echo $barang->stok ?></td>
                <td><?php echo $barang->harga_beli ?></td>
                <td><?php echo $barang->harga_jual ?></td>
                <td>
                    <a href="<?= base_url('barang/getedit/'. $barang->id) ?>" class="btn btn-sm btn-info" title="Edit/a><i class="fas fa-edit"></i> Edit</a>
                    <a href="<?= base_url('barang/delete/'. $barang->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin menghapus data user ini\?');"><i class="fas fa-trash"></i> Hapus</a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php } ?>
        </tbody>
    </table>
</div>