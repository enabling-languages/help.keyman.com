<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanKeyboard Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanError_Severity.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboard_Bitmap.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanKeyboard">IKeymanKeyboard Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Bitmap.php">IKeymanKeyboard::Bitmap</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Copyright.php">IKeymanKeyboard::Copyright</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Encodings.php">IKeymanKeyboard::Encodings</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Filename.php">IKeymanKeyboard::Filename</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Hotkey.php">IKeymanKeyboard::Hotkey</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_KeyboardName.php">IKeymanKeyboard::KeyboardName</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_LayoutType.php">IKeymanKeyboard::LayoutType</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Message.php">IKeymanKeyboard::Message</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanKeyboard_Name.php">IKeymanKeyboard::Name</a></span></dt></dl></div><p>
        interface IKeymanKeyboard : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>Base interface for Keyman Keyboard interfaces</p><h5><a name="id627412"></a>Interface Properties</h5><table id="id627414"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Bitmap.php" title="IKeymanKeyboard::Bitmap">Bitmap</a></td><td>Property Get</td><td>Property Get Bitmap As stdole.IPicture</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Copyright.php" title="IKeymanKeyboard::Copyright">Copyright</a></td><td>Property Get</td><td>Property Get Copyright As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Encodings.php" title="IKeymanKeyboard::Encodings">Encodings</a></td><td>Property Get</td><td>Property Get Encodings As tagKeymanKeyboardEncodings</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Filename.php" title="IKeymanKeyboard::Filename">Filename</a></td><td>Property Get</td><td>Property Get Filename As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Hotkey.php" title="IKeymanKeyboard::Hotkey">Hotkey</a></td><td>Property Get/Let</td><td>Property Get/Let Hotkey As Long</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_KeyboardName.php" title="IKeymanKeyboard::KeyboardName">KeyboardName</a></td><td>Property Get</td><td>Property Get KeyboardName As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_LayoutType.php" title="IKeymanKeyboard::LayoutType">LayoutType</a></td><td>Property Get</td><td>Property Get LayoutType As tagKeymanKeyboardLayoutType</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Message.php" title="IKeymanKeyboard::Message">Message</a></td><td>Property Get</td><td>Property Get Message As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanKeyboard_Name.php" title="IKeymanKeyboard::Name">Name</a></td><td>Property Get</td><td>Property Get Name As String</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanError_Severity.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboard_Bitmap.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanError::Severity </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanKeyboard::Bitmap</td></tr></table></div>
