<?php
class arquivoController extends controller {

	public function index() {
        $dados = array();
		$this->loadView('arquivo', $dados);
    }

    public function pdf(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $a = new Contatos();
            $defesa = $a->get2($id);
            $dados = $defesa;


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
            header("Location: ".BASE_URL."arquivo");
        } else {
            
        }
        
    }
}