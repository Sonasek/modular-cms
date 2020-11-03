<?php

return [
    'page_title' => 'Administrační rozhraní',
    'form' => [
        'title' => 'Přihlašení',
        'name' => 'Přihlašovací jméno',
        'name_placeholder' => 'Prosím zadejte Vaše přihlašovací jméno',
        'password' => 'Heslo',
        'password_placeholder' => 'Prosím zadejte Vaše heslo',
        'buttom' => 'Přihlásit',
        'errors' => [
            'login' => [
                'required' => 'Pro přihlášení musíte vyplnit email.',
                'email' => 'Neplatný formát emailu.',
            ],
            'password' => [
                'required' => 'Pro přihlášení musíte vyplnit heslo.',
                'min' => 'Heslo musí mít minimálně 8 znaků.',
            ],
            'flash' => [
                'bad_credentials' => 'Neplatné přihlašovací údaje.'
            ],
        ],
    ],
];
