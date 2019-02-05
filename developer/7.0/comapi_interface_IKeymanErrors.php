<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanErrors Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_Validate.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanErrors_Clear.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="comapi_interface_IKeymanErrors"></a>IKeymanErrors Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanErrors_Clear.php">IKeymanErrors::Clear</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanErrors_Items.php">IKeymanErrors::Items</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanErrors_RebootRequired.php">IKeymanErrors::RebootRequired</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanErrors_SetReboot.php">IKeymanErrors::SetReboot</a></span></dt></dl></div><p>
        interface IKeymanErrors : 
        <a class="link" href="comapi_interface_IKeymanCollection.php" title="IKeymanCollection Interface">IKeymanCollection</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        A collection of any errors that Keyman Engine has generated.  During some processes, multiple errors may be generated.  This collection
        should be checked if an exception is received, as it will generally contain further information about the error.  The RebootRequired
        property should also be checked after running any of the installation or uninstallation processes in Keyman Engine.
      </p><h5><a name="id719917"></a>Interface Methods</h5><table id="id719919"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanErrors_Clear.php" title="IKeymanErrors::Clear">Clear</a></td><td>Method</td><td>Sub Clear</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanErrors_SetReboot.php" title="IKeymanErrors::SetReboot">SetReboot</a></td><td>Method</td><td>Sub SetReboot</td></tr></table><h5><a name="id719951"></a>Interface Properties</h5><table id="id719953"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanErrors_Items.php" title="IKeymanErrors::Items">Items</a></td><td>Property Get</td><td>Property Get Items(Index As Long) As IKeymanError</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanErrors_RebootRequired.php" title="IKeymanErrors::RebootRequired">RebootRequired</a></td><td>Property Get</td><td>Property Get RebootRequired As Boolean</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_Validate.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanErrors_Clear.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProduct::Validate </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanErrors::Clear</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
