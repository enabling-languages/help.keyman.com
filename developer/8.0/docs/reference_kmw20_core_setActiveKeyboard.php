<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setActiveKeyboard"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: setActiveKeyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_core_removeHotKey.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Core Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_core_setKeyboardForControl.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_core_setActiveKeyboard">Function: setActiveKeyboard</h4></div></div></div><p>
    Change the currently active keyboard.
  </p><p>
    Parameters:
    <code class="code">
      string (internal keyboard name), string (language code, optional)
    </code>
  </p><p>
    Returns:
    <code class="code">
      Nothing
    </code>
  </p><p>
    Note:
    <code class="code">
      Use the internalName and languageCode keyboard variables.  
      If languageCode is defaulted, setActiveKeyboard will select the 
      language code for the first matching keyboard stub.
    </code>      
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_core_removeHotKey.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_core.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_core_setKeyboardForControl.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: removeHotKey </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: setKeyboardForControl</td></tr></table></div>
