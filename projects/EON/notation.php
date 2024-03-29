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
    <a href="notation.php" class="btn btn-light active">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

    

    <div class="row">
      <div class="col">
        Comments are notes for humans to read and are ignored by the parser.
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
    All cards are indexed data structures (map or trie when size > 256) and all cards are derived from an empty card <code>{}</code>.
  </div>
  <div class="col">
    All lists are linked lists and all lists are derived from an empty list <code>[]</code>.
  </div>
  <div class="col">
    All primitive values are arrays, all arrays are byte arrays, and all arrays are derived from an empty array <code>[:]</code>.
  </div>
</div>
<br>
<!-- Lists are normally linked-lists unless they are fixed (const) in which case they are pointer arrays-->

<div class="row">
  <div class="col">
    Cards can be assigned to a key to more easily identify them.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_card: {}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Lists can contain multiple types of whitespace delimited cards and values.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('my_list: [ 1 2 "A" "B" "Hello" [3 4]]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    An ordered list of commands may be created from the characters between <code>(- )</code> or <code>(= )</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('commands: (-
  print "this"
  print "that") 
// the first item in "commands" is
// the string \'print "this"\'')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    If executed, the commands between <code>(- )</code> will be executed serially in the listed order. 
    In contrast, the commands between <code>(= )</code> will be evaluated concurrently as permitted by the chip architecture. 
    Program execution does not move on from the list until all commands have been evaluated.
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Arrays can contain only one type of fixed size data.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('zip_code: [:1 2 3 4 5]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The type of an array's data may be specified.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('string: char /[:]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The length of an array's data may be specified, but if not then it will be assumed to only encompass the specified data.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('zip_code: int5 /[:]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Since lists are not fixed size data they cannot be placed in an array.
    However lists can be initialized as a struct which cannot be extended and may therefore be placed in an array of similarly structured elements.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('struct: {: 1 "John" "Doe"}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Character strings and integer strings are automatically implemented as arrays.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('string: "string"
// equivalent to str /[:"s" "t" "r" "i" "n" "g"]
integer: 511
// equivalent to int /[:255 1]')?></code></pre>
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
string2: str /"string"
unicode_string: ustr /"string"
// the first 2 strings become ascii strings')?></code></pre>
    </code>
  </div>
</div>
<br>
<!-- implement type casting shown above by using the type-init pattern  -->

<div class="row">
  <div class="col">
  Strings can be enclosed in <code>''</code>, <code>""</code>, <code>``</code>, and <code><<>></code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars("[
  'string'".'
  "string" 
  `string` 
  <<string>> ]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Strings enclosed in quotation marks can escape the quotation marks by doubling them up.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars("[
  'strings''s'".'
  "string""s" 
  `string``s` ]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    If not specified, numbers with decimals points default to the <code>dec</code> type, but <code>float</code> and <code>double</code> types can both also be implemented by specifying their type.
    The <code>dec</code> type is implemented using a byte array like a string, where each byte is an int representing 2 digits. 
    Unlike the <code>int</code> type, <code>dec</code>, <code>float</code>, and <code>double</code> numbers may be either positive or negative.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('number1: 12.34
number2: dec /12.34
float_number: float /12.34
double_number: double /12.34
// the first 2 numbers become decimal types
// the third becomes a floating point number
// the fourth becomes a double')?></code></pre>
    </code>
  </div>
</div>
<br>
<!-- implement type casting shown above by using the type-init pattern  -->

<div class="row">
  <div class="col">
    Keys in a card's index that are not paired with a value are also referred to as tags.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('type{ tag1 tag2 }')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The body must always appear last.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('type{ tag keys:values /body}
int /[:1 2]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Key-value pairs can be fixed (like a const variable) so that they return void (or an error or null value depending on reader implementation) if deletion or any change to the pair is attempted.
    <!-- lists that are made const become a pointer array -->
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('{ key1: "data" key2:: "constant data"}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Key-value pairs can be created using a copy of another key's value.
    <!-- regular keys/labels are technically owning references, but creating a new key from an old one makes a copy of the referenced data instead of referencing the original-->
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('{ key1: data key2: key1}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Keys can be path references to the cards referenced by other keys, 
    but will return void (or an error or null value depending on reader implementation) if the referenced card has been deleted before attempting to access it.
    <!-- labels using path references record the designated path to the card instead of a pointer to the card. 
    this is slower but enables examining cards that may already be deleted -->
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('{key1: data key2:? key1}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Keys can be binding references to the cards referenced by other keys, 
    but will return void (or an error or null value depending on reader implementation) if deletion of the referenced card is attempted while a binding reference to it still exists.
    Binding references are prohibited from referencing cards in child scopes, and attempting to do so will result in an interpreter/compiler error.
    <!-- labels using binding references record a pointer to the card.
    all cards have an additional internal reference count field which is incremented by new binding references and decremented when binding references are deleted/transferred -->
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('{key1: data key2:& key1}')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Keys can specify a list or array of one type of references, by placing the keys in question in a list or array.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('{key1: data1 key2: data2 key3:& [key1 key2] }')?></code></pre>
    </code>
  </div>
</div>
<br>

<h4>Additional Example Data</h4>
<pre class="code"><code><?=htmlspecialchars('[:
  [:0 0]
  [:1 1]
  [:2 2]]')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('[
  [:0 0]
  [:1 1]
  [:2 2]
  ["three" "four"]
  [:"four" "five"]
  ["five" 5]]')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('[
  { first_name: "John"
    last_name: "Doe"
    orders_placed: 4500}
  { first_name: "Jane"
    last_name: "Doe"
    orders_placed: 2300}]')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('book{ 
  reference 
  nonfiction 
  philosophy
  author: "Splato"
  title: "For Me"
  table_of_contents: [
    row{ section title:"The Beginning" page: 1}
    row{ section title:"The Middle" page: 50}
    row{ section title:"The End" page: 100}]
  /[
  page{ section_start heading: "The Beginning" /[
    "In the beginning there was nothing..."
    "... which is why there must be something. Otherwise everything would be ..."
    "... however thats impossible, so instead we must conclude that ..."]
  page "something something something"
  page "blah blah blah blah" }')?></code></pre>
<br>
<pre class="code"><code><?=htmlspecialchars('employee{ name: "Michael Scott" title: "Regional Manager"
/[
  employee{ name: "Dwight Scrute" title: "Assistant to the Regional Mgr"}
  employee{ name: "Jim Halpert" 
    title: "Head of Sales" 
    top_customers: [
      customer{ first_name: "John" last_name: "Doe" orders_placed: 4500 }
      customer{ first_name: "Jane" last_name: "Doe" orders_placed: 2300 }]
    /[
      employee{ name: "Andy Bernard" 
        title: "Sales Rep"
        top_customers: [
          customer{ first_name: "Sam" last_name: "Winchester" orders_placed: 1000} 
          customer{ first_name: "Dean" last_name: "Winchester" orders_placed: 5 }]}
      employee{ name: "Phyllis Lapin" 
        title:"Sales Rep"
        top_customers: [
          customer{ first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 }
          customer{ first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 }]}
    ]}
  employee{ name: "Pam Beesly" title: "Office Administrator"}]}')?></code></pre>
<br>


    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="notation.php" class="btn btn-light active">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>