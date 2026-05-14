<?php

namespace App\Enums;

/**
 * |--------------------------------------------------------------------------
 * | Enum de Nível de Lotação
 * |--------------------------------------------------------------------------
 * |
 * | Responsável por representar os níveis
 * | de lotação das unidades de saúde.
 * |
 * | Utilizado em:
 * | - painel de filas;
 * | - relatos colaborativos;
 * | - indicadores operacionais.
 * |
 */
enum QueueLevelEnum: string
{
    case LOW = 'LOW';

    case MEDIUM = 'MEDIUM';

    case HIGH = 'HIGH';

    case CRITICAL = 'CRITICAL';
}
