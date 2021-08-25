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
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
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
      <pre><?=htmlspecialchars('expression = (NAME | card | literal | group | command );

command = [EOL | "="], (infix | prefix);

group = OPEN_DELIMITER, { expression }, CLOSE_DELIMITER;


card = "<", [type], [index], (">" | "/", (group | [expression]), ">"));

prefix = (OPERATOR | NAME), expression;

infix = expression, prefix;


literal = INTEGER | decimal | STRING | bytes;

type = TYPE, [ "\", INTEGER ];

index = {infix | NAME};


decimal = INTEGER, ".", INTEGER;

bytes = ( "\x" | "\b" | "\d" ), { INTEGER };


group open delimiters:
"["  | "("  | "{"  | "(:" | "{:"

group close delimiters:
"]"  | ")"  | "}" 

operators: 
"."  | "/"  | "#"  | "*"  | "@"  | 
"|"  | "!"  | "$"  | "%"  | "^"  |
":"  | "::" | ":&" | ":?" | ":+" | ":-" | ":#" | 
"#=" | "==" | "!=" | "<"  | ">"  | "<=" | ">=" |

keywords:
"fn"   | "cfn"  | "void" | "esc"  |
"try"  | "loop" | "next" | "key"  | 
"val"  | "init" | "dest" | "in"   | 
"out"  | "type" | "src"  | "has"  | 
"os"   | "vol" 

math:
"sum"  | "dif"  | "mul"  | "div"  | 
"exp"  | "mod"  |
')?></pre>
    </p>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="notation.php" class="btn btn-light">Notation</a>
    <a href="accessors.php" class="btn btn-light">Accessors</a>
    <a href="commands.php" class="btn btn-light">Commands</a>
    <a href="grammar.php" class="btn btn-light active">Grammar</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>