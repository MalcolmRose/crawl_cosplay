<?php $this->layout = 'tournament'; ?>
<?php 
    $dir_path = "img/uniques";
    $files = scandir($dir_path);
    $count = count($files);
    $index1 = rand(2, ($count-1));
    $index2 = rand(2, ($count-1));
    $index3 = rand(2, ($count-1));
    $index4 = rand(2, ($count-1));
    $filename1 = $files[$index1];
    $filename2 = $files[$index2];
    $filename3 = $files[$index3];
    $filename4 = $files[$index4];

    echo '<h2>About Crawl Cosplay Trunk Tournament (CCTT)</h2>';
    echo '<img src="/'.$dir_path."/".$filename1.'" alt="'.$filename1.'" width="72" height="72" style="float:right">';
?>

<p>The <b>Crawl Cosplay Trunk Tournament</b> is a 4-week tournament with a different challenge each week highlighting major Trunk changes since the previous stable version.
 It is based on the weekly <a href="http://cosplay.kelbi.org/" target="_blank">Crawl Cosplay Challenge</a> (CCC) series for <a href="http://crawl.develz.org/" target="_blank">Dungeon Crawl Stone Soup</a> (DCSS).</p>

<p>Each week will feature a DCSS Unique character for you to play, with one or more options for starting species and background, as well as which god you must worship.
  These are all mandatory and you must worship your god before entering any multi-level branch besides the dungeon (e.g. Lair, Orc, Depths). 
  Also, you can't do anything to lose your religion, including abandoning your god. 
  The goal is not to emulate the unique's behaviour exactly, but to get a good starting point on playing games with interesting requirements.</p>
<p>In the event of a tie for top spot, a very difficult bonus challenge is envisioned.</p>

<p>The next tournament challenge will be posted Friday at 0:00 UTC.</p>

<h3>How to Enter</h3>
<?php
    echo '<img src="/'.$dir_path."/".$filename2.'" alt="'.$filename2.'" width="72" height="72" style="float:right">'; 
?>

<p>The current challenge's details page has a "Submit a run" link.
 For those who haven't participated in CCC or CCTT before, just paste a link to your online morgue, and enter your playername and score in the comments. 
 Submissions will be approved by a moderator, who will verify your morgue and your score, and create a username for your future submissions.</p>

<h3>Restrictions for tournament play</h3>
<p><b>- Submitted runs must be played in trunk on one of the <a href="https://crawl.develz.org/play.htm" target="_blank"> official online servers</a></b>.</p>
<p><b>- Seeded games are NOT accepted.</b></p>
<p>- You can make as many attempts as you want.</p>
<p>- Morgues must be submitted while a challenge is active. No late submissions!</p>

<h3>Changing your player sprite to a Unique's doll.</h3>
<p>If you'd like to change the player doll to the Unique's tile, add the following to your RC file:</p>
<p> tile_player_tile = tile:MONS_WIGLAF</p>

<h3>Rules and Scoring</h3>
<?php
    echo '<img src="/'.$dir_path."/".$filename3.'" alt="'.$filename3.'" width="72" height="72" style="float:right">'; 
?>
<h4>Milestones</h4> 
<p>These remain the same from one week to the next, and are the main way of scoring points.
  Each milestone earns you 5 points, for a total of 35 if you win the game, and can be done in any order.
  You can only earn points from each milestone once per game (entering Lair and then Orc doesn't get you 10 points).</p>

<ul><li>Reach XL3.</li>
<li>Enter Lair, Orc, or Depths.</li>
<li>Reach the last floor of Lair, Orc, or the Dungeon.</li>
<li>Collect your first rune.</li>
<li>Find the entrance to Zot. (Just using magic mapping doesn't count; you must actually have the entrance in LOS.)</li>
<li>Collect three runes.</li>
<li>Win the game.</li></ul>

<h4>Conducts</h4>
<p>Each week will have three conducts for you to follow, that vary with every challenge.
  Following or completing each conduct is worth 5 points, to a maximum of half your score from milestones, rounded down.
  (So if you achieve 3 milestones (15 points) you can earn up to 7 points from conduct bonuses, for a total of 22 points.)</p>

<h4>Bonus Challenges:</h4>
<?php
    echo '<img src="/'.$dir_path."/".$filename4.'" alt="'.$filename4.'" width="72" height="72" style="float:right">'; 
?>
<p>Each of the 4 challenges will also have two <em>optional</em> bonus challenges, that are usually difficult or unconventional.
  Completing a bonus challenge doesn't affect your score, but gets you a <strong>star</strong>, a small trophy to recognize your skill.
  Each week has one star that requires you to win the game, and another that doesn't. You don't need to follow any of the cosplay conducts to earn stars.</p>

<h3>Credits</h3>

<p>The Crawl Cosplay Trunk Tournament was created and is run by <a href="https://www.reddit.com/user/RoGGa_69/" target="_blank">RoGGa</a>
  with the help from some of the Crawl Cosplay Challenge regulars.</p>

<p>This website was developed by <a href="https://github.com/alkemann" target="_blank">Alkemann</a>, with assistance from RoGGa and kitchen_ace.
  CSS by kitchen_ace and Alkemann, loosely based on the one from the <a href="https://github.com/zxc23/dcss-scoreboard" target="_blank">DCSS Scoreboard</a>, with images from DCSS.</p>

<p>A big thank you to floraline for hosting CCC and the tournament on the old CKO server.</p>
