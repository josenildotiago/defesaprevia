<?php
class Contatos extends model
{

	public function getAll()
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia ORDER BY data_entrada DESC";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}
	public function mudarOrdem()
	{
		if (isset($_GET['ordem'])) {
			$_SESSION['frase'] = $_GET['ordem'];
		} else {
			$_SESSION['frase'] = "ASC";
		}
		$var = $_SESSION['frase'];
		$array = array();

		$sql = "SELECT * FROM defesaprevia ORDER BY data_entrada $var";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}
	public function mudarOrdemNome($nomequalquer)
	{
		$nome = addslashes($nomequalquer);
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE requerente LIKE '%$nome%'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		}
		return $array;
	}

	public function mudarOrdemProcesso($processoqualquer)
	{
		$processo = addslashes($processoqualquer);
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE processo LIKE '%$processo%'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		}
		return $array;
	}

	public function getAllMensagem($id_user){
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

	public function inserirResposta($id, $messagem){
		$sql = "INSERT INTO defesa_previa_msg_modal SET id_user = :id_user, resposta = :resposta, hora = NOW()";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_user', $id);
		$sql->bindValue(':resposta', $messagem);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getAllDefesaModalPorPessoa($id_user){
		$array = array();

		$sql = "SELECT * FROM defesa_previa_msg_modal WHERE id_user = :id_user ORDER BY id DESC";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_user', $id_user);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch(PDO::FETCH_ASSOC);
		}

		return $array;;
	}

	public function getAllDefesaModal()
	{
		$array = array();

		$sql = "SELECT * FROM defesa_previa_msg_modal ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function getAll2()
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function get($id)
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch(PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getDeferidor($id)
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getDeferidor2($cpf)
	{
		$array = array();

		$sql = "SELECT nome FROM login_defesaprevia WHERE cpf = :cpf";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':cpf', $cpf);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function get3($logado)
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE operador = :logado";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':logado', $logado);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getAllProcessos($logado)
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE operador = :logado";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':logado', $logado);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getPegarLogado($id)
	{
		$array = array();

		$sql = "SELECT * FROM login_defesaprevia WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getUsuario($email, $senha)
	{
		$array = array();

		$sql = "SELECT * FROM login_defesaprevia WHERE email = :email, senha = :senha";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->bindValue(':senha', md5($senha));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getProcesso($id)
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function get2($id)
	{
		$array = array();

		$sql = "SELECT * FROM defesaprevia WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function add($nome, $email)
	{
		if ($this->emailExists($email) == false) {
			//$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
			$sql = "INSERT INTO defesaprevia SET requerente = :requerente, processo = :processo, 
                                    penalidade = :penalidade, autos = :autos, 
                                    veiculo_modelo = :veiculo_modelo, placa = :placa, 
                                    cor = :cor, ano_fab = :ano_fab, dos_fatos = :dos_fatos, 
                                    dos_meritos = :dos_meritos, decisao = :decisao, 
                                    estatos = :estatos";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function addModal($justificativa, $id){
		$sql = "INSERT INTO defesa_previa_msg_modal SET justificativa = :justificativa, id_user = :id_user, hora = NOW()";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':justificativa', $justificativa);
		$sql->bindValue(':id_user', $id);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function pegarLogadoModal($id)
	{
		$array = array();

		$sql = "SELECT operador FROM defesaprevia WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}
		return $array;
	}

	public function getNome($cpf)
	{
		$array = array();

		$sql = "SELECT * FROM login_defesaprevia WHERE cpf = :cpf";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':cpf', $cpf);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch(PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getLogadoModalCpf($cpf)
	{
		$array = array();

		$sql = "SELECT id FROM login_defesaprevia WHERE cpf = :cpf";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':cpf', $cpf);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function addLogin($nome, $cpf, $email, $senha, $usuario, $tipo)
	{
		if ($this->cpfExists2($cpf) == false) {
			//$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
			$sql = "INSERT INTO login_defesaprevia SET nome = :nome, cpf = :cpf, email = :email, 
                                    senha = :senha, usuario = :usuario, 
                                    tipo = :tipo";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':cpf', $cpf);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':senha', md5($senha));
			$sql->bindValue(':usuario', $usuario);
			$sql->bindValue(':tipo', $tipo);
			$sql->execute();

			return true;
		} else {

			return false;
		}
	}

	public function addDefesa(
		$requerente,
		$processo,
		$penalidade,
		$autos,
		$artigo,
		$cod_infra,
		$veiculo_modelo,
		$placa,
		$uf,
		$cor,
		$ano_fab,
		$dos_fatos,
		$dos_meritos,
		$decisao,
		$estatos,
		$operador
	) {
		$sql = "INSERT INTO defesaprevia SET requerente = :requerente, processo = :processo, 
									penalidade = :penalidade, autos = :autos, artigo = :artigo, 
									cod_infra = :cod_infra, veiculo_modelo = :veiculo_modelo, placa = :placa, uf = :uf, 
									cor = :cor, ano_fab = :ano_fab, dos_fatos = :dos_fatos, 
									dos_meritos = :dos_meritos, decisao = :decisao, 
									estatos = :estatos, operador = :operador";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':requerente', mb_strtoupper($requerente));
		$sql->bindValue(':processo', $processo);
		$sql->bindValue(':penalidade', mb_strtoupper($penalidade));
		$sql->bindValue(':autos', mb_strtoupper($autos));
		$sql->bindValue(':artigo', mb_strtoupper($artigo));
		$sql->bindValue(':cod_infra', $cod_infra);
		$sql->bindValue(':veiculo_modelo', mb_strtoupper($veiculo_modelo));
		$sql->bindValue(':placa', mb_strtoupper($placa));
		$sql->bindValue(':uf', mb_strtoupper($uf));
		$sql->bindValue(':cor', mb_strtoupper($cor));
		$sql->bindValue(':ano_fab', $ano_fab);
		$sql->bindValue(':dos_fatos', mb_strtoupper($dos_fatos));
		$sql->bindValue(':dos_meritos', mb_strtoupper($dos_meritos));
		$sql->bindValue(':decisao', mb_strtoupper($decisao));
		$sql->bindValue(':estatos', mb_strtoupper($estatos));
		$sql->bindValue(':operador', mb_strtoupper($operador));
		$sql->execute();
		if ($sql->rowCount() > 0) {
			$_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Adicionado com sucesso!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
			header("Location: http://localhost/defesaprevia/home");
			return true;
		} else {
			$_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Não foi possivel inserir!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
			header("Location: http://localhost/defesaprevia/home");
			return false;
		}
	}

	public function edit($nome, $id)
	{
		$sql = "UPDATE contatos SET nome = :nome WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	public function editarDefesa(
		$id,
		$requerente,
		$processo,
		$penalidade,
		$autos,
		$artigo,
		$cod_infra,
		$veiculo_modelo,
		$placa,
		$uf,
		$cor,
		$ano_fab,
		$dos_fatos,
		$dos_meritos,
		$decisao,
		$estatos,
		$operador,
		$alterado_por
	) {
		$sql = "UPDATE defesaprevia SET requerente = :requerente, processo = :processo, 
		penalidade = :penalidade, autos = :autos, artigo = :artigo, 
		cod_infra = :cod_infra, veiculo_modelo = :veiculo_modelo, placa = :placa, uf = :uf, 
		cor = :cor, ano_fab = :ano_fab, dos_fatos = :dos_fatos, 
		dos_meritos = :dos_meritos, decisao = :decisao, 
		estatos = :estatos, operador = :operador, alterado_por = :alterado_por WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':requerente', mb_strtoupper($requerente));
		$sql->bindValue(':processo', $processo);
		$sql->bindValue(':penalidade', mb_strtoupper($penalidade));
		$sql->bindValue(':autos', mb_strtoupper($autos));
		$sql->bindValue(':artigo', mb_strtoupper($artigo));
		$sql->bindValue(':cod_infra', $cod_infra);
		$sql->bindValue(':veiculo_modelo', mb_strtoupper($veiculo_modelo));
		$sql->bindValue(':placa', mb_strtoupper($placa));
		$sql->bindValue(':uf', mb_strtoupper($uf));
		$sql->bindValue(':cor', mb_strtoupper($cor));
		$sql->bindValue(':ano_fab', $ano_fab);
		$sql->bindValue(':dos_fatos', mb_strtoupper($dos_fatos));
		$sql->bindValue(':dos_meritos', mb_strtoupper($dos_meritos));
		$sql->bindValue(':decisao', mb_strtoupper($decisao));
		$sql->bindValue(':estatos', mb_strtoupper($estatos));
		$sql->bindValue(':operador', mb_strtoupper($operador));
		$sql->bindValue(':alterado_por', mb_strtoupper($alterado_por));
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Editado com sucesso!
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
			</div>";
			header("Location: http://localhost/defesaprevia/home");
			return true;
		} else {
			$_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Você clicou em editar mas não alterou nada!
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
			</div>";
			header("Location: http://localhost/defesaprevia/home");
			return false;
		}
	}

	public function delete($id)
	{
		$sql = "DELETE FROM contatos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	private function emailExists($email)
	{
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	private function cpfExists2($cpf)
	{
		$sql = "SELECT * FROM login_defesaprevia WHERE cpf = :cpf";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':cpf', $cpf);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function login($email, $senha)
	{
		$sql = $this->db->prepare("SELECT id,tipo FROM login_defesaprevia WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			if ($dado['tipo'] == 0) {
				$_SESSION['login'] = $dado['id'];
			} elseif ($dado['tipo'] == 1) {
				$_SESSION['painel'] = $dado['tipo'];
				$_SESSION['painel2'] = $dado['id'];
			}

			$_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Logado com sucesso!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
			return true;
		} else {
			$_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>E-mail e/ou senha inválido!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
			</div>";
			return false;
		}
	}
}
