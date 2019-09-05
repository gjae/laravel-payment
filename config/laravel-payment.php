<?php
return [

    /*
     * |--------------------------------------------------------------------------
     * | Meotodo de pago por defecto en la plataforma
     * |--------------------------------------------------------------------------
     * | Metodo por defecto a ser utilizado dentro de la aplicación
     * | puede existir todos los metodos necesarios 
     * |
     */
    'method'            => env('DEFAULT_PAYMENT_METHOD', 'default'),

    /*
     * |--------------------------------------------------------------------------
     * | Unidad monetaria
     * |--------------------------------------------------------------------------
     * | Agregar aquí el codigo ISO de la divisa que sera usada
     * | en las trasacciones de los pagos
     * |
     */
    'money_unity'       => env('PAYMENT_MONEY_UNITY', 'USD'),

    /*
     * |--------------------------------------------------------------------------
     * | Credenciales de la plataforma de pago
     * |--------------------------------------------------------------------------
     * | Este arreglo contiene las credenciales necesarias para la plataforma de pago
     * | a medida que se requiera un nuevos metodos de pago, se debe agregar en este
     * | arreglo
     * |
     */
    'credentials'       => [

        'default'   => [
            'key'  => env('PAYMENT_SECRET_KEY', ''),
            'user' => env('PAYMENT_USER' ,'')
        ]

    ],

    /*
     * |--------------------------------------------------------------------------
     * | Urls de los checkouts
     * |--------------------------------------------------------------------------
     * | Agregar aqui los metodos necesarios con las url de los checkouts
     * | de cada plataforma
     * |
     */
    'url_checkout'       => [

        'default'   => env('PAYMENT_URL_CHECKOUT', '')

    ],

    /*
     * |--------------------------------------------------------------------------
     * | Url de redirección
     * |--------------------------------------------------------------------------
     * | Arreglo de urls de redireccion de las plataformas que se usan para el pago
     * |
     */
    'url_response'       => [
        'default'   => env('PAYMENT_URL_BACK', '')
    ]

];