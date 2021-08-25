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
    <a href="notation.php" class="btn btn-light">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light active">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>


<div class="row">
  <div class="col">
    This program returns the classic "Hello World" message to whatever process called the EON program.
    Whatever value is assigned to the <code>out</code> keyword when the program ends execution will be output by the program.
    <code>out</code> has a default value of <code><></code> until reassigned.
    Each complete EON program must be enclosed within <code>&lt;eon &gt;</code> delimiters to indicate it's bounds.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  out: "Hello World!"
  // returns "Hello World!"
>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The key-value pairs in a card are accessible from within the card's index and body (here, a list of commands).
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  message: "Hello World!"
  name: "Hello Bob!"
  /( 
    out: message
    out:+ name)
  /* 
    prints: 
    Hello World!Hello Bob! */ >')?></code></pre>
  </div>
</div>
<br>

<p>Commands in a command list are always preceded by either a new line character or a <code>=</code> character.</p>
<p>Commands in a command list can be spread onto multiple lines by placing a <code>//</code> before the next new line character.</p>
<br>

<div class="row">
  <div class="col">
    The <code>fn</code> keyword converts the expression list on it's right into an executable process.
    Processes are named expression lists that are executed when accessed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  printAll: fn <
    my_var: "World"
    /(
      out: "Hello"
      out:+ my_var
      out:+ "!" )>
  (=out: printAll)
  /* prints: 
  HelloWorld! */ >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>cfn</code> keyword is a type of process like <code>fn</code>, but after each execution the process's input and output 
  are cached so that future calls to the process can skip execution for duplicate inputs.
  This increases program speed when a process is known to be deterministic like in mathematical functions.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  add5: cfn (
    out: sum {in 5})
  /(=out: add5 5)
  /* prints: 
  10 */ >')?></code></pre>
  </div>
</div>
<br>

<p>It is idiomatic to use camelCase to name processes and snake_case to name cards.</p>
<p>Capitalized keys are Public and all other keys are private (similar to Golang)</p>
<br>

<div class="row">
  <div class="col">
    Creating a process with <code>:?</code> passes the input in to the process by a pointing reference instead of by copying it, which is the default behavior.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  printHello:? fn( 
    out: "Hello "
    out:+ in )>')?></code></pre>
  </div>
</div>
<br>

<p>
EON does not have null values in the way that most other programming languages do. 
Instead other constructs are used depending on the particular context and desired behavior.
Empty, but initialized, values return <code><></code>, <code>{}</code>, <code>[]</code>, <code>()</code>, <code>""</code>, or <code>0</code>. 
Attempting to access an undefined value returns a <code>void</code> card.
When the <code>void</code> expression is typically executed it immediately exits the current expression list <code>()</code>.
</p>
<p>
  The best way to understand how the <code>void</code> keyword works is to think of it as a function whose output triggers a context dependent behavior.
  It takes the card input into it, if any, and makes it the body of a returned <code>&lt;void &gt;</code> card.
  Within an executing expression list, any expression that evaluates to a card of type <code>void</code>, 
  sets <code>out</code> to the void card's body and ends execution of the expression list.
  With no input it returns an empty but typed card <code>&lt;void &gt;</code>.
  This behavior enables void to fill the roles that break, null, throw, and false keywords in other languages serve, 
  as well as enabling custom error handling and treatment of errors as data/cards. 
</p>
<br>

