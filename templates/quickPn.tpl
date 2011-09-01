{if $this->user->getPermission('user.pm.canUseQuickPm') && $this->user->getPermission('user.pm.canUsePm')}
	{if QUICK_PM_ACTIVE}
		<div class="userProfileContent" align="center">
			<div class="border">
				<div class="container-1 border">
					<div class="containerHead">
						<div class="containerIcon"><img src="{@RELATIVE_WCF_DIR}icon/pmNewM.png" alt="" /></div>
						<h3 class="containerContent">{lang}wcf.quickPn.title{/lang}</h3>
						<h3 class="smallFont containerContent" align="left">{lang}wcf.quickPn.sendPnTo{/lang}</h3>
					</div>
					<form autocomplete="on" method="post" action="index.php?form=PMNew"/>
						<input id="recipients" name="recipients" value="{$recipient}" type="hidden">
						<fieldset style="width:90%">
							<div class="formField">
								<p class="smallFont" align="left">{lang}wcf.quickPn.subject{/lang}</p>
								<input type="text" class="inputText" name="subject" id="subject"/>
							</div>
							<div class="formField">
							       <p class="smallFont" align="left">{lang}wcf.quickPn.message{/lang}</p>
							       <p class="normalFont"><textarea name="text" id="text" rows="7"></textarea>
							       </p>
							</div>
						</fieldset>
						<div class="formSubmit">
							<input name="send" accesskey="s" value="{lang}wcf.quickPn.sendmail{/lang}" type="submit">
							<input type="reset" name="reset" accesskey="r" value="{lang}wcf.global.button.reset{/lang}" />
						</div>
						{@SID_INPUT_TAG}
						<input type="hidden" name="parseURL" value="{$parseURL}"/>
						<input type="hidden" name="enableSmilies" value="{$enableSmilies}"/>
						<input type="hidden" name="enableHtml" value="0"/>
						<input type="hidden" name="enableBBCodes" value="{$enableBBCodes}"/>
						<input type="hidden" name="showSignature" value="{$showSignature}"/>
					</form>
				</div>
			</div>
		</div>
	{/if}
{/if}