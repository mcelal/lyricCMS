<div class="row">
	<div class="col-sm-12">
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
	<div class="col-md-6 col-md-12">
		<div class="card">
			<div class="card-content">
				<span class="card-title"><i class="material-icons">favorite</i> En sevilenler</span>
				<table class="highlight">
					<tbody>
					<tr>
						<td style="padding: inherit"><a href="https://sarki.mcelal.com/michael-jackson/16-beat-it-sarkisozu">ss</a> </td>
						<td style="padding: inherit" class="right-align">1351 ziyaret</td>
					</tr>
					</tbody>
				</table>
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
						<td style="padding: inherit"><a href="#"><?=$lastItem->title?></a></td>
						<td class="right-align" style="padding: inherit">4 ay önce</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>