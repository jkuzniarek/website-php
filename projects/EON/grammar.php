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
      <pre><?=htmlspecialchars('expression = (NAME | object | prefix | infix);

prefix = (OPERATOR | NAME), expression;

infix = expression, prefix;


object = literal | ("<", [TYPE], [index], (">" | ";", (linked_list | fixed_list | ([expression], ">"))));

linked_list = ( "{", {object}, "}" ) | ( "(", [":"], {expression, ["|"], [EOL | ";"]}, ")" );

fixed_list = literal | struct | array | ("<", [TYPE], [fixed_list], ">");


index = {infix | NAME};

array = [INTEGER], "[", ({fixed_list} | ("<", TYPE, ">")), "]";

struct = "{:", {fixed_list}, "}";


literal = INTEGER | decimal | STRING | BYTECODE;

decimal = INTEGER, ".", INTEGER;


operators: 
"."  | ","  | "!"  | "#"  | "@"  | "$"  | "+"  | 
"-"  | "*"  | "/"  | "%"  | "~"  | ":"  | "::" | 
":&" | ":?" | ":+" | ":-" | ":*" | ":/" | ":#" | 
"#=" | "==" | "!=" | "<"  | ">"  | "<=" | ">=" 

keywords:
"ex"   | "fn"  | "void" | "esc"  |
"try"  | "or"  | "loop" | "next" |
"key"  | "val" | "init" | "dest" |
"in"   | "out" | "type" | "src"  |
"has"  | "os"  
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