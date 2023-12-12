<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM publisher ORDER BY publisherid";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty publisher ! Something wrong! check again";
		exit;
	}

	$title = "Edituri";
	require "./template/header.php";
?>
	<style>
		.publisher-description {
			background-color: #3498db; /* culoarea albastră */
			color: #fff; /* culoarea textului alb */
			padding: 10px; /* adăugați un spațiu de margini interioare pentru aspectul chenarului */
			margin-top: 10px; /* adăugați un spațiu de margini superioare pentru aspectul chenarului */
			border-radius: 5px; /* adăugați colțuri rotunjite */
		}
	</style>

	<p class="lead">Edituri</p>
	<ul>
	<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT publisherid FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($pubInBook = mysqli_fetch_assoc($result2)){
				if($pubInBook['publisherid'] == $row['publisherid']){
					$count++;
				}
			}
	?>
		<li>
			<span class="badge"><?php echo $count; ?></span>
		    <a style="color: skyblue" href="bookPerPub.php?pubid=<?php echo $row['publisherid']; ?>"><?php echo $row['publisher_name']; ?></a>
		</li>
	<?php } ?>
		<!-- Adăugare descriere pentru edituri în chenar albastru -->
		<li class="publisher-description">
			<h4>Descriere Edituri:</h4>
			<p><strong>Humanitas:</strong> Humanitas este o editură din România, înființată la 1 februarie 1990, care are sediul în București, Piața Presei Libere nr. 1. A fost înființată curând după revoluția din 1989, printr-un ordin al lui Andrei Pleșu, ministrul culturii din acea vreme; direcția noii instituții, pe scheletul vechii Edituri Politice, a fost încredințată lui Gabriel Liiceanu, scriitor și cercetător în filosofie. Humanitas se definea pe atunci ca „editură de științe umaniste”, de unde și numele ei. În timp, profilul editorial inițial s-a lărgit. A fost privatizată în februarie 1991.[1]

Editura Humanitas a devenit larg cunoscută la începutul anilor 1990 prin publicarea unor nume sau titluri interzise sub regimul comunist. Au apărut atunci mare parte din cărțile lui Emil Cioran, Mircea Eliade și Eugène Ionesco, texte antebelice sau inedite de Constantin Noica și de Lucian Blaga, volume de Monica Lovinescu și de Virgil Ierunca, seria de Amintiri ale lui Constantin Argetoianu, Convorbirile lui Mircea Ciobanu cu Regele Mihai etc. Primele colecții ale editurii − puternic marcate de misiunea recuperării unui trecut prețios și de credința că societatea poate fi schimbată prin lecturile potrivite − au fost „Totalitarism și literatura Estului“, „Memorii/Jurnale“, „Societatea civilă“.</p>
			<p><strong>Curtea Veche:</strong> Editura Curtea Veche este o editură din România, cunoscută pentru publicarea cărților de ficțiune și non-ficțiune, precum și pentru cărțile de dezvoltare personală și spirituală. Fondată în anul 1998, editura și-a câștigat reputația prin promovarea autorilor români și internaționali de calibru, acoperind o gamă diversificată de genuri literare.

Printre autorii publicați de Curtea Veche se numără atât scriitori consacrați, cât și talente emergente. Editura este recunoscută pentru promovarea valorilor culturale și educative, oferind cititorilor o gamă variată de titluri care acoperă diferite domenii de interes.</p>
		</li>
		<li>
			<a style="color: skyblue" href="books.php">List full of books</a>
		</li>
	</ul>
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>

