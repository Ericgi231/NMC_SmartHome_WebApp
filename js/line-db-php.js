$(document).ready(function () {

    $.ajax({
        url: "http://localhost/NMC_SmartHome_WebApp/api/data.php",
        type: "GET",
        success: function (data) {
            console.log(data);

            var climate = {
                Temp: []                
            };

            var len = data.length;

            for (var i = 0; i < len; i++) {
                if (data[i].Temp === "Temp") {
                    climate.Temp.push(data[i].climate);
                }
                else if (data[i].Temp === "Temp") {
                    climate.Temp.push(data[i].climate);
                }
            }

            //get canvas
            var ctx = $("#line-chartcanvas");

            var tempData = {
                labels: ["Temp1", "Temp2", "Temp3", "Temp4", "Temp5"],
                datasets: [
                    {
                        label: "climate",
                        tempData: climate.Temp,
                        backgroundColor: "blue",
                        borderColor: "lightblue",
                        fill: false,
                        lineTension: 0,
                        pointRadius: 5
                    }
                ]
            };

            var options = {
                title: {
                    display: true,
                    position: "top",
                    text: "Line Graph",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom"
                }
            };

            var chart = new Chart(ctx, {
                type: "line",
                data: data,
                options: options
            });

        },
        error: function (data) {
            console.log(data);
        }
    });

});