<?php
require_once('includes/template.php');

head([
  'title' => "Release History"
]);
?>
<div class="navheader">
  <table width="100%" summary="Navigation header">
    <tr>
      <th colspan="3" align="center">Release History</th>
    </tr>
    <tr>
      <td width="20%" align="left"><a accesskey="p" href="reference_kmw_KeymanWeb_DefaultKeyboardHelp.php">Prev</a> 
      </td>
      <th width="60%" align="center">KeymanWeb 1.0</th>
      <td width="20%" align="right"> <a accesskey="n" href="../2.0/">Next</a></td>
    </tr>
  </table>
  <hr>
</div>
<div class="section" lang="en">
  <div class="titlepage">
    <div>
      <div><h3 class="title" id="reference_kmw__version">Release History</h3></div>
    </div>
  </div>
  <p>
    Version: 1.0
  </p>
  <table>
    <tbody>
    <tr>
      <th>Issue #</th>
      <th>Description</th>
      <th>Severity</th>
    </tr>
    <tr>
      <td colspan="3">Build 112</td>
    </tr>
    <tr>
      <td>I1204</td>
      <td>Styles fail to apply correctly when KeymanWeb active in rich text editor</td>
      <td>5</td>
    </tr>
    <tr>
      <td>I1295</td>
      <td>KeymanWeb fails to attach to some IFRAMEs</td>
      <td>8</td>
    </tr>
    <tr>
      <td>I1296</td>
      <td>Add flag ShowInterfaceRight property to show KeymanWeb UI to right of control</td>
      <td>5</td>
    </tr>
    <tr>
      <td>I1297</td>
      <td>Add FocusLastActiveElement and GetLastActiveElement functions</td>
      <td>5</td>
    </tr>
    <tr>
      <td>I1298</td>
      <td>Add onfocuscontrol and onblurcontrol events</td>
      <td>5</td>
    </tr>
    <tr>
      <td>I1299</td>
      <td>Add UK underlying keyboard layout</td>
      <td>5</td>
    </tr>
    <tr>
      <td>I1300</td>
      <td>Add support for language names for KMW keyboards</td>
      <td>5</td>
    </tr>
    <tr>
      <td colspan="3">Build 111</td>
    </tr>
    <tr>
      <td>I1206</td>
      <td>KeymanWeb inserts nbsp after first character when replacing selection in rich text editor</td>
      <td>5</td>
    </tr>
    <tr>
      <td colspan="3">Build 110</td>
    </tr>
    <tr>
      <td>I1207</td>
      <td>KeymanWeb cursor jumps to start of control when selecting controls</td>
      <td>7</td>
    </tr>
    <tr>
      <td colspan="3">Build 109</td>
    </tr>
    <tr>
      <td>I1223</td>
      <td>KeymanWeb keyboard disappears on first click</td>
      <td>9</td>
    </tr>
    <tr>
      <td>I1224</td>
      <td>OSK displays wrongly in IE6</td>
      <td>8</td>
    </tr>
    <tr>
      <td>I1226</td>
      <td>handle issues when keymanweb loading on ethiopic.keymankeyboards.com</td>
      <td>9</td>
    </tr>
    <tr>
      <td>I845</td>
      <td>EuroLatin keyboard not updating context for diacritics using OSK</td>
      <td>6</td>
    </tr>
    <tr>
      <td colspan="3">Build 106</td>
    </tr>
    <tr>
      <td>I948</td>
      <td>KeymanWeb OSK can go off the edge of the screen for EuroLatin</td>
      <td>3</td>
    </tr>
    <tr>
      <td>I950</td>
      <td>Dragging OSK does not work for EuroLatin in IE</td>
      <td>6</td>
    </tr>
    <tr>
      <td>I951</td>
      <td>Resizing OSK does not work in IE at all</td>
      <td>8</td>
    </tr>
    <tr>
      <td>I952</td>
      <td>Enter/exit control and OSK does not redisplay if pinned</td>
      <td>8</td>
    </tr>
    <tr>
      <td>I953</td>
      <td>Icons in toolbar of KMW OSK should move down 1px</td>
      <td>1</td>
    </tr>
    <tr>
      <td>I954</td>
      <td>Ensure that onshowhelp is called when entering a control and OSK is pinned</td>
      <td>5</td>
    </tr>
    <tr>
      <td colspan="3">Build 103</td>
    </tr>
    <tr>
      <td>I946</td>
      <td>JavaScript error when loading EuroLatin</td>
      <td>7</td>
    </tr>
    <tr>
      <td>I947</td>
      <td>Clicking on OSK boxes in EuroLatin is not reliable</td>
      <td>7</td>
    </tr>
    <tr>
      <td colspan="3">Build 100</td>
    </tr>
    <tr>
      <td>I782</td>
      <td>OSK click gives VK code not character</td>
      <td>8</td>
    </tr>
    <tr>
      <td colspan="3">Build 91</td>
    </tr>
    <tr>
      <td>I774</td>
      <td>Ctrl+Shift+Alt on OSK does not display</td>
      <td>3</td>
    </tr>
    <tr>
      <td>I776</td>
      <td>OSK should be draggable</td>
      <td>5</td>
    </tr>
    <tr>
      <td colspan="3">Build 84</td>
    </tr>
    <tr>
      <td>I736</td>
      <td>KMW can delete characters when mixing unmatched typing and clicking on OSK</td>
      <td>7</td>
    </tr>
    <tr>
      <td colspan="3">Build 83</td>
    </tr>
    <tr>
      <td>I695</td>
      <td>OSK in FF 2.0 can give incorrect output in some situations</td>
      <td>9</td>
    </tr>
    <tr>
      <td>I696</td>
      <td>Can select characters in OSK in IE - needs UNSELECTABLE tag</td>
      <td>6</td>
    </tr>
    <tr>
      <td>I697</td>
      <td>OSK has a 2 pixel square displayed at top left</td>
      <td>3</td>
    </tr>
    <tr>
      <td>I700</td>
      <td>OSK cursor is not always arrow, making it harder to use</td>
      <td>2</td>
    </tr>
    <tr>
      <td colspan="3">Build 82</td>
    </tr>
    <tr>
      <td></td>
      <td>Fixed XSS access denied with IFRAMEs that do not belong to the site where KMW is instantiated.</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Fixed bug with on screen keyboard where shift keys could reset cursor position on IE.</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Fixed bug where CKeymanWeb was renamed to "f" introduced in build 81 (potential name conflict)</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3">Build 81</td>
    </tr>
    <tr>
      <td></td>
      <td>Add AttachToControl function</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3">Build 74</td>
    </tr>
    <tr>
      <td></td>
      <td>Fixed a bug with deadkeys and the visual keyboard with some keyboard layouts (reported by Lee Pearce)</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3">Build 73</td>
    </tr>
    <tr>
      <td></td>
      <td>Fixed some of the punctuation keys on the on-screen visual keyboard which were not generating the correct
        output.
      </td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3">Build 68</td>
    </tr>
    <tr>
      <td></td>
      <td>First public release</td>
      <td></td>
    </tr>
    </tbody>
  </table>
</div>
<div class="navfooter">
  <hr>
  <table width="100%" summary="Navigation footer">
    <tr>
      <td width="40%" align="left"><a accesskey="p" href="reference_kmw_KeymanWeb_DefaultKeyboardHelp.php">Prev</a> 
      </td>
      <td width="20%" align="center"><a accesskey="u" href="reference_kmw_index.php">Up</a></td>
      <td width="40%" align="right"> <a accesskey="n" href="../2.0/">Next</a></td>
    </tr>
    <tr>
      <td width="40%" align="left" valign="top">Variable: KeymanWeb_DefaultKeyboardHelp </td>
      <td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td>
      <td width="40%" align="right" valign="top"> KeymanWeb 2.0</td>
    </tr>
  </table>
</div>
