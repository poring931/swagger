<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 * @OA\Post(
 *     path="/api/tariffs",
 *     summary="Создать элемент",
 *     tags={"Tariff"},
 *     security={{"bearerAuth":{}}},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Tariff name"),
 *                     @OA\Property(property="price", type="integer", example="40")
 *                 ),
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response="200",
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example="1"),
 *                 @OA\Property(property="name", type="string", example="Tariff name"),
 *                 @OA\Property(property="price", type="integer", example="40")
 *              )
 *         )
 *     ),
 *),
 * @OA\Get(
 *        path="/api/tariffs/{tariff}",
 *        summary="Получить элемент",
 *        tags={"Tariff"},
 *        security={{"bearerAuth":{}}},
 *
 *      @OA\Parameter(
 *          description="ID тарифа",
 *          in="path",
 *          name="tariff",
 *          required=true,
 *          example=1
 *      ),
 *        @OA\Response(
 *            response="200",
 *            description="OK",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="object",
 *                        @OA\Property(property="id", type="integer", example="1"),
 *                        @OA\Property(property="name", type="string", example="Tariff name"),
 *                        @OA\Property(property="price", type="integer", example="40")
 *                 )
 *            )
 *        ),
 * ),
 * @OA\Get(
 *      path="/api/tariffs",
 *      summary="Получить список элементов",
 *      tags={"Tariff"},
 *      security={{"bearerAuth":{}}},
 *
 *      @OA\Response(
 *          response="200",
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array",
 *                  @OA\Items(
 *                      @OA\Property(property="id", type="integer", example="1"),
 *                      @OA\Property(property="name", type="string", example="Tariff name"),
 *                      @OA\Property(property="price", type="integer", example="40")
 *                  )
 *               )
 *          )
 *      ),
 * ),
 * @OA\Patch(
 *         path="/api/tariffs/{tariff}",
 *         summary="Обновить элемент",
 *         tags={"Tariff"},
 *         security={{"bearerAuth":{}}},
 *
 *       @OA\Parameter(
 *           description="ID тарифа",
 *           in="path",
 *           name="tariff",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Tariff name"),
 *                      @OA\Property(property="price", type="integer", example="40")
 *                  ),
 *              }
 *          )
 *      ),
 *      @OA\Response(
 *             response="200",
 *             description="OK",
 *             @OA\JsonContent(
 *                 @OA\Property(property="data", type="array",
 *                     @OA\Items(
 *                         @OA\Property(property="id", type="integer", example="1"),
 *                         @OA\Property(property="name", type="string", example="Tariff name"),
 *                         @OA\Property(property="price", type="integer", example="40")
 *                     )
 *                  )
 *             )
 *       ),
 *  ),
 * @OA\Delete(
 *         path="/api/tariffs/{tariff}",
 *         summary="Удалить элемент",
 *         tags={"Tariff"},
 *         security={{"bearerAuth":{}}},
 *
 *       @OA\Parameter(
 *           description="ID тарифа",
 *           in="path",
 *           name="tariff",
 *           required=true,
 *           example=1
 *       ),
 *         @OA\Response(
 *             response="200",
 *             description="OK",
 *             @OA\JsonContent(
 *                 @OA\Property(property="message", type="string", example="done")
 *             )
 *         ),
 *  ),
 *
 */
class TariffController extends Controller
{
}
