<div class="contentBox">
	<h3 class="subHeadline">{lang}wcf.quickPM.title{/lang}</h3>
	<p class="smallFont">{lang}wcf.quickPM.sendPMTo{/lang}</p>
	
	<div style="width: 98%; text-align: center; margin: 0px auto;">
		<form method="post" action="index.php?form=PMNew">
			
			<fieldset>
				<input id="recipients" name="recipients" value="{$recipient}" type="hidden" />
				<div class="formField">
					<p class="smallFont" style="text-align: left;">{lang}wcf.pm.subject{/lang}</p>
					<input type="text" class="inputText" name="subject" id="subject" />
				</div>
				<div class="formField">
					<p class="smallFont" style="text-align: left;">{lang}wcf.pm.text{/lang}</p>
					<p class="normalFont"><textarea name="text" id="text" rows="7" cols="2"></textarea></p>
				</div>
				{@SID_INPUT_TAG}
				<input type="hidden" name="parseURL" value="{$parseURL}" />
				<input type="hidden" name="enableSmilies" value="{$enableSmilies}" />
				<input type="hidden" name="enableHtml" value="0" />
				<input type="hidden" name="enableBBCodes" value="{$enableBBCodes}" />
				<input type="hidden" name="showSignature" value="{$showSignature}" />
			</fieldset>
			<div class="formSubmit">
				<input name="send" accesskey="s" value="{lang}wcf.global.button.submit{/lang}" type="submit" />
				<input name="reset" accesskey="r" value="{lang}wcf.global.button.reset{/lang}" type="reset" />
			</div>
		</form>
	</div>

	<div class="buttonBar">
		<div class="smallButtons">
			<ul><li class="extraButton"><a href="#top" title="{lang}wcf.global.scrollUp{/lang}"><img src="{icon}upS.png{/icon}" alt="{lang}wcf.global.scrollUp{/lang}" /> <span class="hidden">{lang}wcf.global.scrollUp{/lang}</span></a></li></ul>
		</div>
	</div>
</div>