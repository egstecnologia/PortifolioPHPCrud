<?php
require_once "conexao.php";

class Insercao {
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
    
    public function inserirCliente($login, $senha, $nome, $tipo_p, $razao_social, $cpf_cnpj, $data_nasc, $sexo, $foto, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO clientes (email, senha, nome, tipo_p, razao_social, cpf_cnpj, data_nasc, sexo, foto, data_cad) VALUES (:email, :senha, :nome, :tipo_p, :razao_social, :cpf_cnpj, :data_nasc, :sexo, :foto, :data_cad)");
        $stmt->bindParam(":email", $login);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo_p", $tipo_p);
        $stmt->bindParam(":razao_social", $razao_social);
        $stmt->bindParam(":cpf_cnpj", $cpf_cnpj);
        $stmt->bindParam(":data_nasc", $data_nasc);
        $stmt->bindParam(":sexo", $sexo);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":data_cad", $data_cad);

        $stmt->execute();
        echo $stmt->rowCount();
        return $stmt->rowCount();
    
    }

    public function inserirPergunta($nome, $email, $titulo, $mensagem) {
        $stmt = $this->db->prepare("INSERT INTO perguntas (nome, email, titulo, mensagem) VALUES (:nome, :email, :titulo, :mensagem)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":mensagem", $mensagem);
    
        // Execute a consulta SQL
        $stmt->execute();
        // Verifique se a consulta foi bem-sucedida
        return $stmt->rowCount();
    }

    public function inserirProfissional($login, $senha, $nome, $tipo_p, $cpf_cnpj, $cnae, $razao_social, $data_nascimento, $sexo, $placa_veicular, $descricao_prof, $foto, $categoria, $telefone, $endereco, $cidade, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO profissionais (email, senha, nome, tipo_p, cpf_cnpj, cnae, razao_social, data_nascimento, sexo, placa_veicular, descricao_prof, foto, categorias, telefone, endereco, cidade, data_cad) VALUES (:email, :senha, :nome, :tipo_p, :cpf_cnpj, :cnae, :razao_social, :data_nascimento, :sexo, :placa_veicular, :descricao_prof, :foto, :categorias, :telefone, :endereco, :cidade, :data_cad)");
        $stmt->bindParam(":email", $login);
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
        $stmt->bindParam(":categorias", $categoria);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":endereco", $endereco);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();

        return $stmt->rowCount();
            
    }
    
    
    public function inserirFormasRecebimentos($id_prof, $id_cli, $descricao, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO formas_recebimentos (id_prof, id_cli, descricao, data_cad) VALUES (:id_prof, :id_cli, :descricao, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();
    }
    
    public function inserirEnderecos($id, $id_prof, $id_cli, $titulo, $cep, $endereco, $cplt_end, $ponto_ref, $numero_end, $bairro, $cod_mun, $cidade, $uf, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO enderecos (id, id_prof, id_cli, titulo, cep, endereco, cplt_end, ponto_ref, numero_end, bairro, cod_mun, cidade, uf, data_cad) VALUES (:id, :id_prof, :id_cli, :titulo, :cep, :endereco, :cplt_end, :ponto_ref, :numero_end, :bairro, :cod_mun, :cidade, :uf, :data_cad)");
        $stmt->bindParam(":id", $id);
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
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();
    }

    public function inserirCategorias($codigo_cbo, $desc_servico, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO categorias (codigo_cbo, desc_servico, data_cad) VALUES (:codigo_cbo, :desc_servico, :data_cad)");
        $stmt->bindParam(":codigo_cbo", $codigo_cbo);
        $stmt->bindParam(":desc_servico", $desc_servico);
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();
    }
    
    public function inserirCategoriaServico($id_prof, $id_cli, $id_categ, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO categoria_servico (id_prof, id_cli, id_categ, data_cad) VALUES (:id_prof, :id_cli, :id_categ, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":id_categ", $id_categ);
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();
    }

    public function inserirContatos($id_prof, $id_cli, $telefone, $email, $rede_social, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO contatos (id_prof, id_cli, telefone, email, rede_social, data_cad) VALUES (:id_prof, :id_cli, :telefone, :email, :rede_social, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":id_cli", $id_cli);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":rede_social", $rede_social);
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();
    }

    public function inserirCidadesAtend($id_prof, $cod_mun, $cidade, $uf, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO cidades_atend (id_prof, cod_mun, cidade, uf, data_cad) VALUES (:id_prof, :cod_mun, :cidade, :uf, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":cod_mun", $cod_mun);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":uf", $uf);
        $stmt->bindParam(":data_cad", $data_cad);
        $stmt->execute();
    }

    public function inserirFotosServicos($id_prof, $foto, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO fotos_servicos (id_prof, foto, data_cad) VALUES (:id_prof, :foto, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":data_cad", $data_cad);
    }

    public function inserirDiasHoras($id_prof, $dias_semana, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO dias_horas (id_prof, dias_semana, data_cad) VALUES (:id_prof, :dias_semana, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":dias_semana", $dias_semana);
        $stmt->bindParam(":data_cad", $data_cad);
    }

    //public function inserirPerguntas($titulo, $descricao, $data_cad) {
    //    $stmt = $this->db->prepare("INSERT INTO perguntas (titulo, descricao, data_cad) VALUES (:titulo, :descricao, :data_cad)");
    //    $stmt->bindParam(":titulo", $titulo);
    //    $stmt->bindParam(":descricao", $descricao);
    //    $stmt->bindParam(":data_cad", $data_cad);
    //}

    public function inserirAvaliacao($id_prof, $qtde_estrela, $data_cad) {
        $stmt = $this->db->prepare("INSERT INTO avalicao (id_prof, qtde_estrela, data_cad) VALUES (:id_prof, :qtde_estrela, :data_cad)");
        $stmt->bindParam(":id_prof", $id_prof);
        $stmt->bindParam(":qtde_estrela", $qtde_estrela);
        $stmt->bindParam(":data_cad", $data_cad);
    }

}

?>
