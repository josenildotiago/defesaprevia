<?php
class deferidorController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarNome', $dados);
		$this->loadTemplate('deferidor', $dados);
	}

	public function addModal(){
		if (isset($_POST['justificativa'])) {

			$id = addslashes($_POST['id']);
			$x = new Contatos();

			$cpf = $x->getDeferidor($id);
			$cpf = $cpf['operador'];
			$y = new Contatos();
			$z = $y->getLogadoModalCpf($cpf);
			$id = $z['id'];
			$justificativa = addslashes($_POST['justificativa']);
			
			$contatos = new Contatos();
			if ($contatos->addModal($justificativa, $id)) {
				$_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Mensagem enviada com sucesso!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				header("Location: ". BASE_URL."mensagem_def");
				exit;
			}else {
				$_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Não foi possivel enviar a mensagem
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				header("Location: ". BASE_URL."mensagem");
				exit;
			}
		}else {
			echo "Sem justificativa";
		}
	}
}