<?php
require_once "conexao.php";

class Delecao {
    private $db;

    public function __construct() {
        try {
            //Conexão com o banco de dados
            $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }

    public function deletarCliente($id) {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = :id");
        $stmt->execute();
    }

    public function deletarProfissional($id) {
        $stmt = $this->db->prepare("DELETE FROM profissionais WHERE id = :id");
        $stmt->execute();
    }

    public function deletarFormasPagamentos($id) {
        $stmt = $this->db->prepare("DELETE FROM formas_recebimentos WHERE id = :id");
        $stmt->execute();
    }

    public function deletarEndereco($id) {
        $stmt = $this->db->prepare("DELETE FROM enderecos WHERE id = :id");
        $stmt->execute();
    }

    public function deletarCategoria($id) {
        $stmt = $this->db->prepare("DELETE FROM categorias WHERE id = :id");
        $stmt->execute();
    }

    public function deletarCategoriaServico($id) {
        $stmt = $this->db->prepare("DELETE FROM categoria_servico WHERE id = :id");
        $stmt->execute();
    }

    public function deletarContatos($id) {
        $stmt = $this->db->prepare("DELETE FROM contatos WHERE id = :id");
        $stmt->execute();
    }

    public function deletarCidadesAtend($id) {
        $stmt = $this->db->prepare("DELETE FROM cidades_atend WHERE id = :id");
        $stmt->execute();
    }

    public function deletarFotosServicos($id) {
        $stmt = $this->db->prepare("DELETE FROM fotos_servicos WHERE id = :id");
        $stmt->execute();
    }

    public function deletarDiasHoras($id) {
        $stmt = $this->db->prepare("DELETE FROM dias_horas WHERE id = :id");
        $stmt->execute();
    }

    public function deletarPerguntas($id) {
        $stmt = $this->db->prepare("DELETE FROM perguntas WHERE id = :id");
        $stmt->execute();
    }

    public function deletarAvaliacao($id) {
        $stmt = $this->db->prepare("DELETE FROM avaliacao WHERE id = :id");
        $stmt->execute();
    }

}


?>