<div class="row">
  <div class="col">
    Tags can be added to an existing card's index by assigning them an empty card <code><></code> and removed by assigning them <code>void</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  card: < tag1 >
  /(
    card.tag2: <>
    card.tag1: void)
  // now the card is < tag2 >
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if a card has a specified tag, which may result in a <code>void</code> card if it does not.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  (=<tag1 tag2>.tag_3)
  // if yes, then execution continues
  // if no, then a void card results
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if a card is a primitive or array.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  (= "string"/[])
  // if yes, then execution continues
  // if no, then a void card results
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    You can check if a card is a list.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  (=<tag1 tag2>/{})
  // if yes, then execution continues
  // if no, then a void card results
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>try</code> keyword executes the commands in the list to its right in order until the <code>void</code> keyword is called or execution of the card finishes.
    If the expression list is unordered (executed in parallel) then all expressions in the list are always executed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  try(
    printAll
    out: "Success!")>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>try</code> keyword can emulate the behavior of if-elseif-else patterns by instead passing a list of expression lists to attempt.
    Each successive expression list is only executed if the prior's execution was interrupted by a void.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  try(
    (
      void
      out: "Success!")
    (
      out: "Error!"))>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>esc</code> keyword immediately ends execution in the current <code>loop</code> (similarly to 'break' in other languages).
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  try(
    (=loop(
        esc
        out: "Fail!"))
    (=out: "Loop Completed!"))>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>loop</code> keyword repeatedly executes the commands in the list to its right until the <code>esc</code> keyword is called or the <code>next</code> keyword triggers another iteration.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  loop(
    printAll
    esc)>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>next</code> keyword triggers another iteration of the loop without waiting until the current iteration of the loop has completed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  loop(
    out: "This is an infinite loop"
    next
    esc)>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>void</code> and <code>esc</code> keywords can be returned to be executed by the encapsulating command-list in order to conditionally exit a command-list (scope) or loop.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  loop
    try(
      (
        forceExitLoop // outputs void to exit the if
        out: "Fail!")
      (
        out: fn (void)
        out: "Success!" // this is still executed 
        // because the output is not retrieved until after 
        // the or finishes executing or a void/esc has been used
        ))>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    To loop through a list's cards use the <code>loop</code> interface. 
    In each iteration the current key and its value will be referenced by the reserved names <code>key</code> and <code>val</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  list: [ "hello" "world" ]
  /(=list.loop(
      out:+ key 
      out:+ val))
    // prints "1hello2world"
    >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Nested loops are possible by specifying which card the <code>key</code> or <code>val</code> is referencing.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  list1: [ "A" "B" ]
  list2: [ "I" "II"]
  /(
    list1.loop(
      list2.loop(
        out:+ list1.key
        out:+ list1.val 
        out:+ list2.val
        out:+ " "))
    // prints "1AI 1AII 2BI 2BII"
    >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Attempting to access an undefined name returns a <code>void</code> card.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  try(
    (
      undefined
      out: "Success!")
    (
      out: "Error!"))>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>$</code> operator concatenates the bodies of a list of cards of the same type and merges their indexes. 
    The content of duplicate keys is combined into a list <code>{}</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  (
    ${"Hello " "World"}
    // combines into "Hello World"
    ${ 
      < tag1 key1: "Hello">
      < tag2 key1: "World">}
    // combines into: 
    // < tag1 tag2 
    //   key1: {"Hello" "World"}
    // >
    )>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>ini</code> keyword is a reserved index that is only executed after its parent card is initialized or when a copy of the parent is initialized.
    Changing a card's type does not trigger <code>ini</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  my_card: <
    var: "Hello"
    ini: fn(
      var: ${var "!"})
    message: fn(
      out: var)>
  out: my_card.message
  // prints Hello!
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>del</code> keyword is a reserved index that is only executed immediately before its parent card is deleted or when a copy of the parent is deleted.
  Changing a card's type does not trigger <code>del</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  my_card: <
    var: "Bye"
    del: (
      var: ${var "!"})
    message: fn(
      out: var)>
  out: my_card.message
  // prints Bye!
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>in</code> keyword is actually a reserved name to the card passed into a process.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  printName: fn(
    out: ${"Hi! My name is " in})
  myName: "Jane"
  out: printName myName
  // prints Hi! My name is Jane
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>out</code> keyword is actually a reserved name to the card a process returns.
    It can be used to not only set the process's output, but to reference it within the process, and modify it prior to the end of the process.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  echo: fn(
    out: in
    out: ${out "!"})
  out: echo "Hello"
  // returns "Hello!"
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>type</code> keyword creates a type interface (essentially a library of values and functions only accessible by the given type of card).
    This enables defining and consolidating class-like behaviors and values for cards based on their type.
    The <code>src</code> keyword accesses the card to the left of the process being called.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  (
    type <str 
      echo: fn(=out: src)
      ping: fn(=out: ${src in})>
    "Hello World".echo
    "Hello World".ping "... and John.")>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>has</code> keyword returns <code>void</code> if the left card does not have all the same type, key-value pairs, and body that are in the right card.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  bowl: [ "milk" "cereal" ]
  cup: [ "cereal" "milk" ]
  isBreakfast: fn(
    try(
      (
        in.has [ "milk" "cereal" ]
        out: "yes")
      (=out: "no")))
  // prints yes
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>os</code> keyword provides an interface with the host operating system's API similar to a terminal or CLI.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  os: import "os"
  /(
    os.cd "../project/"
    os.git.commit < a m /"commit message">)
    // in Powershell this is equivalent to:
    // cd ../project/
    // git commit -am "commit message" 
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Key-value pairs can be made volatile (like in C) so that they are ignored by a compiler's optimizer.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon 
  key1: "data" 
  key2: "volatile data"
  /(=vol key2)>')?></code></pre>
  </div>
</div>
<br>

<!-- <div class="row">
  <div class="col">
    The <code>cw</code> keyword returns the code weight of the input statement list. 
    Code weight is the maximum number of statements that may be executed irrespective of what a procedure does.
    Statements within loops are counted once.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  cw loop(
    try(
      (
        forceExitLoop 
        out: "Fail!")
      (
        out: fn (void)
        out: "Success!"))) // returns 4
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The <code>mass</code> keyword returns the code mass of the input card. 
    Code mass is the size in bytes of a card as is.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  mass "hello" // returns 6
  >')?></code></pre>
  </div>
</div>
<br> -->

<div class="row">
  <div class="col">
  The <code>use</code> keyword is used to set the namespace that will be prepended to each subsequent identifier until ns is changed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  (
    use "os."
    cd "../project/"
    // prepends "os." to cd
    use "" // "exits" namespace
    )>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>lib</code> keyword indicates that the code in the given file belongs to the named library.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  lib myLibrary>')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>import</code> keyword opens the designated .eon library and returns it as a card.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  myLib: import "./libraries/myLibrary.eon"
  // imported code is now available using myLib 
  // as library name. ie: myLib.printName("Bob")
  >')?></code></pre>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  The <code>insert</code> keyword opens the designated .eon file and directly inserts it into the current scope and executes it.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<eon
  insert "./helloWorld.eon"
  // prints Hello World!
  >')?></code></pre>
  </div>
</div>
<br>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="notation.php" class="btn btn-light">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light active">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>