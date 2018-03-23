<?php

return [

    'users' => 'Utenti',

    'create_user'           => 'Crea un nuovo utente',
    'add_user'              => 'Aggiungi un nuovo utente',
    'editing_user'          => 'Modifica Utente',
    'remembered'            => 'Conosco la Password',
    'forgotten_password'    => 'Password dimenticata?',

    // roles
    'administrator'         => 'Admin',
    'administrator_explain' => '',

    'editor'         => 'Editor',
    'editor_explain' => '',

    'user'              => 'Utente',
    'user_explain'      => '',

    // form fields
    'real_name'         => 'Nome dell\'utente',
    'real_name_explain' => '',

    'bio'         => 'Biografia',
    'bio_explain' => '',

    'status'         => 'Stato',
    'status_explain' => '',

    'role'         => 'Ruolo',
    'role_explain' => '',

    'username'         => 'Username',
    'username_explain' => '',
    'username_missing' => 'Si prega di inserire un unsername valido, deve contenere almeno %s caratteri',

    'password'           => 'Password',
    'password_explain'   => '',
    'password_too_short' => 'La Password deve contenere almeno %s caratteri',

    'new_password' => 'Nuova Password',

    'email'            => 'Email',
    'email_explain'    => '',
    'email_missing'    => 'Si prega di inserire un indirizzo di email valido',
    'email_not_found'  => 'Profilo non trovato',

    // messages
    'updated'          => 'Profilo utente aggiornato',
    'created'          => 'Profilo utente creato.',
    'deleted'          => 'Profilo utente eliminato.',
    'delete_error'     => 'Non puoi cancellare il tuo profilo',
    'login_error'      => 'Username o password errati.',
    'logout_notice'    => 'Ora siete disconnessi.',
    'recovery_sent'    => 'Ti abbiamo inviato un\'email per confermare la modifica della password.',
    'recovery_expired' => 'Il token di recupero password è scaduto, riprova.',
    'password_reset'   => 'La tua nuova password è stata impostata. Vai ed accedi ora!',

    // password recovery email
    'recovery_subject' => 'Password Reset',
    'recovery_message' => 'Hai richiesto di reimpostare la tua password.' .
                          'Per continuare segui il link sottostante.' . PHP_EOL . '%s',

];
