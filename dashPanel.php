<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Mês', 'Quantidade'],

        <?php

        include 'conexao.php';
        $sql = "SELECT * FROM vendas";
        $buscar = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($buscar)) {

          $mes = $dados['mes_venda'];
          $quantidade = $dados['valor_venda'];


        ?>


          ['<?php echo $mes ?>', <?php echo $quantidade ?>],
        <?php } ?>
      ]);

      var options = {
        title: '',
        //curveType: 'function',
        legend: {
          position: 'none'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('graficoCurvo'));

      chart.draw(data, options);
    }
  </script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {

      var data = google.visualization.arrayToDataTable([
        ['Mes', 'Quantidade'],
        <?php

        include 'conexao.php';
        $sql = "SELECT * FROM clientes";
        $buscar = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($buscar)) {

          $mes = $dados['mes_cliente'];
          $quantidade = $dados['quantidade'];


        ?>

          ['<?php echo $mes ?>', <?php echo $quantidade ?>],
        <?php } ?>
      ]);

      var options = {
        title: '',
        height: 200
      };

      var chart = new google.visualization.PieChart(document.getElementById('graficoPizza'));

      chart.draw(data, options);



    }
  </script>



  <style type="text/css">
    .sombra {
      -webkit-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
      -moz-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
      box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
    }
  </style>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Mês", "Valor total", {
          role: "annotation"
        }],
        <?php

        include 'conexao.php';
        $sql = "SELECT sum(valor_venda)from vendas as total_ano where ano_venda=2020;";
        $buscar = mysqli_query($conexao, $sql);


        $valor_total = $dados['total_ano'];


        ?>['<?php echo ("2020") ?>', <?php echo $valor ?>, <?php echo $valor ?>],


      ]);


      var options = {
        title: '',
        hAxis: {
          title: 'Ano',
          titleTextStyle: {
            color: '#333'
          }
        },
        vAxis: {
          minValue: 0
        }
      };

      var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
</head>

<body>

  <div class="container-fluid" style="margin-top: 40px">
    <div class="row">
      <div class="col-md-6">
        <h4>Quantidade de Clientes por Mês</h4>
        <div id="graficoPizza" class="sombra"></div>
      </div>
      <div class="col-md-6">
        <h4>Total de Vendas por Mês </h4>
        <div id="graficoCurvo" class="sombra"></div>
      </div>
      <div class="col-md-12" style="margin-top:15px;">
        <hr>
        <h4>Total de Vendas por Ano</h4>
        <div id="chart_div" class="sombra"></div>
      </div>

    </div>
  </div>

</body>

</html>