<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Hotkey"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanKeyboard::Hotkey</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboard_Filename.php">Prev</a> </td><th width="60%" align="center">IKeymanKeyboard Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboard_KeyboardName.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanKeyboard_Hotkey"><a class="link" href="comapi_interface_IKeymanKeyboard.php" title="IKeymanKeyboard Interface">IKeymanKeyboard</a>::Hotkey</h5></div></div></div><p>
            Returns the hotkey associated with the keyboard.  If the keyboard is not installed, specifies the default hotkey
            declared in the file, and it cannot be modified.  See tagKeymanKeyboardHotkey for hotkey specification.
          </p><h6><a name="id627699"></a>Declaration</h6><pre class="programlisting">Property Get/Let Hotkey As Long</pre><h6><a name="id627705"></a>Parameters</h6><table id="id627707"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id627719"></a>Return Value</h6>Long<h6><a name="id627723"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboard_Filename.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanKeyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboard_KeyboardName.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanKeyboard::Filename </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanKeyboard::KeyboardName</td></tr></table></div>
