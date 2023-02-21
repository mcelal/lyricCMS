<div class="row">
    <div class="col s6">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Giriş Yap</span>

                <?php if($this->session->flashdata('err')){ ?>
                    <?php echo $this->session->flashdata('err'); ?>
                <?php } ?>
                <?=form_open('profile/login')?>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="username" name="username" type="text" class="validate" required="" aria-required="true" value="<?php echo set_value('username'); ?>">
                        <label for="username">Kullanıcı adınız</label>
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" required="" aria-required="true">
                        <label for="password">Şifreniz</label>
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light red btn" value="Giriş">Giriş</button>
                    </div>
                    <div class="input-field col s6">
                        <input type="checkbox" id="remember" name="remember" />
                        <label for="remember">Beni Hatırla</label>
                    </div>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
    <div class="col s6">
        <div class="card">
            <div class="card-content">
                <span class="card-title">İçerde Neler Bekliyor</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
</div>
