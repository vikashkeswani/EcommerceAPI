<?php
namespace App\Exceptions ;
use Illuminate\Database\Eloquent\ModelNotFoundException ;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Illuminate\Http\Response;

trait  ExceptionTrait{
    public function apiException($request, $e){
        if($this->isModel($e)){
            return $this->ModelResponse() ;
        }

        if($this->isHttp($e)){
            return $this->HttpResponse() ;
        }

        return parent::render($request, $e) ;
    }

    public function isModel($e){
        return $e instanceof ModelNotFoundException ;
    }

    public function isHttp($e){
        return $e instanceof NotFoundHttpException ;
    }

    public function ModelResponse(){
        return response()->json([
            'errors'=> "Product Model Not Found!"],
            Response::HTTP_NOT_FOUND) ;
    }

    public function HttpResponse(){
        return response()->json([
            'errors'=> "Incorrect Requested Route!"],
            Response::HTTP_NOT_FOUND) ;

    }
}