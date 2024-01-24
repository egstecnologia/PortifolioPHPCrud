$(document).ready(function(){
    $("#formProfissional").submit(function(e){ 
        e.preventDefault();
        $.ajax({
            type: 'POST',
            //url: '../../Classes/cadastraProfissional.php', // Arquivo em PHP Que Fará o Processamento
            url: 'cadastraProfissional.php', // Arquivo em PHP Que Fará o Processamento
            data: new FormData(this),
            success: function(response){
                console.log(response);
                $('mensagem').html(response); // Exibe a Mensagem de Sucesso Vinda do PHP
                $('#formProfissional')[0].reset(); //Limpa o Formulário
            },
            cache: false,
            contentType: false,
            processData: false,
    
        });
    });
});
