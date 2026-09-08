<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lignes de langue de validation
    |--------------------------------------------------------------------------
    |
    | Les lignes suivantes contiennent les messages d'erreur par défaut
    | utilisés par la classe de validation. Certaines règles possèdent
    | plusieurs versions, comme les règles de taille.
    |
    */

    'accepted' => 'Le champ :attribute doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté quand :other vaut :value.',
    'active_url' => 'Le champ :attribute doit être une URL valide.',
    'after' => 'Le champ :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et des chiffres.',
    'any_of' => 'Le champ :attribute est invalide.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques et des symboles sur un octet.',
    'before' => 'Le champ :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'Le champ :attribute doit contenir entre :min et :max éléments.',
        'file' => 'Le fichier :attribute doit avoir une taille comprise entre :min et :max kilo-octets.',
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'can' => 'Le champ :attribute contient une valeur non autorisée.',
    'confirmed' => 'Le champ de confirmation :attribute ne correspond pas.',
    'contains' => 'Il manque une valeur requise dans le champ :attribute.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le champ :attribute doit être une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute doit être au format :format.',
    'decimal' => 'Le champ :attribute doit avoir :decimal décimales.',
    'declined' => 'Le champ :attribute doit être refusé.',
    'declined_if' => 'Le champ :attribute doit être refusé quand :other vaut :value.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit contenir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions' => 'La taille de l\'image :attribute n\'est pas conforme.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_contain' => 'Le champ :attribute ne doit contenir aucune des valeurs suivantes : :values.',
    'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer par l\'une des valeurs suivantes : :values.',
    'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer par l\'une des valeurs suivantes : :values.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'encoding' => 'Le champ :attribute doit utiliser l\'encodage :encoding.',
    'ends_with' => 'Le champ :attribute doit se terminer par l\'une des valeurs suivantes : :values.',
    'enum' => 'La valeur sélectionnée pour :attribute est invalide.',
    'exists' => 'La valeur sélectionnée pour :attribute est invalide.',
    'extensions' => 'Le champ :attribute doit avoir l\'une des extensions suivantes : :values.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le champ :attribute doit contenir plus de :value éléments.',
        'file' => 'Le fichier :attribute doit être plus grand que :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit contenir plus de :value caractères.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit contenir au moins :value éléments.',
        'file' => 'Le fichier :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit contenir au moins :value caractères.',
    ],
    'hex_color' => 'Le champ :attribute doit être une couleur hexadécimale valide.',
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'in_array' => 'Le champ :attribute doit exister dans :other.',
    'in_array_keys' => 'Le champ :attribute doit contenir au moins une des clés suivantes : :values.',
    'integer' => 'Le champ :attribute doit être un nombre entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'list' => 'Le champ :attribute doit être une liste.',
    'lowercase' => 'Le champ :attribute doit être en minuscules.',
    'lt' => [
        'array' => 'Le champ :attribute doit contenir moins de :value éléments.',
        'file' => 'Le fichier :attribute doit être plus petit que :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit contenir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute doit contenir au plus :value éléments.',
        'file' => 'Le fichier :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le champ :attribute doit contenir au plus :value caractères.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le champ :attribute ne doit pas contenir plus de :max éléments.',
        'file' => 'Le fichier :attribute ne doit pas dépasser :max kilo-octets.',
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le champ :attribute ne doit pas contenir plus de :max caractères.',
    ],
    'max_digits' => 'Le champ :attribute ne doit pas contenir plus de :max chiffres.',
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'array' => 'Le champ :attribute doit contenir au moins :min éléments.',
        'file' => 'Le fichier :attribute doit faire au moins :min kilo-octets.',
        'numeric' => 'Le champ :attribute doit être au minimum de :min.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
    ],
    'min_digits' => 'Le champ :attribute doit contenir au moins :min chiffres.',
    'missing' => 'Le champ :attribute doit être absent.',
    'missing_if' => 'Le champ :attribute doit être absent quand :other vaut :value.',
    'missing_unless' => 'Le champ :attribute doit être absent sauf si :other vaut :value.',
    'missing_with' => 'Le champ :attribute doit être absent quand :values est présent.',
    'missing_with_all' => 'Le champ :attribute doit être absent quand :values sont présents.',
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'not_regex' => 'Le format du champ :attribute est invalide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le champ :attribute doit contenir au moins une majuscule et une minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le champ :attribute est apparu dans une fuite de données. Veuillez choisir une autre valeur.',
    ],
    'present' => 'Le champ :attribute doit être présent.',
    'present_if' => 'Le champ :attribute doit être présent quand :other vaut :value.',
    'present_unless' => 'Le champ :attribute doit être présent sauf si :other vaut :value.',
    'present_with' => 'Le champ :attribute doit être présent quand :values est présent.',
    'present_with_all' => 'Le champ :attribute doit être présent quand :values sont présents.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit quand :other vaut :value.',
    'prohibited_if_accepted' => 'Le champ :attribute est interdit quand :other est accepté.',
    'prohibited_if_declined' => 'Le champ :attribute est interdit quand :other est refusé.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other fait partie de :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour : :values.',
    'required_if' => 'Le champ :attribute est obligatoire quand :other vaut :value.',
    'required_if_accepted' => 'Le champ :attribute est obligatoire quand :other est accepté.',
    'required_if_declined' => 'Le champ :attribute est obligatoire quand :other est refusé.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other fait partie de :values.',
    'required_with' => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire quand :values sont présents.',
    'required_without' => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire quand aucun de :values n\'est présent.',
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le fichier :attribute doit faire :size kilo-octets.',
        'numeric' => 'Le champ :attribute doit être égal à :size.',
        'string' => 'Le champ :attribute doit contenir :size caractères.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'une des valeurs suivantes : :values.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded' => 'Le téléversement du fichier :attribute a échoué.',
    'uppercase' => 'Le champ :attribute doit être en majuscules.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'ulid' => 'Le champ :attribute doit être un ULID valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Messages de validation personnalisés
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'date_fin' => [
            'after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',
        ],
        'nombre_heures' => [
            'min' => 'Le nombre d\'heures doit être d\'au moins :min heures.',
            'max' => 'Le nombre d\'heures ne doit pas dépasser :max heures.',
        ],
        'candidat_telephone' => [
            'regex' => 'Le téléphone du candidat doit être au format +41 XX XXX XX XX.',
        ],
        'chef_projet_telephone' => [
            'regex' => 'Le téléphone du chef de projet doit être au format +41 XX XXX XX XX.',
        ],
        'expert1_telephone' => [
            'regex' => 'Le téléphone de l\'expert 1 doit être au format +41 XX XXX XX XX.',
        ],
        'expert2_telephone' => [
            'regex' => 'Le téléphone de l\'expert 2 doit être au format +41 XX XXX XX XX.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Noms d'attributs personnalisés
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'candidat_nom' => 'nom du candidat',
        'candidat_prenom' => 'prénom du candidat',
        'candidat_email' => 'e-mail du candidat',
        'candidat_telephone' => 'téléphone du candidat',
        'lieu_travail' => 'lieu de travail',
        'orientation' => 'orientation',

        'chef_projet_nom' => 'nom du chef de projet',
        'chef_projet_prenom' => 'prénom du chef de projet',
        'chef_projet_email' => 'e-mail du chef de projet',
        'chef_projet_telephone' => 'téléphone du chef de projet',

        'expert1_nom' => 'nom de l\'expert 1',
        'expert1_prenom' => 'prénom de l\'expert 1',
        'expert1_email' => 'e-mail de l\'expert 1',
        'expert1_telephone' => 'téléphone de l\'expert 1',

        'expert2_nom' => 'nom de l\'expert 2',
        'expert2_prenom' => 'prénom de l\'expert 2',
        'expert2_email' => 'e-mail de l\'expert 2',
        'expert2_telephone' => 'téléphone de l\'expert 2',

        'date_debut' => 'date de début',
        'date_fin' => 'date de fin',
        'heure_matin_debut' => 'heure de début du matin',
        'heure_matin_fin' => 'heure de fin du matin',
        'heure_aprem_debut' => 'heure de début de l\'après-midi',
        'heure_aprem_fin' => 'heure de fin de l\'après-midi',
        'pause_matin_debut' => 'début de la pause du matin',
        'pause_matin_fin' => 'fin de la pause du matin',
        'pause_aprem_debut' => 'début de la pause de l\'après-midi',
        'pause_aprem_fin' => 'fin de la pause de l\'après-midi',
        'nombre_heures' => 'nombre d\'heures',

        'planning_analyse' => 'planning analyse',
        'planning_implementation' => 'planning implémentation',
        'planning_tests' => 'planning tests',
        'planning_documentation' => 'planning documentation',

        'procedure' => 'procédure',

        'titre_projet' => 'titre du projet',
        'materiel_logiciel' => 'matériel et logiciel',
        'prerequis' => 'prérequis',
        'descriptif_projet' => 'descriptif du projet',
        'livrables' => 'livrables',

        'jours_ecole' => 'jours d\'école',
        'jours_ecole.*' => 'jour d\'école',
        'jours_feries' => 'jours fériés',
        'jours_cours_recuperer' => 'jours de cours à récupérer',

        'fields' => 'champs personnalisés',
        'fields.*.name' => 'nom du champ',
        'fields.*.label' => 'libellé du champ',
        'fields.*.field_type_id' => 'type de champ',
        'fields.*.value' => 'valeur du champ',
        'new_fields' => 'nouveaux champs',
        'new_fields.*.name' => 'nom du nouveau champ',
        'new_fields.*.label' => 'libellé du nouveau champ',
        'new_fields.*.field_type_id' => 'type du nouveau champ',
        'new_fields.*.value' => 'valeur du nouveau champ',
        'deleted_fields' => 'champs supprimés',

        'name' => 'nom',
        'email' => 'adresse e-mail',
        'password' => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
        'current_password' => 'mot de passe actuel',
        'role' => 'rôle',
    ],

];
