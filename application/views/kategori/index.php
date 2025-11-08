<main>
    <div class="container-fluid px-4">
<<<<<<< HEAD
        <h1 class="mt-4"><?= $title ?></h1>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('kategori') ?>">Kategori</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
=======
        <h1 class="mt-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kategori'); ?>">Kategori</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
        </ol>

        <div class="card mb-4">
            <div class="card-header">
<<<<<<< HEAD
                <a href="<?= site_url('kategori/add') ?>" class="btn btn-primary">
=======
                <a href="<?php echo site_url('kategori/add'); ?>" class="btn btn-primary">
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                    <i class="fas fa-plus"></i> Add New
                </a>
            </div>

            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
<<<<<<< HEAD
                    <?= $this->session->flashdata('success'); ?>
=======
                    <?php echo $this->session->flashdata('success'); ?>
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                </div>
            <?php endif; ?>

            <div class="card-body">
<<<<<<< HEAD
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Kategori</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($kategori)) : ?>
                                <?php $no = 1; foreach ($kategori as $k) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= htmlspecialchars($k->name); ?></td>
                                        <td>
                                            <a href="<?= base_url('kategori/getedit/' . $k->id); ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('kategori/delete/' . $k->id); ?>" 
                                               class="btn btn-sm btn-danger"
                                               onclick="return confirm('Yakin ingin menghapus kategori ini?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3" class="text-center">Belum ada data kategori.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
=======
                <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kategori as $kategori) {
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$kategori->name</td>";
                    echo "<td>
                        <div>
                            <a href='" . base_url('kategori/getedit/' . $kategori->id) . "' class='btn btn-sm btn-info'>
                                <i class='fas fa-edit'></i> Edit
                            </a>
                            <a href='" . base_url('kategori/delete/' . $kategori->id) . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin menghapus data user ini?\")'>
                                <i class='fas fa-trash'></i> Hapus
                            </a>
                        </div>
                    </td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

                ...
            </div>
        </div>
    </div>
</main>
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
