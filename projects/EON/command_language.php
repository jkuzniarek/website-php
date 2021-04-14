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
  The <code>ex</code> keyword converts the commands in the expression list on it's right into an executable process.
  The key-value pairs in the parent scope are accessible from within the list of expressions.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('message: "Hello World!"
name: "Hello Bob!";
ex( 
  print message
  print name
)
/* prints: 
Hello World!Hello Bob!
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Processes are named sets of commands that are executed when accessed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_var: "World"
printAll: ex(
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
  The <code>fx</code> keyword is a type of process like <code>ex</code>, but after each execution it records the process's input and output 
  so that future calls to the process can skip execution for duplicate inputs.
  This increases program speed when a process is known to be deterministic like in mathematical functions.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('add5: fx print(in + 5)
add5 5
/* prints: 
10
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<p>It is idiomatic to use camelCase to name processes and snake_case to name objects.</p>
<p>Capitalized keys are Public and all other keys are private (similar to Golang)</p>
<br>

<div class="row">
  <div class="col">
    Creating a process with <code>:?</code> passes the input in to the process by a pointing reference instead of by copying it, which is the default behavior.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('printHello:? ex( 
  print "Hello "
  print in 
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<p>
EON does not have null values in the way that most other programming languages do. 
Instead other constructs are used depending on the particular context and desired behavior.
Empty, but defined, values return <code><></code>, <code>{}</code>, <code>[]</code>, <code>()</code>, <code>""</code>, or <code>0</code>. 
Attempting to access an undefined value returns a function <code>void</code>.
When the <code>void</code> keyword is executed it immediately exits the current scope <code>()</code>.
</p>
<br>

<div class="row">
  <div class="col">
    Tags can be added to an existing object's index by pairing them to an empty object <code><></code> and removed by pairing them with <code>void</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('object: < tag1 >
object.tag2: <>
object.tag1: void
// now the object is < tag2 >')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if an object has a specified tag, which may return (and potentially execute) the <code>void</code> keyword.
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
<pre class="code"><code><?=htmlspecialchars('"string",[]
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
<pre class="code"><code><?=htmlspecialchars('<tag1 tag2>,{}
// if yes, then execution continues
// if no, then the void keyword is returned')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>try</code> keyword executes the commands in the list to its right in order until the <code>void</code> or <code>esc</code> keyword is called or execution of the object finishes.
    If the expression list is unordered (executed in parallel) then all expressions in the list are always executed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('try(
  printAll
  print "Success!"
)')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>or</code> keyword works the same as the <code>try</code> keyword, but is only triggered if the preceding command's execution was interrupted by a void.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('try(
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
    In addition to <code>try</code>, the <code>or</code> keyword can be used with all processes and keywords whose execution might be interrupted by a <code>void</code>.
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
  try(
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
    The <code>loop</code> keyword repeatedly executes the commands in the list to its right until the <code>esc</code> keyword is called or the <code>next</code> keyword triggers another iteration.
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
  try(
    forceExitLoop // outputs void to exit the if
    print "Fail!"
  )
  or(
    out: ex (void)
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
    In each iteration the current key and its value will be referenced by the reserved names <code>key</code> and <code>val</code>.
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
    Attempting to access an undefined name returns a <code>void</code> instead of an object.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('try(
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
    The <code>$</code> operator concatenates a list of objects of the same type and merges their indexes. 
    The content of duplicate keys is combined into a list <code>{}</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('${"Hello " "World"}
// combines into "Hello World"
${
  < tag1 key1: "Hello">
  < tag2 key1: "World">
}
// combines into: 
// < tag1 tag2 
//   key1: {"Hello" "World"}
// >')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>init</code> keyword is a reserved index that is only executed after its parent object is initialized or when a copy of the parent is initialized.
    Changing an object's type does not trigger <code>init</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_object: <
  var: "Hello"
  init: ex(
    var: ${var "!"}
  )
  message: ex(
    print var
  )
>
my_object.message
// prints Hello!')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>dest</code> keyword is a reserved index that is only executed immediately before its parent object is destroyed or when a copy of the parent is destroyed.
  Changing an object's type does not trigger <code>dest</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_object: <
  var: "Bye"
  dest: (
    var: ${var "!"}
  )
  message: ex(
    print var
  )
>
my_object.message
// prints Bye!')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>in</code> keyword is actually a reserved name to the object passed into a process.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('printName: ex(
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
    The <code>out</code> keyword is actually a reserved name to the object a process returns.
    It can be used to not only set the process's output, but to reference it within the process, and modify it prior to the end of the process.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('echo: ex(
  out: in
  out: ${out "!"}
)
echo "Hello"
// returns "Hello!"')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>type</code> keyword creates a type interface (similar to a Golang interface) from the list of defined processes for the specified type.
    This enables defining class-like behaviors for objects based on their type.
    The <code>src</code> keyword accesses the object to the left of the process being called.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('type <str 
  echo: ex(print src)
  ping: ex(
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
    The <code>has</code> keyword returns <code>void</code> if the left object does not have all the same type, key-value pairs, and body that are in the right object.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('bowl: [ "milk" "cereal" ]
cup: [ "cereal" "milk" ]
isBreakfast: ex(
  try(
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
  The <code>import</code> keyword opens the designated .eon library and returns it as an object.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('myLib: import "./libraries/myLibrary.eon"
// imported code is now available using myLib 
// as library name. ie: myLib.printName("Bob")')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>insert</code> keyword opens the designated .eon file and directly inserts it into the current scope and executes it.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('insert "./helloWorld.eon"
// prints Hello World!')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>os</code> library provides an interface with the host operating system's API similar to a terminal or CLI.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('os: import "os"
os.cd "../project/"
os.git.commit < a m; "commit message"
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