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
    <a href="introduction.php" class="btn btn-light active">Introduction</a>
    <a href="notation.php" class="btn btn-light">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

    <p>
      <strong>Extended Organizing Notation</strong> 
      (EON) is a data structure notation and programming language designed as a more user friendly alternative to XML with a JSON-like syntax.
    </p>
    
    <p>
      Despite being a markup language XML's versatility cannot be denied. 
      Not only is it still utilized throughout multiple domains of programming, but its child language HTML is just as, if not more, widespread and successful.
      However when given the option programmers almost always elect to use JSON instead, even though it is not quite as flexible as XML.
      As a web developer I have made this choice on numerous occasions, and aside from the fact that JSON is inherent to JavaScript I strongly prefer using JSON over XML.
      This is primarily due to JSON's greater legibility and simplicity of interaction (via dot and bracket notation) no matter the programming language.
      In fact this remains true despite the availability of querying tools such as XPath and jQuery.
    </p>

    <p>
      Consequently, I believe there is a need for a new data structure language that has both the capabilities of XML and the ease of use of JSON.
      EON is my response to this need.
      While developing EON, I also realized that it could be useful to developers to not only have a new object notation, 
      but an accompanying programming language as well.
      Though I am still working on a functioning implementation of EON, I have arrived at a fairly stable specification of what it will look like. 
    </p>   

    <p>
      In EON an object is called a <strong>Card</strong>.
      The EON <strong>Card Model</strong> underlies not just a card's structure, but the architecture of the programming language itself because like in Lisp, code is data too.
      Every EON card has 3 sections: the type, the index, and the body. 
      These are shown in the example below in green, blue, and yellow respectively. 
      Collectively, these sections are surrounded by a wrapper demarcated by angle brackets (in red below).
    </p>
    <p>
      <table class="mx-auto">
        <tr class="text-center">
          <td></td>
          <td class="border-right border-left"><span class="badge badge-success">Type</span></td>
          <td class="text-info border-right"><span class="badge badge-info">Index</span></td>
          <td class="text-warning border-right"><span class="badge badge-warning">Body</span></td>
          <td></td>
        </tr>
        <tr>
          <td class="text-danger">&lt;</td>
          <td class="text-success border-right border-left">title &nbsp;</td>
          <td class="text-info border-right">lang:"en" &nbsp;</td>
          <td class="text-warning border-right">/"Harry Potter"</td>
          <td class="text-danger">&gt;</td>
        </tr>
      </table>
    </p>

    <ul>
      <li>
        As expected, the <span class="badge badge-success">Type</span> indicates the card's type. 
        Cards may only have a single type or may be untyped.
        The type must always be a string of characters terminated by whitespace.
      </li>
      <li>
        The <span class="badge badge-info">Index</span> stores a card's keys and key-value pairs.
        Cards may have as many keys and key-value pairs as desired, but they must be located directly adjacent to each other.
      </li>
      <li>
        The <span class="badge badge-warning">Body</span> stores a card's primary contents either as a single value, another card, list, or array.
        Cards may only have a single body or no body at all.
        The body must always be the last item in a card, and it must be preceded by a <code>/</code>. 
      </li>
      <li>
        If a card has no <span class="badge badge-success">Type</span> and no <span class="badge badge-info">Index</span>,
        then the card's wrapper creates a redundant layer of abstraction around the body (which is itself an card) and may be omitted.
      </li>
    </ul>

    <p>An example of a nested EON card is shown below in comparison to an equivalent XML object.</p>

    <div class="row">
      <div class="col">
        <label>EON</label>
<pre class="code"><code><?=htmlspecialchars('<bookstore /{
  <book category:"cooking" /{
    <title lang:"en" /"Everyday Italian">
    <author /"Giada De Laurentiis">
    <year /2005>
    <price /30.00>
  }>
  <book category:"children" /{ 
    <title lang:"en" /"Harry Potter">
    <author /"J K. Rowling">
    <year /2005>
    <price /29.99>
  }>
  <book category:"web" /{ 
    <title lang:"en" /"Learning XML">
    <author /"Erik T. Ray">
    <year /2003>
    <price /39.95>
  }>
}>')?></code></pre>
      </div>
      <div class="col">
        <label>XML</label>
<pre class="code"><code><?=htmlspecialchars('<bookstore>
  <book category="cooking">
    <title lang="en">Everyday Italian</title>
    <author>Giada De Laurentiis</author>
    <year>2005</year>
    <price>30.00</price>
  </book>
  <book category="children">
    <title lang="en">Harry Potter</title>
    <author>J K. Rowling</author>
    <year>2005</year>
    <price>29.99</price>
  </book>
  <book category="web">
    <title lang="en">Learning XML</title>
    <author>Erik T. Ray</author>
    <year>2003</year>
    <price>39.95</price>
  </book>
</bookstore>')?></code></pre>
      </div>
    </div>

    <p>Despite the above EON card's 1:1 correllation to the XML object, the data could still be restructured into an even more condensed EON card.</p>

    <div class="row">
      <div class="col">
        <label>Restructured EON</label>
<pre class="code"><code><?=htmlspecialchars('<bookstore /{
  <book category:"cooking"
    title: < lang:"en" /"Everyday Italian">
    author: "Giada De Laurentiis"
    year: 2005
    price: 30.00>
  <book category:"children" 
    title: < lang:"en" /"Harry Potter">
    author: "J K. Rowling"
    year: 2005
    price: 29.99>
  <book category:"web" 
    title: < lang:"en" /"Learning XML">
    author: "Erik T. Ray"
    year: 2003
    price: 39.95>}>')?></code></pre>
      </div>
    </div>

    <hr>
    <a href="introduction.php" class="btn btn-light active">Introduction</a>
    <a href="notation.php" class="btn btn-light">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>