<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Automatic Control (pre-loaded) Example</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_kmw_automatic_control.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_kmw_manual_control.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="guide_kmw_automatic_control_loaded"></a>Automatic Control (pre-loaded) Example</h3></div></div></div><p>This page shows the simplest method of utilising KeymanWeb.  Only one tag per keyboard, plus the reference
to KeymanWeb itself, is required.</p><p>In this example, we use only the LaoKey keyboard, and we load it at the time that the page loads.</p><p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/automatic_control_loaded.php" target="_blank">www.keymanweb.com</a></p><span class="inlinemediaobject"><img src="images/kmw_automatic_control.png"></span><h4><a name="id755059"></a>Code Walkthrough</h4><pre class="programlisting">
&lt;head&gt;  
  &lt;!-- Start of Code --&gt;  
  &lt;script type="text/javascript"&gt;KeymanWeb_Key='your_key_here';&lt;/script&gt;  
  &lt;script src="keymanweb.js" type="text/javascript"&gt;&lt;/script&gt;  
  &lt;script src="laokeys.js" type="text/javascript"&gt;&lt;/script&gt;  
  &lt;!-- End of Code --&gt;  
&lt;/head&gt;
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_kmw_automatic_control.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_kmw_manual_control.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Automatic Mode Example </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Manual Control Example</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
