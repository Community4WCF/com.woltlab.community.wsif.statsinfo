				<div class="{cycle values='container-1,container-2'}">
					<div class="containerIcon">
						<img src="{icon}infoM.png{/icon}" alt="" />
					</div>
					<div class="containerContent">
						{if INDEX_STATSINFO_LINK_ENABLE}
						<h3><a href="{INDEX_STATSINFO_LINK}">{lang}mfcfb.index.statsinfo{/lang}</a></h3>
						{else}
						<h3>{lang}mfcfb.index.statsinfo{/lang}</h3>
						{/if}
						<p class="smallFont">{lang}mfcfb.index.statsinfo.description{/lang}</p>
					</div>
				</div>