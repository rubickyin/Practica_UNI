<?php
require_once __DIR__ . '/mpdf/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// Estilos CSS
$stylesheet = '
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table td, .table th {
            border: 1px solid #000;
            padding: 8px;
            font-size: 12px;
        }
        .table th {
            background-color: #f2f2f2;
        }
    </style>
';

// Contenido HTML
$html = '
    <div class="header">
        UNIVERSIDAD NACIONAL DE INGENIERÍA<br>
        Dirección de Registro Central y Estadística<br>
        Área de Administración Académica
    </div>
    <div class="title">
        “Año del Bicentenario, de la consolidación de nuestra independencia, y de la conmemoración de las heroicas batallas de Junín y Ayacucho”
    </div>
    <div class="subtitle">
        ANEXO 1<br>
        SISTEMA OFICIAL DE ADMINISTRACIÓN ACADEMICA<br>
        GRÁFICA REGISTRO DE FILIACION DE ALUMNO
    </div>
    <table class="table">
        <tr>
            <th>EXPEDIENTE N°</th>
            <td>0013800-2024</td>
        </tr>
        <tr>
            <th>UNIVERSIDAD</th>
            <td>NACIONAL DE INGENIERÍA</td>
        </tr>
        <tr>
            <th>Sistema Oficial de Administración Académica</th>
            <td>Datos del alumno</td>
        </tr>
        <tr>
            <th>Código</th>
            <td>2023201</td>
        </tr>
        <tr>
            <th>DNI</th>
            <td>73674845</td>
        </tr>
        <tr>
            <th>Código 9 dígitos</th>
            <td>I2C23201</td>
        </tr>
        <tr>
            <th>Facultad</th>
            <td>INGENIERÍA MECÁNICA</td>
        </tr>
        <tr>
            <th>Especialidad</th>
            <td>INGENIERÍA MECÁNICA</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>DAZ-ISUIZA-ALBERT EDINSON</td>
        </tr>
        <tr>
            <th>Situación</th>
            <td>ALUMNO REGULAR</td>
        </tr>
        <tr>
            <th>Condición</th>
            <td>MATRICULADO</td>
        </tr>
        <tr>
            <th>Modal. de ingreso</th>
            <td>MOVALDAD ESTUDIANTIL</td>
        </tr>
        <tr>
            <th>Facultad de ingreso</th>
            <td>FIM</td>
        </tr>
        <tr>
            <th>Espec. de ingreso</th>
            <td>M3</td>
        </tr>
        <tr>
            <th>Plan de estudios</th>
            <td>2020-1 22/02/2024</td>
        </tr>
        <tr>
            <th>Periodo de ingreso</th>
            <td>2023-2 18:45:14</td>
        </tr>
        <tr>
            <th>Primer periodo</th>
            <td>2023-2</td>
        </tr>
        <tr>
            <th>Último periodo</th>
            <td>2023-2</td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td>MASCULINO</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>Av. Tópoc Amaru 210, Lima 25, Perú</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>481-1070 Anexo 3101</td>
        </tr>
    </table>
';

// Añadir estilos y contenido al PDF
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

// Salida del PDF
$mpdf->Output('documento.pdf', 'I');
?>