<main>
    <div class="container-fluid">
<<<<<<< HEAD
        <div class="card mt-4">
            <div class="card-body">
                <form action="<?php echo site_url('user/edit'); ?>" method="post">

                    <div class="mb-3">
                        <label for="username">USERNAME <code>*</code></label>
                        <input class="form-control" type="hidden" name="id" value="<?= $user->id; ?>" required>
                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : ''; ?>"
                            type="text" name="username" value="<?= $user->username; ?>"
                            placeholder="USERNAME" required>
                        <div class="invalid-feedback">
                            <?php echo form_error('username'); ?>
=======
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('user/edit'); ?>" method="post">
                    <div class="mb-3">
                        <label for="username">USERNAME <code>*</code></label>
                        <input class="form-control" type="hidden" name="id" value="<?= $user->id; ?>" required />
                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" 
                               type="text" name="username" value="<?= $user->username; ?>" placeholder="USERNAME" required />
                        <div class="invalid-feedback">
                            <?php echo form_error('username') ?>
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="full_name">FULL NAME <code>*</code></label>
<<<<<<< HEAD
                        <input class="form-control" type="text" name="full_name"
                            value="<?= $user->full_name; ?>" placeholder="FULL NAME" required>
=======
                        <input class="form-control" type="text" name="full_name" 
                               value="<?= $user->full_name; ?>" placeholder="FULL NAME" required />
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                    </div>

                    <div class="mb-3">
                        <label for="phone">PHONE</label>
<<<<<<< HEAD
                        <input class="form-control" type="text" name="phone"
                            value="<?= $user->phone; ?>" placeholder="PHONE" required>
=======
                        <input class="form-control" type="text" name="phone" 
                               value="<?= $user->phone; ?>" placeholder="PHONE" required />
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                    </div>

                    <div class="mb-3">
                        <label for="email">EMAIL</label>
<<<<<<< HEAD
                        <input class="form-control" type="email" name="email"
                            value="<?= $user->email; ?>" placeholder="EMAIL" required>
=======
                        <input class="form-control" type="email" name="email" 
                               value="<?= $user->email; ?>" placeholder="EMAIL" required />
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                    </div>

                    <div class="mb-3">
                        <label for="role">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <?php if ($user->role == 'PEMILIK') { ?>
                                <option value="PEMILIK" selected>PEMILIK</option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="KASIR">KASIR</option>
<<<<<<< HEAD
                            <?php } elseif ($user->role == 'ADMIN') { ?>
=======
                            <?php } else if ($user->role == 'ADMIN') { ?>
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                                <option value="PEMILIK">PEMILIK</option>
                                <option value="ADMIN" selected>ADMIN</option>
                                <option value="KASIR">KASIR</option>
                            <?php } else { ?>
                                <option value="PEMILIK">PEMILIK</option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="KASIR" selected>KASIR</option>
                            <?php } ?>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">
<<<<<<< HEAD
                        <i class="fas fa-plus"></i> Update
=======
                        <i class="fas fa-plus"></i> Save
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
                    </button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
