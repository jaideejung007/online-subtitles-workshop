<script type='text/javascript' src='apps/jquery/jquery-1.9.1.js'></script> 
<script>
function processForm(formId, divID) { 
//your validation code
alert($("#"+formId).serialize());
$.ajax( {
        type: 'POST',
        url: 'index.php',
        data: $("#"+formId).serialize(), 
        success: function(data) {
            $("#"+divID).html(data);
        }
    } );
}
</script>

<style>
	#submitnewsubtitle input[type=text], input[type=file]{
		width: 100%;
		margin: 5px;
	}
	#submitnewsubtitle textarea{
		width: 100%;
	}
</style>
<div>
<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{AddSubtitle}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">
<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails">
    	
    	


<!-- add subtitle form -->
<div id="div-submitnewsubtitle">

content here
	
<form name="submitnewsubtitle" id="submitnewsubtitle" action="#" onsubmit="processForm('submitnewsubtitle','div-submitnewsubtitle'); return false;">
	<input type="hidden" name="vid" id="vid" value="{Vid}"/>
	<input type="hidden" name="dataonly" id="dataonly" value="yes"/>
	<input type="hidden" name="getcontroller" id="getcontroller" value="subtitle"/>
	<input type="hidden" name="getsection" id="getsection" value="Addsubtitle"/>
	<input type="hidden" name="ssec" id="ssec" value="Addsubtitle"/>
	<input type="hidden" name="h" id="h" value="Submitsubtitle"/>
</form>
</div>
<!-- end add subtitle form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
</div>
<br />




























