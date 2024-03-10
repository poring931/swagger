<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 * @OA\Post(
 *     path="/api/auth/login",
 *     summary="Получить токен",
 *     tags={"User"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="password", type="string", example="qweasdzxc"),
 *                     @OA\Property(property="email", type="string", example="user@mail.ru")
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
 *                 @OA\Property(property="access_token", type="string", example="1sad123edfcvfbtrdegewtgfergt"),
 *                 @OA\Property(property="token_type", type="string", example="bearer"),
 *                 @OA\Property(property="expires_in", type="integer", example="3600")
 *              )
 *         )
 *     ),
 *)
 */
class UserController extends Controller
{
}
