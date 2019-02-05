<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeymanScript::GetProductActivationRequest"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">ITavultesoftKeymanScript::GetProductActivationRequest</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo.php">Prev</a> </td><th width="60%" align="center">ITavultesoftKeymanScript Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_ITavultesoftKeyman.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_ITavultesoftKeymanScript_GetProductActivationRequest"><a class="link" href="comapi_interface_ITavultesoftKeymanScript.php" title="ITavultesoftKeymanScript Interface">ITavultesoftKeymanScript</a>::GetProductActivationRequest</h5></div></div></div><p>
            Returns a string with the activation request which must be sent on to the Tavultesoft activation servers to receive an 
            activation response.
          </p><h6><a name="id600492"></a>Declaration</h6><pre class="programlisting">Function GetProductActivationRequest(ByVal ProductID as Long, ByVal LicenceCode As String) As String</pre><h6><a name="id600498"></a>Parameters</h6><table id="id600500"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>ProductID</td><td>Long</td><td>
                The ID of the product to retrieve product activation request for.
              </td></tr><tr><td>2</td><td>LicenceCode</td><td>String</td><td>
                The licence code to which the activation request applies.
              </td></tr></table><h6><a name="id600534"></a>Return Value</h6>String<h6><a name="id600538"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_ITavultesoftKeymanScript.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_ITavultesoftKeyman.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">ITavultesoftKeymanScript::GetProductActivationInfo </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> ITavultesoftKeyman Interface</td></tr></table></div>
