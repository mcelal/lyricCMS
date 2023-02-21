<div class="row">
    <div class="col s12">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <?php
                    for ($i=0; $i<sizeof($breadcrumb); $i++)
                    {
                        $active = ($i==sizeof($breadcrumb)-1 || $breadcrumb[$i]['url']=='#') ? 'active' : '';
                        $name = $breadcrumb[$i]['name'];

                        if ($active)
                        {
                            echo "<a class='breadcrumb $active'>$name</a>";
                        }
                        else
                        {
                            $url = $breadcrumb[$i]['url'];
                            echo "<a class='breadcrumb $active' href='$url'>$name</a>";
                        }
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col m8 s12">
        <div class="card-panel">
            <h4><?=$artist->name?></h4>
<!--            <p>--><?//=route_link("artist", array("atlas"))?><!--</p>-->
<!--            <p>--><?//=route_link("lyric", array("atlas", "tabanca"))?><!--</p>-->
        </div>
        <?php if(empty($lyrics)): ?>
            <div class="card-panel red lighten-3">
                <p class="flow-text">Henüz şarkı eklenmemiş.</p>
            </div>

        <?php else: ?>
            <div class="card">
                <div class="card-content">
                    <table class="highlight">
                        <thead>
                        <tr>
                            <th data-field="name" width="80%">Şarkı</th>
                            <th data-field="year">Yıl</th>
                            <th data-field="views">Görüntülenme</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($lyrics as $item): ?>
                            <tr>
                                <td><a href="<?=route_link('lyric', array($artist->slug, $item->slug))?>"><?=$item->title?></td>
                                <td class="center-align"><?php echo $item->year ? $item->year : "-"; ?></td>
                                <td class="center-align"><?php echo $item->views; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        <?php endif; ?>

        <div class="row center-align">
            <?=@$pagination?>
        </div>
    </div>

    <div class="col m4 s12">
        <div class="card">
            <div class="card-image">
                <img src="http://lorempixel.com/640/480/people" alt="">
            </div>
            <div class="card-content">


            </div>
        </div>
    </div>

</div>
