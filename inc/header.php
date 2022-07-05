<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    
    <link href="img/system/iconoPagina.ico?v=<?php echo $parametro['webversion']; ?>" 
    rel="icon" type="image/x-icon">
    
    <?php        
        for($f=0; $f < count($varAccesos['framework']); $f++){                        
                
            switch($varAccesos['framework'][$f]){                                                
                case 'bootstrap';                       
                    echo '<link href="lib/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>';
                    echo '<link href="lib/css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>';
                break;
            }         
            
            
        }

    ?>
 
    
    <link href="css/system.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>    
    <link href="css/<?php echo $pagina; ?>.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>
        
    <div class="container">