<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form method="post" action="index.php">
            <div class="forma">
                <div class="layout">
                    <div class="tekst">
                        <label for="imeIPrezime">
                            <span>Ime i prezime</span>
                        </label>
                    </div>
                    <div class="input">
                        <input type="text" id="imeIPrezime" name="ime_prezime" class="input"
                            placeholder="Unesite ime i prezime...">
                    </div>
                </div>
                <div class="layout">
                    <div class="tekst">
                        <label for="osiguranjeVrste" class="text">
                            <span>Osiguranje</span>
                        </label>
                    </div>
                    <div class="input">
                        <select id="osiguranjeVrste" class="select" name="osiguranjeOpcije[]">
                            <option name="osiguranjeOpcije[]" value="Zaposleni">Zaposleni</option>
                            <option name="osiguranjeOpcije[]" value="Opcija 2">Opcija 2</option>
                            <option name="osiguranjeOpcije[]" value="Opcija 3">Opcija 3</option>
                        </select>
                    </div>
                </div>
                <div class="layout">
                    <div class="tekst">
                        <label for="odjeljenje">
                            <span>Odjeljenje</span>
                        </label>
                    </div>
                    <div class="input">
                        <div class="checkboxoviLayOut">
                            <div class="flexCheckBox">
                                <input type="checkbox" id="odjeljenje" name="odjeljenje[]" class="input"
                                    value="Hirurgija">
                                <span>Hirurgija</span>
                            </div>
                            <div class="flexCheckBox">
                                <input type="checkbox" id="odjeljenje" name="odjeljenje[]" class="input"
                                    value="Ortopedija">
                                Ortopedija
                            </div>
                            <div class="flexCheckBox">
                                <input type="checkbox" id="odjeljenje" name="odjeljenje[]" class="input"
                                    value="Kardiologija">
                                Kardiologija
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button" type="submit" name="posalji">Posalji</button>
        </form>
    </div>
    </div>
    <div class="rezultat">
<?php

if(isset($_POST['posalji'])){
    $ime = $_POST['ime_prezime'];
    echo $ime . " dobrodosli!";
    echo "<br>";
    $osiguranje = $_POST['osiguranjeOpcije'];
    foreach($osiguranje as $izabranoOsiguranje)
    echo  "Vasa vrsta osiguranja je: " . $izabranoOsiguranje;
    echo "<br>";
    echo "Vi radite na odjeljenju: ";
    if(isset($_POST['odjeljenje'])){
        $odjeljenje = $_POST['odjeljenje'];
        foreach($odjeljenje as $izabranoOdjeljenje)
        
        echo $izabranoOdjeljenje . ", ";
        };
};
echo "<br>";

?>
</div>
</body>

</html>