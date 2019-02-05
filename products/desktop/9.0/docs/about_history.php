<?php
  require_once('includes/template.php');

  head([
    'title' => "Version History"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Version History</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="about_requirements.php">Prev</a> </td><th width="60%" align="center">Chapter 1. About Keyman Desktop</th><td width="20%" align="right"> <a accesskey="n" href="about_credits.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="about_history">Version History</h2></div></div></div><h3><a name="id578576"></a>Keyman Desktop 9.0 Release Notes</h3><p>Keyman Desktop 9.0.523.0</p><div class="itemizedlist"><ul type="disc"><li>Keyboard hotkey toggles are not working in 9.0 (I5086)</li></ul></div><p>Keyman Desktop 9.0.522.0</p><div class="itemizedlist"><ul type="disc"><li>Improve compatibility with Firefox 42 and Internet Explorer 11 (I4933)</li><li>Fix hang when closing Keyman if Windows compatibility flag is incorrectly set (I5018)</li></ul></div><p>Keyman Desktop 9.0.521.0</p><div class="itemizedlist"><ul type="disc"><li>Updated digital certificate for Windows 8, 8.1 and 10 (I4978)</li></ul></div><p>Keyman Desktop 9.0.519.0</p><div class="itemizedlist"><ul type="disc"><li>Keyboard options do not work always work correctly because they are set twice while processing (I4978)</li><li>Update requirements in Help for Windows 10 (I4984)</li></ul></div><p>Keyman Desktop 9.0.518.0</p><div class="itemizedlist"><ul type="disc"><li>OEM products now have a cleaner menu display with indented keyboards and languages (I4920)</li></ul></div><p>Keyman Desktop 9.0.516.0</p><div class="itemizedlist"><ul type="disc"><li>Added: Note on why "Select keyboard layout for all applications" is disabled on Win 8.1+ (I4871)</li></ul></div><p>Keyman Desktop 9.0.514.0</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Inconsistent display of panels through Desktop (I4851)</li></ul></div><p>Keyman Desktop 9.0.513.0</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Keyman Desktop title in OSK has wrong grey background (I4849)</li></ul></div><p>Keyman Desktop 9.0.512.0</p><div class="itemizedlist"><ul type="disc"><li>Fixed: If no baselayout is specified by the user, default to en-US (kbdus.dll) (I4786)</li><li>Fixed: Shift keys would sometimes 'stick' in Mozilla Firefox  (I4793)</li><li>Fixed: Log reported modifier state as well as Keyman current modifier state in debug logs (I4843)</li><li>Fixed: FileMakerPro 14 causes crash in Keyman Engine (I4846)</li></ul></div><p>Keyman Desktop 9.0.510.0</p><div class="itemizedlist"><ul type="disc"><li>Keyman needs to rebuild its language profiles if they are inadvertently deleted (I4773)</li></ul></div><p>Keyman Desktop 9.0.507.0</p><div class="itemizedlist"><ul type="disc"><li>Keyman loses focus sometimes when switching keyboards using the menu (I4731)</li></ul></div><p>Keyman Desktop 9.0.506.0</p><div class="itemizedlist"><ul type="disc"><li>Language profile change notification while Keyman menu is visible sometimes causes a crash (I4715, I4683, I4591, I4577, I4541, I4472, I4431)</li><li>Improve reporting on registry errors (I4565, I4657)</li></ul></div><p>Keyman Desktop 9.0.503.0</p><div class="itemizedlist"><ul type="disc"><li>MSKLC keyboards do not get correct name in Configuration Hotkeys tab (I4712)</li><li>MSKLC keyboards are not shown in the Keyman menu (I4713)</li><li>Keyboard and language hotkeys don't always work (I4714)</li></ul></div><p>Keyman Desktop 9.0.494.0</p><div class="itemizedlist"><ul type="disc"><li>Fixed hotkeys not always working consistently (I4674)</li><li>Fixed read of invalid registry setting on some computers (I4660)</li></ul></div><p>Keyman Desktop 9.0.493.0</p><div class="itemizedlist"><ul type="disc"><li>Add more detailed keyboard diagnostics (I4659)</li><li>Add Keep in Touch screen (I4658)</li></ul></div><p>Keyman Desktop 9.0.492.0</p><div class="itemizedlist"><ul type="disc"><li>On Screen keyboard translates keys wrongly for European keyboards (I4650)</li><li>Mnemonic layout recompiler maps AltGr+# rather than \ on UK layouts (I4651)</li></ul></div><p>Keyman Desktop 9.0.491.0</p><div class="itemizedlist"><ul type="disc"><li>Add logging for registration of keyboards for hotkey matching (I4648)</li></ul></div><p>Keyman Desktop 9.0.490.0</p><div class="itemizedlist"><ul type="disc"><li>Add 'Enter License Key' link to splash screen (I4645)</li><li>Fix crash on startup on some computers with multiple Keyman products installed (I4624, I4519, I4602, I4640, I4633, I4636, I4637, I4638, I4639)</li></ul></div><p>Keyman Desktop 9.0.489.0</p><div class="itemizedlist"><ul type="disc"><li>Backspace key was not working in Logos (I4642)</li></ul></div><p>Keyman Desktop 9.0.488.0</p><div class="itemizedlist"><ul type="disc"><li>Keyman could crash silently on exit due to null hotkeys being addressed (I4623)</li></ul></div><p>Keyman Desktop 9.0.487.0</p><div class="itemizedlist"><ul type="disc"><li>.kmx installs upgraded from earlier versions were placed in the wrong folder (I4623)</li></ul></div><p>Keyman Desktop 9.0.485.0</p><div class="itemizedlist"><ul type="disc"><li>keymanimport.log was generated incorrectly as unicode strings in an ansi file (I4617)</li><li>Keyman crashed when trying to recompile a missing mnemonic layout (I4615)</li></ul></div><p>Keyman Desktop 9.0.484.0</p><p>No changes.</p><p>Keyman Desktop 9.0.483.0</p><div class="itemizedlist"><ul type="disc"><li>Support install of keyboard against fallback locales (I4607)</li><li>Support single keyboard buttons on OSK toolbar for OEM products (I4606)</li></ul></div><p>Keyman Desktop 9.0.482.0</p><div class="itemizedlist"><ul type="disc"><li>Keyman installer did not show EULA when bundled with a keyboard (I4598)</li><li>Keyman Configuration enabled keyboards when OK clicked even if Keyman not running (I4382)</li></ul></div><p>Keyman Desktop 9.0.481.0</p><div class="itemizedlist"><ul type="disc"><li>If a computer does not have US keyboard installed, then AltGr rules can go wrong (I4592)</li><li>The keyboard usage page can appear outside the OSK in some situations (I4593)</li></ul></div><p>Keyman Desktop 9.0.480.0</p><div class="itemizedlist"><ul type="disc"><li>Spacebar results in incorrect output for subsequent letters on some keyboards (I4585)</li><li>If Ctrl+Alt simulates RAlt is on, then Ctrl+Alt rules don't work at all (I4551, I4583)</li><li>Add option to treat base keyboard deadkey as plain keys (I4552)</li><li>Switch for all languages not disabled on Win8 upgrades (I4576)</li><li>Support if(&amp;baselayout) with all of the ISO names (I4588)</li><li>Keyman fails to install shortcuts for keyboard documentation correctly (I4590)</li></ul></div><p>Keyman Desktop 9.0.479.0</p><div class="itemizedlist"><ul type="disc"><li>Solution for output of Enter and Tab keys for some keyboards (I4575)</li></ul></div><p>Keyman Desktop 9.0.478.0</p><div class="itemizedlist"><ul type="disc"><li>Solution for output of Enter and Tab keys for some keyboards (I4575)</li></ul></div><p>Keyman Desktop 9.0.477.0</p><div class="itemizedlist"><ul type="disc"><li>Test solution for output of Enter and Tab keys for some keyboards (I4562)</li></ul></div><p>Keyman Desktop 9.0.476.0</p><div class="itemizedlist"><ul type="disc"><li>Hotkey switching resulted in stuck Ctrl,Alt,Shift keys in some apps (I4511)</li><li>On Win 8, Keyman keyboards appear as "Unavailable Input Method" in Control Panel - mitigation only, not fixed (I4531)</li><li>Fixed: when Alt is down, release of Ctrl, Shift is not detectable within Keyman in some languages (I4548)</li><li>Mnemonic layout recompiler did not translate Lctrl Ralt for deadkeys correctly (I4549)</li><li>Logical flaw in mnemonic layout recompiler meant that AltGr base keys were never processed (I4550)</li><li>Upgrade to 476 or later requires recompile of all mnemonic layouts (I4553)</li><li>Keyboards without an icon must specify a default icon when registering to prevent control panel crashing (I4555)</li><li>Attached files were not shown when loading diag files (I4559)</li><li>Binary data in diagnostics was not streamed correctly (I4560)</li></ul></div><p>Keyman Desktop 9.0.475.0</p><div class="itemizedlist"><ul type="disc"><li>Language hotkeys associated with non-primary keyboards do not trigger language change (I4516)</li><li>Switch for all apps is not disabled in Win 8 (I4515)</li></ul></div><p>Keyman Desktop 9.0.474.0</p><div class="itemizedlist"><ul type="disc"><li>Crash when saving OSK to file, changing keyboard midstream [CrashID:keyman.exe_9.0.473.0_2C59B75E_EAccessViolation] (I4487)</li><li>The character map is not falling back to system fonts well when Code2000 missing (I4488)</li><li>Crash calling TSF [CrashID:kmshell.exe_9.0.473.0_2C45D42D_EOleSysError] (I4494)</li><li>Damaged package causes crash when trying to uninstall [CrashID:kmshell.exe_9.0.473.0_2C6B80C4_EOleException] (I4495)</li></ul></div><p>Keyman Desktop 9.0.473.0</p><div class="itemizedlist"><ul type="disc"><li>Verify that Internet Explorer 9.0 or later is present at install time (I4470)</li><li>Fix crash showing keyboard menu when product details are missing (I4458)</li><li>Fix crash when menu popup is dynamically resized by system (I4429)</li><li>Setup bootstrapper now handles upgrade scenarios with a prompt (I4460)</li><li>Upgrade dialog showed wrong version of Keyman Desktop (I4445)</li><li>Keyman Desktop Update dialog showed broken Tavultesoft image (I4456)</li><li>API fix: Keyman had a mismatch between KEYBOARDINFO and INTKEYBOARDINFO (I4462)</li><li>API fix: Keyman_BuildKeyboardList was including keyboards installed but with no profiles (I4461)</li></ul></div><p>Keyman Desktop 9.0.472.0</p><div class="itemizedlist"><ul type="disc"><li>Chinese keyboard was not working correctly (I4452)</li><li>Language hotkeys were not working (I4451)</li></ul></div><p>Keyman Desktop 9.0.471.0</p><div class="itemizedlist"><ul type="disc"><li>Browser emulation control for kmshell breaks downlevel versions of Keyman (I4436)</li><li>Crash if Keyman Engine 7 or 8-based product installed when starting Keyman Desktop 9 (I4421)</li><li>Show Send to Tavultesoft button in Diagnostics (I4439)</li></ul></div><p>Keyman Desktop 9.0.470.0</p><div class="itemizedlist"><ul type="disc"><li>Download Keyboard dialog had broken link (I4419)</li></ul></div><p>Keyman Desktop 9.0.469.0</p><div class="itemizedlist"><ul type="disc"><li>Download Keyboard dialog does not display correctly (I4414)</li><li>OSK does not show underlying characters if base keyboard is not loaded (I4415)</li></ul></div><p>Keyman Desktop 9.0.467.0</p><div class="itemizedlist"><ul type="disc"><li>Character Map needs to insert characters using SendInput (I4412)</li><li>Manual Activate dialog is misformatted (I4408)</li><li>Add HKCU FEATURE_BROWSER_EMULATION 9000 for kmshell.exe (I4400)</li><li>Character map allows Ctrl+Click to insert character (I4411)</li></ul></div><p>Keyman Desktop 9.0.466.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>OK and Cancel buttons are no longer missing on Proxy dialog (I4387)</li></ul></div><p>Keyman Desktop 9.0.465.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Added HKCU FEATURE_BROWSER_EMULATION 9000 for kmshell.exe (I4400)</li></ul></div><p>Keyman Desktop 9.0.464.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Added clean user interface selection for associated language in Free Edition (I4395)</li><li>Keyman Desktop Free Edition polish (I4393)</li><li>When configuration run from Splash and license key entered, splash didn't refresh (I4396)</li><li>Get Started got impatient and showed nag too quickly on start (I4397)</li><li>Hotkeys didn't show on keyboard list (I4398)</li><li>HTTP download now reports progress more cleanly (I4399)</li></ul></div><p>Keyman Desktop 9.0.463.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Initial Free Edition changes (I4390)</li></ul></div><p>Keyman Desktop 9.0.462.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Unticked keyboards in Keyman Configuration are not now shown in Windows Languages (I4376)</li><li>Keyman keyboards are no longer visible in Windows Languages when Keyman is not running (I4381)</li></ul></div><p>Keyman Desktop 9.0.461.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Rapid typing in legacy mode no longer breaks (regression from 9.0.460.0) (I4378)</li></ul></div><p>Keyman Desktop 9.0.460.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Icon size in tool tray is now correct when using large fonts (I4314)</li><li>Keyboard Upgrade from 6.0, 7.0, 8.0 now supports keyboards installed for Current User, fonts and Start Menu entries (I4324)</li><li>When On Screen Keyboard opens, if Keyman is off then icon now shows correctly (I4360)</li><li>On Screen Keyboard now always shows correct base layout when keyboard active (I4363)</li><li>Installer now enforces Windows 7 or later (I4366)</li><li>Deadkeys are now working with Microsoft Word in TSF-aware mode (I4370)</li><li>WOW64 is now tested consistently in all locations (I4374)</li><li>Add registry flag 'deep tsf integration' to allow us to disable enhanced integration with TSF-aware applications (I4375)</li></ul></div><p>Keyman Desktop 9.0.459.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Deadkeys are now working correctly in all cases in Wordpad and other TSF-aware applications (except Word) (I4278)</li><li>All .ico formats do not load correctly in icon conversion for keyboard layouts (I4317)</li><li>Alt+LeftShift hotkey is now set on clean install (I4318)</li><li>If Keyman is not running, selecting a Keyman layout in Windows will no longer have any effect (I4325)</li><li>Keyboard and interface hotkeys are now working (I4326)</li><li>Deadkeys are now working correctly with mnemonic layouts (I4353, I4327)</li><li>AltGr keys are now working correctly in enhanced integration mode (I4351)</li><li>If splash screen is minimized, it can now be restored (I4356)</li><li>Splash screen buy links now go to correct version of Keyman (I4357)</li><li>COM registration updated for new interfaces in Keyman 9 (I4358)</li><li>OSK now shows correct base keyboard and refreshes when switching languages (I4359)</li></ul></div><p>Keyman Desktop 9.0.458.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Getting Started window gave instructions that were not valid for KM9 (I3674)</li><li>Script error dialog was appearing behind splash dialog (regression from I3710) (I3730)</li><li>Balloon tip and About page had wrong product version (I4311)</li><li>Keyboard icons are now converted to 32BPP RGBA on install for Windows 8 compatibility (I4316)</li></ul></div><p>Keyman Desktop 9.0.457.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Keys that have rules but are not matched due to context did not generate output (I4290)</li><li>Fixed: Additional minor bug fixes (I4302)</li></ul></div><p>Keyman Desktop 9.0.456.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Crash in Keyman Configuration (I4296)</li><li>Fixed: Upgrade of keyboards failed to register in local machine context (I4297)</li><li>Fixed: Old TSF addin remained registered when upgrading (I4298)</li><li>Fixed: Keyman-installed Windows languages needed to be removed when upgrading (I4299)</li></ul></div><p>Keyman Desktop 9.0.455.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Added: Support for upgrading configuration and keyboards from 8.0 to 9.0 (I4292, I4293)</li></ul></div><p>Keyman Desktop 9.0.454.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Switch from Keyman to Keyman keyboard caused loop in global language switch (I4277)</li><li>Fixed: Keyboard switching and legacy support edge case scenarios (I4285, I4286, I4287, I4288)</li></ul></div><p>Keyman Desktop 9.0.453.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Shift states were not being preserved correctly (I3605)</li><li>Fixed: Opening User Interface Language menu causes crash [CrashID:kmshell.exe_9.0.447.0_script_TfrmMain_0] (I4199)</li><li>Fixed: Deadkeys only work in first 61 characters of document (I4266)</li><li>Fixed: If Keyboard usage refreshes during exit, Keyman crashes [CrashID:keyman.exe_9.0.452.0_2C5FB0CD_EAccessViolation] (I4268)</li><li>Fixed: Switch language for all applications is not working (I4271)</li><li>Fixed: TIP only outputs first 127 characters of a rule result (I4272)</li><li>Fixed: kmtip does not work if already active before KM starts (I4274)</li></ul></div><p>Keyman Desktop 9.0.452.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Keyman installed keyboards do not seem to appear in Windows Language control panel in Win 8 (I4202)</li><li>Fixed: Icons do not show background correctly in lang switch window and Win 8 languages controls (also I4316) (I4204)</li><li>Fixed: Crash in Keyman Configuration [kmshell.exe_9.0.451.0_script_TfrmMain_0] (I4251)</li><li>Fixed: kmtip install does not register Win 8 support features (I4252)</li><li>Fixed: TSF deadkeys do not function correctly (I4262)</li><li>Fixed: Test for text editor running fails (I4265)</li></ul></div><p>Keyman Desktop 9.0.451.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: Keyman Configuration crashed on first run due to koKeymanUniscribeManager reference (I4250)</li></ul></div><p>Keyman Desktop 9.0.450.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Fixed: If kmtip CKMTipTextService::Activate fails, cleanup (I3706)</li><li>Minor: Refactor kmxfile utility functions (I3757)</li><li>Added: Removed all legacy keyboard management Win32 API calls and use only TSF (I4220)</li><li>Fixed: Crash when OSK closed/reopened without dismissing hint window [CrashID:keyman.exe_9.0.449.0_2C405C5D_EInvalidPointer] (I4242)</li></ul></div><p>Keyman Desktop 9.0.449.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Opening font helper or keyboard usage from Keyman menu on Win 8 still shows HTML outside window (I4225)</li><li>Excmagic.debug left scattered around program file directories after uninstall (I4218)</li></ul></div><p>Keyman Desktop 9.0.448.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Shift + Arrows do not select text (only move caret) in Win 8 when Keyman keyboard is active (I4201)</li><li>Keyman TIP should use ITfTextInputProcessorEx (I4216)</li><li>Keyman leaks an Internet Explorer window handle (I4214)</li><li>Help dialog appears below OSK and is inaccessible (I4209)</li><li>Font helper and Keyboard usage appear outside frame in Win 8 (I4208)</li><li>Shift states still not working with unprocessed keys in V9 (I4128)</li><li>Activate/Purchase dialogs are incomplete and the Buy Modules button doesn't work (I4090)</li></ul></div><p>Keyman Desktop 9.0.447.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Exit Keyman hint appears to be blank on Win8? (I4187)</li><li>Pressing Enter in install keyboard dialog gives error about admin req (I4172)</li><li>Help Contents link does not work from Keyman menu (I3993)</li><li>Help window Help and Help on Keyboard links don't work (I3676)</li><li>Base Keyboard dialog has wrong style of buttons (I4184)</li><li>Use TTempFileManager for all temporary files (I4195)</li><li>Lang switch window shows wrong selection with Alt+LeftShift when TIP is active (I4191)</li><li>keyman.exe seems to be missing icon (I3769)</li><li>Lang switch window shifts on first view (I4190)</li><li>wm_kmmoreposting must be refactored for TIP work as it is not sequential (I4196)</li><li>Avoid interactions with full-screen RDP (I4197)</li><li>mcompile logs should be stored in diag folder (I4174)</li><li>Uninstalling a keyboard leaves the mnemonic recompiled layouts behind (I4173)</li></ul></div><p>Keyman Desktop 9.0.446.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Keyman Engine installer does not include mcompile.exe (I4171)</li></ul></div><p>Keyman Desktop 9.0.445.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Mnemonic layouts should be recompiled to positional based on user-selected base keyboard (I4169)</li><li>Console execute in utilexecute.pas needs a temp copy of buffer to avoid write access violations (I4170)</li><li>Shift states still not working with unprocessed keys in V9 (I4128)</li></ul></div><p>Keyman Desktop 9.0.444.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Keyman Desktop installer does not install x64 TIP (I4161)</li></ul></div><p>Keyman Desktop 9.0.443.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li></ul></div><p>Keyman Desktop 9.0.442.0 (beta release)</p><div class="itemizedlist"><ul type="disc"><li>Add keyboard version information to Keyman Configuration (Tweak) (I4136)</li></ul></div><h3><a name="id579729"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="about_whatsnew.php" title="What's New">What's New</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="about_requirements.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="about.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="about_credits.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">System Requirements </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Credits</td></tr></table></div>
