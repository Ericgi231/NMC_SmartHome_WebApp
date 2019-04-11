
$(document).ready(function() {
    $.ajax({
        //url: "insert database info here***********",
        type: "GET",
        success: function (data) {
            console.log(data);

            var userid = [];
            //var tempdata = [];
            for (var i in data) {
                userid.push("UserID " + data[i].userid);
                //tempdata.push(data[i].tempdata);
            }

            var chartdata = {
                lables: userid,
                datasets: [
                    {
                        label: "Temperatur",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(59,89,152,0.75)",
                        borderColor: "rgba(59, 89,152,1)",
                        pointHoverBackgroundColor: "rgba(59,89,152,1)",
                        pointHoverBorderColor: "rgba(59,89,152,1)",
                        data: temp_data // insert tempdata here?
                    }
                ]
            };

            var ctx = $("mycanvas");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error: function (data) {

        }
    });
});