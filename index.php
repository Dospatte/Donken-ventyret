<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Äventyret</h1>

<?php
/** Kolla om query string parametern (GET parametern) är (==) tom (NULL)
 *	I fall att den är tom visas ett formulär som ber besökaren fylla i sitt namn
 */
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['player_name'] == "Liam"):
?>
<iframe width="560" height="315" src="https://www.youtube.com/embed/TcrBK1trQXI?autoplay=1" frameborder="0" allowfullscreen></iframe>


<!--Första delen -->
<?php
/** Annars om GET parametern "page" är lika med 1
 *	Visas den första 'sidan' med beskrivning av omgivningen och 
 *	ett formulär för att komma vidare
 */
elseif ($_GET['page'] == 1):
?>
<h2>Hej <? echo $_GET['player_name'] ?></h2>
<p>Du står utan för Donken och fundarar om du skall gå in i butken eller...</p>
<img src="img/mcdonalds.jpg">
<form action="index.php">
	<label>Åt vilket håll går du?</label><br>
	<input type="radio" name="page" value="2" id="gain">
	<label for="west">Gå in</label><br>
	<input type="radio" name="page" value="3" id="hoger">
	<label for="north">Höger</label><br>
	<input type="radio" name="page" value="4" id="vanster">
	<label for="east">Vänster</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>


<!--Andra delen(vänster)-->
<?php
elseif ($_GET['page'] == 4):
?>
<p>Du börjar vandra åt vänster när du märker att en grupp av rånare börjar springa mot dig med kniv. Du gör motstånd med ena rånaren lyckas stabba dig med kniven och du dör senare på Sjukhuset</p>
<img src="img/rånare.jpg">
<form action="index.php">

	<input type="radio" name="page" value="1" id="Restart">
	<label for="Restart">Starta om!</label><br>
    <input type="submit" value="Skicka">
</form>

<!--Andra delen(höger)-->
<?php
elseif ($_GET['page'] == 3):
?>
<p>Du börjar vandra åt höger och kollar på din telefon när du mitt i allt rammlar ner i en brunn och drunknar</p>
<img src="img/brunn.jpeg">
<form action="index.php">
	<label>Starta om? </label><br>
	<input type="radio" name="page" value="1" id="Restart">
	<label for="Restart">Starta om!</label><br>
    <input type="submit" value="Skicka">
</form>

<!--Tredje delen (Donken) -->
<?php
elseif ($_GET['page'] == 2):
?>
<h2>Donken!</h2>
<p>Du har nu kommit in i Donken nu ska du göra det svåra valet att beställa hamburgare</p>
<img src="img/mcdisk.jpg">
<form action="index.php">
	<label>Vad köper du </label><br>
	<input type="radio" name="page" value="5" id="burger1">
	<label for="burger1">Humburger</label><br>
	<input type="radio" name="page" value="6" id="hem">
	<label for="hem">Gå hem och sova...</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>


<!--Tredje delen(Köper hamburgarn) -->
<?php
elseif ($_GET['page'] == 5):
?>
<p>Du får din hamburgare framför dig och märker att den ser lite skum ut vad gör du?</p>
<img src="img/hamburger.jpg">
<form action="index.php">
	<label>Hamburger</label><br>
	<input type="radio" name="page" value="7" id="ater">
	<label for="ater">Äter den!</label><br>
	<input type="radio" name="page" value="6" id="hem">
	<label for="hem">Gå hem och sova...</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<!--Tredje delen(Äter burgarn) -->
<?php
elseif ($_GET['page'] == 7):
?>
<p>Efter du har ätit burgar så dör du av magsår + extrem magsjuka</p>
<form action="index.php">
	<label>Börja om?</label><br>
	<input type="radio" name="page" value="1" id="restart">
	<label for="restart">Börja om!</label><br>
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 6):
?>
<p>Du går hem och lägger dig i sängen och sover... Grattis du har vunnit spelet</p>
<img src="img/sov.jpg">
<form action="index.php">
	<label>Yey! du kan ta och börja om och köra igenom de andra storyna nu om du vill :)</label><br>
	<input type="radio" name="page" value="1" id="restart">
	<label for="restart">Börja om!</label><br>
	<input type="submit" value="Skicka">
</form>


<?php
endif
?>