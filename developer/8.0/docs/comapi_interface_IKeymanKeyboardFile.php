<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanKeyboardFile Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboard_Name.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboardFile_Install.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanKeyboardFile">IKeymanKeyboardFile Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanKeyboardFile_Install.php">IKeymanKeyboardFile::Install</a></span></dt></dl></div><p>
        interface IKeymanKeyboardFile : 
        <a class="link" href="comapi_interface_IKeymanKeyboard.php" title="IKeymanKeyboard Interface">IKeymanKeyboard</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        Information about a keyboard that is not installed.
      </p><h5><a name="id627914"></a>Interface Methods</h5><table id="id627916"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboardFile_Install.php" title="IKeymanKeyboardFile::Install">Install</a></td><td>Method</td><td>Sub Install(AllUsers As Boolean, Force As Boolean)</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboard_Name.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboardFile_Install.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanKeyboard::Name </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanKeyboardFile::Install</td></tr></table></div>
