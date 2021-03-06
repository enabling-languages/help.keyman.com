<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2 class="content-in-app">Getting Started</h2>
<h2 class="content-online">Keyman for Android</h2>

<p class="content-online"><a href='../version-history'>Version history</a></p>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking our
  // desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  Keyman for Android lets you type in over 600 languages on Android mobiles and tablets.
  To get started, here are some helpful hints:
</p>
<table>
  <tr>
    <th colspan="2">Keyboard Keys <br/>(Keyboard Present)</th>
  </tr>
  <tr>
    <td>
      <img class="phone" id="install-keyboard-ap" src="<?= cdn("img/app/13.0/globe-ap.png")?>">
      <img class="tablet" id="install-keyboard-at" src="<?= cdn("img/app/13.0/globe-at.png")?>">
    </td>
    <td>Select another language/keyboard</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="hide-keyboard-ap" src="<?= cdn("img/app/13.0/hide-keyboard-ap.png")?>">
      <img class="tablet" id="hide-keyboard-at" src="<?= cdn("img/app/13.0/hide-keyboard-at.png")?>">
    </td>
    <td>Hide the keyboard</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="backspace-ap" src="<?= cdn("img/app/13.0/backspace-ap.png")?>">
      <img class="tablet" id="backspace-at" src="<?= cdn("img/app/13.0/backspace-at.png")?>">
    </td>
    <td>Backspace</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="return-ap" src="<?= cdn("img/app/13.0/return-ap.png")?>">
      <img class="tablet" id="return-at" src="<?= cdn("img/app/13.0/return-at.png")?>">
    </td>
    <td>Return</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="shift-ap" src="<?= cdn("img/app/13.0/shift-ap.png")?>">
      <img class="tablet" id="shift-at" src="<?= cdn("img/app/13.0/shift-at.png")?>">
    </td>
    <td>Shift key. Long press this key to access the CTRL, ALT and CTRL ALT keys
      (which can access additional key layers)
    </td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="touch-hold-ap" src="<?= cdn("img/app/13.0/touch-hold-ap.png")?>">
      <img class="tablet" id="touch-hold-at" src="<?= cdn("img/app/13.0/touch-hold-at.png")?>">
    </td>
    <td>Keys with a small dot in the top right corner indicate a long press key. Access
      further functionality by long pressing the key
    </td>
  </tr>
  <tr>
    <th colspan="2" id="toolbar-ap">Toolbar Icons</th>
  </tr>
  <tr>
    <td><img id="share-ap" src="<?= cdn("img/app/13.0/share-a.png")?>"></td>
    <td>Share your text via Mail, Text, or Twitter</td>
  </tr>
  <tr>
    <td><img id="browser-ap" src="<?= cdn("img/app/13.0/browser-a.png")?>"></td>
    <td>Open the Keyman Browser to use the web in your language</td>
  </tr>
  <tr>
    <td><img id="menu-ap" src="<?= cdn("img/app/13.0/menu-icon-a.png")?>"></td>
    <td>Open the menu for additional options</td>
  </tr>
  <tr>
    <td><img id="font-size-ap" src="<?= cdn("img/app/13.0/font-size-a.png")?>"></td>
    <td>Adjust the font size</td>
  </tr>
  <tr>
    <td><img id="delete-ap" src="<?= cdn("img/app/13.0/delete-a.png")?>"></td>
    <td>Delete all current text</td>
  </tr>
  <tr>
    <td><img id="info-ap" src="<?= cdn("img/app/13.0/info-a.png")?>"></td>
    <td>Load this help page</td>
  </tr>
  <tr>
    <td><img id="get-started-ap" src="<?= cdn("img/app/13.0/get-started-a.png")?>"></td>
    <td>Open the initial setup screen</td>
  </tr>
  <tr>
    <td><img id="settings-ap" src="<?= cdn("img/app/13.0/settings-a.png")?>"></td>
    <td>Open the Keyman Settings screen</td>
  </tr>
  <tr>
    <td><img id="cloud-download-ap" src="<?= cdn("img/app/13.0/ic_cloud_download.png")?>"></td>
    <td>Update available to download for keyboard / dictionary</td>
  </tr>
</table>

<h2>Accessing Keyboard Help</h2>
<p>
  Step 1) Open the keyboard list by touching the globe key.
</p>
<p>
  <img class="phone" id="keyboard-help1-ap" src="<?= cdn("img/app/13.0/globe-ap.png")?>">
  <img class="tablet" id="keyboard-help1-at" src="<?= cdn("img/app/13.0/globe-at.png")?>">
</p>
<br/>
<p>
  Step 2) Touch the info icon for your keyboard.
</p>
<p><img id="keyboard-help2-ap" src="<?= cdn("img/app/13.0/info-a-gray.png")?>"></p>
<br/>

<?php
include('./_shared/help_links.php');
?>

<h2>Integrate Keyman with your App or Website</h2>
<p>
  If you are interested in learning how Keyman can be integrated into your own app or
  website, visit <a href="https://keyman.com/engine/">keyman.com/engine</a>
</p>

<h2>Further Help</h2>
<p>
  For more information on Keyman, visit <a href="https://keyman.com">keyman.com</a>
  <br/><br/>
  For more information on Keyman for Android, visit <a href="https://keyman.com/android">keyman.com/android</a>
</p>
