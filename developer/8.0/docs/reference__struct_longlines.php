<?php
  require_once('includes/template.php');

  head([
    'title' => "Long lines and continuations"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Long lines and continuations</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_history.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_silkey.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_longlines">Long lines and continuations</h4></div></div></div><p>
        If you have a long line, you can wrap it to the next line by inserting a backslash (\) as
        the last character on the line.  The primary limitation is that you cannot use comments on 
        a line like this.  The backslash must not be inside quotes.
      </p><h5><a name="id662795"></a>Example</h5><pre class="programlisting">
store(LaoConsonants) U+0E81 U+0E82 U+0E84 U+0E87 U+0E88 U+0E8A U+0E8D U+0E94 \
                     U+0E95 U+0E96 U+0E97 U+0E99 U+0E9A U+0E9B U+0E9C U+0E9D \
                     U+0E9E U+0E9F U+0EA1 U+0EA2 U+0EA3 U+0EA5 U+0EA7 U+0EAA \
                     U+0EAB U+0EAD U+0EAE 
      </pre><h5><a name="id661170"></a>Versions</h5><p>Long line wrapping was introduced in Keyman 3.0.</p><h5><a name="id662736"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li><li><p><a class="xref" href="reference__struct_comments.php" title="Comments">Comments</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_history.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_silkey.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyboard File History </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Compile Targets (Keyman, KeymanWeb, and SILKey)</td></tr></table></div>
