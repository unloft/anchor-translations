<?php

return [

    'extend' => 'Impostazioni',

    'fields'      => 'Campi Personalizzati',
    'fields_desc' => 'Crea un campo addizionale per le tue pagine e post',

    'pagetypes'      => 'Tipi di Pagina',
    'pagetypes_desc' => 'Crea differenti tipi di pagina',

    'variables'      => 'Variabili del sito',
    'variables_desc' => 'Crea campi meta addizionali per il tuo sito',

    'create_field'         => 'Crea un nuovo campo personalizzato',
    'editing_custom_field' => 'Modifica campo &ldquo;%s&rdquo;',
    'nofields_desc'        => 'Non ci sono ancora campi',

    'create_variable'  => 'Crea una nuova variabile',
    'editing_variable' => 'Modifica variabile &ldquo;%s&rdquo;',
    'novars_desc'      => 'Non ci sono ancora variabili',

    'create_pagetype'  => 'Crea un nuovo tipo di Pagina',
    'editing_pagetype' => 'Modifica tipo pagina &ldquo;%s&rdquo;',

    // form fields
    'type'             => 'Tipo',
    'type_explain'     => 'Il tipo di contenuto che vuoi aggiungere a questa pagina',
    'notypes_desc'     => 'Non ci sono ancora tipi di pagina',

    'pagetype'         => 'Tipi di Pagina',
    'pagetype_explain' => 'A che tipo di pagina vuoi aggiungere questo campo',

    'field'         => 'Campo',
    'field_explain' => 'tipo di input: HTML',

    'key'         => 'Chiave univoca',
    'key_explain' => 'La chiave univoca del tuo campo',
    'key_missing' => 'Si prega di inserire una chiave univoca',
    'key_exists'  => 'La chiave è stata già utilizzata',

    'label'         => 'Etichetta',
    'label_explain' => 'Campo leggibile quando questo campo verrà visualizzato nella modifica di post o pagine',
    'label_missing' => 'Si prega di inserire una etichetta',

    'attribute_type'                => 'Tipi di File',
    'attribute_type_explain'        => 'Separare con una virgola i tipi di estensione accettati, lascire vuoto per accettare tutto',

    // images
    'attributes_size_width'         => 'Massima larghezza immagine',
    'attributes_size_width_explain' => 'L immagine sarà ridimensionata se risulta più grande della massima altezza consentita',

    'attributes_size_height'         => 'Massima altezza immagine',
    'attributes_size_height_explain' => 'L immagine sarà ridimensionata se risulta più grande della massima altezza consentita',

    // custom vars
    'name'                           => 'Nome',
    'name_explain'                   => 'Nome univoco',
    'name_missing'                   => 'Si prega di inserire un nome univoco',
    'name_exists'                    => 'Il nome è gia stato utilizzato',

    'value'             => 'Valore',
    'value_explain'     => 'I dati che vuoi memorizzare (fino a 64kb)',
    'value_code_snipet' => 'Snippet da inserire nel modello:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

    // messages
    'variable_created'  => 'La tua variabile è stata creata',
    'variable_updated'  => 'La tua variabile è stata aggiornata',
    'variable_deleted'  => 'La tua variabile è stata eliminata',

    'pagetype_created' => 'Il tuo Tipo di Pagina è stato creato',
    'pagetype_updated' => 'Il tuo Tipo di Pagina è stato aggiornato',
    'pagetype_deleted' => 'Il tuo Tipo di Pagina è sttao eliminato',

    'field_created' => 'Il tuo campo è stato creato',
    'field_updated' => 'Il tuo campo è stato aggiornato',
    'field_deleted' => 'Il tuo campo è stato eliminato'

];
