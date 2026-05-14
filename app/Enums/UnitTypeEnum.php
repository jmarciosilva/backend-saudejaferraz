<?php

namespace App\Enums;

/**
 * |--------------------------------------------------------------------------
 * | Enum de Tipos de Unidade de Saúde
 * |--------------------------------------------------------------------------
 * |
 * | Responsável por representar os tipos de unidades
 * | disponíveis na plataforma SaúdeJá Ferraz.
 * |
 * | Objetivos:
 * | - padronizar valores;
 * | - evitar strings mágicas;
 * | - facilitar validações;
 * | - melhorar manutenção.
 * |
 */
enum UnitTypeEnum: string
{
    case UBS = 'UBS';

    case UPA = 'UPA';

    case HOSPITAL = 'HOSPITAL';
}
