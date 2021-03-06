<script>
	function ShowHide(show, hide){
		var elm2 = document.getElementById(hide);
 		elm2.style.display = "none"; //hide
		var elm1 = document.getElementById(show);
 		elm1.style.display = "block"; //show
 		if( show.substring(0,12) == "ttransscript" || show.substring(0,5) == "tlend" || show.substring(0,7) == "tlstart" ){
 			var text = document.getElementById(hide).innerHTML;
 			text = text.replace('<br />', '\r\n');
 			text = text.replace('<br/>', '\r\n');
 			text = text.replace('<br>', '\r\n');
 			document.getElementById(show).innerHTML = text;
 			document.getElementById(show).focus();
 			document.getElementById(show).select();
 		}
	}
	
	function SaveSubtitle(type, pid, taid, sid, cid, lid) {
		var save = false;
	if(document.getElementById(pid).innerHTML != document.getElementById(taid).value){ save = true;}	
	if(save === true){
		var content = document.getElementById(taid).value;
		content = encodeURIComponent(content);
		document.getElementById(pid).innerHTML="updating...";
		var str = "index.php?page=query&sec=subtitle&ssec=QuerySubtitle&h=edit&type="+type+"&sid="+sid+"&cid="+cid+"&lid="+lid+"&content="+content;	
		if (window.XMLHttpRequest)
		   {
		   xmlhttp=new XMLHttpRequest();
		   }
		 else
		   {
		   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		   }
		 xmlhttp.onreadystatechange=function()
		   {
		   if (xmlhttp.readyState==4 && xmlhttp.status==200)
		     {
		     document.getElementById(pid).innerHTML=xmlhttp.responseText;
		     }
		   }
		 xmlhttp.open("GET", str, false);
		 xmlhttp.send();
	}
	}
	
	function ShowInfo(LineNumber){
		//alert(TimeToSecond(document.getElementById("pstart"+LineNumber).innerHTML, 0));
		document.getElementById("lineinfo-subtitle").innerHTML=document.getElementById("ptrans"+LineNumber).innerHTML;
		document.getElementById("lineinfo-start").innerHTML=document.getElementById("pstart"+LineNumber).innerHTML;
		document.getElementById("lineinfo-stop").innerHTML=document.getElementById("pend"+LineNumber).innerHTML;
		jwplayer().seek(TimeToSecond(document.getElementById("pstart"+LineNumber).innerHTML, 0));
		stopat = TimeToSecond(document.getElementById("pend"+LineNumber).innerHTML, 1);
	}
</script>

<style>
	.NewLine{
		clear: left;
	}
	#editor-SubtitleContent{
		width: 100%;
		height: 600px;
		overflow-y: scroll;
	}
	.otext
	{
		width: 100%;
		text-align: left;
		clear: left;
		font-weight: bold;
		color: #000066;
	}
	.ltime{
		float: left;
		width: 20%;
		height: 50px;
	}
	.ltext{
		float: left;
		width: 70%;
		height: 50px;
		text-align: left;
	}
	.tlstart{
	display: none; /* hide start time textbox*/
	width: 90%;
	}
	.tlend{
	display: none; /* hide start time textbox*/
	width: 90%;
	}
	.lstart{
		height: 50%;
	}
	.lend{
		height: 50%;
	}
	.tatransscript{
		display: none; /* hide transscript textbox*/
		width: 90%;
	}
	.ptransscript{
		width: 90%;
		height: 100%;
	}
	.LineNumber{
		float: left;
		width: 40px;
		color: #082C52;
	}
</style>




<div class="row">
	<div class="col-md-13">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{title} - {CDTitle}</h3>
		  </div>
		  <div class="panel-body">
		  	
		  	


<!-- subtitle editor -->
<div id="subtitleeditor" style="width: 99%;">
	{EditorContent}
</div>
<!-- end subtitle editor -->	



		  </div>
		</div>
	</div>
</div>