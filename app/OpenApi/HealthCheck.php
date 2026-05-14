<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

/**
 * |--------------------------------------------------------------------------
 * | Endpoint de Health Check da API
 * |--------------------------------------------------------------------------
 * |
 * | Endpoint responsável por validar se a API está online.
 * | Utilizado para:
 * | - monitoramento;
 * | - testes iniciais;
 * | - validação do Swagger;
 * | - health checks futuros.
 * |
 */
#[OA\Get(
    path: '/api/health',
    summary: 'Verifica status da API',
    description: 'Endpoint responsável por validar se a API está online.',
    tags: ['Health Check']
)]

#[OA\Response(
    response: 200,
    description: 'API online'
)]

class HealthCheck
{
    //
}
