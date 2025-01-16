<?php

namespace App\Http\Controllers;

/*
 * @OA\SecurityScheme(
 *     securityScheme="passport",
 *     type="oauth2",
 *     description="OAuth2 Password Grant",
 *     @OA\Flow(
 *         flow="password",
 *         authorizationUrl="https://api.luxima.id/oauth/authorize",
 *         tokenUrl="https://api.luxima.id/oauth/token",
 *         refreshUrl="https://api.luxima.id/oauth/token",
 *         scopes={
 *             "add-user": "Add New user details",
 *             "edit-user": "Edit user details",
 *             "delete-user": "Delete user details"
 *         }
 *     )
 * )
 * 
 */

abstract class Controller
{
    //
}
