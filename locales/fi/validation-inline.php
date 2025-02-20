<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'Tämä kenttä on hyväksyttävä.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Tämä ei ole kelvollinen URL-osoite..',
    'after'                => 'Tämän on oltava päivämäärän :date jälkeen.',
    'after_or_equal'       => 'Tämän on oltava päivämäärä :date tai sen jälkeen.',
    'alpha'                => 'Tämä kenttä voi sisältää vain kirjaimia.',
    'alpha_dash'           => 'Tämä kenttä voi sisältää vain kirjaimia, numeroita, viivoja ja alaviivoja.',
    'alpha_num'            => 'Tämä kenttä voi sisältää vain kirjaimia ja numeroita.',
    'array'                => 'Tämän kentän täytyy olla taulukko.',
    'attached'             => 'Tämä kenttä on jo kiinnitetty.',
    'before'               => 'Päivämäärän täytyy olla ennen kuin :date.',
    'before_or_equal'      => 'Päivämäärän täytyy olla ennen tai sama kuin :date.',
    'between'              => [
        'array'   => 'Sisällön täytyy sisältää vähintään :min ja maksimissaan :max kohdetta.',
        'file'    => 'Tiedoston koon täytyy olla vähintään :min ja maksimissaan :max kilotavua.',
        'numeric' => 'Arvon täytyy olla vähintään :min ja maksimissaan :max.',
        'string'  => 'Merkkijonon täytyy olla vähintään :min ja maksimissaan :max merkkiä.',
    ],
    'boolean'              => 'Tämän kentän on oltava tosi tai epätosi.',
    'confirmed'            => 'Vahvistus ei täsmää.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Tämä ei ole pätevä päivämäärä.',
    'date_equals'          => 'Tämän päivämäärän on oltava :date.',
    'date_format'          => 'Tämä ei vastaa muotoa :format.',
    'different'            => 'Tämän arvon on oltava eri kuin :other.',
    'digits'               => 'Tämän täytyy olla :digits numeroa.',
    'digits_between'       => 'Numeron on oltava :min-:max numeroa.',
    'dimensions'           => 'Tällä kuvalla on virheelliset mitat.',
    'distinct'             => 'Tällä kentällä on kaksoisarvo.',
    'email'                => 'Tämän on oltava voimassa oleva sähköpostiosoite.',
    'ends_with'            => 'Tämän on päätyttävä johonkin seuraavista: :values.',
    'exists'               => 'Valittu arvo on virheellinen.',
    'file'                 => 'Sisällön on oltava tiedosto.',
    'filled'               => 'Tällä kentällä täytyy olla arvo.',
    'gt'                   => [
        'array'   => 'Sisällön täytyy sisältää enemmän kuin :value kohdetta.',
        'file'    => 'Tiedoston kooon täytyy olla enemmän kuin :value kilotavua.',
        'numeric' => 'Arvon täytyy olla suurempi kuin :value.',
        'string'  => 'Merkkijonon täytyy olla pidempi kuin :value merkkiä.',
    ],
    'gte'                  => [
        'array'   => 'Sisällön täytyy sisältää vähintään :value kohdetta.',
        'file'    => 'Tiedoston koon täytyy olla vähintään :value kilotavua.',
        'numeric' => 'Arvon täytyy olla vähintään :value.',
        'string'  => 'Merkkijonon täytyy olla vähintään :value merkkiä pitkä.',
    ],
    'image'                => 'Tämän täytyy olla kuva.',
    'in'                   => 'Valittu arvo on virheellinen.',
    'in_array'             => ':other ei sisällä tätä arvoa.',
    'integer'              => 'Tämän on oltava kokonaisluku.',
    'ip'                   => 'Tämän täytyy olla kelvollinen IP-osoite.',
    'ipv4'                 => 'Tämän on oltava kelvollinen IPv4-osoite.',
    'ipv6'                 => 'Tämän on oltava kelvollinen IPv6-osoite.',
    'json'                 => 'Tämän täytyy olla kelvollinen JSON-merkkijono.',
    'lt'                   => [
        'array'   => 'Sisältö saa sisältää enintään :value kohdetta.',
        'file'    => 'Tiedoston koko saa olla enintään :value kilotavua.',
        'numeric' => 'Arvo saa olla korkeintaan :value.',
        'string'  => 'Merkkijono saa olla enimillään :value merkkiä pitkä.',
    ],
    'lte'                  => [
        'array'   => 'Sisältö ei saa sisältää enempää kuin :value kohdetta.',
        'file'    => 'Tiedoston koko ei saa olla suurempaa kuin :value kilotavua.',
        'numeric' => 'Arvo ei saa olla suurempaa kuin :value.',
        'string'  => 'Merkkijono ei saa olla pidempi kuin :value merkkiä.',
    ],
    'max'                  => [
        'array'   => 'Sisältö ei voi sisältää enempää kuin :max kohdetta.',
        'file'    => 'Tiedoston koko ei saa ylittää :max kilotavua.',
        'numeric' => 'Arvo ei saa olla suurempi kuin :value.',
        'string'  => 'Merkkijonon pituus ei saa ylittää :max merkkiä.',
    ],
    'mimes'                => 'Tämän täytyy olla tiedosto tyyppi: :values.',
    'mimetypes'            => 'Tämän täytyy olla tiedosto tyyppi: :values.',
    'min'                  => [
        'array'   => 'Sisällön täytyy sisältää vähintään :min kohdetta.',
        'file'    => 'Tiedoston koon täytyy olla vähintään :min kilotavua.',
        'numeric' => 'Arvon täytyy olla vähintään :min.',
        'string'  => 'Merkkijonon täytyy olla vähintään :min merkkiä pitkä.',
    ],
    'multiple_of'          => 'Arvon on oltava :value: n kerrannainen',
    'not_in'               => 'Valittu arvo on virheellinen.',
    'not_regex'            => 'Tämä muoto on virheellinen.',
    'numeric'              => 'Tämän täytyy olla numero.',
    'password'             => 'Salasana on väärä.',
    'present'              => 'Tämän kentän on oltava käytettävissä.',
    'prohibited'           => 'Tämä kenttä on kielletty.',
    'prohibited_if'        => 'Tämä kenttä on kielletty, kun :other on :value.',
    'prohibited_unless'    => 'Tämä kenttä on kielletty, ellei :other ole :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Tämä muoto on virheellinen.',
    'relatable'            => 'Tämä kenttä ei välttämättä liity tähän resurssiin.',
    'required'             => 'Tämä kenttä on pakollinen.',
    'required_if'          => 'Tämä kenttä vaaditaan, kun :other on :value.',
    'required_unless'      => 'Tämä kenttä vaaditaan, ellei :other ole kohdassa :values.',
    'required_with'        => 'Tämä kenttä vaaditaan, kun :values on käytettävissä.',
    'required_with_all'    => 'Tämä kenttä vaaditaan, kun :values on käytettävissä.',
    'required_without'     => 'Tämä kenttä vaaditaan, kun :values ei ole käytössä.',
    'required_without_all' => 'Tämä kenttä on pakollinen, jos yhtään :values: stä ei ole valittu.',
    'same'                 => 'Tämän kentän arvon on vastattava :other arvoa.',
    'size'                 => [
        'array'   => 'Sisällön täytyy sisältää :size kohdetta.',
        'file'    => 'Tiedoston koon täytyy olla :size kilotavua.',
        'numeric' => 'Arvo täytyy olla :size.',
        'string'  => 'Merkkijonon täytyy olla :size merkkiä pitkä.',
    ],
    'starts_with'          => 'Tämä on aloitettava yhdellä seuraavista: :values.',
    'string'               => 'Tämän täytyy olla merkkijono.',
    'timezone'             => 'Tämän täytyy olla kelvollinen aikavyöhyke.',
    'unique'               => 'Tämä on jo käytössä.',
    'uploaded'             => 'Tämän lataus epäonnistui.',
    'url'                  => 'Tämä muoto on virheellinen.',
    'uuid'                 => 'Tämän on oltava voimassa oleva UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
