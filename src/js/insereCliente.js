$(document).ready(function(){
    $("#formCliente").submit(function(e){ 
        console.log("AQUI");
        e.preventDefault();
        $.ajax({
            type: 'POST',
            //url: '../../Classes/cadastraProfissional.php', // Arquivo em PHP Que Fará o Processamento
            url: 'cadastraCliente.php', // Arquivo em PHP Que Fará o Processamento
            data: $(this).serialize(),
            success: function(response){
                console.log(response);
                $('mensagem').html(response); // Exibe a Mensagem de Sucesso Vinda do PHP
                $('#formCliente')[0].reset(); //Limpa o Formulário
            }
        });
    });
});
