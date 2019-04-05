<?php
class homeController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('home', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			$this->loadTemplate('home', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
		
	}
	public function add_save() {
		if (isset($_POST['requerente'])) {
			$id = $_SESSION['login'];
			$a = new Contatos();
			$logado = $a->get($id);

			$requerente = addslashes($_POST['requerente']);
			$processo = addslashes($_POST['processo']);
			$penalidade = addslashes($_POST['penalidade']);
			$autos = addslashes($_POST['autos']);
			$artigo = addslashes($_POST['artigo']);
			$cod_infra = addslashes($_POST['cod_infra']);
			$veiculo_modelo = addslashes($_POST['veiculo_modelo']);
			$placa = addslashes($_POST['placa']);
			$uf = addslashes($_POST['uf']);
			$cor = addslashes($_POST['cor']);
			$ano_fab = addslashes($_POST['ano_fab']);
			$dos_fatos = addslashes($_POST['dos_fatos']);
			$dos_meritos = addslashes($_POST['dos_meritos']);
			$decisao = addslashes($_POST['decisao']);
			$estatos = addslashes($_POST['estatos']);
			$operador = $logado['nome'];

			$contatos = new Contatos();
			if($contatos->addDefesa($requerente, $processo, $penalidade, $autos, $artigo, $cod_infra, $veiculo_modelo, 
			$placa,$uf, $cor, $ano_fab, $dos_fatos, $dos_meritos, $decisao, $estatos, $operador)) {
				$_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Adicionado com sucesso!(homeController)
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				header("Location: ".BASE_URL);
			} else {
				$_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Não foi possivel inserir! (homeController)
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				header("Location: ".BASE_URL);
			}
		} else {
			$_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Chegou fora! (homeController)
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
			header("Location: ".BASE_URL);
		}
		//header("Location: ".BASE_URL);
	}
}