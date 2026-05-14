<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'API SaúdeJá Ferraz',
    description: 'API pública da plataforma SaúdeJá Ferraz'
)]

#[OA\Server(
    url: 'http://127.0.0.1:8000',
    description: 'Servidor Local'
)]

class ApiDocumentation
{
    //
}