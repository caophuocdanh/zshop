{block name="navbar"}
<div class="row menu">
	<div class="container">
		<nav class="row navbar navbar-default hidden-sm hidden-md hidden-lg">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">ZSHOP</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="nav-menu-item"><a href="##">textlink</a></li>
						<li class="nav-menu-item"><a href="##">textlink</a></li>
						<li class="nav-menu-item"><a href="##">textlink</a></li>
						{foreach $menu.alias[$sex.alias] as $key => $item}
							<li class="nav-menu-item" style="width: {100/$menu.alias[$sex.alias]|@count-0.01}%;">
								<a href="{$path}/{$sex.alias}/{$key}.html">{$item.info.category_name}</a>
							</li>
						{/foreach}
					</ul>
				</div>
		</nav>
		<div class="row hidden-xs">
			<ul class="largemenu">
				{foreach $menu.alias[$sex.alias] as $key => $item}
					<li class="nav-menu-item {if isset($cat) && $cat == $key}active{/if}" style="width: {100/$menu.alias[$sex.alias]|@count-0.01}%;">
						<a href="{$path}/{$sex.alias}/{$key}.html">{$item.info.category_name}</a>

					</li>
				{/foreach}
			</ul>
		</div>
	</div>
</div>
{/block}