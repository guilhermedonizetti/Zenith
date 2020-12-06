  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Quantidade'],

          <?php 

          include 'conexao.php';
          $sql = "SELECT * FROM clientes";
          $buscar = mysqli_query($conexao,$sql);

          while ($dados = mysqli_fetch_array($buscar)) {

            $mes = $dados['mes_cliente'];
            $quantidade = $dados['quantidade'];


            ?>


            ['<?php echo $mes ?>',  <?php echo $quantidade ?>],
          <?php } ?>
          ]);

        var options = {
          title: '',
         // curveType: 'function',
         legend: { position: 'none' }
       };

       var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

       chart.draw(data, options);
     }
   </script>
   <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        <?php

        include 'conexao.php';
        $sql = "SELECT * FROM vendas";
        $buscar = mysqli_query($conexao,$sql);

        while ($dados = mysqli_fetch_array($buscar)) {

          $mes = $dados['mes_venda'];
          $quantidade = $dados['quantidade_venda'];


          ?>

          ['<?php echo $mes ?>',    <?php echo $quantidade ?>],
        <?php } ?>
        ]);

      var options = {
        title: '',
        height:200 
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);



    }
  </script>

  
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Quantidade', 'Valor',{ role: 'style' }],
          <?php

          include 'conexao.php';
          $sql = "SELECT * FROM vendas";
          $buscar = mysqli_query($conexao,$sql);

          while ($dados = mysqli_fetch_array($buscar)) {
            $quantidade = $dados['quantidade_venda'];
            $valor = $dados['valor_venda'];
         
          ?>
          ['<?php echo $quantidade ?>', <?php echo $valor ?>,'#000'],
       
        <?php } ?>
        ]);

        var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "População das Cidades",
        //width: 900,
        height: 200,
        bar: {groupWidth: "20%"},
        legend: { position: "top" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("graficoColuna"));
      chart.draw(view, options);
  }
  </script>
<style type="text/css">
    .sombra {
      -webkit-box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
      -moz-box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
      box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
    }

  </style>
</head>
<body>

  <div class="container-fluid" style="margin-top: 40px">
    <div class="row">
      <div class="col-md-6">
        <h4>Quantidade Venda</h4>
        <div id="piechart" class="sombra"></div>
      </div>
      <div class="col-md-6">
        <h4>Quantidade Venda</h4>
        <div id="graficoColuna" class="sombra"></div>
      </div>
      <div class="col-md-12">
        <h4>Gráfico de Clientes</h4>
        <div id="curve_chart" class="sombra"></div>
      </div>
    </div>
  </div>

</body>
</html>


  