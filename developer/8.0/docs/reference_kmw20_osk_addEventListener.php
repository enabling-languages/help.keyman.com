<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: addEventListener"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: addEventListener</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_osk.php">Prev</a> </td><th width="60%" align="center">On-Screen Keyboard Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_osk_getRect.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_osk_addEventListener">Function: addEventListener</h4></div></div></div><p>
    Adds an event listener for user-handling of On-Screen keyboard events.
  </p><p>
    Parameters:
    <code class="code">
      Event object, function
    </code>
  </p><p>
    Returns:
    <code class="code">
      boolean (true/false)
    </code>
  </p><p>
    Note:
    <code class="code">
      Standard HTML element events for the On-Screen Keyboard element may 
      also be intercepted and used to modify the user interface if necessary.
    </code>      
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_osk.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_osk.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_osk_getRect.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">On-Screen Keyboard Module </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: getRect</td></tr></table></div>
