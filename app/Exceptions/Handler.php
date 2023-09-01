<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs tat are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (NotFoundHttpException $e, Request $request) {

            if ($request->is('api/*')) {

                return response()->json(['message' => 'Resource not found.'], 404);
            }
        });
        

       $this->renderable(function(MethodNotAllowedHttpException $e, Request $request){


            if ($request->is('api/*')) {

                return response()->json(['message' => 'Something went wrong'], 500);

            }

        });

        $this->renderable(function (RouteNotFoundException $e, Request $request) {

            if ($request->is('api/*')) {

                return response()->json(['message' => 'Something went wrong'], 500);
            }
        });

        


    }
}
