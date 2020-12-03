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
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light active">Grammar</a>
    <hr>

    <p>
      Terms that are all lowercase are nonterminals.<br>
      Terms that are quoted are terminals that match exact lexemes.<br>
      Terms that are in all caps are terminals that are a single lexeme whose text representation may vary.<br>
      The grammar is in EBNF.
    </p>
    
    <p>
      <pre><?=htmlspecialchars('expression = action | initialization | object | 
  (expression { operator, expression}) | (expression { "(", expression, ")"}) | 
  ( "(", expression, ")" { expression } ) | (expression, "|", expression);
action = accessor [ expression] ("\n" | ";");
initialization = accessor, initializer, expression, ("\n" | ";");

object = literal | accessor | object_body | ("<", [ TYPE] ( { property} ( [ object_body] | ">" )));
operator = "," | "+" | "-" | "*" | "/" | "**" | "%" | "!" | "#=" | "==" | "!=" | "<" | "<=" | 
  ">" | ">=" | ":+" | ":-" | ":*" | ":/" | ":#" | ":,";
accessor = LABEL { ("." | "/") LABEL};

initializer = ":" | "::" | ":&" | ":?";
literal = INTEGER | decimal | STRING;
object_body = (list_object | array_object | struct_object);

property = LABEL | initialization;
decimal = INTEGER, "." [ INTEGER];
list_object = "{" { expression } "}";

array_object = [ INTEGER, ] "[" ({ fixed_object} | ("<", TYPE, ">")) "]";
struct_object = "~{" { fixed_object} "}";
fixed_object = literal | struct_object | array_object | ("<" [ TYPE] [ fixed_object ] ">" );
')?></pre>
    </p>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="object_notation.php" class="btn btn-light">Object Notation</a>
    <a href="object_accessors.php" class="btn btn-light">Object Accessors</a>
    <a href="command_language.php" class="btn btn-light">Command Language</a>
    <a href="grammar.php" class="btn btn-light active">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>