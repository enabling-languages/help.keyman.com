<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackageFile::Install</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageFile_Graphic.php">Prev</a> </td><th width="60%" align="center">IKeymanPackageFile Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_ReadMe.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title"><a name="comapi_interface_IKeymanPackageFile_Install"></a><a class="link" href="comapi_interface_IKeymanPackageFile.php" title="IKeymanPackageFile Interface">IKeymanPackageFile</a>::Install</h5></div></div></div><p>
            Install the package for use within Keyman Engine.
          </p><h6><a name="id767048"></a>Declaration</h6><pre class="programlisting">Sub Install(AllUsers As Boolean, Force As Boolean, ShortcutRootPath As String)</pre><h6><a name="id767054"></a>Parameters</h6><table id="id767057"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>AllUsers</td><td>Boolean</td><td>
                True if the package should be installed for all users.  If true, then requires administrative privileges
                to install.
              </td></tr><tr><td>2</td><td>Force</td><td>Boolean</td><td>
                If True, then overwrites an existing package with the same name if it exists.  If false, then
                will raise an exception if the package is already installed.
              </td></tr><tr><td>3</td><td>ShortcutRootPath</td><td>String</td><td>
                The base path name for shortcuts to be installed into.  For example, Keyman Desktop may specify
                "[StartMenuPrograms]\Tavultesoft Keyman Desktop Professional 7.0\" (where [StartMenuPrograms] is 
                the full path to the Start Menu Programs folder).
              </td></tr></table><h6><a name="id767101"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageFile_Graphic.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanPackageFile.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_ReadMe.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackageFile::Graphic </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackageFile::ReadMe</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
