<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

?>
<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>EON</em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-lg-10">
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="object_notation.php" class="btn btn-light">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light active">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

<div class="row">
  <div class="col">
  The <code>print</code> keyword prints the text to its right to the computer's output, usually a console or terminal.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('print "Hello World!"')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>do</code> keyword executes the commands in the object to it's right (usually a list of strings).
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('do ( print "Hello World!")
/* prints: 
Hello World!
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Procedures are labeled sets of commands that are executed when accessed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_var: "World"
printAll: do(
  print "Hello"
  print my_var
  print "!"
)
/* executing printAll prints: 
HelloWorld!
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>fn</code> keyword does the same thing as <code>do</code>, but after each execution it records the procedure's input and output 
  so that future calls to the procedure can skip execution for duplicate inputs.
  This increases program speed when a procedure is known to be deterministic like in mathematical functions.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('add5: fn print(in + 5)
add5 5
/* prints: 
10
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<p>It is idomatic to use camelCase to label procedures and snake_case to label objects.</p>
<p>Capitalized labels are Public and all other labels are private (similar to Golang)</p>

<div class="row">
  <div class="col">
    Creating a procedure with <code>:?</code> passes the input in to the procedure by a pointing reference instead of by copying it, which is what happens normally.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('print:? "Hello World!"')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if an object has a specified tag, which may return (and potentially execute) the <code>void</code> keyword.
    When <code>void</code> is executed it exits the current scope.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<tag1 tag2>.tag_3
// if yes, then execution continues
// if no, then the void keyword is returned')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if an object is a primitive or array.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('"string"/[]
// if yes, then execution continues
// if no, then the void keyword is returned')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if an object is a list.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<tag1 tag2>/{}
// if yes, then execution continues
// if no, then the void keyword is returned')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>if</code> keyword executes the commands in the object to its right until the <code>void</code> or <code>esc</code> keyword is called or execution of the object finishes.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('if(
  printAll
  print "Success!"
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>or</code> keyword works the same as the <code>if</code> keyword, but is only triggered if the preceding command's execution was interrupted by a void.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('if(
  void
  print "Success!"
)
or(
  print "Error!"
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    In addition to <code>if</code>, the <code>or</code> keyword can be used with all procedures and keywords whose execution might be interrupted by a <code>void</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('returnVoid
or(
  print "Success!"
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>esc</code> keyword immediately ends execution in the current <code>loop</code> (similarly to 'break' in other languages) and enables the <code>or</code> keyword.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('loop(
  if(
    esc
    print "Fail!"
  )
)
or(
  print "Loop Completed!"
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>loop</code> keyword repeatedly executes the commands in the object to its right until the <code>esc</code> keyword is called or the <code>next</code> keyword triggers another iteration.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('loop(
 printAll
 esc
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>next</code> keyword triggers another iteration of the loop without waiting until the current iteration of the loop has completed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('loop(
 print "This is an infinite loop"
 next
 esc
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>void</code> and <code>esc</code> keywords can be returned to be executed by the encapsulating command-list in order to conditionally exit a command-list (scope) or loop.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('loop(
  if(
    forceExitLoop // outputs void to exit the if
    print "Fail!"
  )
  or(
    out: do (void)
    print "Success!" // this is still executed 
// because the output is not retrieved until after 
// the or finishes executing or a void/esc has been used
  )
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    To loop through a list's objects use the <code>loop</code> interface. 
    In each iteration the current key and its value will be referenced by the reserved labels <code>key</code> and <code>val</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('list = [ "hello" "world" ]
list.loop(
  print key 
  print val
)
// prints "1hello2world"')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Nested loops are possible by specifying which object the <code>key</code> or <code>val</code> is referencing.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('list1 = [ "A" "B" ]
list2 = [ "I" "II"]
list1.loop(
  list2.loop(
    print list1.key
    print list1.val 
    print list2.val
    print " "
  )
)
// prints "1AI 1AII 2BI 2BII"')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Attempting to use an undefined label returns a <code>void</code> instead of an object.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('if(
  undefined
  print "Success!"
)
or(
  print "Error!"
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>,</code> operator concatenates two objects of the same type and merges their tags and labels. 
    The content of duplicate labels is combined into a list <code>{}</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('"Hello ","World"
// combines into "Hello World"
< tag1 label: "Hello" >,< tag2 label: "World" >
// combines into: 
// < tag1 tag2 label: {"Hello" "World"} >')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>init</code> keyword functions the same as <code>do</code>, except that it is only executed when its parent object is initialized or when a copy of the parent is initialized.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_object: <
  var: "Hello"
  message: do(
    print var
  )
(
  init (
    var: var,"!"
  )
)
my_object.message
// prints Hello!')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>dest</code> keyword functions the same as <code>do</code>, except that it is only executed when its parent object is destroyed or when a copy of the parent is destroyed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_object: <
  var: "Bye"
  message: do(
    print var
  )
(
  dest (
    var: var,"!"
  )
)
my_object.message
// prints Bye!')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>in</code> keyword is actually a reserved label to the object passed into a procedure.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('printName: do(
  print "Hi! My name is "
  print in
)
myName: "Jane"
printName myName
// prints Hi! My name is Jane')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>out</code> keyword is actually a reserved label to the object a procedure returns.
    It can be used to not only set the procedure's output, but to reference it within the procedure, and modify it prior to the end of the procedure.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('echo: do(
  out: in
  out: out,"!"
)
echo "Hello"
// returns "Hello!"')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>type</code> keyword creates a type (similar to a Golang interface) from the list of defined procedures for the specified tag.
    The <code>src</code> keyword accesses the object with the tag the type is implementing.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('type <str 
  echo: do(print src)
  ping: do(
    print src
    print in
  )
>
"Hello World".echo
"Hello World".ping "... and John."')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>has</code> interface returns <code>void</code> if the left object does not have the tags, key-value pairs, and body that are in the right object.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('bowl: [ "milk" "cereal" ]
cup: [ "cereal" "milk" ]
isBreakfast: do(
  if(
    in.has [ "milk" "cereal" ]
    print "yes" 
  )
  or(
    print "no"
  )
)
// prints yes')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>lib</code> keyword indicates that the code in the given file belongs to the named library.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('lib myLibrary')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>os</code> keyword is a reserved label that provides an interface with the host operating system's API similar to a terminal or CLI.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('os.cd "../project/"
os.git.commit <a m "commit message"
// in Powershell this is equivalent to:
// cd ../project/
// git commit -am "commit message" ')?></code></pre>
    </code>
  </div>
</div>
<br>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="object_notation.php" class="btn btn-light">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light active">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>