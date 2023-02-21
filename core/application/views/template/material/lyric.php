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
        <div class="card">
            <div class="card-content">
                <h4><?=$lyric->title?></h4>
                <hr>
                <div>
                    <?=$lyric->lyric?>
                </div>
            </div>
        </div>
    </div>

    <div class="col m4 s12">
        <div class="card">
            <div class="card-image">
                <img src="http://lorempixel.com/g/300/300" alt="">
            </div>
            <div class="card-content">
                <ul>
                    <li><div><i class="material-icons">account_circle</i> <?=$lyric->artist_name?></div></li>
                    <li><i class="material-icons">date_range</i> <?=prettyDate($lyric->created_at)?></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div class="card-panel">
            <div id="disqus_thread"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                 */
                /*
                 var disqus_config = function () {
                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                 };
                 */
                (function() {  // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');

                    s.src = '//sarkilarsozler.disqus.com/embed.js';

                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
        </div>
    </div>
</div>
