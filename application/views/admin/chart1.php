<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cust_style.css">
</head>
<body>
	<div id="canvas-holder" style="width:30%">
		<canvas id="chart-area" width="300" height="300" />
	</div>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
	<!-- <script src="<?php echo base_url();?>assets/js/cust_script.js"></script> -->
	<script type="text/javascript">
	$(document).ready(function() {
    window.onload = function() {

        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);


        var ctx1 = document.getElementById("chart-area1").getContext("2d");
        window.myDoughnut = new Chart(ctx1, config1);


        var chartEl = document.getElementById("chart2");
        window.myLine = new Chart(chartEl, {
          type: 'line',
          data: lineChartData,
          options: {
            title:{
              display:true,
              text:'Chart.js Line Chart - Custom Tooltips'
            },
            tooltips: {
              enabled: false,
              custom: customTooltips
            }
          }
        });

    };

    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    "#4D5360",
                ],
            }, {
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    "#4D5360",
                ],
            }],
            labels: [
                "Red",
                "Green",
                "Yellow",
                "Grey",
                "Dark Grey"
            ]
        },
        options: {
            responsive: true
	        tooltips: {
	            // custom: function(tooltip) {
	            //     // tooltip will be false if tooltip is not visible or should be hidden
	            //     if (!tooltip) {
	            //         return;
	            //     }

	            //     // Otherwise, tooltip will be an object with all tooltip properties like:

	            //     // tooltip.caretSize
	            //     // tooltip.caretPadding
	            //     // tooltip.chart
	            //     // tooltip.cornerRadius
	            //     // tooltip.fillColor
	            //     // tooltip.font...
	            //     // tooltip.text
	            //     // tooltip.x
	            //     // tooltip.y
	            //     // etc...
	            // }
	            enabled: false,
	            custom: customTooltips
	        }
        }
    };

	var customTooltips = function(tooltip) {

      // Tooltip Element
      var tooltipEl = $('#chartjs-tooltip');

      if (!tooltipEl[0]) {
        $('body').append('<div id="chartjs-tooltip"></div>');
        tooltipEl = $('#chartjs-tooltip');
      }

      // Hide if no tooltip
      if (!tooltip.opacity) {
        tooltipEl.css({
          opacity: 0
        });
        $('.chartjs-wrap canvas')
          .each(function(index, el) {
            $(el).css('cursor', 'default');
          });
        return;
      }

      $(this._chart.canvas).css('cursor', 'pointer');

      // Set caret Position
      tooltipEl.removeClass('above below no-transform');
      if (tooltip.yAlign) {
        tooltipEl.addClass(tooltip.yAlign);
      } else {
        tooltipEl.addClass('no-transform');
      }

      // Set Text
      if (tooltip.body) {
        var innerHtml = [
          (tooltip.beforeTitle || []).join('\n'), (tooltip.title || []).join('\n'), (tooltip.afterTitle || []).join('\n'), (tooltip.beforeBody || []).join('\n'), (tooltip.body || []).join('\n'), (tooltip.afterBody || []).join('\n'), (tooltip.beforeFooter || [])
          .join('\n'), (tooltip.footer || []).join('\n'), (tooltip.afterFooter || []).join('\n')
        ];
        tooltipEl.html(innerHtml.join('\n'));
      }

      // Find Y Location on page
      var top = 0;
      if (tooltip.yAlign) {
        if (tooltip.yAlign == 'above') {
          top = tooltip.y - tooltip.caretHeight - tooltip.caretPadding;
        } else {
          top = tooltip.y + tooltip.caretHeight + tooltip.caretPadding;
        }
      }

      var position = $(this._chart.canvas)[0].getBoundingClientRect();

      // Display, position, and set styles for font
      tooltipEl.css({
        opacity: 1,
        width: tooltip.width ? (tooltip.width + 'px') : 'auto',
        left: position.left + tooltip.x + 'px',
        top: position.top + top + 'px',
        fontFamily: tooltip._fontFamily,
        fontSize: tooltip.fontSize,
        fontStyle: tooltip._fontStyle,
        padding: tooltip.yPadding + 'px ' + tooltip.xPadding + 'px',
      });
    };

    $('#randomizeData').click(function() {
        $.each(config.data.datasets, function(i, piece) {
            $.each(piece.data, function(j, value) {
                config.data.datasets[i].data[j] = randomScalingFactor();
                config.data.datasets[i].backgroundColor[j] = randomColor(0.7);
            });
        });
        window.myPie.update();
    });

    $('#addDataset').click(function() {
        var newDataset = {
            backgroundColor: [randomColor(0.7), randomColor(0.7), randomColor(0.7), randomColor(0.7), randomColor(0.7)],
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        };

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    $('#removeDataset').click(function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });

});
	</script>
</body>
</html>