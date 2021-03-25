<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
<link href = "https://fonts.googleapis.com/css2? family = Noto + Sans + HK: wght @ 700 & display = swap "rel =" stylesheet ">
</head>
<style> 
    body{
        família da fonte: 'Noto Sans HK', sans-serif;
    }
    </style>
    <body>
    <div class="container" >
          
           <div class="row mt-5">
            
              </div>
              <a class="btn btn-primary btn-sm" href="telainicial" role="button">Tela inicial</a>
           <div class="row mt-3">
            <H1>Multiplicação</H1>
            <div class="row">
    
            <form method="POST" action ="{{route ('multiplicar')}}" >
             @csrf
    
    
      <div class="mb-3">
        <label for="primeiroValor" class="form-label">Primeiro valor</label >
        <input type="number" class="form-control" id="primeiroValor" name="valor1">
       
      </div>
      <div class="mb-3">
        <label for="segundoValor" class="form-label">Segundo valor</label >
         <input type="number" class="form-control" id="segundoValor" name="valor2">
       
      </div>
     
      
      <button type="submit" class="btn btn-primary">multiplicar</button>
    </form>
            
    
            </div>
            
               </div>
             <div class="row mt-12">
                Todos os direitos reservados - Luca Abreu Borela , 2021.
               </div>
    
    
    </div>
      
    </body>
    </html>