<?php
 $texFiles = file_get_contents("text_input.txt");
 echo str_word_count($texFiles); 
 