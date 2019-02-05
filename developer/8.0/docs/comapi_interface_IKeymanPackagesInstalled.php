<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackagesInstalled Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackages.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackagesInstalled_GetPackageFromFile.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanPackagesInstalled">IKeymanPackagesInstalled Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanPackagesInstalled_GetPackageFromFile.php">IKeymanPackagesInstalled::GetPackageFromFile</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanPackagesInstalled_IndexOf.php">IKeymanPackagesInstalled::IndexOf</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanPackagesInstalled_Install.php">IKeymanPackagesInstalled::Install</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanPackagesInstalled_Items.php">IKeymanPackagesInstalled::Items</a></span></dt></dl></div><p>
        interface IKeymanPackagesInstalled : 
        <a class="link" href="comapi_interface_IKeymanPackages.php" title="IKeymanPackages Interface">IKeymanPackages</a> : 
        <a class="link" href="comapi_interface_IKeymanCollection.php" title="IKeymanCollection Interface">IKeymanCollection</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        Collection of installed packages
      </p><h5><a name="id609519"></a>Interface Methods</h5><table id="id609521"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackagesInstalled_GetPackageFromFile.php" title="IKeymanPackagesInstalled::GetPackageFromFile">GetPackageFromFile</a></td><td>Method</td><td>Function GetPackageFromFile(Filename As String) As IKeymanPackageFile</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackagesInstalled_IndexOf.php" title="IKeymanPackagesInstalled::IndexOf">IndexOf</a></td><td>Method</td><td>Function IndexOf(Name As String) As Long</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackagesInstalled_Install.php" title="IKeymanPackagesInstalled::Install">Install</a></td><td>Method</td><td>Sub Install(Filename As String, AllUsers As Boolean, Force As Boolean, ShortcutRootPath As String)</td></tr></table><h5><a name="id609565"></a>Interface Properties</h5><table id="id609567"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackagesInstalled_Items.php" title="IKeymanPackagesInstalled::Items">Items</a></td><td>Property Get</td><td>Property Get Items(Index) As IKeymanPackageInstalled</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackages.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackagesInstalled_GetPackageFromFile.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackages Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackagesInstalled::GetPackageFromFile</td></tr></table></div>
