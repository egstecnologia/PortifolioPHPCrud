<?php
require_once "conexao.php";

class Atualizacao {
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

    public function editarCliente($id, $login, $senha, $nome, $tipo_p, $razao_social, $cpf_cnpj, $data_nasc, $sexo, $foto) {
        $stmt = $this->db->prepare("UPDATE clientes SET login = :login, senha = :senha, nome = :nome, tipo_p = :tipo_p, razao_social = :razao_social, cpf_cnpj = :cpf_cnpj, data_nasc = :data_nasc, sexo = :sexo, foto = :foto WHERE id = :id");
        $stmt->bindParam(":login", $login);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo_p", $tipo_p);
        $stmt->bindParam(":razao_social", $razao_social);
        $stmt->bindParam(":cpf_cnpj", $cpf_cnpj);
        $stmt->bindParam(":data_nasc", $data_nasc);
        $stmt->bindParam(":sexo", $sexo);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarProfissional($login, $senha, $nome, $tipo_p, $cpf_cnpj, $cnae, $razao_social, $data_nascimento, $sexo, $placa_veicular, $descricao_prof, $foto, $id_serv, $id) {
        $stmt = $this->db->prepare("UPDATE profissionais SET login = :login, senha = :senha, nome = :nome, tipo_p = :tipo_p, cpf_cnpj = :cpf_cnpj, cnae = :cnae, razao_social = :razao_social, data_nascimento = :data_nascimento, sexo = :sexo, placa_veicular = :placa_veicular, descricao_prof = :descricao_prof, foto = :foto, id_serv = :id_serv WHERE id = :id");
        
        $stmt->bindParam(":login", $login);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo_p", $tipo_p);
        $stmt->bindParam(":cpf_cnpj", $cpf_cnpj);
        $stmt->bindParam(":cnae", $cnae);
        $stmt->bindParam(":razao_social", $razao_social);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":sexo", $sexo);
        $stmt->bindParam(":placa_veicular", $placa_veicular);
        $stmt->bindParam(":descricao_prof", $descricao_prof);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":id_serv", $id_serv);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarFormasRecebimentos($id_prof, $id_cli, $descricao, $id) {
        $stmt = $this->db->prepare("UPDATE formas_recebimentos SET id_prof = :id_prof, id_cli = :id_cli, descricao = :descricao WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarEnderecos($id, $id_prof, $id_cli, $titulo, $cep, $endereco, $cplt_end, $ponto_ref, $numero_end, $bairro, $cod_mun, $cidade, $uf) {
        $stmt = $this->db->prepare("UPDATE enderecos SET id_prof = :id_prof, id_cli = :id_cli, titulo = :titulo, cep = :cep, endereco = :endereco, cplt_end = :cplt_end, ponto_ref = :ponto_ref, numero_end = :numero_end, bairro = :bairro, cod_mun = :cod_mun, cidade = :cidade, uf = :uf WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":cep", $cep);
        $stmt->bindParam(":endereco", $endereco);
        $stmt->bindParam(":cplt_end", $cplt_end);
        $stmt->bindParam(":ponto_ref", $ponto_ref);
        $stmt->bindParam(":numero_end", $numero_end);
        $stmt->bindParam(":bairro", $bairro);
        $stmt->bindParam(":cod_mun", $cod_mun);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":uf", $uf);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarCategorias($codigo_cbo, $desc_servico, $id) {
        $stmt = $this->db->prepare("UPDATE categorias SET codigo_cbo = :codigo_cbo, desc_servico = :desc_servico WHERE id = :id");
        $stmt->bindParam(":codigo_cbo", $codigo_cbo);
        $stmt->bindParam(":desc_servico", $desc_servico);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarCategoriaServico($id_prof, $id_cli, $id_categ, $id) {
        $stmt = $this->db->prepare("UPDATE categoria_servico SET id_prof = :id_prof, id_cli = :id_cli, id_categ = :id_categ WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":id_categ", $id_categ);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarContatos($id_prof, $id_cli, $telefone, $email, $rede_social, $id) {
        $stmt = $this->db->prepare("UPDATE contatos SET id_prof = :id_prof, id_cli = :id_cli, telefone = :telefone, email = :email, rede_social = :rede_social WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":rede_social", $rede_social);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarCidadesAtend($id_prof, $cod_mun, $cidade, $uf, $id) {
        $stmt = $this->db->prepare("INSERT INTO cidades_atend (id_prof, cod_mun, cidade, uf, id) VALUES (:id_prof, :cod_mun, :cidade, :uf, :id)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":cod_mun", $cod_mun);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":uf", $uf);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function editarFotosServicos($id_prof, $foto, $id) {
        $stmt = $this->db->prepare("UPDATE fotos_servicos SET id_prof = :id_prof, foto = :foto WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":id", $id);
    }

    public function editarDiasHoras($id_prof, $dias_semana, $id) {
        $stmt = $this->db->prepare("UPDATE dias_horas SET id_prof = :id_prof, dias_semana = :dias_semana WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":dias_semana", $dias_semana);
        $stmt->bindParam(":id", $id);
    }

    public function editarPerguntas($titulo, $descricao, $id) {
        $stmt = $this->db->prepare("UPDATE perguntas SET titulo = :titulo, descricao = :descricao WHERE id = :id");
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":id", $id);
    }

    public function editarAvaliacao($id_prof, $qtde_estrela, $id) {
        $stmt = $this->db->prepare("UPDATE avalicao SET id_prof = :id_prof, qtde_estrela = :qtde_estrela WHERE id = :id");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":qtde_estrela", $qtde_estrela);
        $stmt->bindParam(":id", $id);
    }

}


?>
