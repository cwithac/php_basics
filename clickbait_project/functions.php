<?php

function checkForClickBait() {

  //If fix_submit button has been clicked...
    //grab value from textarea, make all letters lowercase, store in variable
  $clickBait = strtolower($_POST["clickbait_headline"]);
    //store array of clickbait-sounding words or phrases
    $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );

    //  store array of replacement words or phrases
    /*  make sure each replacement is in the same order
        as the click bait word you're trying to replace with type of array*/
    $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        );

        //Replace words functionality with first char upcase and variable storage
        $honestHeadline = str_replace($a, $b, $clickBait);
                                      //word to replace, word replacing with, when found in this phrase
        //return array of variables to access globally
        return array($clickBait, $honestHeadline);

    } //end checkForClickBait

    function displayHonestHeadline($clickBait, $honestHeadline) {
      //ucwords() upcases first character of every word
      echo "<strong class='text-danger'>Original Headline: </strong><h4>" . ucwords($clickBait) . "</h4><hr><br>";
      echo "<strong class='text-success'>Honest Headline: </strong><h4>" . ucwords($honestHeadline) . "</h4>";
    }
 ?>
