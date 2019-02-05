<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb Core Module"
  ]);
?>
<h1 class="title" id="core">Core Module</h1>

<p>The KeymanWeb core module is exposed to the developer as <code class="code">window.tavultesoft.keymanweb</code>.
</p>

  <dl>
  <dt><a href='build'><code>build</code> Property</a></dt>
  <dd>The release build of KeymanWeb.</dd>
  </dl>

  <dl>
  <dt><a href='version'><code>version</code> Property</a></dt>
  <dd>The version of KeymanWeb.</dd>
  </dl>

  <dl>
  <dt><a href='initialized'><code>initialized</code> Property</a></dt>
  <dd>Keymanweb core module initialization state.</dd>
  </dl>

  <dl>
  <dt><a href='activatingUI'><code>activatingUI</code> Function</a></dt>
  <dd>Set an internal flag to notify KeymanWeb of change in UI activation state.</dd>
  </dl>

  <dl>
  <dt><a href='addEventListener'><code>addEventListener</code> Function</a></dt>
  <dd>Adds an event listener for user-handling of keymanweb events.</dd>
  </dl>

  <dl>
  <dt><a href='addHotKey'><code>addHotKey</code> Function</a></dt>
  <dd>Add hot key handler to array of document-level hotkeys triggered by key-up event.</dd>
  </dl>

  <dl>
  <dt><a href='addKeyboards'><code>addKeyboards</code> Function</a></dt>
  <dd>Adds keyboards to keymanweb.</dd>
  </dl>

  <dl>
  <dt><a href='attachToControl'><code>attachToControl</code> Function</a></dt>
  <dd>Attach KeymanWeb to HTML element (or IFrame).</dd>
  </dl>

  <dl>
  <dt><a href='detachFromControl'><code>detachFromControl</code> Function</a></dt>
  <dd>Detach KeymanWeb from HTML element (or IFrame).</dd>
  </dl>

  <dl>
  <dt><a href='focusLastActiveElement'><code>focusLastActiveElement</code> Function</a></dt>
  <dd>Restore the focus to the element active before input was moved to KeymanWeb.</dd>
  </dl>

  <dl>
  <dt><a href='getActiveKeyboard'><code>getActiveKeyboard</code> Function</a></dt>
  <dd>Get the ID (internal name) of the currently active keyboard.</dd>
  </dl>

  <dl>
  <dt><a href='getActiveLanguage'><code>getActiveLanguage</code> Function</a></dt>
  <dd>Get the language code for the currently selected language.</dd>
  </dl>
  
  <dl>
  <dt><a href='getKeyboard'><code>getKeyboard</code> Function</a></dt>
  <dd>Get keyboard meta data for the selected keyboard and language.</dd>
  </dl>

  <dl>
  <dt><a href='getKeyboards'><code>getKeyboards</code> Function</a></dt>
  <dd>Get details of currently installed keyboards.</dd>
  </dl>

  <dl>
  <dt><a href='getLastActiveElement'><code>getLastActiveElement</code> Function</a></dt>
  <dd>Return the last element activated before input was moved to KeymanWeb.</dd>
  </dl>

  <dl>
  <dt><a href='getSavedKeyboard'><code>getSavedKeyboard</code> Function</a></dt>
  <dd>Get the (internal) keyboard name and language code of the most recently active keyboard.</dd>
  </dl>

  <dl>
  <dt><a href='getUIState'><code>getUIState</code> Function</a></dt>
  <dd>Get the KeymanWeb user interface activation state.</dd>
  </dl>

  <dl>
  <dt><a href='init'><code>init</code> Function</a></dt>
  <dd>Sets license key, selects user interface, and other KeymanWeb Options.</dd>
  </dl>

  <dl>
  <dt><a href='isCJK'><code>isCJK</code> Function</a></dt>
  <dd>Test if a given keyboard or keyboard stub (or the current keyboard) is for Chinese, Japanese, or Korean.</dd>
  </dl>

  <dl>
  <dt><a href='moveToElement'><code>moveToElement</code> Function</a></dt>
  <dd>Move input focus to user specified element.</dd>
  </dl>

  <dl>
  <dt><a href='removeEventListener'><code>removeEventListener</code> Function</a></dt>
  <dd>Removes a user-defined event handler.</dd>
  </dl>

  <dl>
  <dt><a href='removeHotKey'><code>removeHotKey</code> Function</a></dt>
  <dd>Remove hotkey handler from document's list of hotkey handlers.</dd>
  </dl>

  <dl>
  <dt><a href='setActiveKeyboard'><code>setActiveKeyboard</code> Function</a></dt>
  <dd>Change the currently active keyboard.</dd>
  </dl>

  <dl>
  <dt><a href='setDefaultKeyboardForControl'><code>setDefaultKeyboardForControl</code> Function</a></dt>
  <dd>Associate control with specific keyboard, with optional user override.</dd>
  </dl>