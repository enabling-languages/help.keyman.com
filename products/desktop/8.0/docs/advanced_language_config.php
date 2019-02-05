<?php
  require_once('includes/template.php');

  head([
    'title' => "Language Configuration Tasks"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Language Configuration Tasks</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="advanced_uniscribe.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Advanced Help</th><td width="20%" align="right"> <a accesskey="n" href="advanced_shadow_keyboards.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="advanced_language_config">Language Configuration Tasks</h2></div></div></div><p>When you install a Keyman Desktop keyboard package, Keyman Desktop will analyse the language configuration in Windows, Office, and other applications, and report on the language 
  configuration changes required for these programs in order to correctly work with the keyboard you are installing. You then have the option to allow Keyman Desktop to automatically
  make these languages configuration changes for you, which is the recommended action.</p><p>Keyman Desktop will also display this dialog at startup if it detects that it needs to repair your language settings, because the settings have been lost or modified either
  by a user or by another application.</p><p>
        <span class="inlinemediaobject"><img src="desktop_images/language-tasks.png"></span>
    </p><h3><a name="id631466"></a>Disabling Language Configuration Task detection</h3><p>
    You can stop Language Configuration Tasks from prompting you to make changes by ticking 'Don't ask me about this again'.
    If you select this option, Keyman Desktop will stop detecting the items you have left unticked, unless you access the dialog through Diagnostics, as described below.
  </p><h3><a name="id631474"></a>Accessing the Language Configuration Tasks dialog manually</h3><p>To access the Language Configuration Tasks dialog manually: from the <a class="link" href="basic_support_tab.php" title="Keyman Configuration - Support Tab">Support Tab</a> of Keyman Desktop Configuration, click 
  the Diagnostics button and select Check Windows Language Settings. When you access the dialog through this link, all configuration tasks, including those previously 
  disabled, will be displayed for your review.</p><h3><a name="id631487"></a>Language Configuration Tasks available</h3><p>The following items are currently checked by Keyman Desktop:</p><div class="itemizedlist"><ul type="disc"><li><a class="link" href="start_configure_computer.php" title="How To - Set up Your Computer for a Keyman Keyboard">Installed Windows languages</a></li><li><a class="link" href="start_configure_office.php" title="How To - Set up MS Office for a Keyman Keyboard">Microsoft Office Language Settings</a></li><li><a class="link" href="advanced_uniscribe.php" title="The Keyman Desktop Uniscribe Manager">Uniscribe display support and version</a></li><li><a class="link" href="langsetup_psrtcomplexscript.php" title="Configure Complex Script Support">Complex script language support</a> - especially Indic and other Asian languages</li><li><a class="link" href="langsetup_psrtrtl.php" title="Configure Right-to-Left Script Support">Right-to-left language support</a> - especially Hebrew, Arabic and related languages</li><li><a class="link" href="langsetup_psrtfareast.php" title="Configure East Asian Script Support">East Asian language support</a> - Chinese, Japanese, Korean</li><li><a class="link" href="langsetup_psrtsupplementary.php" title="Configure Supplementary Plane Support">Supplementary character support</a></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="advanced_uniscribe.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="advanced.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="advanced_shadow_keyboards.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">The Keyman Desktop Uniscribe Manager </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> System Shadow Keyboards</td></tr></table></div>
