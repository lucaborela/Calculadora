<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function telainicial()
    {
       return view ('telainicial');
    }
   public function soma()
   {
      return view ('soma');
   }

   public function subtração()
   {
      return view ('subtração');
   }
   public function multiplicação()
   {
      return view ('multiplicação');
   }
   public function divisão()
   {
      return view ('divisão');
   }

  
 
   public function somar(Request $request)
   {
       $valor1 = $request->valor1;
       $valor2 = $request->valor2;
       $resultado=$valor1+$valor2;
       return  view ( 'resultado' , compact ( 'valor1' , 'valor2' , 'resultado' ));


   }



   public function subtrair (Request $request)
   {
       $valor1 = $request->valor1;
       $valor2 = $request->valor2;
       $resultado=$valor1-$valor2;
       return  view ( 'resultado' , compact ( 'valor1' , 'valor2' , 'resultado' ));


   }
   public function multiplicar (Request $request)
   {
       $valor1 = $request->valor1;
       $valor2 = $request->valor2;
       $resultado=$valor1*$valor2;
       return  view ( 'resultado' , compact ( 'valor1' , 'valor2' , 'resultado' ));


   }
   public function dividir (Request $request)
   {
       $valor1 = $request->valor1;
       $valor2 = $request->valor2;
       $resultado=$valor1/$valor2;
       return  view ( 'resultado' , compact ( 'valor1' , 'valor2' , 'resultado' ));


   }
   

  

}
