<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile::Install"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanKeyboardFile::Install</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboardFile.php">Prev</a> </td><th width="60%" align="center">IKeymanKeyboardFile Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboardInstalled.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanKeyboardFile_Install"><a class="link" href="comapi_interface_IKeymanKeyboardFile.php" title="IKeymanKeyboardFile Interface">IKeymanKeyboardFile</a>::Install</h5></div></div></div><p>
            Installs the keyboard into the Keyman Engine environment.  If the parent product for the keyboard is not installed, then the
            installation will fail.
          </p><h6><a name="id627948"></a>Declaration</h6><pre class="programlisting">Sub Install(AllUsers As Boolean, Force As Boolean)</pre><h6><a name="id627954"></a>Parameters</h6><table id="id627957"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>AllUsers</td><td>Boolean</td><td>Set to True to install for all users.  Requires administrative privileges</td></tr><tr><td>2</td><td>Force</td><td>Boolean</td><td>
                If True, then will install the keyboard, even if it is already installed, and overwrites the existing keyboard.
                Can be useful if the keyboard installation has been corrupted, for example, by end user intervention.  If False, then
                an error will be raised if the keyboard is already installed.
              </td></tr></table><h6><a name="id627990"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboardFile.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanKeyboardFile.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboardInstalled.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanKeyboardFile Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanKeyboardInstalled Interface</td></tr></table></div>
