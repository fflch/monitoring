<?php

$admin = [
    [
        'text' => '<i class="fas fa-atom"></i>  SubItem 1',
        'url' => 'subitem1',
    ],
    [
        'text' => 'SubItem 2',
        'url' =>  '/subitem2',
        'can' => 'admin',
    ],
    [
        'type' => 'divider',
    ],
    [
        'type' => 'header',
        'text' => 'Cabeçalho',
    ],
    [
        'text' => 'SubItem 3',
        'url' => 'subitem3',
    ],
];

$submenu2 = [
    [
        'text' => 'SubItem 1',
        'url' => 'subitem1',
    ],
    [
        'text' => 'SubItem 2',
        'url' => 'subitem2',
        'can' => 'admin',
    ],
];

$menu = [
    /*
    [
        'text' => 'Está logado',
        'url' => config('app.url') . '/logado', // com caminho absoluto
        'can' => 'user',
    ],
    [
        'text' => 'Menu gerente',
        'url' => 'gerente',
        'can' => 'gerente',
    ],
    [
        'text' => 'Menu admin',
        'submenu' => $admin,
        'can' => 'admin',
    ],
    */
    [
        'text' => 'Equipamentos',
        'can' => 'admin',

        'submenu' => [
            [
                'text' => 'Cadastrar equipamento',
                'url'  => '/equipamentos/create',
                'can' => 'admin', 
            ],
            [
                'type' => 'divider',
            ],
            [
                'text' => 'Equipamentos cadastrados',
                'url'  => '/equipamentos',
                'can' => 'admin', 
            ],
        ],
    ],
    [
        'text' => 'Salas',
        'can' => 'admin',

        'submenu' => [
            [
                'text' => 'Cadastrar sala',
                'url'  => '/salas/create',
                'can' => 'admin', 
            ],
            [
                'type' => 'divider',
            ],
            [
                'text' => 'Salas cadastradas',
                'url'  => '/salas',
                'can' => 'admin', 
            ],
        ]
    ],
    [
        'text' => ' proaluno Letras',
        'url' => '/letras',
    ],
    [
        'text' => 'Proaluno Geografia e História',
        'url' => '/histgeo',
    ],
    [
        'text' => 'Proaluno Filosofia e ciências sociais',
        'url' => '/sociais',
    ],
];

$right_menu = [
    [
        // menu utilizado para views da biblioteca senhaunica-socialite.
        'key' => 'senhaunica-socialite',
    ],
    [
        'text' => '<i class="fas fa-cog"></i>',
        'title' => 'Configurações',
        'target' => '_blank',
        'url' => config('app.url') . '/item1',
        'align' => 'right',
    ],
];


return [
    # valor default para a tag title, dentro da section title.
    # valor pode ser substituido pela aplicação.
    'title' => config('app.name'),

    # USP_THEME_SKIN deve ser colocado no .env da aplicação 
    'skin' => env('USP_THEME_SKIN', 'uspdev'),

    # chave da sessão. Troque em caso de colisão com outra variável de sessão.
    'session_key' => 'laravel-usp-theme',

    # usado na tag base, permite usar caminhos relativos nos menus e demais elementos html
    # na versão 1 era dashboard_url
    'app_url' => config('app.url'),

    # login e logout
    'logout_method' => 'POST',
    'logout_url' => 'logout',
    'login_url' => 'login',

    # menus
    'menu' => $menu,
    'right_menu' => $right_menu,
];
