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
      <pre><?=htmlspecialchars('object = "<", [TYPE], [index], [ws], (sequence | (literal, [ws], ">"));

sequence = (list | array | struct );

value = (object | sequence | literal);

expression = ["("], (identifier | action | value | prefix | infix), [")"];


index = {(ws | ";"), (NAME | initialization)}, (ws | ";");

ws = " " | eol | "\t" | "\r";

literal = INTEGER | decimal | STRING;


list = ( "{", {object}, "}" ) | ( "(", {expression, [eol | ";"]}, ")" );

array = [INTEGER], "[", ({fixed_object} | ("<", TYPE, ">")), "]";

struct = "~{", {fixed_object}, "}";


identifier = NAME, { ("." | ","), [INTEGER | NAME], [identifier] };

action = [expression], accessor, ws, [expression];

prefix = operator, expression;

infix = expression, {operator, expression};


initialization = identifier, initializer, (expression);

eol = "\n";

decimal = INTEGER, ".", [INTEGER];

fixed_object = literal | struct | array | ("<", [TYPE], [fixed_object], ">");


accessor = expression, { ("#" | "*" | "@" | "$"), [sequence | NAME], [accessor] };

operator = "|" | "$" | "!" | "+" | "-" | "*" | "/" | "^" | "%" | "#=" | "==" | "!=" | "<" | "<=" | 
  ">" | ">=" | ":+" | ":-" | ":*" | ":/" | ":#" | ":,";

initializer = ":" | "::" | ":&" | ":?";
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