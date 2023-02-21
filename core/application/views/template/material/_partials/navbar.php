<div class="navbar-fixed">
    <nav class="red darken-2">
        <div class="nav-wrapper container">
            <a href="" class="brand-logo"><?php echo $site_name; ?></a>
            <ul class="right hide-on-small-and-down">
    <?php foreach ($menu as $parent => $parent_params): ?>

        <?php if (empty($parent_params['children'])): ?>

        <?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
            <li <?php if ($active) echo 'class="active"'; ?>>
                <a href='<?php echo $parent_params['url']; ?>'><?php if(!empty($parent_params['icon'])) echo '<i class="material-icons left">'.$parent_params['icon'].'</i>'; ?><?php echo $parent_params['name']; ?></a>
            </li>
        <?php else: ?>

            <?php $parent_active = ($ctrler==$parent); ?>
            <li><a class="dropdown-button" href="#!" data-activates="<?=$parent?>"><?php if(!empty($parent_params['icon'])) echo '<i class="material-icons left">'.$parent_params['icon'].'</i>'; ?><?php echo $parent_params['name']; ?><i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id="<?=$parent?>" class="dropdown-content">
                    <?php foreach ($parent_params['children'] as $name => $url): ?>
                        <li><a href='<?php echo $url; ?>'><?php echo $name; ?></a></li>
                    <?php endforeach; ?>
                </ul>

        <?php endif; ?>

    <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</div>

