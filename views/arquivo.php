<?php
$id = $_GET['id'];
$a = new Contatos();
$defesa = $a->get2($id);


$requerente = strtoupper($defesa['requerente']);
$processo = $defesa['processo'];
$penalidade = $defesa['penalidade'];
$autos = strtoupper($defesa['autos']);
$artigo = $defesa['artigo'];
$cod_infra = $defesa['cod_infra'];
$veiculo_modelo = strtoupper($defesa['veiculo_modelo']);
$placa = strtoupper($defesa['placa']);
$uf = $defesa['uf'];
$cor = strtoupper($defesa['cor']);
$ano_fab = $defesa['ano_fab'];
$dos_fatos = $defesa['dos_fatos'];
$dos_meritos = $defesa['dos_meritos'];
$decisao = $defesa['decisao'];
$estatos = strtoupper($defesa['estatos']);
$data_entrada = $defesa['data_entrada'];

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,"portuguese");

$data1 = explode("-",$data_entrada);

$ano = $data1[0];
$dia = $data1[2];
$dia = explode(" ",$dia);
$dia = $dia[0];
$mes = $data1[1];
$mes = strftime("%B");
?>
<?php
ob_start();
?>


<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
	<title>Defesa de <?php echo utf8_decode($requerente." processo Nº: ".$processo); ?></title>
	<style type="text/css">
		@page { size: 21cm 29.7cm; margin-left: 3cm; margin-right: 3cm; margin-top: 0.5cm; margin-bottom: 0.25cm }
		p { margin-bottom: 0.25cm; direction: ltr; line-height: 115%; text-align: left; orphans: 2; widows: 2; background: transparent }
	</style>
</head>
<body lang="pt-BR" link="#000080" vlink="#800000" dir="ltr"><br>
    <p align="center" style="margin-left: 0.5cm; margin-bottom: 0cm; line-height: 100%">
        <font face="Arial, serif">
            <font size="6" style="font-size: 24pt">
        <b>
        P</b></font></font><font face="Arial, serif"><font size="5" style="font-size: 20pt"><b>REFEITURA</b></font></font><font face="Arial, serif"><font size="6" style="font-size: 24pt"><b>
M</b></font></font><font face="Arial, serif"><font size="5" style="font-size: 20pt"><b>UNICIPAL</b></font></font><font face="Arial, serif"><font size="6" style="font-size: 22pt"><b>
</b></font></font><font face="Arial, serif"><font size="5" style="font-size: 20pt"><b>DE</b></font></font><font face="Arial, serif"><font size="6" style="font-size: 22pt"><b>
</b></font></font><font face="Arial, serif"><font size="6" style="font-size: 24pt"><b>M</b></font></font><font face="Arial, serif"><font size="5" style="font-size: 20pt"><b>OSSOR&Oacute;</b></font></font></p>
    <p align="center" style="margin-left: 0.5cm; margin-bottom: 0cm; line-height: 100%">
    <font face="Arial, serif">
    <font size="1" style="font-size: 7pt">
    SECRETARIA MUNICIPAL DE SEGURAN&Ccedil;A P&Uacute;BLICA, DEFESA CIVIL, MOBILIDADE URBANA E TR&Acirc;NSITO
    </font>
    </font>
    <font size="2" style="font-size: 10pt">
    GER&Ecirc;NCIAEXECUTIVA DE MOBILIDADE URBANA E TR&Acirc;NSITO
    </font>
    <font face="Arial, serif"><font size="1" style="font-size: 8pt"><br>
    Rua Felipe Camar&atilde;o, 968 &ndash; Doze Anos &ndash; CEP: 59603-340 &ndash; Mossor&oacute;/RN<br/> Fone: (84) 3315-5002 - E-mail: sesp@prefeiturademossoro.com.br
    </font>
    </font>
    <font face="Arial, serif"><font size="2" style="font-size: 10pt">
    </font>
    </font>
    </p>
    <p style="margin-bottom: 0.35cm">
</div>
	<p class="western" align="center" style="margin-bottom: 0cm; line-height: 150%">
		<font face="Arial, sans-serif"><b>DECIS&Atilde;O ADMINISTRATIVA DE DEFESA PR&Eacute;VIA</b></font></p>
<p class="western" align="justify" style="margin-bottom: 0cm; line-height: 150%"><a name="_GoBack"></a>
	<font face="Arial, sans-serif">Processo: </font><font face="Arial, sans-serif"><b><?php echo $processo; ?></b></font><br>
	<font face="Arial, sans-serif">Requerente: </font><font face="Arial, sans-serif"><b><?php echo $requerente; ?></b></font><br>
	<font face="Arial, sans-serif">N&deg; do Auto da Infra&ccedil;&atilde;o: </font><font face="Arial, sans-serif"><b><?php echo $autos; ?></b></font><br>
	<font face="Arial, sans-serif">Assunto: </font><font face="Arial, sans-serif"><b>Defesa de autua&ccedil;&atilde;o</b></font><br>
	<font face="Arial, sans-serif">Penalidade: </font><font face="Arial, sans-serif"><b><?php echo utf8_decode($penalidade); ?></b></font>
