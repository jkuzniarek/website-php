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
    <a href="object_notation.php" class="btn btn-light active">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

    <!-- <p>
      <strong>Extended Object Notation</strong> 
      (EON) is a data description notation and programming language designed as a more user friendly alternative to XML with a JSON-like syntax.
    </p> -->
    

    <div class="row">
      <div class="col">
        Comments are notes for people to read and are ignored by the eon parser.
      </div>
      <div class="col">
<pre class="code"><code><?=htmlspecialchars('// single line comment
/* multi line comment */')?></code></pre>
        </code>
      </div>
    </div>
    <br>

<div class="row">
  <div class="col">
    All values are some type of object and all objects are derived from an empty object.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<>')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    All lists are pointer vectors and all lists are derived from an empty list.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('{}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    All primitives are arrays, all arrays are byte vectors and all arrays are derived from an empty array.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('[]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Objects can be labeled to more easily identify them.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_object: {}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Lists can contain a list of multiple types of whitespace delimited primitives or objects.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_list: { 1 2 "A" "B" "Hello" {3 4}}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Arrays can contain only one type of fixed size data.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('zip_code: [1 2 3 4 5]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The type of an arrays data may be specified.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('string: [<char>]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The length of an arrays data may be specified, but if not then it will be assumed to only encompass the specified data.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('zip_code: 5[<int>]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Since lists are not fixed size data they cannot be placed in an array.
    However lists can be initialized as a numerically indexed struct which cannot be extended and may therefore be placed in an array.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('struct: ~{1 "John" "Doe"}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Character strings and integers strings are automatically implemented as arrays.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('string: "string"
// equivalent to <str ["s" "t" "r" "i" "n" "g"]
integer: 511
// equivalent to <int [255 1]
// equivalent to <int16 [255 1]
// same number but different type as <int32 [255 1 0]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    If not specified, strings default to ascii, but ascii and unicode strings can both be implemented with their shorthand.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('string1: "string"
string2: <str ["string"]
unicode_string: <ustr ["string"]
// the first 2 strings become ascii strings')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
  strings can be enclosed in <code>''</code>, <code>""</code>, <code>``</code>, and <code><<>></code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars("{
  'string'".'
  "string" 
  `string` 
  <<string>>
}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Strings enclosed in quotation marks can escape the quotation marks by doubling them up.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars("{
  'strings''s'".'
  "string""s" 
  `string``s`
}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Additionally, a list of <code>\n</code> delimited strings may be created from the characters between <code>()</code>.
    The <code>\n</code> delimiters are preserved as the last character in each string.
    This is useful for preformatted text and uncompiled code saved as text.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('commands: (
  print "this"
  print "that"
) 
// the first item in "commands" is
// the string \'print "this"\'')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    An object's items can be labelled.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('< label: item>')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Objects within an object can be labeled or listed.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('< label: labeled_object {listed objects}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    All objects can have multiple tags, which are labels without objects.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('< tag1 tag2>')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    If there is no space between the opening angle bracket <code><</code> and the first tag, then the first tag is actually the object's type.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<str []
// this is an empty string ""')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    An object's tags and labeled objects must always be in the object's head before the body.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<type tag label: labeled_object {listed objects}
< tag [1 2]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The body must always appear last.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<type tag labels:objects body>
<type [1 2]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Labels can be fixed (like a const variable) so that they return void (or an error or null value depending on reader implementation) if deletion or any change of the labeled object is attempted.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('< label: data label2:: data>')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Labels can be created using a copy of another label's value.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('< label: data label2: label>')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Labels can be pointing references to the objects referenced by other labels, 
    but will return void (or an error or null value depending on reader implementation) if the referenced object has been deleted before attempting to access it.
    Binding references are prohibited from referencing objects in child scopes, and attempting to do so will result in an interpreter/compiler error.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<label: data label2:? label>')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Labels can be binding references to the objects referenced by other labels, 
    but will return void (or an error or null value depending on reader implementation) if deletion of the referenced object is attempted while a binding reference to it still exists.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('<label: data label2:& label>')?></code></pre>
    </code>
  </div>
</div>
<br>

<h4>Additional Example Objects</h4>
<pre class="code"><code><?=htmlspecialchars('[
  [0 0]
  [1 1]
  [2 2]
]')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('{
  [0 0]
  [1 1]
  [2 2]
  {"three" "four"}
  ["four" "five"]
  {"five" 5}
}')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('{
  < first_name: "John"
    last_name: "Doe"
    orders_placed: 4500
  >
  < first_name: "Jane"
    last_name: "Doe"
    orders_placed: 2300
  >
}')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('<book 
  reference 
  nonfiction 
  philosophy
  author: "Splato"
  title: "For Me"
  table_of_contents: {
    <row section title:"The Beginning" page: 1>
    <row section title:"The Middle" page: 50>
    <row section title:"The End" page: 100>
  }
{
  <page section_start heading: "The Beginning" (
    In the beginning there was nothing...
    ... which is why there must be something. Otherwise everything would be ...
    ... however thats impossible, so instead we must conclude that ...
  )
  <page "something something something">
  <page "blah blah blah blah">
}')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('<employee name: "Michael Scott" title: "Regional Manager"
{
  <employee name: "Dwight Scrute" title: "Assistant to the Regional Mgr">
  <employee name: "Jim Halpert" 
    title: "Head of Sales" 
    top_customers: {
      <customer first_name: "John" last_name: "Doe" orders_placed: 4500 >
      <customer first_name: "Jane" last_name: "Doe" orders_placed: 2300 >
    }
  {
    <employee name: "Andy Bernard" 
      title: "Sales Rep"
      top_customers: {
        <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
        <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >
      }
    >
    <employee name: "Phyllis Lapin" 
      title:"Sales Rep"
      top_customers: {
        <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
        <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >
      }
    >
  }
  <employee name: "Pam Beesly" title: "Office Administrator">
}')?></code></pre>
<br>


    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="object_notation.php" class="btn btn-light active">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>