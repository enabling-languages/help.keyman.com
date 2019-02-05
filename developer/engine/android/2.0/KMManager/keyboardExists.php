<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'keyboardExists';
    $param1 = 'context';
    $param2 = 'keyboardID';
    $param3 = 'languageID';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>String %s</var>, <var>String %s</var>)', $class, $method, $param1, $param2, $param3);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1><?php echo $class.'.'.$method.'()' ?></h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns whether the specified keyboard exists in keyboards list.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>ID of the keyboard.</dd>
<dt><code><?php echo $param3 ?></code></dt>
<dd>ID of the associated language.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard exists in keyboards list, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to check if the keyboard with given keyboard ID and language ID exists in keyboards list.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    boolean keyboardExists = KMManager.keyboardExists(this, "tamil99m", "tam");
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getCurrentKeyboardIndex.php"><code>getCurrentKeyboardIndex()</code></a></li>
 <li><a href="getCurrentKeyboardInfo.php"><code>getCurrentKeyboardInfo()</code></a></li>
 <li><a href="getKeyboardIndex.php"><code>getKeyboardIndex()</code></a></li>
 <li><a href="getKeyboardInfo.php"><code>getKeyboardInfo()</code></a></li>
 <li><a href="getKeyboardsList.php"><code>getKeyboardsList()</code></a></li>
</ul>
