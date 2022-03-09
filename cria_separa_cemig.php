<?php
##################### Limpa Pastas dos arquivos antigos
echo exec('rd /q /s C:\xampp\htdocs\import-new\SYSTOOLS\SeparaCEMIG\CEMIG');

##################### Cria Pastas se Necessario
mkdir("CEMIG");
mkdir("CEMIG\ANDROMEDA I");
mkdir("CEMIG\ANDROMEDA II");
mkdir("CEMIG\ANDROMEDA III");
mkdir("CEMIG\ANDROMEDA IV");
mkdir("CEMIG\ANDROMEDA V");
mkdir("CEMIG\BURITIZEIRO I");
mkdir("CEMIG\BURITIZEIRO II");
mkdir("CEMIG\BURITIZEIRO III");
mkdir("CEMIG\BURITIZEIRO IV");
mkdir("CEMIG\BURITIZEIRO V");
mkdir("CEMIG\IBIA II");
mkdir("CEMIG\SEXTANS I");
mkdir("CEMIG\SEXTANS II");
mkdir("CEMIG\SEXTANS III");
mkdir("CEMIG\SEXTANS IV");
mkdir("CEMIG\SEXTANS V");
mkdir("CEMIG\SEXTANS EXTRAS");
mkdir("CEMIG\MILKWAY");
mkdir("CEMIG\SEM USINA");

require_once '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$usinas["ANDROMEDA I"] = 0;
$usinas["ANDROMEDA II"] = 0;
$usinas["ANDROMEDA III"] = 0;
$usinas["ANDROMEDA IV"] = 0;
$usinas["ANDROMEDA V"] = 0;
$usinas["BURITIZEIRO I"] = 0;
$usinas["BURITIZEIRO II"] = 0;
$usinas["BURITIZEIRO III"] = 0;
$usinas["BURITIZEIRO IV"] = 0;
$usinas["BURITIZEIRO V"] = 0;
$usinas["IBIA II"] = 0;
$usinas["SEXTANS I"] = 0;
$usinas["SEXTANS II"] = 0;
$usinas["SEXTANS III"] = 0;
$usinas["SEXTANS IV"] = 0;
$usinas["SEXTANS V"] = 0;
$usinas["SEXTANS EXTRAS"] = 0;
$usinas["MILKWAY"] = 0;
$usinas["SEM USINA"] = 0;

