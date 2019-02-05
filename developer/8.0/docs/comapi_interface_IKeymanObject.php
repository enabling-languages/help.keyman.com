<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanObject Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanObject Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interfaces.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanObject_SerializeXML.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanObject">IKeymanObject Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanObject_SerializeXML.php">IKeymanObject::SerializeXML</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanObject_UniqueIndex.php">IKeymanObject::UniqueIndex</a></span></dt></dl></div><p>
        interface IKeymanObject : 
        IDispatch</p><p>Base interface for all Keyman COM API objects</p><h5><a name="id666325"></a>Interface Methods</h5><table id="id666327"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanObject_SerializeXML.php" title="IKeymanObject::SerializeXML">SerializeXML</a></td><td>Method</td><td>Sub SerializeXML(XML As String, Flags As tagKeymanSerializeFlags, ImagePath As String, References)</td></tr></table><h5><a name="id666347"></a>Interface Properties</h5><table id="id666350"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanObject_UniqueIndex.php" title="IKeymanObject::UniqueIndex">UniqueIndex</a></td><td>Property Get</td><td>Property Get UniqueIndex As Long</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interfaces.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanObject_SerializeXML.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Interfaces </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanObject::SerializeXML</td></tr></table></div>
