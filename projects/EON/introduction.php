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
    <a href="object_notation.php" class="btn btn-light">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    <hr>

    <p>
      <strong>Extended Object Notation</strong> 
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

    <div class="row">
      <div class="col">
      <label>EON</label>
<pre class="code"><code><?=htmlspecialchars('<bookstore {
  <book category:"cooking" {
    <title lang:"en" "Everyday Italian">
    <author "Giada De Laurentiis">
    <year 2005>
    <price 30.00>
  }
  <book category:"children" {
    <title lang:"en" "Harry Potter">
    <author "J K. Rowling">
    <year 2005>
    <price 29.99>
  }
  <book category:"web" {
    <title lang:"en" "Learning XML">
    <author "Erik T. Ray">
    <year 2003>
    <price 39.95>
  }
}')?></code></pre>
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
        </code>
      </div>
    </div>

    <hr>
    <a href="introduction.php" class="btn btn-light active">Introduction</a>
    <a href="object_notation.php" class="btn btn-light">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>