#####################
$file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($_FILES['arquivo']['tmp_name']);
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("$file_type");
$spreadsheet = $reader->load($_FILES['arquivo']['tmp_name']);
$data = $spreadsheet->getActivesheet()->toArray();
$concess = array();
$listafinal = array();
//$header = [];
##################### le Excel
foreach ($data as $key => $row) {
    $dados = array(
        'A' => $row[0],
        'B' => $row[1],
        'C' => $row[2],
        'D' => $row[3],
        'E' => $row[4],
        'F' => $row[5],
        'G' => $row[6],
        'H' => $row[7],
        'I' => $row[8],
        'J' => $row[9],
        'K' => $row[10],
        'L' => $row[11],
        'M' => $row[12],
        'N' => $row[13],
        'O' => $row[14],
        'P' => $row[15],
        'Q' => $row[16],
        'R' => $row[17],
        'S' => $row[18],
        'T' => $row[19],
        'U' => $row[20],
        'V' => $row[21],
    );
    // echo $dados["A"] . " | " . $dados["B"] . " | " . $dados["C"] . " | " . $dados["D"] . " | " . $dados["E"] . " | " . $dados["F"] . " | " . $dados["G"] . " | " . $dados["H"] . " | " . $dados["I"] . " | " . $dados["J"] . " | " . $dados["K"] . " | " . $dados["L"] . " | " . $dados["M"] . " | " . $dados["N"] . " | " . $dados["O"] . " | " . $dados["P"] . " | " . $dados["Q"] . " | " . $dados["R"] . " | " . $dados["S"] . " | " . $dados["T"] . " | " . $dados["U"] . " | " . $dados["V"] . "<br>";

    $posa = strpos($dados["A"], ":\\");

    if ($dados["A"] == "Arquivo" || $posa !== 1) {
        $a = 1;
    } else {
        ############### Arruma data
        $exploded = explode("/", $dados["G"]);
        @$dataok = "0" . $exploded[1] . "/" . $exploded[0] . "/" . $exploded[2];
        $dados["G"] = $dataok;

        $dataNome = str_replace("-", "", $dataok);
        $dataNome = str_replace("/", "", $dataNome);
        $dataNome = str_replace("T", "", $dataNome);
        $dataNome = str_replace(":", "", $dataNome);
        $dataNome = str_replace(".", "", $dataNome);

        ############### Fim Arruma data

        $exploded2 = explode("\\", $dados["A"]);
        //var_dump($exploded2);

        //echo $dados["A"]." | ".$dados["G"]."<br>";

        ##################### Separa e cria os Json's
        if ($exploded2[6] == "SEM_USINA") {
            $fp = fopen('CEMIG/SEM USINA/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEM USINA"] += 1;
        }
        if ($exploded2[6] == "ANDROMEDA I") {
            $fp = fopen('CEMIG/ANDROMEDA I/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["ANDROMEDA I"] += 1;
        }
        if ($exploded2[6] == "ANDROMEDA II") {
            $fp = fopen('CEMIG/ANDROMEDA II/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["ANDROMEDA II"] += 1;
        }
        if ($exploded2[6] == "ANDROMEDA III") {
            $fp = fopen('CEMIG/ANDROMEDA III/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["ANDROMEDA III"] += 1;
        }
        if ($exploded2[6] == "ANDROMEDA IV") {
            $fp = fopen('CEMIG/ANDROMEDA IV/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["ANDROMEDA IV"] += 1;
        }
        if ($exploded2[6] == "ANDROMEDA V") {
            $fp = fopen('CEMIG/ANDROMEDA V/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["ANDROMEDA V"] += 1;
        }
        if ($exploded2[6] == "BURITIZEIRO I") {
            $fp = fopen('CEMIG/BURITIZEIRO I/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["BURITIZEIRO I"] += 1;
        }
        if ($exploded2[6] == "BURITIZEIRO II") {
            $fp = fopen('CEMIG/BURITIZEIRO II/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["BURITIZEIRO II"] += 1;
        }
        if ($exploded2[6] == "BURITIZEIRO III") {
            $fp = fopen('CEMIG/BURITIZEIRO III/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["BURITIZEIRO III"] += 1;
        }
        if ($exploded2[6] == "BURITIZEIRO IV") {
            $fp = fopen('CEMIG/BURITIZEIRO IV/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["BURITIZEIRO IV"] += 1;
        }
        if ($exploded2[6] == "BURITIZEIRO V") {
            $fp = fopen('CEMIG/BURITIZEIRO V/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["BURITIZEIRO V"] += 1;
        }
        if ($exploded2[6] == "IBIA II") {
            $fp = fopen('CEMIG/IBIA II/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["IBIA II"] += 1;
        }
        if ($exploded2[6] == "SEXTANS I") {
            $fp = fopen('CEMIG/SEXTANS I/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEXTANS I"] += 1;
        }
        if ($exploded2[6] == "SEXTANS II") {
            $fp = fopen('CEMIG/SEXTANS II/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEXTANS II"] += 1;
        }
        if ($exploded2[6] == "SEXTANS III") {
            $fp = fopen('CEMIG/SEXTANS III/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEXTANS III"] += 1;
        }
        if ($exploded2[6] == "SEXTANS IV") {
            $fp = fopen('CEMIG/SEXTANS IV/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEXTANS IV"] += 1;
        }
        if ($exploded2[6] == "SEXTANS V") {
            $fp = fopen('CEMIG/SEXTANS V/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEXTANS V"] += 1;
        }
        if ($exploded2[6] == "SEXTANS - EXTRAS") {
            $fp = fopen('CEMIG/SEXTANS EXTRAS/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["SEXTANS EXTRAS"] += 1;
        }
        if ($exploded2[6] == "USINA MILK WAY") {
            $fp = fopen('CEMIG/MILKWAY/arq' . $dados["B"] . $dataNome . '.json', 'w');
            fwrite($fp, json_encode($dados));
            fclose($fp);
            $usinas["MILKWAY"] += 1;
        }

    }
}

##################### Gera Arquivos .XLSX
$usi = array(
    'ANDROMEDA I',
    'ANDROMEDA II',
    'ANDROMEDA III',
    'ANDROMEDA IV',
    'ANDROMEDA V',
    'BURITIZEIRO I',
    'BURITIZEIRO II',
    'BURITIZEIRO III',
    'BURITIZEIRO IV',
    'BURITIZEIRO V',
    'IBIA II',
    'SEXTANS I',
    'SEXTANS II',
    'SEXTANS III',
    'SEXTANS IV',
    'SEXTANS V',
    'SEXTANS EXTRAS',
    'SEM USINA',
    'MILKWAY',
);

foreach ($usi as $usina) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $folder = 'CEMIG/' . $usina . '/';
    $files = scandir($folder);
    ##################### Zera as variaveis
    $cnpjdif = 0;
    $empdif = 0;
    $fatjacad = 0;
    $fatins = 0;
    $comdataemi = 0;
    $semdataemi = 0;

    ##################### Verifica se existe arquivo no array
    if (array_key_exists("2", $files)) {
        ##################### Se existir, cria o xlsx com as informaçoes
        $sheet->setCellValue('A1', "Arquivo");
        $sheet->setCellValue('B1', "Unidade");
        $sheet->setCellValue('C1', "Erro");
        $sheet->setCellValue('D1', "Diferença achada");
        $sheet->setCellValue('E1', "Desconto Base");
        $sheet->setCellValue('F1', "Outros Base");
        $sheet->setCellValue('G1', "Mês Referência");
        $sheet->setCellValue('H1', "Dias da Fatura");
        $sheet->setCellValue('I1', "Data de Emissão");
        $sheet->setCellValue('J1', "Total Fatura");
        $sheet->setCellValue('K1', "Total Achado");
        $sheet->setCellValue('L1', "Consumo Total");
        $sheet->setCellValue('M1', "Consumo Injetado");
        $sheet->setCellValue('N1', "Custo Disp Energia Injetada");
        $sheet->setCellValue('O1', "Saldo Informado na Fatura");
        $sheet->setCellValue('P1', "Devolução");
        $sheet->setCellValue('Q1', "Outros");
        $sheet->setCellValue('R1', "Duplicidade");
        $sheet->setCellValue('S1', "Credito Prox. Ciclo");
        $sheet->setCellValue('T1', "Nota Fiscal");
        $sheet->setCellValue('U1', "Proceso Judicial");
        $sheet->setCellValue('V1', "Ocorrencia");

        $nun = 2;
        foreach ($files as $key => $file) {
            if ($key < 2) {
                continue;
            } else {
                $pathfile = $folder . $file;
                $arquivo = file_get_contents($pathfile);
                $arqjson = json_decode($arquivo);
                $sheet->setCellValue('A' . $nun, $arqjson->A);
                $sheet->setCellValue('B' . $nun, $arqjson->B);
                $sheet->setCellValue('C' . $nun, $arqjson->C);
                $sheet->setCellValue('D' . $nun, $arqjson->D);
                $sheet->setCellValue('E' . $nun, $arqjson->E);
                $sheet->setCellValue('F' . $nun, $arqjson->F);
                $sheet->setCellValue('G' . $nun, $arqjson->G);
                $sheet->setCellValue('H' . $nun, $arqjson->H);
                $sheet->setCellValue('I' . $nun, $arqjson->I);
                $sheet->setCellValue('J' . $nun, $arqjson->J);
                $sheet->setCellValue('K' . $nun, $arqjson->K);
                $sheet->setCellValue('L' . $nun, $arqjson->L);
                $sheet->setCellValue('M' . $nun, $arqjson->M);
                $sheet->setCellValue('N' . $nun, $arqjson->N);
                $sheet->setCellValue('O' . $nun, $arqjson->O);
                $sheet->setCellValue('P' . $nun, $arqjson->P);
                $sheet->setCellValue('Q' . $nun, $arqjson->Q);
                $sheet->setCellValue('R' . $nun, $arqjson->R);
                $sheet->setCellValue('S' . $nun, $arqjson->S);
                $sheet->setCellValue('T' . $nun, $arqjson->T);
                $sheet->setCellValue('U' . $nun, $arqjson->U);
                $sheet->setCellValue('V' . $nun, $arqjson->V);
                $nun++;

                if ($arqjson->V == "CNPJ diferente." || $arqjson->V == "CNPJ diferente. Empresa Diferente." || $arqjson->V == "Faturado pelo minimo. CNPJ diferente.") {
                    $cnpjdif++;
                    //echo $cnpjdif."<br>";
                }
                if ($arqjson->V == "Empresa Diferente." || $arqjson->V == "CNPJ diferente. Empresa Diferente.") {
                    $empdif++;
                    //echo $empdif."<br>";
                }
                if (strpos($arqjson->C, "cadastrada") !== false) {
                    $fatjacad++;
                    //echo $empdif."<br>";
                }

                if ($arqjson->C == null) {
                    $fatins++;
                    //echo $empdif."<br>";
                }

                if ($arqjson->I !== null) {
                    $comdataemi++;
                    //echo $empdif."<br>";
                }

                if ($arqjson->I == null) {
                    $semdataemi++;
                    //echo $empdif."<br>";
                }
            }
        }
        ###################### Padrao de Rodapé
        /* Concessionaria: CEMIG
        Responsável: 231
        Qtde CNPJ diferente 1 #################### $cnpjdif
        Classificação não comercial 0
        Empresa Diferente 0 #################### $empdif
        Com data de emissão 1 #################### $comdataemi
        Sem data de emissão 0 #################### $semdataemi

        Total de faturas com diferença 0 (>= 0,10)
        Faturas existentes 0 #################### $fatjacad
        Unidades não existentes 0 ####################
        Faturas não inseridas 0 ####################
        Faturas inseridas 1 */#################### $fatins

        $nun++;
        $sheet->setCellValue('A' . $nun, "Concessionaria: CEMIG");
        $nun++;
        $sheet->setCellValue('A' . $nun, "Responsável: 259");
        $nun++;
        $sheet->setCellValue('A' . $nun, "Qtde CNPJ diferente " . $cnpjdif);
        $nun++;
        $sheet->setCellValue('A' . $nun, "Classificação não comercial");
        $nun++;
        $sheet->setCellValue('A' . $nun, "Empresa Diferente " . $empdif);
        $nun++;
        $sheet->setCellValue('A' . $nun, "Com data de emissão " . $comdataemi);
        $nun++;
        $sheet->setCellValue('A' . $nun, "Sem data de emissão " . $semdataemi);
        $nun++;
        $nun++;
        $sheet->setCellValue('A' . $nun, "Total de faturas com diferença 0 (>= 0,10)");
        $nun++;
        $sheet->setCellValue('A' . $nun, "Faturas existentes " . $fatjacad);
        $nun++;
        $sheet->setCellValue('A' . $nun, "Unidades não existentes 0");
        $nun++;
        $sheet->setCellValue('A' . $nun, "Faturas não inseridas " . $fatjacad);
        $nun++;
        $sheet->setCellValue('A' . $nun, "Faturas inseridas " . $fatins);

        //rgb verde r192 g230 b203 ou #C3E6CB
        $writer = new Xlsx($spreadsheet);
        $writer->save("CEMIG/" . $usina . ".xlsx");
    }
    echo $usina;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<font face='arial' size='3'>Concessionaria: CEMIG" . "</font>";
    echo "<br>";
    echo "<font face='arial' size='3'>Responsável: 259" . "</font>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Qtde CNPJ diferente " . $cnpjdif . "</font></b>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Classificação não comercial 0" . "</font></b>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Empresa Diferente " . $empdif . "</font></b>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Com data de emissão " . $comdataemi . "</font></b>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Sem data de emissão " . $semdataemi . "</font></b>";
    echo "<br>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Total de faturas com diferença 0 (>= 0,10)" . "</font></b>";
    echo "<br>";
    echo "<b><font color='red' face='arial' size='3'>Faturas existentes " . $fatjacad . "</font></b>";
    echo "<br>";
    echo "<b><font color='red' face='arial' size='3'>Unidades não existentes 0" . "</font></b>";
    echo "<br>";
    echo "<b><font color='red' face='arial' size='3'>Faturas não inseridas " . $fatjacad . "</font></b>";
    echo "<br>";
    echo "<b><font color='blue' face='arial' size='3'>Faturas inseridas " . $fatins . "</font></b>";
    echo "<br>";
    echo "<hr>";

    array_push($listafinal, $usina, $fatins);

}
// var_dump($listafinal);
echo $listafinal[0] . " | " . $listafinal[1] . '<br>';
echo $listafinal[2] . " | " . $listafinal[3] . '<br>';
echo $listafinal[4] . " | " . $listafinal[5] . '<br>';
echo $listafinal[6] . " | " . $listafinal[7] . '<br>';
echo $listafinal[8] . " | " . $listafinal[9] . '<br>';
echo $listafinal[10] . " | " . $listafinal[11] . '<br>';
echo $listafinal[12] . " | " . $listafinal[13] . '<br>';
echo $listafinal[14] . " | " . $listafinal[15] . '<br>';
echo $listafinal[16] . " | " . $listafinal[17] . '<br>';
echo $listafinal[18] . " | " . $listafinal[19] . '<br>';
echo $listafinal[20] . " | " . $listafinal[21] . '<br>';
echo $listafinal[32] . " | " . $listafinal[33] . '<br>';
echo $listafinal[22] . " | " . $listafinal[23] . '<br>';
echo $listafinal[24] . " | " . $listafinal[25] . '<br>';
echo $listafinal[26] . " | " . $listafinal[27] . '<br>';
echo $listafinal[28] . " | " . $listafinal[29] . '<br>';
echo $listafinal[30] . " | " . $listafinal[31] . '<br>';
echo $listafinal[36] . " | " . $listafinal[37] . '<br>';
echo $listafinal[34] . " | " . $listafinal[35] . '<br>';

echo '<hr>';
