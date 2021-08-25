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
    <a href="accessors.php" class="btn btn-light active">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

    <pre class="code"><code><?=htmlspecialchars('tree: <employee red_team name: "Michael Scott" title: "Regional Manager"
  /{
    <employee red_team name: "Dwight Scrute" title: "Assistant to the Regional Mgr">
    <employee blue_team name: "Jim Halpert" 
      title: "Head of Sales" 
      top_customers: {
        <customer first_name: "John" last_name: "Doe" orders_placed: 4500 >
        <customer first_name: "Jane" last_name: "Doe" orders_placed: 2300 >}
      /{
        <employee red_team name: "Andy Bernard" 
          title: "Sales Rep"
          top_customers: {
            <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
            <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >}>
        <employee blue_team name: "Phyllis Lapin" 
          title:"Sales Rep"
          top_customers: {
            <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
            <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >}>
      }>
    <employee blue_team name: "Pam Beesly" title: "Office Administrator">
  }>')?></code></pre>
<p>
  The card accessor examples below use the above card named <code>tree</code>.
</p>
<hr>

<div class="row">
  <div class="col">
    Key-value pairs in the index are accessed using <code>.</code> followed by their name.
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
    All of the keys/tags in an card can be retrieved as a list using <code>*</code>.
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
    An accessor can target multiple keys, types, or indexes in an card by grouping them into a list using the accessor followed by a list of the keys.
    This is comparible to a logical OR.
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
    A card's listed items are accessed using <code>/</code> followed by the item index. 
    Numerical indexing starts at 1 <strong>not 0</strong> because indexes <strong>are not</strong> offsets.
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/1 
/* returns: 
<employee 
  red_team
  name: "Dwight Scrute" 
  title: "Assistant to the Regional Mgr">
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    The body of a card can be retrieved without any tags by using the <code>/</code> accessor.
    If the card is a primitive this will convert the primitive to a byte array.
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
    The entire list that is the body of the example card can be retrieved like so.
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
    /{
      <employee red_team name: "Andy Bernard" 
        title: "Sales Rep"
        top_customers: {
          <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
          <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >
        }>
      <employee blue_team name: "Phyllis Lapin" 
        title:"Sales Rep"
        top_customers: {
          <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
          <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >
        }>
    }>
  <employee blue_team name: "Pam Beesly" title: "Office Administrator">}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    Tags in a card are checked using <code>.</code> followed by their name.
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
    A card's type can be retrieved using <code>#</code>.
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
    Lists of cards can be filtered by type into a smaller list of cards using <code>#</code> followed by the type name.
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
    A whole list of cards in a card can be selected and filtered by tag/key into a list of smaller cards 
    using <code>@</code> followed by each the key/tag/index to be selected from each card.
    So to see a list of jim's employees' top customer lists:
  </div>
  <div class="col">
<pre class="code"><code><?=htmlspecialchars('tree/2@top_customers
/* returns: 
{
  {
    <customer first_name: "Sam" last_name: "Winchester" orders_placed: 1000 >
    <customer first_name: "Dean" last_name: "Winchester" orders_placed: 5 >}
  {
    <customer first_name: "Hansel" last_name: "Schmidt" orders_placed: 500 >
    <customer first_name: "Gretel" last_name: "Schmidt" orders_placed: 630 >}}
*/')?></code></pre>
    </code>
  </div>
</div>
<br>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="notation.php" class="btn btn-light">Notation</a>
    <a href="accessors.php" class="btn btn-light active">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>