<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 7: Testing the Keyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_6.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_8.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_keyboard_7"></a>Step 7: Testing the Keyboard</h3></div></div></div><h4><a name="id776653"></a>Compiling the Keyboard</h4><p>
    Before we can test the keyboard, we must compile it. Choose <span class="guimenu">Keyboard</span>,
    <span class="guimenuitem">Compile Keyboard</span> or press F7 to compile the keyboard. The
    Message window will display the results of the compilation; if you have no
    typing errors, the keyboard should compile successfully.
  </p><p>
    If there are any mistakes, an error message will be displayed in the Message
    window, which will tell you the line on which the error occurred.
  </p><h4><a name="id776671"></a>Compiling the Keyboard</h4><p>
    After compiling the keyboard successfully, we can start testing it. Choose
    <span class="guimenu">Keyboard</span>, <span class="guimenuitem">Start Test</span> or press F9 to begin testing. The
    Keyboard test window will appear.
  </p><p>
    Now we test that all the rules operate as expected. To test the rules, we type
    the keystrokes that will give us the output; for example, we can type a quote
    (') followed by one of A, E, I, O, U, or Y to test the uppercase acute-accented
    vowels. Similarly we can test the other accents, and C-cedilla (Ç) and
    the angled quotes. If the rules are correct, all this should work as we wanted.
  </p><p>
    Testing the rules in isolation like this will show if the rules are correct or
    not, but won't show other possible errors that might occur in everyday usage
    of the keyboard. For example, look at what happens if you type the following
    quote:
  </p><pre class="programlisting">
'Alors Alice demanda, "O est ma chatte?"'
    </pre><p>
    As you can see, it comes out incorrectly as:
  </p><pre class="programlisting">
Álors Alice demanda, Ö est ma chatte?"'
    </pre><p>
    The problem occurs when we have a word in quotes that begins with a vowel: the
    keyboard will convert it to an accented vowel. We will need to come up with a
    solution to this problem.
  </p><p>
    <a class="xref" href="tutorial_keyboard_8.php" title="Step 8: Deadkeys">Step 8: Deadkeys</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_6.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_8.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 6: Stores, 'any', and 'index' </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 8: Deadkeys</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
