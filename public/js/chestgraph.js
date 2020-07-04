$(function(){
    $.ajax({
        url: '/ajax/traininggraphs',
        dataType: 'json',
        success: function(data) {
            let chestTrainings = _.filter(data, { part: "胸" });
            let orderChestTrainings = _.orderBy(chestTrainings, ["training_date"], ["asc"]);
            let dateChestTrainings = _.groupBy(orderChestTrainings, "training_date");
            let chestVolumes = _.map(dateChestTrainings, sumChestTrainings => {

                                return _.sumBy(sumChestTrainings, 'volume'); 

                            });
            let chestDates = _.map(orderChestTrainings,  "training_date"); 
            let uniqChestDates = _.sortedUniq(chestDates);
            
            let takeChestVolumes = _.takeRight(chestVolumes, 30);
            let takeChestDates = _.takeRight(uniqChestDates, 30);
            let maxVolume = _.max(takeChestVolumes);
            let minVolume = _.min(takeChestVolumes);

            console.log(takeChestVolumes);
            console.log(minVolume);
            
            const ctx = document.getElementById("myLine").getContext('2d');
            const myLine = new Chart(ctx, {
                type: 'line',
                data: { 
                    labels:takeChestDates,
                    datasets: [{
                        data: takeChestVolumes,
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
                            maxTicksLimit: 20,
                            suggestedMax:maxVolume+1000,
                            suggestedMinx:minVolume,
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
