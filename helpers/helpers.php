<?php 

function routerConfig():string
{
    $rota = "http://localhost/app-barbeiros";
    return $rota;
}

function LinkCdn(){
    $link = routerConfig()."/Public/";
    return $link;
 }
 
 function Assests(string $path){
     echo LinkCdn()."{$path}";
 }

function redirect(string $to){
    return header("Location: {$to}");
}

function redirectBack(){
    $paginaAnterior = $_SERVER['HTTP_REFERER'];
    return header("Location: {$paginaAnterior}"); 
}


function messageSuccess(string $message, string $id = null){
    $alerta = "
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    {$message}
    </div>

  ";
   return $alerta;
}

function messageError(string $message, string $id = null){
   $alerta = "<p class='alert alert-danger' id='{$id}'>{$message}</p>";
   return $alerta;
}

function messageWarning(string $message, string $id = null){
    $alerta = "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    {$message}
    </div>

  ";
   return $alerta;
}


function sweetAlertSuccess(string $message, string $title = null){

    if($title == "" OR $title == null){
        $title = "Não está esquecendo algo";
     }

    $sweet = "
    <script>

    function alert(){
        Swal.fire({
            icon: 'success',
            title: '$title',
            text: '$message',
          });
    }

    alert();
    
    </script>
";

return $sweet;
}

function sweetAlertWarning(string $message, string $title = null){
   
    if($title == "" OR $title == null){
       $title = "Não está esquecendo algo";
    }

    $sweet = "
    <script>

    function alert(){
        Swal.fire({
            icon: 'info',
            title: '$title',
            text: '$message',
          });
    }

    alert()

   
    </script>
";

return $sweet;
}

function sweetAlertError(string $message){
  $sweet = "
      <script>
      function alert(){
        Swal.fire({
            icon: 'error',
            title: 'Ocorreu um erro',
            text: '$message',
          });
      }

      alert()
        
     
      </script>
  ";
  
  return $sweet;
}


function formatarNumero($numero) {
    if ($numero >= 1000000000) {
        // Bilhões
        $valor = $numero / 1000000000;
        $sufixo = 'B';
    } elseif ($numero >= 1000000) {
        // Milhões
        $valor = $numero / 1000000;
        $sufixo = 'M';
    } elseif ($numero >= 1000) {
        // Milhares
        $valor = $numero / 1000;
        $sufixo = 'K';
    } else {
        // Menor que mil
        return (string)$numero;
    }

    // Formatar o valor para uma representação adequada
    if ($valor == (int)$valor) {
        // Se o valor é inteiro, não mostrar casas decimais
        return (int)$valor . $sufixo;
    } else {
        // Caso contrário, mostrar no máximo duas casas decimais
        return number_format($valor, 2, '.', '') . $sufixo;
    }
}


