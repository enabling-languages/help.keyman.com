<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanLanguages Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanLanguages Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboardsInstalled_Apply.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanLanguages_Apply.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanLanguages">IKeymanLanguages Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanLanguages_Apply.php">IKeymanLanguages::Apply</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanLanguages_Items.php">IKeymanLanguages::Items</a></span></dt></dl></div><p>
        interface IKeymanLanguages : 
        <a class="link" href="comapi_interface_IKeymanCollection.php" title="IKeymanCollection Interface">IKeymanCollection</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        Returns the list of languages that are configured on the system, and the associations with Keyman keyboards.
      </p><h5><a name="id613720"></a>Interface Methods</h5><table id="id613722"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanLanguages_Apply.php" title="IKeymanLanguages::Apply">Apply</a></td><td>Method</td><td>Sub Apply</td></tr></table><h5><a name="id613743"></a>Interface Properties</h5><table id="id613745"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanLanguages_Items.php" title="IKeymanLanguages::Items">Items</a></td><td>Property Get</td><td>Property Get Items(Index As Long) As IKeymanLanguage</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboardsInstalled_Apply.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanLanguages_Apply.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanKeyboardsInstalled::Apply </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanLanguages::Apply</td></tr></table></div>
