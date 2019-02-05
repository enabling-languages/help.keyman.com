<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeymanScript Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">ITavultesoftKeymanScript Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanControl_VisualKeyboardVisible.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_ITavultesoftKeymanScript">ITavultesoftKeymanScript Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo.php">ITavultesoftKeymanScript::GetProductActivationInfo</a></span></dt><dt><span class="section"><a href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationRequest.php">ITavultesoftKeymanScript::GetProductActivationRequest</a></span></dt></dl></div><p>
        interface ITavultesoftKeymanScript : 
        <a class="link" href="comapi_interface_ITavultesoftKeyman.php" title="ITavultesoftKeyman Interface">ITavultesoftKeyman</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        Expanded interface for ITavultesoftKeyman for script engines.  This interface provides access to product activation information
        which is not available due to restrictions in scripting COM objects.
      </p><h5><a name="id600384"></a>Interface Methods</h5><table id="id600386"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo.php" title="ITavultesoftKeymanScript::GetProductActivationInfo">GetProductActivationInfo</a></td><td>Method</td><td>Function GetProductActivationInfo(ByVal ProductID as Long, ByVal InfoType As Long) As Long</td></tr><tr><td><a class="link" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationRequest.php" title="ITavultesoftKeymanScript::GetProductActivationRequest">GetProductActivationRequest</a></td><td>Method</td><td>Function GetProductActivationRequest(ByVal ProductID as Long, ByVal LicenceCode As String) As String</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanControl_VisualKeyboardVisible.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanControl::VisualKeyboardVisible </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> ITavultesoftKeymanScript::GetProductActivationInfo</td></tr></table></div>
