<?php
    $path = "TESTE";
    $diretorio = dir($path);

    $mes01 = '17_01';
    $mes02 = '17_02';
    $mes03 = '17_03';
    $mes04 = '17_04';
    $mes05 = '17_05';
    $mes06 = '17_06';
    $mes07 = '17_07';
    $mes08 = '17_08';
    $mes09 = '17_09';
    $mes10 = '17_10';
    $mes11 = '17_11';
    $mes12 = '17_12';

    

    echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br /><br><br>";
    while($arquivo = $diretorio -> read()){
        if (strpos($arquivo, $mes01)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes01.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes02)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes02.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes03)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes03.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes04)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes04.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes05)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes05.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes06)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes06.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes07)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes07.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes08)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes08.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes09)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes09.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes10)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes10.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes11)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes11.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        if (strpos($arquivo, $mes12)){                           
            $xcopy = 'echo f | xcopy "C:\xampp\htdocs\TR\TESTE\\' . $arquivo . '" "C:\xampp\htdocs\TR\TESTE\\'. $mes12.'\\' . $arquivo . '" <br>';
            echo $xcopy; 
        }
        else{
            echo "<strong>############################</strong>";
        }
    //echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
    }
    $diretorio -> close();
?>
