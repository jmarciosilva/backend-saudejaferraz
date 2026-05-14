<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Documentação padrão
    |--------------------------------------------------------------------------
    |
    | Define qual documentação será utilizada como padrão pelo Swagger.
    |
    */

    'default' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Configurações das documentações
    |--------------------------------------------------------------------------
    */

    'documentations' => [

        'default' => [

            /*
            |--------------------------------------------------------------------------
            | Informações da API
            |--------------------------------------------------------------------------
            */

            'api' => [
                'title' => 'API SaúdeJá Ferraz',
            ],

            /*
            |--------------------------------------------------------------------------
            | Rotas da documentação
            |--------------------------------------------------------------------------
            */

            'routes' => [

                /*
                 * URL responsável por exibir a interface Swagger UI
                 */
                'api' => 'api/documentation',
            ],

            /*
            |--------------------------------------------------------------------------
            | Configurações de caminhos
            |--------------------------------------------------------------------------
            */

            'paths' => [

                /*
                 * Utiliza caminho absoluto para assets da interface Swagger
                 */
                'use_absolute_path' => env('L5_SWAGGER_USE_ABSOLUTE_PATH', true),

                /*
                 * Caminho dos assets da interface Swagger UI
                 */
                'swagger_ui_assets_path' => env(
                    'L5_SWAGGER_UI_ASSETS_PATH',
                    'vendor/swagger-api/swagger-ui/dist/'
                ),

                /*
                 * Nome do arquivo JSON gerado pela documentação
                 */
                'docs_json' => 'api-docs.json',

                /*
                 * Nome do arquivo YAML gerado pela documentação
                 */
                'docs_yaml' => 'api-docs.yaml',

                /*
                 * Formato utilizado pela interface Swagger
                 * Valores possíveis:
                 * - json
                 * - yaml
                 */
                'format_to_use_for_docs' => env(
                    'L5_FORMAT_TO_USE_FOR_DOCS',
                    'json'
                ),

                /*
                |--------------------------------------------------------------------------
                | Diretórios escaneados pelo Swagger
                |--------------------------------------------------------------------------
                |
                | O Swagger irá procurar por:
                | - Attributes OpenAPI
                | - Endpoints
                | - Schemas
                | - Responses
                | - Requests
                |
                | IMPORTANTE:
                | Laravel 12 funciona melhor utilizando OpenApi\Attributes
                | ao invés das annotations antigas.
                |
                */

                'annotations' => [
                    base_path('app'),
                    base_path('routes'),
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Configurações padrão globais
    |--------------------------------------------------------------------------
    */

    'defaults' => [

        /*
        |--------------------------------------------------------------------------
        | Rotas internas do Swagger
        |--------------------------------------------------------------------------
        */

        'routes' => [

            /*
             * Endpoint responsável pelo JSON/YAML da documentação
             */
            'docs' => 'docs',

            /*
             * Callback OAuth2
             */
            'oauth2_callback' => 'api/oauth2-callback',

            /*
             * Middlewares aplicados nas rotas Swagger
             */
            'middleware' => [
                'api' => [],
                'asset' => [],
                'docs' => [],
                'oauth2_callback' => [],
            ],

            /*
             * Configurações extras de grupo de rotas
             */
            'group_options' => [],
        ],

        /*
        |--------------------------------------------------------------------------
        | Caminhos padrão
        |--------------------------------------------------------------------------
        */

        'paths' => [

            /*
             * Diretório onde os arquivos gerados serão armazenados
             */
            'docs' => storage_path('api-docs'),

            /*
             * Diretório das views customizadas
             */
            'views' => resource_path('views/vendor/l5-swagger'),

            /*
             * Base path da API
             */
            'base' => env('L5_SWAGGER_BASE_PATH', null),

            /*
             * Diretórios excluídos do scan
             */
            'excludes' => [],
        ],

        /*
        |--------------------------------------------------------------------------
        | Configurações do scanner OpenAPI
        |--------------------------------------------------------------------------
        */

        'scanOptions' => [

            /*
             * Configuração de processors do swagger-php
             */
            'default_processors_configuration' => [],

            /*
             * Analisador padrão
             */
            'analyser' => null,

            /*
             * Analysis personalizada
             */
            'analysis' => null,

            /*
             * Processadores customizados
             */
            'processors' => [

                // Exemplo:
                // new \App\SwaggerProcessors\SchemaQueryParameter(),
            ],

            /*
             * Padrão de arquivos escaneados
             */
            'pattern' => '*.php',

            /*
             * Diretórios excluídos do scan
             */
            'exclude' => [],

            /*
             * Versão da especificação OpenAPI
             */
            'open_api_spec_version' => env(
                'L5_SWAGGER_OPEN_API_SPEC_VERSION',
                \L5Swagger\Generator::OPEN_API_DEFAULT_SPEC_VERSION
            ),
        ],

        /*
        |--------------------------------------------------------------------------
        | Segurança da API
        |--------------------------------------------------------------------------
        */

        'securityDefinitions' => [

            'securitySchemes' => [

                /*
                 * Configuração futura para Sanctum
                 */
                'sanctum' => [

                    'type' => 'apiKey',

                    'description' => 'Autenticação via Bearer Token',

                    'name' => 'Authorization',

                    'in' => 'header',
                ],
            ],

            'security' => [
                [
                    'sanctum' => [],
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Geração automática
        |--------------------------------------------------------------------------
        */

        /*
         * Regenera automaticamente em ambiente local
         */
        'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', true),

        /*
         * Gera também cópia YAML
         */
        'generate_yaml_copy' => env(
            'L5_SWAGGER_GENERATE_YAML_COPY',
            false
        ),

        /*
         * Configuração de proxy reverso
         */
        'proxy' => false,

        /*
         * URL adicional de configuração Swagger
         */
        'additional_config_url' => null,

        /*
         * Ordenação das operações
         */
        'operations_sort' => env(
            'L5_SWAGGER_OPERATIONS_SORT',
            null
        ),

        /*
         * URL de validação Swagger
         */
        'validator_url' => null,

        /*
        |--------------------------------------------------------------------------
        | Configurações visuais da interface Swagger
        |--------------------------------------------------------------------------
        */

        'ui' => [

            'display' => [

                /*
                 * Habilita modo escuro
                 */
                'dark_mode' => env(
                    'L5_SWAGGER_UI_DARK_MODE',
                    false
                ),

                /*
                 * Expansão inicial da documentação
                 */
                'doc_expansion' => env(
                    'L5_SWAGGER_UI_DOC_EXPANSION',
                    'none'
                ),

                /*
                 * Habilita filtro de endpoints
                 */
                'filter' => env(
                    'L5_SWAGGER_UI_FILTERS',
                    true
                ),
            ],

            'authorization' => [

                /*
                 * Mantém autenticação persistida no navegador
                 */
                'persist_authorization' => env(
                    'L5_SWAGGER_UI_PERSIST_AUTHORIZATION',
                    false
                ),

                'oauth2' => [

                    /*
                     * Suporte PKCE
                     */
                    'use_pkce_with_authorization_code_grant' => false,
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Constantes utilizadas na documentação
        |--------------------------------------------------------------------------
        */

        'constants' => [

            'L5_SWAGGER_CONST_HOST' => env(
                'L5_SWAGGER_CONST_HOST',
                'http://127.0.0.1:8000'
            ),
        ],
    ],
];
