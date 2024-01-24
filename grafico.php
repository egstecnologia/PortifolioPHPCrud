<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>GRAFICO</title>
    <title>GRAFICO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Me Contrate 360" name="keywords">
    <meta content="Me Contrate 360" name="description">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>



    <div class="col-md-12 h-mrg" style="text-align: center; margin-top: 4rem;">
        <h4>PROFISSIONAIS CADASTRADOS</h4>
    </div>
    <div style="margin-top: 10rem; border: solid 1px silver; " class="container-form">
        <div class="container mb-5" id="grafico"></div>

    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="src/js/jqBarGraph.1.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/randomcolor@0.6.2/randomColor.min.js"></script>


    <script>
        $(function () {
            function gera_co() {
                return randomColor();
            }

            $.ajax({
                url: 'graficoReturn.php',
                type: 'GET',
                datatype: 'json',
                success: function (response) {
                    var dados_form = response.map(function (item) { return [item["cont"], item["categorias"], gera_co()]; });

                    $('#grafico').jqBarGraph({
                        data: dados_form,
                        barSpace: 40,
                        speed: 2,
                        //prefix: 'Qtde: ',
                        //legend: true,
                        //legends: "Qtde: "
                    });
                },
                error: function (error) {
                    console.log('Ero no codigo', error);
                }
            });
        });
    </script>

</body>

</html>