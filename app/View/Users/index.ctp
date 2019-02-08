<div class="panel-title">
  <h3>Dashboard</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <div class="dashboard-select">
      <select id="dashboard-select">
        <option value="1">CITCS</option>
        <option value="2">CAS</option>  
        <option value="3">CBA</option>
        <option value="4">CTE</option>
        <option value="5">CCJ</option>
        <option value="6">OFFICES</option>
      </select>  
    </div>
    <ul class="department">
      <li class="department-list"  data-aos="flip-down" data-aos-duration="1500">
        <span class="department-title">Courteous & Accomodating</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="2000">
        <span class="department-title">Professional</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="2000">
        <span class="department-title">Treated Fairly</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="2000">
        <span class="department-title">Provide accurate and adequate information</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="2000">
        <span class="department-title">Provide prompt service</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="2000">
        <span class="department-title">With clear instructions & procedures</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="1500">
        <span class="department-title">Has adequate facilities/equipment</span>
      </li>
      <li class="department-list"  data-aos="flip-down" data-aos-duration="1500">
        <span class="department-title">I am satisfied with the service i received</span>
      </li>
    </ul>
    <div class="loading-wrapper">
      <img src="../img/common/loading.gif" class="loading-screen">
    </div>
    <div class="panel-chart-wrapper">
    </div>
  </div>
</div>

<script>
  $(function() {
    const data = [
      {
        value: [
          {
            'subordinate':  'dean',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'faculty',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          }
        ],
      },
      {
        value: [
          {
            'subordinate':  'dean',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'faculty',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          }
        ],
      },
      {
        value: [
          {
            'subordinate':  'dean',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'faculty',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          }
        ],
      },
      {
        value: [
          {
            'subordinate':  'dean',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'faculty',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          }
        ],
      },
      {
        value: [
          {
            'subordinate':  'dean',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'faculty',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          }
        ],
      },
      {
        value: [
          {
            'subordinate':  'Registrar',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'Treasury',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'Guidance',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          },
          {
            'subordinate': 'NSTP',
            'data_value': [ 50, 50, 50, 50, 50, 50, 50, 50]
          }
        ]
      }   
    ];
    let url = "<?php echo $url ?>";
    $('#dashboard-select').on('change', function() {
      let getSelectValue = $(this).val();
      // let url = "<?php echo $url ?>";
      $.ajax({
        method: 'POST',
        data: {id:getSelectValue},
        url: url+'users/get_ratings/',
        dataType: 'json',
        success: function(response) {
          handleChartjs(response);
        }
      })
    })
    $.ajax({
      method: 'POST',
      data: {id:1},
      url: url+'users/get_ratings/',
      dataType: 'json',
      success: function(response) {
        handleChartjs(response);
      }
    });
  });

  function handleChartjs(data) {
    $(data.value).each(function(key,value) {
      $('.loading-screen').show();
      $('.panel-chart-wrapper').html('');
      setTimeout(function() {
        $('.panel-chart-wrapper').append(`
          <div class="panel-chart" data-aos="fade-up" data-aos-duration="1500">
            <div class="panel-chart-title">
              <span>`+ value['subordinate'] + `</span>
            </div>
            <canvas id=mychart-`+ key +`></canvas>
          </div>
        `)
        $('.loading-screen').hide();
        handleDisplayChart(key, value['data_value'])
      }, 1500)
    })
  }

  function handleDisplayChart( key, data ) {

    window.chartColors = {
        red: 'rgb(255, 0, 0)',
        green: 'rgb(0, 163, 51)',
        blue: 'rgb(54, 162, 235)',
        yellow: 'rgb(255, 255, 1)',
        violet: 'rgb(238, 130, 238)',
        orange: 'rgb(255, 165, 1)',
        darkblue: 'rgb(27, 0, 78)',
        medyogreen:'rgb(158, 226, 209)'
    };

    var barChartData = {
			labels: ['0', '1', '2', '3', '4', '5', '6','7'],
			datasets: [{
				label: ' ',
				backgroundColor: [
          window.chartColors.green,
          window.chartColors.red,
          window.chartColors.blue,
          window.chartColors.yellow,
          window.chartColors.violet,
          window.chartColors.orange,
          window.chartColors.darkblue,
          window.chartColors.medyogreen
        ],
				borderWidth: 1,
				data: data,
			}]
		};

    var config = {
      type: 'bar',
      data: barChartData,
      options: {
        scales: {
          yAxes: [{
            display: true,
            stacked: true,
            ticks: {
              min: 10, // minimum value
              max: 100, // maximum value
              callback: function (value) {
                return (value / this.max * 100).toFixed(0) + '%'; // convert it to percentage
              },
            },
          }]
        },
        responsive: true,
        legend: {
          display: false
        },
      }
    }

    var ctx = document.getElementById('mychart-'+key).getContext('2d');
    window.myPie = new Chart(ctx, config);
  }

  AOS.init({
      easing: 'ease-in-out-sine'
  });
</script>