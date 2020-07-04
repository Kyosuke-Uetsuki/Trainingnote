$(function(){
    $.ajax({
        url: '/ajax/traininggraphs',
        dataType: 'json',
        success: function(data) {
            let trainings = _.filter(data, { part: "腕" });
            let orderTrainings = _.orderBy(trainings, ["training_date"], ["asc"]);
            let dateTrainings = _.groupBy(orderTrainings, "training_date");
            let volumes = _.map(dateTrainings, sumTrainings => {

                                return _.sumBy(sumTrainings, 'volume'); 

                            });
            let dates = _.map(orderTrainings,  "training_date"); 
            let uniqDates = _.sortedUniq(dates);
            
            let takeVolumes = _.takeRight(volumes, 30);
            let takeDates = _.takeRight(uniqDates, 30);
            let maxVolume = _.max(takeVolumes);
            let minVolume = _.min(takeVolumes);

            console.log(takeVolumes);
            console.log(takeDates);
            
            const ctx = document.getElementById("myLine").getContext('2d');
            const myLine = new Chart(ctx, {
                type: 'line',
                data: { 
                    labels:takeDates,
                    datasets: [{
                        data: takeVolumes,
                        backgroundColor: '#1e90ff60',
                        borderWidth: 1,
                        lineTension:0.4,
                        pointRadius:1.5,
                        spanGaps:false
                    }]
                },
                options:{
                    responsive: true,
                    layout: {
                        padding: {
                            left: 20,
                            right: 20,
                            top: 20,
                            bottom: 0
                        }
                    },
                    animation:{
                      easing:'easeInOutCubic'  
                    },
                    legend:{
                        display:false
                    },
                    
                    title: {
                    }, 
                    scales: {
                        xAxes: [{
                        ticks: {
                            fontSize: 10,  
                        },
                            type: 'time',
                            distribution: 'series',
                            time: {
                                displayFormats: {
                                    week: 'll'
                                }
                            }
                        }],
                        yAxes: [{
                        ticks: {
                            display:true,
                            fontSize: 12,
                            beginAtZero:true,
                            maxTicksLimit:20,
                            suggestedMax: maxVolume+500,
                            suggestedMin: minVolume,
                            callback: function(value, index, values) {
                                    return value + "kg";
                                }
                            }
                        }]
                    }
                }
            });
        },
        error: function(data) {
            alert('error');
        }
    });
});
