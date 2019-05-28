<?php
class mensagemController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('home', $dados);
		if (isset($_SESSION['login']) || isset($_SESSION['painel'])) {
			$this->loadTemplate('mensagem', $dados);
		} else {
			$this->loadTemplate('login', $dados);
			exit;
		}
		if (isset($_POST['message']) && !empty($_POST['message'])) {
			$messagem = $_POST['message'];
			$id = $_POST['id'];
			$axy = new Contatos();
			if ($abx = $axy->inserirResposta($id, $messagem)==true) {
				echo "
				<script type='text/javascript'>
				window.location.href = BASE_URL + 'mensagem';
    			</script>
				";
			}
			//$abx = $axy->inserirResposta($id, $messagem);
			
		}
	}

	public function allMsg(){
		$id_user = $_POST['dados'];
		$array = array();

		$sql = "SELECT * FROM defesa_previa_msg_modal WHERE id_user = :id_user ORDER BY id DESC LIMIT 20";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_user', $id_user);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		}

		return $array;
	}
}