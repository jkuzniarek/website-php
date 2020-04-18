<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

?>
<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>SASS</em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-lg-10">
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="pronunciation.php" class="btn btn-light active">Pronunciation</a>
    <a href="sample.php" class="btn btn-light">Sample</a>
    <hr>


    <p>
      Below is the alphabet sans the letter Q, and the vowel and consonant sounds as each are spelled in SASS.
      The letter Q has been removed because phonetically speaking it is entirely redundant and keeping it would only serve as a source of confusion for English speakers.
      You'll also notice that for the same reason as Q the letter C no longer has its own sound anymore and is only used as a letter in the CH sound.
    </p>
    <div class="row">
      <div class="col">
        <h4>Alphabet (25)</h4>
        <pre>a b c d e</pre> 
        <pre>f g h i j</pre> 
        <pre>k l m n o</pre> 
        <pre>p r s t u</pre> 
        <pre>v w x y z</pre>
      </div>
      <div class="col">
        <h4>Vowel sounds (18)</h4>
        <pre>a/u e i o ie</pre> 
        <pre>aa ae ee eu</pre>
        <pre>oe oi oo ou</pre> 
        <pre>uu ar ur or</pre> 
        <pre>er/eir/air</pre>
      </div>
      <div class="col">
        <h4>Consonant sounds (23)</h4>
        <pre>b ch d f g</pre>
        <pre>h j k l m</pre>
        <pre>n p r s/ss</pre>
        <pre>sh t th v</pre>
        <pre>w x y z zh</pre>
      </div>
    </div>

    <p>
      There are three types of vowels: Normal vowels, Trailing vowels, and a Lone vowel. 
      Understanding these is not necessary for English speakers that are only <em>reading</em> SASS 
      as these reflect some spelling patterns that English speaking are already accustomed to and have 
      been preserved in order to make the initial transition to SASS easier for them. 
      However, learning them is essential for anyone who aims to be able to spell words in SASS based on their pronunciation alone.
    </p>
    <ul>
      <li>Normal vowels are as specified above in Vowel Sounds.</li>
      <li>Trailing vowels are spelled differently from Normal and Lone vowels, depending on their placement.</li>
      <li>Trailing vowels are used at the end of the word after the last consonant.</li>
      <li>The Lone vowel ee is an exception among Trailing vowels and is used where a Trailing vowel would be when the vowel in question is the only vowel in the word.</li>
      <li>The Lone vowel ee is the same as the Normal vowel ee, and primarly exists to ease the transition to SASS for English speakers.</li>
    </ul>

    <div class="row">
      <div class="col">
        <h4>Trailing Vowels (6)</h4>
        <pre>a/uh aw u</pre> <pre>i ow oy</pre>
      </div>
      <div class="col">
        <h4>Lone Vowel</h4>
        <pre>ee</pre>
      </div>
    </div>

    <h3>Pronunciation Examples</h3>

    <table class="table table-striped table-bordered table-sm">
      <tr>
        <th colspan="4">Vowels</th>
        <th colspan="4">Consonants</th>
      </tr>
      <tr>
        <th colspan="3">Normal</th>
        <th colspan="1">Trailing</th>
        <th colspan="4"></th>
      </tr>
      <tr>
        <td><pre>A/U
about > about
another > anuthur

E
dress > dress
end > end

I
kit > kit
symphony > simfuni

O
on > on
lawn > lon

AA
and > aand
happy > haapi

AE	
late > laet
resume > rezoomae</pre>
</td>
        <td><pre>EE
fleece > fleess
caprice > kapreess

EU
Europe > Eurup
utopia > eutoepia

IE
lie > lie
light > liet

OE 
though > thoe
faux > foe

OI	
choice > choiss
join > join

OO
food > food
crude > krood</pre>
</td>
        <td><pre>OU
mouth > mouth
frown > froun

UU
foot > fuut
could > kuud

AR
park > park
arc > ark

UR
her > hur
fire > fieur

OR
more > mor
hoard > hord

ER/EIR/AIR
fare > fair
there > their
error > erur</pre>
</td>
        <!-- trailing -->
        <td><pre>A/UH
Allah > Oluh
karma > karma

AW
law > law
faux pas > fo paw

U
through > thru
new > nu

I
city > siti
many > meni

OW
now > now
thou > thow

OY
joy > joy
Hanoi > Hanoy</pre>
</td>
        <!-- consonant -->
        <td><pre>B
bat > baat

D
dog > dog 

F
fan > faan

G
goat > goet

H
hat > haat

J
jam > jaam</pre>
</td>
        <td><pre>K
locks > loks

L
lip > lip

M
map > maap

N
nest > nest

P
pig > pig

R
rat > raat</pre>
</td>
        <td><pre>S/SS
stops > stopss

T
top > top

V
van > vaan

W
wig > wig

X
ox > ox 

Y 
yes > yess</pre>
</td>
        <td><pre>Z
is > iz

CH
chin > chin

SH
ship > ship

TH
thin > thin	

ZH
beige > baezh</pre>
</td>
      </tr>
    </table>


    <h3>Additional Spelling Rules</h3>

    <ul>
      <li>
        In order to prevent confusion for English speakers who are used to many words ending in an s but having a z sound instead,
        S is doubled at the ends of words after vowels. Due to the vast irregularities in English sound to spelling correspondence (or more precisely the lack thereof) 
        this does not completely eliminate all potential sources of confusion, but it does significantly reduce them since many are the consequences of grammatical changes.
      </li>
      <li>
        If it's not clear where phonemes begin or end (particularly vowels)
        then apostrophes can be used to clearly separate them in order to clarify pronunciation.
        <br>(around > a'round)
        This is rarely necessary and is best used for aiding those learning SASS. 
      </li>
      <li>
        If there are no apostrophes for clarification, 
        assume the first 2 letters you see are a single sound.
        <br>(oe in goet != go'et)
      </li>
      <li>
        Contractions are accomplished by simply removing the unspoken letters.
        <br>(cannot > kaanot, can't > kaant)
      </li>
    </ul>

    <hr>
    <a href="introduction.php" class="btn btn-light">Introduction</a>
    <a href="pronunciation.php" class="btn btn-light active">Pronunciation</a>
    <a href="sample.php" class="btn btn-light">Sample</a>

  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>