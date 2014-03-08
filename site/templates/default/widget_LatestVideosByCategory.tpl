  <style>

	.widget-latestvideos-all, .widget-latestvideos-movies, .widget-latestvideos-tv, .widget-latestvideos-trailer{
		/*clear: left;*/
	}
	.widget-latestvideos-all-cell, .widget-latestvideos-movies-cell, .widget-latestvideos-tv-cell, .widget-latestvideos-trailer-cell{
		width: 49.5%;
		border-style: solid;
		border-width: 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		height: 117px;
		line-height: 30px;
		margin-right: 2px;
		margin-bottom: 2px;
		text-overflow: ellipsis;
		float: left;
	}
	
	.widget-latestvideos-all-cell a, .widget-latestvideos-movies-cell a, .widget-latestvideos-trailer-cell a, .widget-latestvideos-tv-cell a {
		text-decoration: none;
		padding-left: 1px;
		padding-right: 1px;
		font-weight: bold;
	}
	.widget-latestvideos-all-thubmnail, .widget-latestvideos-movies-thubmnail, .widget-latestvideos-tv-thubmnail, .widget-latestvideos-trailer-thubmnail{
		width: 77px;
		height: 113px;
		float: left;
		margin: 1px 1px 1px 1px;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		border-width: 1px;
		border-style: solid;
	}
	.widget-latestvideos-all-thubmnailimg, .widget-latestvideos-movies-thubmnailimg, .widget-latestvideos-tv-thubmnailimg, .widget-latestvideos-trailer-thubmnailimg{
		width: 77px;
		height: 113px;
	}
	.widget-lateestvideos-all-videoinfo{
		display: block;
		float: left;
		border-color: rgb(215, 229, 242) rgb(215, 229, 242);
		border-width: 1px;
		border-style: solid;
		margin: 1px;
		width: 252px;
		height: 113px;
	}
	.widget-lateestvideos-all-videoinfo div, .widget-lateestvideos-movies-videoinfo div, .widget-lateestvideos-tv-videoinfo div, .widget-lateestvideos-trailer-videoinfo div{
		width: 100%;
		height: 24px;
		vertical-align: middle;
		margin-left: 1px;
		line-height: 24px;
	}
	.widget-latestvideos-all-rateresult-off, .widget-latestvideos-movies-rateresult-off, .widget-latestvideos-tv-rateresult-off, .widget-latestvideos-trailer-rateresult-off{
		content: url("templates/default2/tmp/images/star_empty2.png");
	}
	.widget-latestvideos-all-rateresult-on, .widget-latestvideos-movies-rateresult-on, .widget-latestvideos-tv-rateresult-on, .widget-latestvideos-trailer-rateresult-on{
		content: url("templates/default2/tmp/images/star_full2.png");
	}
  </style>

  <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container4').easytabs();
    });
  </script>  


<div class="row">
	<div class="col-md-12">
		
<ul id="lvbc" class="nav nav-tabs">
  <li class="active"><a href="#lvbc-all" data-toggle="tab">All Videos</a></li>
  <li class=""><a href="#lvbc-movies" data-toggle="tab">Movies</a></li>
  <li class=""><a href="#lvbc-tv" data-toggle="tab">TV Shows</a></li>
  <li class=""><a href="#lvbc-trailer" data-toggle="tab">Trailers</a></li>
</ul>
 
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="lvbc-all">
    	{AllVideos}
	<div style='clear:left;'></div>
  </div>
  <div class="tab-pane fade" id="lvbc-movies">
    	{Movies}
	<div style='clear:left;'></div>
  </div>
  <div class="tab-pane fade" id="lvbc-tv">
    	{TvShows}
	<div style='clear:left;'></div>
  </div>
  <div class="tab-pane fade" id="lvbc-trailer">
    	{Trailers}
	<div style='clear:left;'></div>
  </div>
</div>

	</div>
</div>

<br />