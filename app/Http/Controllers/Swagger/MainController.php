<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *     title="Doc Swagger API",
 *     version="1.0.0",
 * ),
 * @OA\PathItem(
 *     path="/api/",
 *),
 * @OA\Components(
 *     @OA\SecurityScheme(
 *         securityScheme="bearerAuth",
 *         type="http",
 *         scheme="bearer",
 *     )
 * )
 */
class MainController extends Controller
{
    //
}
