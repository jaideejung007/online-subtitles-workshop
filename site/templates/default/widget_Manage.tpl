<style>
	.widget-manage-link-container{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		background-color: #F5FBFE;
		width: 99%;
		margin-bottom: 2px;
		padding-left: 3px;
		padding-top: 2px;
		padding-bottom: 2px;
		font-weight: bold;
	}
	.widget-manage-caption{
		border-width: 1px;
		border-style: solid;
		border-color: #DFE8EE;
		width: 99%;
		margin-bottom: 2px;
		padding-left: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		font-weight: bold;
		text-align: center;
	}
</style>








<div class="row">
	<div class="col-md-11">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Manage Account</h3>
		  </div>
		  <div class="panel-body">
<div id="widgt-ManageAccount">
	<div class='widget-manage-caption'>Subtitle</div>
		<div class='widget-manage-link-container'><a href="index.php?page=subtitle&sec=list">my subtitles</a></div>
		<div class='widget-manage-link-container'><a href="index.php?pag=subtitle&sec=followed">favourite subtitles</a></div>
	<div class='widget-manage-caption'>video</div>
		<div class='widget-manage-link-container'><a href="index.php?page=video&sec=list">my videos</a></div>
		<div class='widget-manage-link-container'><a href="index.php?pag=video&sec=followed">favourite videos</a></div>
	  	<div class='widget-manage-link-container'><a class="quicklinks-link" href="index.php?page=video&sec=add">{AddVideo}</a></div>
	<div class='widget-manage-caption'>team</div>
		<div class='widget-manage-link-container'><a href="index.php?page=team&sec=list">my teams</a></div>
		<div class='widget-manage-link-container'><a href="index.php?page=team&sec=joined">joined teams</a></div>
	  	<div class='widget-manage-link-container'><a class="quicklinks-link" href="index.php?page=team&sec=add">{AddTeam}</a></div>
	<div class='widget-manage-caption'>account</div>
	  	<div class='widget-manage-link-container'><a class="quicklinks-link" href="index.php?page=message&sec=list">{PMS}</a></div>
	  	<div class='widget-manage-link-container'><a class="quicklinks-link" href="index.php?page=user&sec=cp&uid={uid}">{UserCp}</a></div>
		<div class='widget-manage-link-container'><a class="quicklinks-link" href="index.php?act=logout">{Logout}</a></div>
</div>
		  </div>
		</div>
	</div>
</div>
