<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

//    public function renderHttpException(HttpExceptionInterface $e){
//
//        $status = $e->getStatusCode();
//
//        if (Request::ajax() || Request::wantsJson()) {
//            return response()->json([], $status);
//        } else if(Request::is('backend/*')) { //Chane to your backend your !
//            return response()->view("backend/errors.{$status}", ['exception' => $e], $status, $e->getHeaders());
//        }else {
//            return response()->view("frontEnd.errors.{$status}", ['exception' => $e], $status, $e->getHeaders());
//        }
//
//    }
}
