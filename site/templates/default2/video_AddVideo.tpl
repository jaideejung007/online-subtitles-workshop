<style>
	#submitnewvideo input[type=text], input[type=file]{width: 100%;	margin: 5px;}
	#submitnewvideo textarea{width: 100%;}
	.div-error{width: 100%;	border: 1px; border-color: red; padding: 20px; color: red;}
	.div-message{width: 100%; border: 1px; border-color: green;	padding: 20px; color: green;}
	.checkbox-genre{float: left; width: 20%;}
	#div-submitnewvideo{width:98%;}
	#VideoCategory{width: 150px;}
</style>


<div>
<DIV class="catglow" style="width:100%; margin: 0 auto;">
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
    <TD class="forumdetails">
    	
<div id='SubmittingForm' style='width:100%;text-align: center; display: none;'><img src="templates/default2/tmp/ajax-loader.gif"/></div>    	

<!-- add video form -->
<div id="div-submitnewvideo">
<form id="submitnewvideo" method="post" action="index.php">
	
	<label for="VideoType">{Type}</label>
	<select name="VideoType" id="VideoType" data-required="true">
		<option></option>
		{VideoType}
	</select>
	
	<label for="VideoCategory" >{Category}</label>
	<select name="VideoCategory" id="VideoCategory" data-required="true">
		<option value=""> </option>
		{VideoCategory}
	</select>
	
	<label for="VideoLanguage">{Language}</label>
	<select name="VideoLanguage" id="VideoLanguage" data-required="true">
		<option value=""> </option>
		{VideoLanguage}
	</select>
	
	<br />
	<label for="VideoTitle">{Title}</label>
	<input type="text" name="VideoTitle" id="VideoTitle" value="{htitle}" data-required="true" />
	
	<br />
	<label for="VideoOtherTitle">{OtherTitle}</label>
	<input type="text" name="VideoOtherTitle" id="VideoOtherTitle" value="{hothertitle}" />

	<br />
	<label for="VideoUrl">{VideoUrl}</label>
	<input type="text" name="VideoUrl" id="VideoUrl" value="{hvideourl}" />
	
	<br />
	<label for="countries" >{Country}</label>
	<select name="country" id="country"  data-required="true">
		<option value=""> </option>
		{Countries}
	</select>
	
	<br />
	<label for="Genres">{Genres}</label>
        <div style="padding-top: 3px; overflow: auto; width: 100%; height: 90px; border: 0px solid #b0b0b0; padding-left: 5px">
			{VideoGenres}
        </div>

	<br />
	<label for="ReleaseDate"  data-required="true">{ReleaseDate}</label>
	<select name="rd-month" id="rd-month"><option value=""> </option>{rd-month}</select>
	<select name="rd-day" id="rd-day"><option value=""> </option>{rd-day}</select>
	<select name="rd-year" id="rd-year"><option value=""> </option>{rd-year}</select>
	
	<br />
	<label for="casting">{Casting}</label>
	<input type="text" name="casting" id="casting" value="{hcasting}"  data-required="true"/>

	<br />
	<label for="director">{Director}</label>
	<input type="text" name="director" id="director" value="{hdirector}"  data-required="true"/>

	<label for="length" >{Length}</label>
	<select name="length" id="length" data-required="true">
		<option value=""> </option>
	{length}</select>	minute(s)
	
	<br />
	<label for="tags">{Tags}</label>
	<input type="text" name="tags" id="tags" value="{htags}"  data-required="true"/>

	<br />
	<label for="synopsis">{Synopsis}</label>
	<textarea id="synopsis" name="synopsis" rows="5" data-required="true">{hsynopsis}</textarea>
	
	<!-- <input type="hidden" name="dataonly" value="yes" /> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="video" /> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="AddVideo" /> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="{page}" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="{sec}" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="AddVideo" />
	<input type="hidden" name="h" value="SubmitVideo" />

	<br /><br />
	<div style="width:100%; text-align: center;">
		<input type="submit" value="{Submit}" />
	</div>
</form>
</div>
<!-- end add video form -->		


   	 
    </TD>
	</TR>
	</TBODY>
	</TABLE>
	</DIV></div>
</div>
<br /><br />
