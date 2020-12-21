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
      The grammar is in EBNF.<br>
      Only semantically significant whitespace is shown in the grammar.<br>
      EOL refers to either the end of line character or a semicolon as they are functionally equivalent.
    </p>
    
    <p>
      <pre><?=htmlspecialchars('object = "<", [TYPE], [index], (">" | (WS | EOL), ((object, [WS | EOL], ">") | list_sequence | fixed_sequence));

value = (object | list_sequence | fixed_sequence);

expression = ["("], (NAME | value | prefix | infix), [")"];


index = {(WS | EOL), infix};

literal = INTEGER | decimal | STRING;

list_sequence = ( "{", {object}, "}" ) | ( "(", {expression, [EOL]}, ")" );


array = [INTEGER], "[", ({fixed_sequence} | ("<", TYPE, ">")), "]";

struct = "~{", {fixed_sequence}, "}";

prefix = (operator | NAME), [WS], expression;


infix = expression, {operator, [WS], expression};

decimal = INTEGER, ".", INTEGER;

fixed_sequence = literal | struct | array | ("<", [TYPE], [fixed_sequence], ">");


operator = "." | "," | "|" | "!" | "#" | "@" | "$" | "+" | 
"-" | "*" | "/" | "^" | "%" | "<" | ">" | ":" | 
"::" | ":&" | ":?"| ":+" | ":-" | ":*" | ":/" | 
":#" | ",:" | "#=" | "==" | "!=" | "<=" | ">=";
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