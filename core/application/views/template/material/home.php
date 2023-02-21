<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="row">
					<div class="input-field col s12">
						<input id="search" name="search" type="text" class="validate" required="" aria-required="true">
						<label for="search">Buradan arama yapabilirsiniz.</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col m6 s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title"><i class="material-icons">favorite</i> En sevilenler</span>
                <ul>
					<?php foreach ($topView as $topItem): ?>
                        <li>
                            <a href="<?=route_link('lyric', array($topItem->artist_slug, $topItem->slug))?>"><?=$topItem->title?></a>
                            <span class="right">45 beğeni</span>
                        </li>
					<?php endforeach; ?>
                </ul>
			</div>
		</div>
	</div>
	<div class="col m6 s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title"><i class="material-icons">new_releases</i> En yeniler</span>
				<table class="highlight">
					<tbody>
					<?php foreach ($lastAdd as $lastItem): ?>
					<tr>
						<td style="padding: inherit"><a href="<?=route_link('lyric', array($lastItem->artist_slug, $lastItem->slug))?>"><?=$lastItem->title?></a></td>
						<td class="right-align" style="padding: inherit">4 ay önce</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>