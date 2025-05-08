<?php
// Require composer autoload
require_once __DIR__ . './mpdf/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf([
    'orientation' => 'P'
]);
$mpdf->SetHTMLHeader('
    <header>
    <div>
    <img style="width: 80px; height: 120px; margin-top: -10px; margin-left: -10px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Uni-logo_transparente_granate.png/640px-Uni-logo_transparente_granate.png">       
    <div style=" margin-right: 50px; margin-top: -110px; margin-left: 100px;">
    <p style="font-weight: bold; font-family: Verdana; font-size: 20px;">UNIVERSIDAD NACIONAL DE INGENIERÍA</p>
    <div>
    <p style="font-weight: bold; font-family: Verdana; font-size: 15px; margin-top: -40px;">______________________________________________________________________________</p>
    </div>
    <div>
    <p style="font-weight: bold; font-family: Verdana; font-size: 15px; margin-top: -20px;">Dirección de Registro Central y Estadistica</p>
    </div>

    <div>
    <p style="font-weight: bold; font-family: Verdana; font-size: 15px; margin-top: -20px;">Área de Administración Academica</p>
    </div>
    </div>

    <div>
        <p style="text-align: center; font-size: 10px; align-items: center; font-family: Verdana; font-weight: bold; margin-top: -10px;">"Año  del  Bicentenario,  de  la  consolidación  de  nuestra  independencia,  y  la  conmemora-<br>ción  de  las  heroicas  batallas  de  Júnin  y  Ayacucho"</p>
    </div>
    <div>
        <p style="text-align: center; font-size: 15px; align-items: center; font-family: Verdana; font-weight: bold; margin-top: -5px;">ANEXO 1</p>
    </div>
    <div>
        <p style="text-align: center; font-size: 15px; align-items: center; font-family: Verdana; font-weight: bold; margin-top: -10px;">SISTEMA OFICIAL DE ADMINISTRACIÓN ACADEMICA</p>
    </div>
    <div>
        <p style="text-align: center; font-size: 15px; align-items: center; font-family: Verdana; font-weight: bold; margin-top: -10px;">GRÁFICA REGISTRO DE FILIACION DE ALUMNO</p>
    </div>
    <div>
        <p style="font-size: 15px; font-family: Verdana; font-weight: bold;">EXPEDIENTE</p>
    </div>
    <div>
        <p style="font-size: 15px; font-family: Verdana; margin-top: -37px; margin-left: 100px;">N° 0013800-2024 </p>
    </div>
    </header>');
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc - 02 - Hauyin</title>
    <link rel="stylesheet" href="mpdf2.css">

</head>

<body>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <table style="border-width: 5px; border-style: solid; padding: 5em">
        <tbody>
            <tr>
                <th width="20%"><img src="https://rsu.uni.edu.pe/wp-content/uploads/2024/07/LOGO-UNI.png" alt="logo2">
                </th>
                <th width="60%" style="font-size: 5em">
                    Sitema Oficial de Adminictración Académica <br> Datos del Alumno.
                </th>
                <th width="20%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHJO8pVOY4mIS6T8fAGaCRVu9Tev22Ibv0yA&s"
                        alt="logo3" width="100%">
                </th>
            </tr>
        </tbody>
    </table>

    <table width="100%" style="border-width: 1px; border-style: solid; padding: 1em" class="tabla_1">
        <tr>
            <td class="">
                Código &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td class="">
                <p>2023201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td class="">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI :</p>
            </td>
            <td class="">
                <p>2023201</p>
            </td>
            <td class="" colspan="2">
                <p>Código de 9 digitos :</p>
            </td>
            <td>
                <p>||2023201</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Facultad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Especialidad &nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                DIAZ-ISUIZA-ALBERT EDINSON
            </td>
        </tr>
        <tr>
            <td class="" colspan="3" rowspan="12">

                <table style="width: 90%; border-style: solid; border-width: 1px; padding: 2em 0">
                    <tr>
                        <th class="">
                            <table style="width: 90%; border-style: solid; border-width: 1px; padding: 10em 0">
                                <tr>
                                    <th class="img_carnet">

                                    </th>
                                </tr>
                            </table>
                        </th>
                    </tr>
                </table>
            </td>
            <td>
                <p>Situación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="2">
                <p>ALUMNO REGULAR</p>
            </td>
        <tr>
            <td>
                <p>Condición&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <P>MATRICULADO</P>
            </td>
        </tr>
        <tr>
            <td>
                <p>Modal. de Ingreso&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <p>MOVILIDAD ESTUDIANTIL</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Faculta de Ingreso&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>FIM</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Espec. de Ingreso &nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>M3</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Plan de Estudios &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2020-1</p>
            </td>
            <td>
                <div>
                    <img width="3%" src="img/icons8-calendario-10-100.png">
                </div>
            </td>
            <td class="ordn">
                <p>22/02/2024</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Periodo de Ingreso &nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td>
                <img width="3%" src="img/icons8-reloj-100.png">
            </td>
            <td class="ordn">
                <p>18:45:14</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Primer periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td colspan="2" rowspan="3">
                <img width="22%" src="https://th.bing.com/th/id/OIP.U1S5NpMGxCdvgw4EJcMuegHaHa?rs=1&pid=ImgDetMain">
            </td>
        </tr>
        <tr>
            <td>
                <p>Último Periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>Masculino</p>
            </td>
        </tr>
        <tr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consectetur animi eum veniam error sint nisi ea necessitatibus est officia ipsam voluptate iure libero recusandae assumenda saepe vitae, adipisci quas?</p>
        </tr>
        <tr>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum eligendi unde assumenda laboriosam, sequi impedit quo. Sequi, rem laudantium dolore nihil deleniti illo obcaecati doloremque atque aperiam neque voluptatibus illum.</p>
        </tr>
    </table>


</body>

</html>

<?php
$mpdf->SetHTMLFooter('
<table style="font-size: 11px; font-family: Verdana; height: 50%; width: 100%; align-items: center; font-weight: bold;">
        <tr>
            <td style="width: 35%; height: 20%;">
                <p>Av. Túpac Amaru 210, Lima 25, Perú</p>
                <br>
                <p>Teléfono: 481-1070 Anexo 3101</p>
            </td>
            <td style="width: 40%; height: 20%; align-items: center; text-align: center;">
                <p>{PAGENO}/{nbpg}</p>
            </td>
            <td style="width: 28%; height: 20%;">
            {DATE j-m-Y H:m}
            </td>
        </tr>
    </table>
');
$PAG1=ob_get_clean();
$mpdf->WRITEHTML($PAG1);
$mpdf->AddPage('L');
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mpdf2.css">

</head>

<body>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <table style="border-width: 10px; border-style: solid; padding: 5em">
        <tbody>
            <tr>
                <th width="8%"><img src="https://rsu.uni.edu.pe/wp-content/uploads/2024/07/LOGO-UNI.png" alt="logo2">
                </th>
                <th width="84%" style="font-size: 12em">
                    Sitema Oficial de Adminictración Académica <br> Datos del Alumno.
                </th>
                <th width="8%">
                    <img src="https://png.pngtree.com/png-clipart/20230102/big/pngtree-university-logo-png-image_8855486.png"
                        alt="logo3" width="100%">
                </th>
            </tr>
        </tbody>
    </table>

    <table width="100%" style="border-width: 1px; border-style: solid; padding: 1em" class="tabla_1">
        <tr>
            <td class="">
                Código &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td class="">
                <p>2023201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td class="">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI :</p>
            </td>
            <td class="">
                <p>2023201</p>
            </td>
            <td class="" colspan="2">
                <p>Código de 9 digitos :</p>
            </td>
            <td>
                <p>||2023201</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Facultad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Especialidad &nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                DIAZ-ISUIZA-ALBERT EDINSON
            </td>
        </tr>
        <tr>
            <td class="" colspan="3" rowspan="10">

                <table style="width: 60%; border-style: solid; border-width: 1px; padding: 1em">
                    <tr>
                        <th class="">
                            <table style="width: 100%; border-style: solid; border-width: 1px; padding: 8em 0">
                                <tr>
                                    <th class="img_carnet">

                                    </th>
                                </tr>
                            </table>
                        </th>
                    </tr>
                </table>
            </td>
            <td>
                <p>Situación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="2">
                <p>ALUMNO REGULAR</p>
            </td>
        <tr>
            <td>
                <p>Condición&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <P>MATRICULADO</P>
            </td>
        </tr>
        <tr>
            <td>
                <p>Modal. de Ingreso&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <p>MOVILIDAD ESTUDIANTIL</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Faculta de Ingreso&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>FIM</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Espec. de Ingreso &nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>M3</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Plan de Estudios &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2020-1</p>
            </td>
            <td>
                <div>
                    <img width="2%" src="img/icons8-calendario-10-100.png">
                </div>
            </td>
            <td class="ordn">
                <p>22/02/2024</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Periodo de Ingreso &nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td>
                <img width="2%" src="img/icons8-reloj-100.png">
            </td>
            <td class="ordn">
                <p>18:45:14</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Primer periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td colspan="2" rowspan="3">
                <img width="8%" src="https://th.bing.com/th/id/OIP.U1S5NpMGxCdvgw4EJcMuegHaHa?rs=1&pid=ImgDetMain">
            </td>
        </tr>
        <tr>
            <td>
                <p>Último Periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>Masculino</p>
            </td>
        </tr>

    </table>


</body>

</html>
<?php
$PAG2=ob_get_clean();
$mpdf->WRITEHTML($PAG2);
$mpdf->AddPage('P');
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc - 02 - Hauyin</title>
    <link rel="stylesheet" href="mpdf2.css">

</head>

<body>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <table style="border-width: 5px; border-style: solid; padding: 5em">
        <tbody>
            <tr>
                <th width="20%"><img src="https://rsu.uni.edu.pe/wp-content/uploads/2024/07/LOGO-UNI.png" alt="logo2">
                </th>
                <th width="60%" style="font-size: 5em">
                    Sitema Oficial de Adminictración Académica <br> Datos del Alumno.
                </th>
                <th width="20%">
                    <img src="https://png.pngtree.com/png-clipart/20230102/big/pngtree-university-logo-png-image_8855486.png"
                        alt="logo3" width="100%">
                </th>
            </tr>
        </tbody>
    </table>

    <table width="100%" style="border-width: 1px; border-style: solid; padding: 1em" class="tabla_1">
        <tr>
            <td class="">
                Código &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td class="">
                <p>2023201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td class="">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI :</p>
            </td>
            <td class="">
                <p>2023201</p>
            </td>
            <td class="" colspan="2">
                <p>Código de 9 digitos :</p>
            </td>
            <td>
                <p>||2023201</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Facultad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Especialidad &nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                DIAZ-ISUIZA-ALBERT EDINSON
            </td>
        </tr>
        <tr>
            <td class="" colspan="3" rowspan="10">

                <table style="width: 90%; border-style: solid; border-width: 1px; padding: 2em 0">
                    <tr>
                        <th class="">
                            <table style="width: 90%; border-style: solid; border-width: 1px; padding: 10em 0">
                                <tr>
                                    <th class="img_carnet">

                                    </th>
                                </tr>
                            </table>
                        </th>
                    </tr>
                </table>
            </td>
            <td>
                <p>Situación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="2">
                <p>ALUMNO REGULAR</p>
            </td>
        <tr>
            <td>
                <p>Condición&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <P>MATRICULADO</P>
            </td>
        </tr>
        <tr>
            <td>
                <p>Modal. de Ingreso&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <p>MOVILIDAD ESTUDIANTIL</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Faculta de Ingreso&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>FIM</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Espec. de Ingreso &nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>M3</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Plan de Estudios &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2020-1</p>
            </td>
            <td>
                <div>
                    <img width="3%" src="img/icons8-calendario-10-100.png">
                </div>
            </td>
            <td class="ordn">
                <p>22/02/2024</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Periodo de Ingreso &nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td>
                <img width="3%" src="img/icons8-reloj-100.png">
            </td>
            <td class="ordn">
                <p>18:45:14</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Primer periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td colspan="2" rowspan="3">
                <img width="22%" src="https://th.bing.com/th/id/OIP.U1S5NpMGxCdvgw4EJcMuegHaHa?rs=1&pid=ImgDetMain">
            </td>
        </tr>
        <tr>
            <td>
                <p>Último Periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>Masculino</p>
            </td>
        </tr>
    </table>


</body>

</html>
<?php
$PAG3=ob_get_clean();
$mpdf->WRITEHTML($PAG3);
$mpdf->AddPage('L');
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mpdf2.css">

</head>

<body>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <table style="border-width: 10px; border-style: solid; padding: 5em">
        <tbody>
            <tr>
                <th width="8%"><img src="https://rsu.uni.edu.pe/wp-content/uploads/2024/07/LOGO-UNI.png" alt="logo2">
                </th>
                <th width="84%" style="font-size: 12em">
                    Sitema Oficial de Adminictración Académica <br> Datos del Alumno.
                </th>
                <th width="8%">
                    <img src="https://png.pngtree.com/png-clipart/20230102/big/pngtree-university-logo-png-image_8855486.png"
                        alt="logo3" width="100%">
                </th>
            </tr>
        </tbody>
    </table>

    <table width="100%" style="border-width: 1px; border-style: solid; padding: 1em" class="tabla_1">
        <tr>
            <td class="">
                Código &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td class="">
                <p>2023201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td class="">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI :</p>
            </td>
            <td class="">
                <p>2023201</p>
            </td>
            <td class="" colspan="2">
                <p>Código de 9 digitos :</p>
            </td>
            <td>
                <p>||2023201</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Facultad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Especialidad &nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                <p>INGENIERÍA MECÁNICA</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="3">
                DIAZ-ISUIZA-ALBERT EDINSON
            </td>
        </tr>
        <tr>
            <td class="" colspan="3" rowspan="10">

                <table style="width: 60%; border-style: solid; border-width: 1px; padding: 1em">
                    <tr>
                        <th class="">
                            <table style="width: 100%; border-style: solid; border-width: 1px; padding: 8em 0">
                                <tr>
                                    <th class="img_carnet">

                                    </th>
                                </tr>
                            </table>
                        </th>
                    </tr>
                </table>
            </td>
            <td>
                <p>Situación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td class="" colspan="2">
                <p>ALUMNO REGULAR</p>
            </td>
        <tr>
            <td>
                <p>Condición&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <P>MATRICULADO</P>
            </td>
        </tr>
        <tr>
            <td>
                <p>Modal. de Ingreso&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td colspan="2">
                <p>MOVILIDAD ESTUDIANTIL</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Faculta de Ingreso&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>FIM</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Espec. de Ingreso &nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>M3</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Plan de Estudios &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2020-1</p>
            </td>
            <td>
                <div>
                    <img width="2%" src="img/icons8-calendario-10-100.png">
                </div>
            </td>
            <td class="ordn">
                <p>22/02/2024</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Periodo de Ingreso &nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td>
                <img width="2%" src="img/icons8-reloj-100.png">
            </td>
            <td class="ordn">
                <p>18:45:14</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Primer periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
            <td colspan="2" rowspan="3">
                <img width="8%" src="https://th.bing.com/th/id/OIP.U1S5NpMGxCdvgw4EJcMuegHaHa?rs=1&pid=ImgDetMain">
            </td>
        </tr>
        <tr>
            <td>
                <p>Último Periodo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>2023-2</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
            </td>
            <td>
                <p>Masculino</p>
            </td>
        </tr>

    </table>


</body>

</html>
<?php
$PAG4=ob_get_clean();
$mpdf->WRITEHTML($PAG4);
$mpdf->AddPage('P');
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Image/estilos.css" type="text/css">
</head>
<body>

</body>
</html>

<?php
$PAG5=ob_get_clean();
$mpdf->WRITEHTML($PAG5);
// Output a PDF file directly to the browser
$mpdf->Output();
?>


