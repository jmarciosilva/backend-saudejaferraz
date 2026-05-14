<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

/**
 * |--------------------------------------------------------------------------
 * | Trait de Resposta Padronizada da API
 * |--------------------------------------------------------------------------
 * |
 * | Responsável por padronizar todas as respostas JSON
 * | da aplicação SaúdeJá Ferraz.
 * |
 * | Objetivos:
 * | - manter consistência da API;
 * | - facilitar integração com frontend Angular;
 * | - melhorar manutenção;
 * | - padronizar mensagens;
 * | - simplificar tratamento de erros.
 * |
 */
trait ApiResponseTrait
{
    /**
     * Retorna resposta de sucesso padronizada.
     */
    protected function successResponse(
        string $message = 'Operação realizada com sucesso.',
        mixed $data = null,
        int $statusCode = 200
    ): JsonResponse {

        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null,
        ], $statusCode);
    }

    /**
     * Retorna resposta de erro padronizada.
     */
    protected function errorResponse(
        string $message = 'Erro interno da aplicação.',
        mixed $errors = null,
        int $statusCode = 500
    ): JsonResponse {

        return response()->json([
            'success' => false,
            'message' => $message,
            'data' => null,
            'errors' => $errors,
        ], $statusCode);
    }
}
