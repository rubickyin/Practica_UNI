<?php
require_once __DIR__ . './mpdf/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc - 01 - Hauyin</title>
    <link rel="stylesheet" href="mpdf.css">
</head>

<body>
    <table width="60%" style="border: none;" class="head">
        <caption style="color:rgb(0, 0, 0); caption-side: bottom; font-size: 1em; font-weight: bold">
            CARGA HORARIA DE LOS PROFESORES DELCURSO INTRODUCTORIO DE FÍSICA
            <br>PARA LOS INGRESANTES A LA FIM DEL 2024-1
        </caption>
        <thead>
            <tr>
                <th scope="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Uni-logo_transparente_granate.png/640px-Uni-logo_transparente_granate.png"
                        alt="logo_UNI" width="8%"></th>
                <th scope="col" style="text-align: left;">
                    <h1 style="font-size: 1em;">UNIVERSIDAD NACIONAL DE INGENIERIA</h1>
                    <h2 style="font-size: .8em;">Facultad de Ingeniería Mecániaca</h2>
                    <h2 style="font-size: .8em;">Depertamento Académico de Ciencias Básicas, humanidades y C.C.(DACBHCC)</h2>
                </th>
            </tr>
        </thead>
    </table>

    <table width="112%" class="table">
        <caption style="background-color: blue; color: aliceblue; font-weight: bold; border-color: black; border-style: solid; border-width: .1em; margin: .5em 0 0 0">
            CURSO INTRODUCTORIO DE FÍSICA 2024
        </caption>
        <tbody>
            <tr>
                <th rowspan="2" width="10%">Hora</th>
                <th width="12%">Lunes</th>
                <th width="12%">Martes</th>
                <th width="12%">Miércoles</th>
                <th width="12%">Jueves</th>
                <th width="12%">Viernes</th>
                <th width="30%"></th>
            </tr>
            <tr>
                <td>26/02/2024</td>
                <td>27/02/2024</td>
                <td>28/02/2024</td>
                <td>29/02/2024</td>
                <td>01/03/2024</td>
                <td></td>
            </tr>
            <tr>
                <td>9:00 - 10:00</td>
                <td rowspan="3">
                    <p font color="#ff0909">Melchor Llosa(A) Aula / A2-280</p>
                </td>
                <td rowspan="3"></td>
                <td rowspan="3">
                    <p font color="#ff0909">Melchor Llosa(A) Aula / A2-280</p>
                </td>
                <td rowspan="3"></td>
                <td rowspan="3">
                    <p font color="#ff0909">Melchor Llosa(A) Aula / A2-280</p>
                </td>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td>10:00 - 11:00</td>
            </tr>
            <tr>
                <td>11:00 - 12:00</td>
                <td rowspan="4"></td>
            </tr>
            <tr>
                <td>14:00 - 15:00</td>
                <td rowspan="3">
                    <p fon color="#092bff">Pérez Carreño (B) Aula A2/276</p>
                    <p fon color="#a609ff">Orlando Villalobos (C) Aula / A2-280</p>
                </td>
                <td rowspan="3">
                    <p fon color="#22d901">José Pachas(D) Aula / A2-360</p>
                </td>
                <td rowspan="3">
                    <p fon color="#092bff">Pérez Carreño (B) Aula / A2-276</p>
                    <p fon color="#a609ff">Orlando Villalobos (C) Aula / A2-260</p>
                    <p fon color="#22d901">José Pachas (D) Aula / A2-360</p>
                </td>
                <td rowspan="3"></td>
                <td rowspan="3">
                    <p fon color="#092bff">Pérez Carreño (B) Aula / A2-276</p>
                    <p fon color="#a609ff">Orlando Villalobos (C) Aula / A2-260</p>
                    <p fon color="#22d901">José Pachas (D) Aula / A2-360</p>
                </td>
            </tr>
            <tr>
                <td>15:00 - 16:00</td>
            </tr>
            <tr>
                <td>16:00 - 17:00</td>
            </tr>
        </tbody>
    </table>

    <table width="112%" class="table" style="margin-top: 1em;">
        <tbody>
            <tr>
                <th rowspan="2" width="10%">Hora</th>
                <th width="12%">Lunes</th>
                <th width="12%">Martes</th>
                <th width="12%">Miércoles</th>
                <th width="12%">Jueves</th>
                <th width="12%">Viernes</th>
                <th width="30%">Sábado</th>
            </tr>
            <tr>
                <td>04/03/2024</td>
                <td>05/03/2024</td>
                <td>06/03/2024</td>
                <td>07/03/2024</td>
                <td>08/03/2024</td>
                <td>09/03/2024</td>
            </tr>
            <tr>
                <td>9:00 - 10:00</td>
                <td rowspan="3">
                    <p font color="#ff0909">Melchor Llosa(A) Aula / A2-280</p>
                </td>
                <td rowspan="3">
                    <p font color="#ff0909">Melchor Llosa(A) Aula / A2-280</p>
                </td>
                <td rowspan="3"></td>
                <td rowspan="3"></td>
                <td rowspan="3">
                    <p font color="#ff0909">Melchor Llosa(A) Aula / A2-280</p>
                </td>
                <td rowspan="2">
                    <p color="#ff0909">(A) Aula / A2-280 Melchor Llosa</p>
                    <p color="#092bff">(B) Aula / A2-276 Pérez Carreño</p>
                    <p color="#a609ff">(C) Aula / A2-269 Orlando Villalobos</p>
                    <p color="#22d901">(D) Aula / A2-360 José Pachas</p>
                </td>
            </tr>
            <tr>
                <td>10:00 - 11:00</td>
            </tr>
            <tr>
                <td>11:00 - 12:00</td>
                <td rowspan="4"></td>
            </tr>
            <tr>
                <td>14:00 - 15:00</td>
                <td rowspan="3">
                    <p fon color="#092bff">Pérez Carreño (B) Aula A2/276</p>
                    <p fon color="#a609ff">Orlando Villalobos (C) Aula / A2-280</p>
                </td>
                <td rowspan="3">
                    <p fon color="#22d901">José Pachas(D) Aula / A2-360</p>
                </td>
                <td rowspan="3">
                    <p fon color="#092bff">Pérez Carreño (B) Aula / A2-276</p>
                    <p fon color="#a609ff">Orlando Villalobos (C) Aula / A2-260</p>
                    <p fon color="#22d901">José Pachas (D) Aula / A2-360</p>
                </td>
                <td rowspan="3"></td>
                <td rowspan="3">
                    <p fon color="#092bff">Pérez Carreño (B) Aula / A2-276</p>
                    <p fon color="#a609ff">Orlando Villalobos (C) Aula / A2-260</p>
                    <p fon color="#22d901">José Pachas (D) Aula / A2-360</p>
                </td>
            </tr>
            <tr>
                <td>15:00 - 16:00</td>
            </tr>
            <tr>
                <td>16:00 - 17:00</td>
            </tr>

        </tbody>
    </table>

</body>

</html>

<?php
$html = ob_get_clean();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>