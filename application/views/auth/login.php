<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <?= $this->session->flashdata('message') ?>
        <form action="<?= base_url('') ?>auth" method="post">
            <div class="form-group">
                <input type="text" name="email" id="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="form-grup">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="input-grup mb-3"></div>
            <div class="input-grup mb-3 row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <center> <a href="<?= base_url('') ?>auth/lupa_akun">Lupa Akun </center>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->