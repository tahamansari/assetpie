$(document).ready(function() {


    $(document).on('click', '.click', function() {
        alert('clicked');
    });


    $("#owl-demo").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });


    $("#owl-demo1").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

    $("#owl-demo2").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

    $("#owl-demo3").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

    $("#owl-demo4").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });


    window.onload = function() {


        $("#ex13").slider({
            ticks: [0, 200, 400],
            ticks_labels: ["CONSERVATIVE", "MODERATE", "AGGRESSIVE"],
            ticks_snap_bounds: 30
        });

        $("#ex14").slider({
            ticks: [0, 200, 400],
            ticks_labels: ["CONSERVATIVE", "MODERATE", "AGGRESSIVE"],
            ticks_snap_bounds: 30
        });

        //idel chart
        // ............................

        // var colors = Highcharts.getOptions().colors,
            var colors = [
                "#FFFFFF",
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
                "#949FB1",
                "#4D5360",
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
                "#949FB1",
                "#4D5360"
            ],


            categories = ['15%', '25%', '35%', '25%'],

            data = [{

                    y: 10.33,
                    color: colors[1],
                    drilldown: {
                        name: 'MSIE versions',
                        // categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0', 'MSIE 10.0', 'MSIE 11.0'],
                        // data: [1.06, 0.5, 17.2, 8.11, 5.33, 24.13],
                        categories: ['MSIE 6.0'],
                        data: [1.06],
                        color: colors[0]
                    }
                }, {
                    y: 20.38,
                    color: colors[1],
                    drilldown: {
                        name: 'Firefox versions',
                        // categories: ['Firefox v31', 'Firefox v32', 'Firefox v33', 'Firefox v35', 'Firefox v36', 'Firefox v37', 'Firefox v38'],
                        // data: [0.33, 0.15, 0.22, 1.27, 2.76, 2.32, 2.31, 1.02],

                        categories: ['MSIE 6.0'],
                        data: [1.06],

                        color: colors[0]
                    }
                },

                {
                    y: 3.38,
                    color: colors[1],
                    drilldown: {
                        name: 'Firefox versions',
                        // categories: ['Firefox v31', 'Firefox v32', 'Firefox v33', 'Firefox v35', 'Firefox v36', 'Firefox v37', 'Firefox v38'],
                        // data: [0.33, 0.15, 0.22, 1.27, 2.76, 2.32, 2.31, 1.02],

                        categories: ['MSIE 6.0'],
                        data: [1.06],

                        color: colors[0]
                    }
                }
                
            ],
            browserData = [],
            versionsData = [],
            i,
            j,
            dataLen = data.length,
            drillDataLen,
            brightness;

        // Build the data arrays
        for (i = 0; i < dataLen; i += 1) {
            // add browser data
            browserData.push({
                name: categories[i],
                y: data[i].y,
                // data[i].color
                color: "#ecf0f5"
            });

            // add version data
            drillDataLen = data[i].drilldown.data.length;
            for (j = 0; j < drillDataLen; j += 1) {

                brightness = 0.2 - (j / drillDataLen) / 5;
                versionsData.push({
                    name: data[i].drilldown.categories[j],
                    y: data[i].drilldown.data[j],
                    color: Highcharts.Color(data[i].color).brighten(brightness).get()
                });
                
            }
        }

        // Create the chart
        $('#idealtab').highcharts({

            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            chart: {
                type: 'pie',
                backgroundColor: "#ffffff",
                polar: true,

            },
            
            labels: {
                enabled: false
            },

            plotOptions: {
                pie: {
                    shadow: false,
                    center: ['50%', '50%']
                }
            },
            tooltip: {
                valueSuffix: '%'
            },
            series: [

            {
                name: 'Browsers',
                data: browserData,
                size: '80%',
                colors: 'black',
                color: 'orange',
                dataLabels: {
                    formatter: function() {
                        return this.y > 5 ? this.point.name : null;
                    },
                    distance: -30
                },
                borderWidth: "1px"

            }, 

            {
                name: 'Versions',
                data: versionsData,
                size: '100%',
                innerSize: '280',
                dataLabels: {
                    formatter: function() {
                        // display only if larger than 1
                        return this.y > 1 ? '<b>' + this.point.name + ':</b> ' + this.y + '%' : null;
                    }
                },
                borderWidth: "1px"

            },

            ],

            exporting: {
                enabled: false
            },


        });




        // donut chart
        ///....................................

        $('#currenttab').highcharts({

            title: {
                text: ''
            },
            subTitle: {
                text: ''
            },
            credits: {
                enabled: false
            },
            legend: {},

            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                plotShadow: false,
                backgroundColor: '#f9f9f9',
                polar: true,
            },
            title: {
                text: '<p class="click" onclick="clickme()">Click me</p>',
                align: 'center',
                verticalAlign: 'middle',
                y: 40
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        style: {
                            fontWeight: 'bold',
                            color: 'white'
                        }
                    },
                    startAngle: -180,
                    endAngle: 180,
                    center: ['50%', '50%']
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                innerSize: '50%',
                data: [
                    ['Firefox', 10.38],
                    ['IE', 56.33],
                    ['Chrome', 24.03],
                    ['Safari', 4.77],
                    ['Opera', 0.91], {
                        name: 'Proprietary or Undetectable',
                        y: 0.2,
                        dataLabels: {
                            enabled: false
                        }
                    }
                ]
            }],
            exporting: {
                enabled: false
            }
        });



        //expenses
        // ..........................................


        $('#expensestab').highcharts({

            title: {
                text: ''
            },
            subTitle: {
                text: ''
            },
            credits: {
                enabled: false
            },
            legend: {

            },
            chart: {
                zoomType: 'xy'
            },
            
            xAxis: [{
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value} °C',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Temperature',
                    style: {
                        
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Rainfall',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value} mm',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],

            exporting: {
                enabled: false
            },

            tooltip: {
                shared: true
            },

            series: [{
                name: 'Rainfall',
                type: 'column',
                yAxis: 1,
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                tooltip: {
                    pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f} mm</b> '
                }
            }, {
                name: 'Rainfall error',
                type: 'errorbar',
                yAxis: 1,
                data: [
                    [48, 51],
                    [68, 73],
                    [92, 110],
                    [128, 136],
                    [140, 150],
                    [171, 179],
                    [135, 143],
                    [142, 149],
                    [204, 220],
                    [189, 199],
                    [95, 110],
                    [52, 56]
                ],
                tooltip: {
                    pointFormat: '(error range: {point.low}-{point.high} mm)<br/>'
                }
            }, {
                name: 'Temperature',
                type: 'spline',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                tooltip: {
                    pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f}°C</b> '
                }
            }, {
                name: 'Temperature error',
                type: 'errorbar',
                data: [
                    [6, 8],
                    [5.9, 7.6],
                    [9.4, 10.4],
                    [14.1, 15.9],
                    [18.0, 20.1],
                    [21.0, 24.0],
                    [23.2, 25.3],
                    [26.1, 27.8],
                    [23.2, 23.9],
                    [18.0, 21.1],
                    [12.9, 14.0],
                    [7.6, 10.0]
                ],
                tooltip: {
                    pointFormat: '(error range: {point.low}-{point.high}°C)<br/>'
                }
            }]
        });




        // Chart.defaults.global.legend.display = false;
        // var ctx = document.getElementById("chart-area").getContext("2d");
        // window.myPie = new Chart(ctx, config);




        // var ctx1 = document.getElementById("chart-area1").getContext("2d");
        // window.myDoughnut = new Chart(ctx1, config1);


        // var chartEl = document.getElementById("chart2");
        // window.myLine = new Chart(chartEl, {
        //   type: 'line',
        //   data: lineChartData,
        //   options: {
        //     title:{
        //       display:true,
        //       text:'Chart.js Line Chart - Custom Tooltips'
        //     },
        //     // label : [12,12,12,12,12],
        //     tooltips: {
        //       enabled: false,
        //       custom: customTooltips
        //     }
        //   }
        // });

    };

    // var randomScalingFactor = function() {
    //     return Math.round(Math.random() * 100);
    // };
    // var randomColorFactor = function() {
    //     return Math.round(Math.random() * 255);
    // };
    // var randomColor = function(opacity) {
    //     return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    // };

    // var config = {  
    //     type: 'pie',
    //     data: {


    //         datasets: [{
    //             data: [
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //             ],
    //             backgroundColor: [
    //                 "#F7464A",
    //                 "#46BFBD",
    //                 "#FDB45C",
    //                 "#949FB1",
    //                 "#4D5360",
    //             ],
    //         }, {
    //             data: [
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //             ],
    //             backgroundColor: [
    //                 "#F7464A",
    //                 "#46BFBD",
    //                 "#FDB45C",
    //                 "#949FB1",
    //                 "#4D5360",
    //             ],
    //             borderColor:"#DEDEDE",
    //             borderWidth:1,
    //         }],
    //         labels: [
    //             "Red",
    //             "Green",
    //             "Yellow",
    //             "Grey",
    //             "Dark Grey"
    //         ]
    //     },
    //     options: {
    //         responsive: true,

    //     }
    // };


    // // ..........................


    // var randomScalingFactor = function() {
    //     return Math.round(Math.random() * 100);
    // };
    // var randomColorFactor = function() {
    //     return Math.round(Math.random() * 255);
    // };
    // var randomColor = function(opacity) {
    //     return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    // };

    // var config1 = {
    //     type: 'doughnut',
    //     data: {
    //         datasets: [{
    //             data: [
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //             ],
    //             backgroundColor: [
    //                 "#F7464A",
    //                 "#46BFBD",
    //                 "#FDB45C",
    //                 "#949FB1",
    //                 "#4D5360",
    //             ],
    //             label: 'Dataset 1'
    //         }, {
    //             hidden: true,
    //             data: [
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //             ],
    //             backgroundColor: [
    //                 "#F7464A",
    //                 "#46BFBD",
    //                 "#FDB45C",
    //                 "#949FB1",
    //                 "#4D5360",
    //             ],
    //             label: 'Dataset 2'
    //         }, {
    //             data: [
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //             ],
    //             backgroundColor: [
    //                 "#F7464A",
    //                 "#46BFBD",
    //                 "#FDB45C",
    //                 "#949FB1",
    //                 "#4D5360",
    //             ],
    //             label: 'Dataset 3'
    //         }],
    //         labels: [
    //             "Red",
    //             "Green",
    //             "Yellow",
    //             "Grey",
    //             "Dark Grey"
    //         ]
    //     },
    //     options: {

    //         percentageInnerCutout: 10,

    //         responsive: true,
    //         legend: {
    //             position: 'top',
    //         },
    //         title: {
    //             display: true,
    //             text: 'Chart.js Doughnut Chart'
    //         },
    //         animation: {
    //             animateScale: true,
    //             animateRotate: true
    //         }
    //     }
    // };


    // // .................................


    // window.count = 0;
    // Chart.defaults.global.pointHitDetectionRadius = 1;
    // var customTooltips = function(tooltip) {

    //   // Tooltip Element
    //   var tooltipEl = $('#chartjs-tooltip');

    //   if (!tooltipEl[0]) {
    //     $('body').append('<div id="chartjs-tooltip"></div>');
    //     tooltipEl = $('#chartjs-tooltip');
    //   }

    //   // Hide if no tooltip
    //   if (!tooltip.opacity) {
    //     tooltipEl.css({
    //       opacity: 0
    //     });
    //     $('.chartjs-wrap canvas')
    //       .each(function(index, el) {
    //         $(el).css('cursor', 'default');
    //       });
    //     return;
    //   }

    //   $(this._chart.canvas).css('cursor', 'pointer');

    //   // Set caret Position
    //   tooltipEl.removeClass('above below no-transform');
    //   if (tooltip.yAlign) {
    //     tooltipEl.addClass(tooltip.yAlign);
    //   } else {
    //     tooltipEl.addClass('no-transform');
    //   }

    //   // Set Text
    //   if (tooltip.body) {
    //     var innerHtml = [
    //       (tooltip.beforeTitle || []).join('\n'), (tooltip.title || []).join('\n'), (tooltip.afterTitle || []).join('\n'), (tooltip.beforeBody || []).join('\n'), (tooltip.body || []).join('\n'), (tooltip.afterBody || []).join('\n'), (tooltip.beforeFooter || [])
    //       .join('\n'), (tooltip.footer || []).join('\n'), (tooltip.afterFooter || []).join('\n')
    //     ];
    //     tooltipEl.html(innerHtml.join('\n'));
    //   }

    //   // Find Y Location on page
    //   var top = 0;
    //   if (tooltip.yAlign) {
    //     if (tooltip.yAlign == 'above') {
    //       top = tooltip.y - tooltip.caretHeight - tooltip.caretPadding;
    //     } else {
    //       top = tooltip.y + tooltip.caretHeight + tooltip.caretPadding;
    //     }
    //   }

    //   var position = $(this._chart.canvas)[0].getBoundingClientRect();

    //   // Display, position, and set styles for font
    //   tooltipEl.css({
    //     opacity: 1,
    //     width: tooltip.width ? (tooltip.width + 'px') : 'auto',
    //     left: position.left + tooltip.x + 'px',
    //     top: position.top + top + 'px',
    //     fontFamily: tooltip._fontFamily,
    //     fontSize: tooltip.fontSize,
    //     fontStyle: tooltip._fontStyle,
    //     padding: tooltip.yPadding + 'px ' + tooltip.xPadding + 'px',
    //   });
    // };
    // var randomScalingFactor = function() {
    //   return Math.round(Math.random() * 100);
    // };
    // var lineChartData = {
    //   labels: ["January", "February", "March", "April", "May", "June", "July"],
    //   datasets: [{
    //     label: "My First dataset",
    //     data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
    //   }
    //   // , {
    //   //   label: "My Second dataset",
    //   //   data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
    //   // }
    //   ]
    // };
});

