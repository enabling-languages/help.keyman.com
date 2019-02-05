<?php
  require_once('includes/template.php');

  head([
    'title' => "tagKeymanKeyboardHotkey Enumeration"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">tagKeymanKeyboardHotkey Enumeration</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_enumeration_tagKeymanPackageSubFileCopyLocation.php">Prev</a> </td><th width="60%" align="center">Enumerations</th><td width="20%" align="right"> <a accesskey="n" href="comapi_enumeration_tagKeymanErrorSeverity.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_enumeration_tagKeymanKeyboardHotkey">tagKeymanKeyboardHotkey Enumeration</h4></div></div></div><p>
        The hotkey flags for a Keyman hotkey.  Hotkeys are stored as a DWORD, with the high word being shift state:
              HK_ALT   = $00010000,  HK_CTRL	 = $00020000, HK_SHIFT = $00040000, and the low word is the virtual key code.
      </p><h5><a name="id638545"></a>Enumeration Members</h5><table id="id638547"><tr><th>Member Name</th><th>Member Value</th></tr><tr><td>HK_ALT</td><td>65536</td></tr><tr><td>HK_CTRL</td><td>131072</td></tr><tr><td>HK_SHIFT</td><td>262144</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_enumeration_tagKeymanPackageSubFileCopyLocation.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_enumerations.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_enumeration_tagKeymanErrorSeverity.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">tagKeymanPackageSubFileCopyLocation Enumeration </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> tagKeymanErrorSeverity Enumeration</td></tr></table></div>
