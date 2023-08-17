<?php
require_once 'MagicParser.php';

const NOM_FICHIER = "catalogue.XML";
const TABLE = "catalogue";

parse();

/**
 * Permet l'insertion des données du fichier dans la base de données
 * @return void
 */
function parse()
{
    if (!MagicParser_parse(NOM_FICHIER, "inserer")) {
        print "Impossible de parser le fichier " . NOM_FICHIER . ":\n" . MagicParser_getErrorMessage();
    } else {
        print "Import terminé.";
    }
}

/**
 * Insert une ligne dans la base de données
 * @param array $item ligne à insérer dans la base de données
 * @return void
 */
function inserer($item)
{
    $nomTable = TABLE;

    $sql = <<<SQL
        INSERT INTO $nomTable VALUES (
            :PRODUIT_POCLEUNIK,
            :PRODUIT_REF,
            :REFCIALE_ARCLEUNIK,
            :REFCIALE_REFART,
            :REFCIALE_REFCAT,
            :POTRAD_DESI,
            :REFCIALE_CTVA,
            :FICTECH_MEMOCAT,
            :FICTECH_MEMONET,
            :PRODUIT_MARQUE,
            :PRODUIT_CLEP01,
            :PRODUIT_CLEP02,
            :PRODUIT_CLEP03,
            :PRODUIT_CLEP04,
            :PRODUIT_CLEP06,
            :PRODUIT_CLEP07,
            :PRODUIT_GCOLORIS,
            :PRODUIT_GTAILLE,
            :PRODUIT_CLEP12,
            :REFCIALE_FICHEINA,
            :REFCIALE_MODTE,
            :PRODUIT_MODTE,
            :ARTICLE_POIDS,
            :ARTICLE_HNORMEL,
            :ARTICLE_CATEG
        );
    SQL;

    $parametres = array(
        "PRODUIT_POCLEUNIK" => $item["PRODUIT_POCLEUNIK"],
        "PRODUIT_REF" => $item["PRODUIT_REF"],
        "REFCIALE_ARCLEUNIK" => texteVersEntier($item["REFCIALE_ARCLEUNIK"]),
        "REFCIALE_REFART" => $item["REFCIALE_REFART"],
        "REFCIALE_REFCAT" => $item["REFCIALE_REFCAT"],
        "POTRAD_DESI" => $item["POTRAD_DESI"],
        "REFCIALE_CTVA" => texteVersEntier($item["REFCIALE_CTVA"]),
        "FICTECH_MEMOCAT" => $item["FICTECH_MEMOCAT"],
        "FICTECH_MEMONET" => $item["FICTECH_MEMONET"],
        "PRODUIT_MARQUE" => $item["PRODUIT_MARQUE"],
        "PRODUIT_CLEP01" => $item["PRODUIT_CLEP01"],
        "PRODUIT_CLEP02" => $item["PRODUIT_CLEP02"],
        "PRODUIT_CLEP03" => $item["PRODUIT_CLEP03"],
        "PRODUIT_CLEP04" => $item["PRODUIT_CLEP04"],
        "PRODUIT_CLEP06" => $item["PRODUIT_CLEP06"],
        "PRODUIT_CLEP07" => $item["PRODUIT_CLEP07"],
        "PRODUIT_GCOLORIS" => $item["PRODUIT_GCOLORIS"],
        "PRODUIT_GTAILLE" => texteVersDecimal($item["PRODUIT_GTAILLE"]),
        "PRODUIT_CLEP12" => $item["PRODUIT_CLEP12"],
        "REFCIALE_FICHEINA" => texteVersEntier($item["REFCIALE_FICHEINA"]),
        "REFCIALE_MODTE" => texteVersEntier($item["REFCIALE_MODTE"]),
        "PRODUIT_MODTE" => texteVersEntier($item["PRODUIT_MODTE"]),
        "ARTICLE_POIDS" => texteVersDecimal($item["ARTICLE_POIDS"]),
        "ARTICLE_HNORMEL" => texteVersEntier($item["ARTICLE_HNORMEL"]),
        "ARTICLE_CATEG" => texteVersEntier($item["ARTICLE_CATEG"]),
    );

    $pdo = ConnexionBaseDeDonnees::getPDO();
    $requetePreparee = $pdo->prepare($sql);

    if (!$requetePreparee->execute($parametres)) {
        print "Impossible d'insérer la ligne dont la clé primaire (PRODUIT_POCLEUNIK) est {$item["PRODUIT_POCLEUNIK"]}.";
    }
}

/**
 * @param $texte
 * @return float|null
 */
function texteVersDecimal($texte){
    return strlen($texte) > 0 ? floatval($texte) : null;
}

/**
 * @param $texte
 * @return int|null
 */
function texteVersEntier($texte){
    return strlen($texte) > 0 ? intval($texte) : null;
}

class ConnexionBaseDeDonnees
{
    private static $pdo;

    /**
     * @return string Login de la base de données
     * */
    private static function getLogin()
    {
        return "root";
    }

    /**
     * @return string Mot de passe de la base de données
     * */
    private static function getMotDePasse()
    {
        return "admin";
    }

    /**
     * @return string Adresse de l'hôte de la base de données
     * */
    private static function getHote()
    {
        return "127.0.0.1";
    }

    /**
     * @return int Port de la base de données
     * */
    private static function getPort()
    {
        return 5001;
    }

    /**
     * @return string Nom de la base de données à utiliser
     * */
    private static function getBaseDeDonnees()
    {
        return "exercice2";
    }

    private static function getDSN(): string
    {
        return "mysql:host=" . self::getHote() . ";port=" . self::getPort() . ";dbname=" . self::getBaseDeDonnees();
    }

    /**
     * @return PDO
     * */
    public static function getPDO()
    {
        if (self::$pdo === null) {
            try{
                self::$pdo = new PDO(
                    self::getDSN(),
                    self::getLogin(),
                    self::getMotDePasse()
                );
            }catch(PDOException $e){
                print "Impossible de se connecter à la base de données.";
                exit;
            }

            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }
}
