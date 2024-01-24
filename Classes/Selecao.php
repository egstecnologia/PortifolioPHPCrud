<?php
require_once "conexao.php";

class Selecao {
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

    public function checkUsuario($email, $senha) {
        try {
            $stmt = $this->db->prepare("SELECT id, email FROM clientes WHERE email = :email AND senha = :senha UNION ALL SELECT id, email FROM profissionais WHERE email = :email AND senha = :senha");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $res;    
        }
        catch (PDOException $e){
            echo $e;
        }
        
    }

    public function selecionarClientes() {
        $stmt = $this->db->prepare("SELECT id, nome, razao_social, tipo_p, cpf_cnpj, data_nasc, sexo, foto FROM clientes");
        
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    
    public function selecionarFuncionarios($cidade, $categorias) {
        if ($cidade != "" && $categorias != "") {
            $stmt = $this->db->query("SELECT id, nome, tipo_p, cpf_cnpj, cidade, categorias, endereco, telefone, cnae, razao_social, data_nascimento, sexo, placa_veicular, data_cad, descricao_prof, email, foto FROM profissionais WHERE cidade LIKE '%$cidade%' AND categorias LIKE '%$categorias%'");
            //$stmt->bindParam(":cidade", $cidade);
            //$stmt->bindParam(":categorias", $categorias);
    
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
        return [];
    }

    public function selecionarFuncForm($id) {
        $stmt = $this->db->prepare("SELECT tipo_p, cpf_cnpj, data_nascimento, placa_veicular, sexo, email, telefone, descricao_prof FROM profissionais WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


    public function selecionarCidades() {
        $stmt = $this->db->query("SELECT DISTINCT cidade FROM profissionais");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarCateg() {
        $stmt = $this->db->query("SELECT DISTINCT categorias FROM profissionais");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarFormasPagamanto() {
        $stmt = $this->db->prepare("SELECT id, id_prof, id_cli, descricao, data_cad FROM formas_recebimentos");
        
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarEnderecos() {
        $stmt = $this->db->prepare("SELECT id, id_prof, id_cli, titulo, cep, endereco, cplt_end, ponto_ref, numero_end, bairro, cod_mun, cidade, uf FROM enderecos");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarCategorias() {
        $stmt = $this->db->prepare("SELECT id, codigo_cbo, desc_servico, data_cad FROM categorias");
        
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarCategoriaServico() {
        $stmt = $this->db->prepare("SELECT id, id_prof, id_cli, id_categ FROM categoria_servico");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarContatos() {
        $stmt = $this->db->prepare("SELECT id, id_prof, id_cli, telefone, email, rede_social FROM contatos");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarCidadesAtend() {
        $stmt = $this->db->prepare("SELECT id, cod_mun, cidade, uf FROM cidades_atend");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarFotosServicos() {
        $stmt = $this->db->prepare("SELECT id, id_prof, foto FROM fotos_servicos");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarDiasHoras() {
        $stmt = $this->db->prepare("SELECT id, id_prof, dias_semana FROM dias_horas");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarPerguntas() {
        $stmt = $this->db->prepare("SELECT id, titulo, descricao FROM perguntas");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function selecionarAvaliacao() {
        $stmt = $this->db->prepare("SELECT id, id_prof, qtde_estrela FROM avaliacao");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function consultaDados() {
        $stmt = $this->db->prepare("SELECT COUNT(id) as cont, categorias FROM profissionais GROUP BY categorias");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

}

?>
