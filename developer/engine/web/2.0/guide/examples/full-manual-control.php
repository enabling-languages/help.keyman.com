<?php

require_once('includes/template.php');
require_once('includes/__iframeheader.php');

head([
  'title' => "Manual Control - Custom Interface"
]);

require_once('includes/__docheader.php');
?>

<h1>Manual Language Control</h1>

<p>In this example, the web page designer has opted for their own user interface instead of the KeymanWeb
interface.  The keyboards in the selector are populated from the KeymanWeb list of keyboards.</p>

<?php embed_with_iframe("__full-manual-control.php", 250); ?>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>

<?php
  echo codebox(<<<END
<script>
  var KWControl = null;
  var kmw = tavultesoft.keymanweb;
  
  /* SetupDocument: Called when the page finishes loading */
  function SetupDocument()
  {
    /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
    kmw.init();
    
    KWControl = document.getElementById('KWControl');
    /* Retrieve the list of keyboards available from KeymanWeb and populate the selector using the DOM */
    var kbds = kmw.getKeyboards();
    for(var kbd in kbds)
    {
      var opt = document.createElement('OPTION');
      opt.value = kbds[kbd].InternalName + "$$" + kbds[kbd].LanguageCode;
      opt.innerHTML = kbds[kbd].Name;
      KWControl.appendChild(opt);    
    }
    /* Focus onto the multilingual field in the form */
    document.f.multilingual.focus();
    
    // Ensures the default keyboard is active, to match our listbox's initial (default) option.
    kmw.setActiveKeyboard('');
  }
  
  /* KWControlChange: Called when user selects an item in the KWControl SELECT */
  function KWControlChange()
  {
    /* Select the keyboard in KeymanWeb */
    var name = KWControl.value.substr(0, KWControl.value.indexOf("$$"));
    var languageCode = KWControl.value.substr(KWControl.value.indexOf("$$"+2));
    kmw.setActiveKeyboard(name, languageCode);
    /* Focus onto the multilingual field in the form */
    document.f.multilingual.focus();
  }
</script>
END
  );
  echo "<p>Also include the following HTML code:</p>";

  echo codebox(<<<END
<head>
    <!-- Load the KeymanWeb engine -->
    <script src="keymanweb.js" type="text/javascript"></script>
    <!-- Load the your keyboard stubs here -->
    <script src="laokeys_load.js" type="text/javascript"></script>
    <!-- ... -->
</head>

<!-- When the page has finished loading, populate the keyboard selector, see above -->
<body onload="SetupDocument()">
END
  );

  echo "<p>And finally, include the keyboard SELECT and the clickable help img:</p>";
  
  echo codebox(<<<END
<!-- Display the KWControl selector with different keyboards listed -->
<p>Keyboard: <select id='KWControl' onchange='KWControlChange()'><option value=''>English</option></select>
END
  );
?>

<p>On programmatically setting the keyboard:  <a href="../../reference/core/setActiveKeyboard"><code><?="$kmw.setActiveKeyboard()"?></code></a>.</p>
<p>On getting KeymanWeb's managed list of keyboards:
  <a href="../../reference/core/getKeyboards"><code><?="$kmw.getKeyboards()"?></code></a>.</p>

<hr>

<p><a href='control-by-control.php'>On to Control by Control Example</a></p>