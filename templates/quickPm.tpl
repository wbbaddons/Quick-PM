{if $this->user->getPermission('user.pm.canUseQuickPm') && $this->user->getPermission('user.pm.canUsePm')}
	{if QUICK_PM_ACTIVE}
		<div class="contentBox">
			<h3 class="subHeadline">{lang}Quick PM{/lang}</h3>
			<p class="smallFont">{lang}wcf.quickPM.sendPMTo{/lang}</p>
			<div style="width: 98%; text-align: center; margin: 0px auto;">						
				<form autocomplete="on" method="post" action="index.php?form=PMNew">
					<input id="recipients" name="recipients" value="{$recipient}" type="hidden" />
					<fieldset>
						<div class="formField">
							<p class="smallFont" align="left">{lang}wcf.pm.subject{/lang}</p>
							<input type="text" class="inputText" name="subject" id="subject" />
						</div>
						<div class="formField">
						       <p class="smallFont" align="left">{lang}wcf.pm.text{/lang}</p>
						       <p class="normalFont"><textarea name="text" id="text" rows="7"></textarea>
						       </p>
						</div>
					</fieldset>
					<div class="formSubmit">
						<input name="send" accesskey="s" value="{lang}wcf.global.button.submit{/lang}" type="submit" />
						<input name="reset" accesskey="r" value="{lang}wcf.global.button.reset{/lang}" type="reset" />
					</div>
					{@SID_INPUT_TAG}
					<input type="hidden" name="parseURL" value="{$parseURL}" />
					<input type="hidden" name="enableSmilies" value="{$enableSmilies}" />
					<input type="hidden" name="enableHtml" value="0" />
					<input type="hidden" name="enableBBCodes" value="{$enableBBCodes}" />
					<input type="hidden" name="showSignature" value="{$showSignature}" />
				</form>
			</div>
									
			<div class="buttonBar">
				<div class="smallButtons">
					<ul><li class="extraButton"><a href="#top" title="{lang}wcf.global.scrollUp{/lang}"><img src="{icon}upS.png{/icon}" alt="{lang}wcf.global.scrollUp{/lang}" /> <span class="hidden">{lang}wcf.global.scrollUp{/lang}</span></a></li></ul>
				</div>
			</div>
		</div>
	{/if}
{/if}