<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

?>
<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>MSS</em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-lg-10">
    <a href="introduction.php" class="btn btn-light active">Introduction</a>
    <a href="pronunciation.php" class="btn btn-light">Pronunciation</a>
    <a href="sample.php" class="btn btn-light">Sample</a>
    <a href="wordlist.php" class="btn btn-light">Fundamental Words</a>
    <hr>

    <p>
      The <strong>Millennium Spelling System</strong> 
      (MSS) is my attempt at transforming American English into a form where words are truly spelled the way they sound.
    </p>
    
    <p>
      In American English the sounds must be generated from combinations of letters or more frequently, 
      inferred from context or memorized for each word.
      This is the result of inconsistent spelling and results in difficulty with learning how to say new words. (NASA and Nassau are pronounced the same)
    </p>
    <p>
      Many people have created alternative alphabets or alternative spellings in order simplify word pronunciation based solely on reading a word. 
      Despite the fact that all of these creations have been technically successful at accomplishing these goals, 
      the fact remains that none of them were actually adopted for use by people. 
      Over time some of these changes have been adopted, albeit on a case by case basis (colour -> color, through -> thru).
    </p>
    <p>
      One of the distinguishing features of the English vocabulary is the sheer quantity of loanwords from other languages. 
      This is commonly considered the reason that the spelling of words is so inconsistent in regards to pronunciation. 
      Essentially, the problem is that loanwords are adopted as is and retain their original spelling, except for diacritic marks which are removed. 
      I suspect the original reason for this is that it was easier to just leave the spelling alone, 
      since most of the words loaned came from immigrants of one sort or another who knew how it was supposed to be pronounced already. 
      However, these days it mostly just serves to differentiate itself from other words which are pronounced the same (pair, pear, pare). 
      In fact they make up such a high proportion of the vocabulary that one could argue written English and spoken English are two 
      (or is it to or too?) distinct languages almost like Classical Latin (literature, law, scripture) and Vulgar Latin (spoken). 
      Except, that there are just as many words in English that have a single spelling and multiple meanings (ex: buffalo, light, read). 
      This forces speakers and writers to either infer the meaning from context and/or explicitly clarify the meaning.
      Furthermore, there are also multiple cases where different words with different meanings and pronunciations are spelled identically (lead, read).
    </p>
    
    <p>
      In order to understand how MSS works and perhaps more importantly, why the present English language is so dysfunctional and needs reform,
      it is vital that we understand a few fundamental facts about written English before we begin.
    </p>

    <ul>
      <li>
        Everyone is taught that there are 5 vowels in English: A, E, I, O, U and sometimes Y depending on context. 
        Unfortunately, this is only true if we correct that statement to vowel-letters, because depending on which linguist you ask English actually has 18-22 vowel-sounds.
      </li>
      <li>
        Everyone is also taught the sounds of the alphabet as if each letter has a single sound. 
        This is also, unfortunately, not the case. 
        If you (presumably a <em>fluent English speaker</em>) take the time to examine the 
        <a href="https://en.wikipedia.org/wiki/English_orthography#Spelling-to-sound_correspondences" >English Spelling to Sound Correspondence</a> 
        you will quickly notice that there <em>almost isn't any</em>.
      </li>
      <li>
        Prior to the Norman invasion of England the English language (now refered to as Old English) was very similar to Danish and Old Norse
        with a clearly Germanic spelling system, a significant amount of possible word conjugations and inflections, and <em>twelve</em> 
        (that's right, 12!) different versions of "the" (it certainly made French seem easy). 
        However, after the French speaking Normans invaded and became the new rulers and consequently administrators, 
        they utilized the French, Latin, and Greek spelling patterns they were familiar with to spell and write the language that became Middle English.
        This fusion between French and Old English (a Germanic and a Romance language) 
        and the fact that nobody bothered to keep the complex original conjugations and inflections is primarily responsible 
        for the English language's move to an analytic grammar and the consistently inconsistent spelling system.
      </li>
      <li>
        The Normans invaded England in 1066, almost 1000 years ago! 
        In all that time the English language's spelling problem has still not been corrected 
        despite not only its spread across the globe by both the British and American Empires, 
        but also the formation of regional dialects and accents such as that used in Britain, The Northern US, The Southern US, The Caribbean, and Australia.
      </li>
    </ul>

    <p>
      In light of all this analysis it is plain that English doesn't actually need a new or updated alphabet. 
      It just needs some spelling reform. This too has been attempted with limited success. 
      The most successful instance is of Webster's dictionary where the spelling of some words were changed to make them more "American". 
      President Theodore Roosevelt initiated an attempt, but later canceled it after criticism from the press, 
      and an inability to guarantee universal adoption within the government. 
      Multiple academics have created pronunciation and spelling reform systems as well, 
      but I'm pretty sure nobody was paying enough attention to go through the trouble of generating an associated dictionary. 
    </p>
    <p>
      Based off a review of historical changes in written languages, 
      lasting change requires either sustained completed control of the language learning system (via a language authority) 
      or some sort of information that people want must only be accessable through the new language/spelling system so that they are incentivized to adopt and spread the change themselves. 
      The first option has not been feasible in English speaking countries in at least 500 years give or take. 
      This means we must use the second option. 
      (This kept Classical Latin alive in the church through the Bible, Arabic in the Quran). 
      The new system could also be deliberately designed to avoid altering the most commonly used words as much as possible 
      so that the transition requires minimal effort for the individual to transition thus lowering the barrier to entry.
      While this strategy doesn't explicitly convey an advantage to the speaker, it at least makes the language more accessable.
      In addition, we could publish a dictionary of the changed vocablulary and an explanation of how it works.
      While this option can't force change, it also makes the change more practical and accessible to users.
    </p>
    <p>
      Because spelling changes in casual American English such as L33tspeak and others emphasize them, changes should be guided by the following 2 points:
      When spelling use the rule that words should be spelled with the letters that show the way they sound. (Light => lyt)
      Silent letters without a phonetic purpose should be eliminated. (through => thru)
    </p>
    <p>
      Because a structured spelling system is a thousand years overdue for English, I'm calling it the Millennium Spelling System. 
    </p>

    <hr>
    <a href="introduction.php" class="btn btn-light active">Introduction</a>
    <a href="pronunciation.php" class="btn btn-light">Pronunciation</a>
    <a href="sample.php" class="btn btn-light">Sample</a>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>