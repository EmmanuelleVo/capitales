<?php

$countries = [

    'belgique' => ['capitale' => 'bruxelles',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/langfr-225px-Flag_of_Belgium.svg.png'
    ],
    'france' => ['capitale' => 'paris',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/langfr-225px-Flag_of_France.svg.png'
    ],
    'espagne' => ['capitale' => 'madrid',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/langfr-225px-Flag_of_Spain.svg.png'
    ],
    'portugal' => ['capitale' => 'lisbonne',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/langfr-225px-Flag_of_Portugal.svg.png'
    ],
    'australie' => ['capitale' => 'canberra',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/langfr-225px-Flag_of_Australia_%28converted%29.svg.png'
    ],
    'chine' => ['capitale' => 'pékin',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/langfr-225px-Flag_of_the_People%27s_Republic_of_China.svg.png'
    ],
    'japon' => ['capitale' => 'tokyo',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/langfr-225px-Flag_of_Japan.svg.png'
    ],
    'russie' => ['capitale' => 'moscou',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/langfr-225px-Flag_of_Russia.svg.png'
    ],
    'allemagne' => ['capitale' => 'berlin',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/langfr-225px-Flag_of_Germany.svg.png'
    ],
    'corée du nord' => ['capitale' => 'pyongyang',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Flag_of_North_Korea.svg/langfr-225px-Flag_of_North_Korea.svg.png'
    ],
    'royaume-uni' => ['capitale' => 'londres',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/langfr-225px-Flag_of_the_United_Kingdom.svg.png'
    ]

];

$countrySelected = '';

if(isset($_GET['country'])) {
    $countrySelected = $_GET['country'];
}

if(array_key_exists($countrySelected, $countries)) {

} else {
    $error = 'Message d\'erreur';
}



?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Capitales</title>
    </head>
    <body>

        <form action="index.php" method="get">
            <label for="country">Choose a country</label>
            <select name="country" id="country">
                <option value=""></option>

                <?php foreach ($countries as $country => $countryDatas) : ; ?>
                    <option value="<?= $country ?>" <?= $country===$countrySelected?'selected':'' ?> > <?= mb_strtoupper($country); ?> </option>
                <?php endforeach; ?>

            </select>
            <input type="submit" value="Quelle est la capitale">
        </form>

        <?php if($countrySelected && $countries[$countrySelected]['capitale'] != '') : ;?>

        <p>La capitale de <?= ucwords($countrySelected); ?> est <?= ucwords($countries[$countrySelected]['capitale']);?> </p>
        <img src="<?= $countries[$countrySelected]['drapeau'];?>" alt="drapeau de <?= ucwords($countrySelected) ;?>">

        <?php else : ;?>

        <p><?= $error ?></p>
        <?php endif;?>

    </body>
</html>