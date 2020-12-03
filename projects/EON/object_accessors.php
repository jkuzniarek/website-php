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
    <a href="object_accessors.php" class="btn btn-light active">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

    <pre class="code"><code><?=htmlspecialchars('tree: <employee red_team name: "Michael Scott" title: "Regional Manager"
{
  <employee red_team name: "Dwight Scrute" title: "Assistant to the Regional Mgr">
  <employee blue_team name: "Jim Halpert" 
    title: "Head of Sales" 
    top_customers: {
      <customer first_name: "John" last_name: "Doe" orders_placed: 4500 >
      <customer first_name: "Jane" last_name: "Doe" orders_placed: 2300 >
    }
  {
    <employee red_team name: "Andy Bernard" 
      title: "Sales Rep"
      top_customers: {
        <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
        <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >
      }
    >
    <employee blue_team name: "Phyllis Lapin" 
      title:"Sales Rep"
      top_customers: {
        <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
        <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >
      }
    >
  }
  <employee blue_team name: "Pam Beesly" title: "Office Administrator">
}')?></code></pre>
<p>
  The object accessor examples below use the above object labeled <code>tree</code>.
</p>
<hr>

<div class="row">
  <div class="col">
    Key-values in the head are accessed using <code>.</code> followed by their name.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree.name
/* returns:
"Michael Scott"
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    All of the keys/tags in an object can be retrieved as a list using <code>*</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree* 
/* returns: 
{ "red_team" "name" "title" }
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Multiple key-values in an object can be grouped into a list using <code>.</code> followed by a list of the keys.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree.{"name" "title"} 
/* returns: 
{ "Michael Scott" "Regional Manager" }
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    An object's listed items are accessed using <code>/</code> followed by the item index.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/1 
/* returns: 
{employee 
  red_team
  name: "Dwight Scrute" 
  title: "Assistant to the Regional Mgr"
}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The count of items in a list can be retrieved by accessing the zero index.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('list: {"hello" "world"}
list/0 // returns: 2
<>/0 // returns: 0')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The body of an object can be retrieved without any tags by using the <code>/</code> accessor.
    If the object is a primitive this will convert the primitive to a byte array.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('integer: 511
integer/
// returns [255 1]')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The entire list that is the body of the example object can be retrieved like so.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/ 
/* returns the entire list: 
{
  <employee red_team name: "Dwight Scrute" title: "Ass. Regional Mgr">
  <employee blue_team name: "Jim Halpert" 
    title: "Head of Sales" 
    top_customers: {
      <customer first_name: "John" last_name: "Doe" orders_placed: 4500 >
      <customer first_name: "Jane" last_name: "Doe" orders_placed: 2300 >
    }
  {
    <employee red_team name: "Andy Bernard" 
      title: "Sales Rep"
      top_customers: {
        <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
        <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >
      }
    >
    <employee blue_team name: "Phyllis Lapin" 
      title:"Sales Rep"
      top_customers: {
        <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
        <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >
      }
    >
  }
  <employee blue_team name: "Pam Beesly" title: "Office Administrator">
}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Tags in an object are checked using <code>.</code> followed by their name.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree.red_team
/*
does not return void
(other reader implementations may use 
true/false with this example returning true)
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    An object's type can be retrieved using <code>#</code>.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree#
/* returns:
"employee"
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Lists of objects can be filtered by type into a smaller list of objects using <code>#</code> followed by the type name.
    So to see a list of the names of jim's employees:
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/2#employee.name 
/* returns: 
{"Andy Bernard" "Phyllis Lapin"}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    A whole list of objects in an object can be selected and filtered by tag/key into a list of smaller objects 
    using <code>@</code> followed by each the key/tag/index to be selected from each object.
    So to see a list of jim's employees' top customer lists:
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/2@top_customers
/* returns: 
{
  {
    <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
    <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >
  }
  {
    <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
    <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >
  }
}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    A list of lists can be merged into a single list using <code>^</code>.
    So to see a single list of the top customers of Jim's employees:
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/2@top_customers^
/* returns: 
{
  <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
  <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >
  <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
  <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >
}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="object_notation.php" class="btn btn-light">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light active">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>