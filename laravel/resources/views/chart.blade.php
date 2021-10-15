

<div id="ChartButtonsContainerContainer"style="width:1000px; margin: 0 auto 30px auto;">
  <div id="ChartButtonsContainer" class="text-right">
    <button id="display_tenchart" class="btn btn-dark" disabled>10件</button>
    <button id="display_thirtychart" class="btn btn-dark">30件</button>
    <button id="display_allchart" class="btn btn-dark">全部</button>
  </div>
  <canvas id="Chart_default" style="width:1000px; height:300px;"></canvas>
</div>

<script>
  var ctx = document.getElementById('Chart_default').getContext('2d');
  var score = [];
  var labels = [];
  var histories_json = @json($histories);
  var histories_thirty_json = @json($histories_thirty);
  var histories_all_json = @json($histories_all);

  get_scores_ten();
  display_chart();

  //10件のスコアを取得
  function get_scores_ten(){
    $("#display_tenchart").prop("disabled", true);
    $("#display_thirtychart").prop("disabled", false);
    $("#display_allchart").prop("disabled", false);
    score = [];
    labels = [];
    for(var i=0; i < histories_json['data'].length; i++){
    score.unshift(histories_json['data'][i]['score']);
    labels.unshift(histories_json['data'][i]['created_at'].split(" ")[0].split("-")[1] + "/" + histories_json['data'][i]['created_at'].split(" ")[0].split("-")[2]);
    }
  }
  //30件のスコアを取得
  function get_scores_thirty(){
    $("#display_tenchart").prop("disabled", false);
    $("#display_thirtychart").prop("disabled", true);
    $("#display_allchart").prop("disabled", false);
    score = [];
    labels = [];
    for(var i=0; i < histories_thirty_json['data'].length; i++){
    score.unshift(histories_thirty_json['data'][i]['score']);
    labels.unshift(histories_thirty_json['data'][i]['created_at'].split(" ")[0].split("-")[1] + "/" + histories_thirty_json['data'][i]['created_at'].split(" ")[0].split("-")[2]);
    }
  }
  //全件のスコアを取得
  function get_scores_all(){
    $("#display_tenchart").prop("disabled", false);
    $("#display_thirtychart").prop("disabled", false);
    $("#display_allchart").prop("disabled", true);
    score = [];
    labels = [];
    for(var i=0; i < histories_all_json.length; i++){
    score.unshift(histories_all_json[i]['score']);
    labels.unshift(histories_all_json[i]['created_at'].split(" ")[0].split("-")[1] + "/" + histories_all_json[i]['created_at'].split(" ")[0].split("-")[2]);
    }
  }
  //10件表示
  $('#display_tenchart').on('click', function() {
    myChart.destroy();
    get_scores_ten()
    display_chart();     
  });
  //30件表示
  $('#display_thirtychart').on('click', function() {
    myChart.destroy();
    get_scores_thirty()
    display_chart();     
  });
  //全件表示
  $('#display_allchart').on('click', function() {
    myChart.destroy();
    get_scores_all()
    display_chart();     
  });

  // チャートを表示
  function display_chart(){
        myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: '体調スコアの推移',
                data: score
              }
            ]
        },
        options:{
          scales:{
            xAxes:[],
            yAxes:[
              {
                ticks:{
                  min: 0,
                  max: 100,
                }
              }
            ]
          }
        },
    });
  };
  // インスタンス破棄をするために、グローバル変数で定義
  var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: '体調スコアの推移',
                data: score
              }
            ]
        },
        options:{
          scales:{
            xAxes:[],
            yAxes:[
              {
                ticks:{
                  min: 0,
                  max: 100,
                }
              }
            ]
          }
        },
    });
</script>