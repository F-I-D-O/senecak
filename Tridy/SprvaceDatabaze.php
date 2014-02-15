<?php

class SprvaceDatabaze {

	const CESTA_SOUBOR_PRISTUP_DATABAZE = '/Secure/password.php';

	private $mysqli;

	/**
	 * Konstruktor
	 */
	function __construct(){

		// bezpečnostní údaje pro připojení. Jako konstanta nedefinováno z důvodu soukromí
		require CESTA_KOREN_WEBU . self::CESTA_SOUBOR_PRISTUP_DATABAZE;

		// pokusí se vytvořit připojení pomocí údajů z password.php
		$this->mysqli = new mysqli($mysqlhost, $mysqluser, $mysqlpasswd, $mysqldb);

		// v případě neúspěšného připojení ukončí přihlašování a zobrazí chybu
		if(mysqli_connect_errno()) {
			return FALSE;
		}

		// nastaví kódování řetězců při komunikaci s databází na UTF-8
		$this->mysqli->query("SET NAMES 'utf8'");
	}

	// destruktor
	function __destruct() {
		$this->close();
	}

	// dodatečné uzavření
	function close() {
		if($this->mysqli)
			$this->mysqli->close();
		$this->mysqli = FALSE;
	}

	/**
	 * Pošle dotaz SQL, otestuje zda není výsledek prázdný a zpracuje výsledek.
	 * @param string $sql SQL příkaz
	 * @return pole s výsledky dotazu (každý prvek pole jeden řádek) nebo FALSE
	 */
	function queryObjectArray($sql){
		$data = $this->mysqli->query($sql);

		if($data){
			if($data->num_rows){
				$i = 0;
				while($radek = $data->fetch_object()){
					$pole_dat[$i] = $radek;
					$i++;
				}
				return $pole_dat;
			}
			else{
				return FALSE;
			}
		}
		else {
			return FALSE;
		}
	}

	/**
	 * Pošle dotaz SQL, otestuje zda není výsledek prázdný a zpracuje výsledek.
	 * @param string $sql SQL příkaz
	 * @return pole s výsledky dotazu (každý prvek pole jedna položka) nebo FALSE
	 */
	function queryArray($sql){
		$data = $this->mysqli->query($sql);

		if($data){
			if($data->num_rows){
				$i = 0;
				while($radek = $data->fetch_array()){
					$pole_dat[$i] = $radek;
					$i++;
				}
				return $pole_dat;
			}
			else{
				return FALSE;
			}
		}
		else {
			return FALSE;
		}
	}

	/**
	 * Pošle dotaz SQL, otestuje zda není výsledek prázdný a zpracuje výsledek.
	 * @param string $sql SQL příkaz
	 * @return pole s výsledky dotazu (každý prvek pole jedna položka) nebo FALSE
	 */
	function vratSloupec($sql){
		$data = $this->mysqli->query($sql);

		if($data){
			if($data->num_rows){
				$i = 0;
				while($radek = $data->fetch_array()){
					$pole_dat[$i] = $radek[0];
					$i++;
				}
				return $pole_dat;
			}
			else{
				return FALSE;
			}
		}
		else {
			return FALSE;
		}
	}

	/**
	 * Vrací jeden řádek z databáze
	 * @param string $sql SQL příkaz
	 * @return řádek s výsledkem dotazu nebo FALSE v případě neúspěchu
	 */
	function queryObject($sql){
		$data = $this->mysqli->query($sql);

		if($data){
			if($data->num_rows){
				$i = 0;
				$radek = $data->fetch_object();
				return $radek;
			}
			else{
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	}


	/**
	 * Pro vrácení jedné položky z databáze
	 * @param string $sql SQL příkaz
	 * @return unknown|boolean
	 */
	function querySingleItem($sql) {
		$result = $this->mysqli->query($sql);
		if($result) {
			if ($row=$result->fetch_array()) {
				$result->close();
				return $row[0];
			}
			else {
				// dotaz nevrátil žádná data
				return FALSE;
			}
		}
		else {
			// dotaz nevrátil žádná data
			return FALSE;
		}
	}


	/**
	 * Vráti oescapovaný řetězec bez mezer na začátku a konci, opatřený apostrofy.
	 * V případě že je řetězec prázdný nebo NULL, vrátí NULL
	 * @param string $text vstupní řetězec pro úpravu
	 * @return string $text zpracovaný řetězec nebo NULL pokud je vstupní řetězec prázdný
	 */
	function uprav_na_sql($text){
		//otestuje zdali není řetězec prázdný
		if(!$text || trim($text)==""){
			return 'NULL';
		}
		else{
			return "'" . $this->mysqli->escape_string(trim($text)) . "'";
		}
	}

	function datum_na_sql_datum($datum){
		$datum_bez_tecek = str_replace(".", "", $datum);
		$datum_pole = explode(" ", $datum_bez_tecek);
		for($i = 0; $i < count($datum_pole) - 1; $i++){
			if($datum_pole[$i] < 10){
				$datum_pole[$i] = "0" . $datum_pole[$i];
			}
		}

		$sql_datum = $datum_pole[2] . "-" . $datum_pole[1] . "-" . $datum_pole[0] . " " .
			$datum_pole[3] . ":00";

		return $sql_datum;
	}

	function sql_datum_na_datum($sql_datum){
		$datum = new DateTime($sql_datum);

		return $datum->format("d. m. Y");
	}

	/**
	 * Generuje odkay na profil
	 * @param string $profilID id profilu
	 * @param string $databaze databáze
	 * @return string odkay na profil
	 */
	function odkaz_na_profil($profilID, $databaze){
		$sql = "SELECT prezdivka FROM profily WHERE profilID = " . $profilID;
		$prezdivka = $databaze->querySingleItem($sql);
		$odkaz = /* '<a href="http://' . $_SERVER["SERVER_NAME"] . '/profil.php?profilID=' .  $profilID
	  . '">' . */$prezdivka/*  .  '</a>' */;
		return $odkaz;
	}

} 