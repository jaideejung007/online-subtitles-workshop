<DIV class="catglow">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">
<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails"><SPAN class="forum-descriptions">



<!-- subtitle uploader -->
<div id="subtitleuploader" style="width: 99%;">

<form method="post" action="index.php" enctype="multipart/form-data">
	<table style="width: 100%;">
		<tr>
			<td style="width: 25%;">{cd}</td>
			<td style="width: 75%;"><select name="cd"><option value=""></option>{cds}</select></td>
		</tr>
		<tr>
			<td>{cdtitle}</td>
			<td><input type="text" name="cdtitle" style="width: 100%;"/></td>
		</tr>
		<tr>
			<td>{subtitletext}</td>
			<td><textarea name="subtitletext" style="width: 100%; height: 100px;"></textarea></td>
		</tr>
		<tr>
			<td>{subtitlefile}</td>
			<td><input type="file" name="file" /></td>
		</tr>
		<tr>
			<td colspan="2"><font color="green">{note}</font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" value="{submit}"/></td>
		</tr>
	</table>
<!-- <input type="hidden" name="dataonly" value="yes"/> --> <!-- uncomment if using ajax -->
<!-- <input type="hidden" name="getcontroller" value="subtitle"/> --> <!-- uncomment if using ajax -->
<!-- <input type="hidden" name="getsection" value="SubtitleUploader"/> --> <!-- uncomment if using ajax -->
<input type="hidden" name="page" value="subtitle" /> <!-- comment if using ajax -->
<input type="hidden" name="sec" value="manage" /> <!-- comment if using ajax -->
<input type="hidden" name="ssec" value="SubtitleUploader"/>
<input type="hidden" name="h" value="UploadSubtitle"/>
<input type="hidden" name="sid" value="{sid}" />
</form>


</div>
<!-- end subtitle uploader -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>