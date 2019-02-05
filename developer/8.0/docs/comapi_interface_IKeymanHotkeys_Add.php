<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkeys::Add"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanHotkeys::Add</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanHotkeys.php">Prev</a> </td><th width="60%" align="center">IKeymanHotkeys Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanHotkeys_Apply.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanHotkeys_Add"><a class="link" href="comapi_interface_IKeymanHotkeys.php" title="IKeymanHotkeys Interface">IKeymanHotkeys</a>::Add</h5></div></div></div><p>
            Add a hotkey definition to the product.  If the product does not recognise the target value, then the target value will have no effect.
          </p><h6><a name="id626664"></a>Declaration</h6><pre class="programlisting">Function Add(Value As Long, Target As Long) As IKeymanHotkey</pre><h6><a name="id626671"></a>Parameters</h6><table id="id626674"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>Value</td><td>Long</td><td>
                The value of the hotkey.  See tagKeymanKeyboardHotkey for hotkey specification.
              </td></tr><tr><td>2</td><td>Target</td><td>Long</td><td>
                The product-specific target value for the shortcut.  Keyman Engine defines:
                  khKeymanOff = 0;
                  khKeyboardMenu = 1;
                  khVisualKeyboard = 2;
                  khKeymanConfiguration = 3;
              </td></tr></table><h6><a name="id626707"></a>Return Value</h6><a class="link" href="comapi_interface_IKeymanHotkey.php" title="IKeymanHotkey Interface">IKeymanHotkey</a><h6><a name="id626713"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanHotkeys.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanHotkeys.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanHotkeys_Apply.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanHotkeys Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanHotkeys::Apply</td></tr></table></div>
