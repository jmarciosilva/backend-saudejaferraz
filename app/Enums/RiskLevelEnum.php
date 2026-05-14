<?php

namespace App\Enums;

/**
 * |--------------------------------------------------------------------------
 * | Enum de Nível de Risco
 * |--------------------------------------------------------------------------
 * |
 * | Responsável por representar os níveis
 * | de risco da triagem simplificada.
 * |
 * | IMPORTANTE:
 * | Este sistema NÃO realiza diagnóstico médico.
 * | Apenas auxilia no direcionamento inicial.
 * |
 */
enum RiskLevelEnum: string
{
    case LOW = 'LOW';

    case MODERATE = 'MODERATE';

    case HIGH = 'HIGH';

    case CRITICAL = 'CRITICAL';
}
