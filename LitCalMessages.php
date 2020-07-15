<?php

function __($key,$locale="la"){
    global $MESSAGES;
    $locale = strtolower($locale);
    if(isset($MESSAGES[$key])){
        if(isset($MESSAGES[$key][$locale])){
            return $MESSAGES[$key][$locale];
        }
        else{
            return $key;
        }
    }
    else return $key;
}

$MESSAGES = [
    "%s day before Epiphany" => [
        "en" => "%s day before Epiphany",
        "it" => "%s giorno prima dell'Epifania",
        "la" => "Dies %s ante Epiphaniam"
    ],
    "%s day after Epiphany" => [
        "en" => "%s day after Epiphany",
        "it" => "%s giorno dopo l'Epifania",
        "la" => "Dies %s post Epiphaniam"
    ],
    "of the %s Week of Ordinary Time" => [
        "en" => "of the %s Week of Ordinary Time",
        "it" => "della %s Settimana del Tempo Ordinario",
        "la" => "Hebdomadæ %s Tempi Ordinarii"
    ],
    "of the %s Week of Easter" => [
        "en" => "of the %s Week of Easter",
        "it" => "della %s Settimana di Pasqua",
        "la" => "Hebdomadæ %s Tempi Paschali"
    ],
    "of the %s Week of Advent" => [
        "en" => "of the %s Week of Advent",
        "it" => "della %s Settimana dell'Avvento",
        "la" => "Hebdomadæ %s Adventus"
    ],
    "%s Day of the Octave of Christmas" => [
        "en" => "%s Day of the Octave of Christmas",
        "it" => "%s Giorno dell'Ottava di Natale",
        "la" => "Dies %s Octavæ Nativitatis"
    ],
    "of the %s Week of Lent" => [
        "en" => "of the %s Week of Lent",
        "it" => "della %s Settimana di Quaresima",
        "la" => "Hebdomadæ %s Quadragesimæ"
    ],
    "after Ash Wednesday" => [
        "en" => "after Ash Wednesday",
        "it" => "dopo il Mercoledì delle Ceneri",
        "la" => "post Feria IV Cinerum"
    ]
];

$LATIN_ORDINAL = [
    "",
    "primus",
    "secundus",
    "tertius",
    "quartus",
    "quintus",
    "sextus",
    "septimus",
    "octavus",
    "nonus",
    "decimus",
    "undecimus",
    "duodecimus",
    "decimus tertius",
    "decimus quartus",
    "decimus quintus",
    "decimus sextus",
    "decimus septimus",
    "duodevicesimus",
    "undevicesimus",
    "vigesimus",
    "vigesimus primus",
    "vigesimus secundus",
    "vigesimus tertius",
    "vigesimus quartus",
    "vigesimus quintus",
    "vigesimus sextus",
    "vigesimus septimus",
    "vigesimus octavus",
    "vigesimus nonus",
    "trigesimus",
    "trigesimus primus",
    "trigesimus secundus",
    "trigesimus tertius",
    "trigesimus quartus",
];

$LATIN_ORDINAL_FEM_GEN = [
    "",
    "primæ",
    "secundæ",
    "tertiæ",
    "quartæ",
    "quintæ",
    "sextæ",
    "septimæ",
    "octavæ",
    "nonæ",
    "decimæ",
    "undecimæ",
    "duodecimæ",
    "decimæ tertiæ",
    "decimæ quartæ",
    "decimæ quintæ",
    "decimæ sextæ",
    "decimæ septimæ",
    "duodevicesimæ",
    "undevicesimæ",
    "vigesimæ",
    "vigesimæ primæ",
    "vigesimæ secundæ",
    "vigesimæ tertiæ",
    "vigesimæ quartæ",
    "vigesimæ quintæ",
    "vigesimæ sextæ",
    "vigesimæ septimæ",
    "vigesimæ octavæ",
    "vigesimæ nonæ",
    "trigesimæ",
    "trigesimæ primæ",
    "trigesimæ secundæ",
    "trigesimæ tertiæ",
    "trigesimæ quartæ",
];

$LATIN_DAYOFTHEWEEK = [
    "Feria I",     //0=Sunday
    "Feria II",    //1=Monday
    "Feria III",   //2=Tuesday
    "Feria IV",    //3=Wednesday
    "Feria V",     //4=Thursday
    "Feria VI",    //5=Friday
    "Feria VII"    //6=Saturday
];


?>