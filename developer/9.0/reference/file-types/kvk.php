<?php
  require_once('includes/template.php');

  head([
    'title' => "KVK files"
  ]);
?>

<h1>KVK files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Desktop</span>, <span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KVK file is a Keyman On Screen Keyboard file.</dd>

  <dt>Details:</dt>
  <dd>A .KVK file is created in the Keyboard Editor in <span class="application">Keyman Developer</span>, normally during the
    keyboard creation process. Web, Android and iOS keyboards, when compiled, embed the .KVK content into the output file, but
    desktop keyboards (Windows and Mac OS X) require the .KVK file to be included with the keyboard at distribution time.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>A .KVK file is associated with a specific keyboard, and must be distributed with that keyboard to be
    usable.</dd>
</dl>