</p>

<p class="western" align="justify" style="margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif"><u><b>DA QUALIFICA&Ccedil;&Atilde;O:</b></u></font></p>
<p class="western" align="justify" style="margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif">	Infra&ccedil;&atilde;o capitulada no
<?php echo $artigo; ?>, do C&oacute;digo de Tr&acirc;nsito Brasileiro
consoante materializado no </font><font face="Arial, sans-serif"><b>AUTO
DE INFRA&Ccedil;&Atilde;O N&ordm; <?php echo $autos; ?>, </b></font><font face="Arial, sans-serif">constatado
pelo agente de tr&acirc;nsito, enquanto condutor do ve&iacute;culo
tipo</font><font face="Arial, sans-serif"><b> <?php echo $veiculo_modelo; ?>
</b></font><font face="Arial, sans-serif"> cor </font><font face="Arial, sans-serif"><b><?php echo $cor; ?></b></font><font face="Arial, sans-serif">
ano </font><font face="Arial, sans-serif"><b><?php echo $ano_fab; ?>,</b></font><font face="Arial, sans-serif">
de placa </font><font face="Arial, sans-serif"><b><?php echo $placa; ?>/<?php echo $uf; ?></b></font><font face="Arial, sans-serif">,
de infra&ccedil;&atilde;o <?php echo $cod_infra; ?>.</font></p>
<p class="western" align="justify" style="margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif"><u><b>DOS FATOS:</b></u></font></p>
<p class="western" align="justify" style="text-indent: 1.25cm; margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif"><?php echo $dos_fatos; ?>.</font>
</p>
<p class="western" align="justify" style="margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif"><u><b>DO M&Eacute;RITO:</b></u></font></p>
<p class="western" align="justify" style="text-indent: 1.25cm; margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif"><?php echo $dos_meritos; ?>.</font></p>
<p class="western" align="justify" style="margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif"><u><b>DECIS&Atilde;O:</b></u></font></p>
<p class="western" align="justify" style="text-indent: 1.25cm; margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif">Decido pelo </font><font face="Arial, sans-serif"><b>INDEFERIMENTO
da</b></font><font face="Arial, sans-serif"> </font><font face="Arial, sans-serif"><b>DEFESA</b></font><font face="Arial, sans-serif">
e, por conseguinte, pela </font><font face="Arial, sans-serif"><b>PROCED&Ecirc;NCIA
e SUBSIST&Ecirc;NCIA</b></font><font face="Arial, sans-serif"> do
</font><font face="Arial, sans-serif"><b>auto </b></font><font face="Arial, sans-serif">e
determino aplica&ccedil;&atilde;o</font><font face="Arial, sans-serif"><b>
</b></font><font face="Arial, sans-serif">da pena de multa pela
infra&ccedil;&atilde;o em quest&atilde;o com base no </font><font face="Arial, sans-serif"><b>Art.
</b></font><font face="Arial, sans-serif">181&ordm;, XX, do C&oacute;digo
de Tr&acirc;nsito Brasileiro.</font></p>
<p class="western" align="right" style="text-indent: 1.25cm; margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif">Mossor&oacute;, <?php echo $dia; ?> de <?php echo $mes; ?> de <?php echo $ano; ?>.</font></p>
<p class="western" align="justify" style="text-indent: 1.25cm; margin-bottom: 0.28cm; line-height: 150%">
<font face="Arial, sans-serif">__________________________________________________________________</font></p>
<p class="western" align="center" style="margin-bottom: 0.28cm; line-height: 105%">
<font face="Arial, sans-serif">Autoridade de Tr&acirc;nsito</font></p>
</body>
</html>
<?php
$html = ob_get_contents();
ob_get_clean();

//require BASE_URL.'vendor/autoload.php';
require_once("vendor/autoload.php");
//require ("http://localhost/defesaprevia/vendor/autoload.php");

$mpdf = new mPDF();
date_default_timezone_set('America/Sao_Paulo');
$mpdf->SetDisplayMode('fullpage');
$mpdf->useOnlyCoreFonts = true;

$mpdf->SetWatermarkImage('assets/images/brasao6.png', 1, '', array(5,10));
$mpdf->showWatermarkImage = true;
$mpdf->allow_charset_conversion = true;
$mpdf->charset_in = 'UTF-8';
$mpdf->SetFooter('{DATE d/m/Y  H:i}||Página {PAGENO}/{nb}');
$mpdf->WriteHTML($html, 0);
//$mpdf->Output('oficio'.$oficio.'.pdf', 'I'); 
$mpdf->Output('defesa de '.$requerente.'.pdf', 'I', 'isUTF8'); 