<?php
  require_once('includes/template.php');

  head([
    'title' => "How To - Fix Greek Medial Sigma Changing to Final Sigma Unexpectedly in MS Word"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">How To - Fix Greek Medial Sigma Changing to Final Sigma Unexpectedly in MS Word</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="troubleshooting_font.php">Prev</a> </td><th width="60%" align="center">Chapter 6. Troubleshooting Index</th><td width="20%" align="right"> <a accesskey="n" href="troubleshooting_excel.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="troubleshooting_sigma">How To - Fix Greek Medial Sigma Changing to Final Sigma Unexpectedly in MS Word</h2></div></div></div><h3><a name="id579236"></a>Symptoms</h3><p>When typing Greek in Microsoft Word using any Polytonic Greek-script keyboard, entering a diacritic or breathing mark on a vowel after a Sigma immediately causes the Sigma to incorrectly change to a final Sigma. For instance, if you typed ησὴ you would get ηςὴ.</p><h3><a name="id579205"></a>Resolution</h3><p>This is due to a bug with the Microsoft Word "AutoFormat As You Type" Ordinals setting.</p><p>In Microsoft Word 2003:</p><div class="orderedlist"><ol type="1"><li><p>In Word, click Tools menu, <span class="guibutton">AutoCorrect Options…</span>, and select the AutoFormat As You Type tab.</p></li><li><p>Find the entry titled Ordinals (1st) with superscript and untick it.</p></li><li><p>Click <span class="guibutton">OK</span> to save changes.</p></li></ol></div><p>In Microsoft Word 2007:</p><div class="orderedlist"><ol type="1"><li><p>In Word, click the Office button (top left round button), and select Word Options at the bottom right of the menu that appears.</p></li><li><p>Click Proofing and <span class="guibutton">AutoCorrect Options</span>.</p></li><li><p>Select the AutoFormat As You Type tab.</p></li><li><p>Find the check box titled Ordinals (1st) with superscript and untick it.</p></li><li><p>Click <span class="guibutton">OK</span> to save changes.</p></li></ol></div><p>In Microsoft Word 2010:</p><div class="orderedlist"><ol type="1"><li><p>In Word, click File, and select Options.</p></li><li><p>Click Proofing and <span class="guibutton">AutoCorrect Options</span>.</p></li><li><p>Select the AutoFormat As You Type tab.</p></li><li><p>Find the check box titled Ordinals (1st) with superscript and untick it.</p></li><li><p>Click <span class="guibutton">OK</span> to save changes.</p></li></ol></div><h3><a name="id579331"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="start_configure_office.php" title="How To - Set up MS Office for a Keyman Keyboard">How To - Set up MS Office for a Keyman Keyboard</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="troubleshooting_font.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="troubleshooting.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="troubleshooting_excel.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">How To - Fix Font Issues </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> How To - Use Keyman Desktop in Excel</td></tr></table></div>
