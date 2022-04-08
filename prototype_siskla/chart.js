function cart (a1,a2,a3,a4,a5,a6,a7,a8,a9) {

    var chart = new CanvasJS.Chart("chartContainer", {
        // backgroundColor: "",
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Evaluasi Performa Confusion Matrix"
        },
        subtitles: [{
            text: "Hasil Pengujian Klasifikasi Weighted Naive Bayes"
        }],
        axisX: {
            title: "Confusion Matrix"
        },
        axisY: {
            title: "Performa",
            titleFontColor: "#333333",
            lineColor: "#333333",
            labelFontColor: "#333333",
            tickColor: "#333333"
        },
        toolTip: {
            shared: true
        },
        legend: {
            cursor: "pointer",
            itemclick: toggleDataSeries
        },
        data: [{
                type: "column",
                name: "1 Semester",
                showInLegend: true,
                yValueFormatString: "#,##0.#####",
                dataPoints: [{
                        label: "Precision",
                        y: a1
                    },
                    {
                        label: "Recall",
                        y: a2
                    },
                    {
                        label: "Specificity",
                        y: a3
                    }
                ]
            },
            {
                type: "column",
                name: "2 Semester",
                axisYType: "secondary",
                showInLegend: true,
                yValueFormatString: "#,##0.#####",
                dataPoints: [{
                    label: "Precision",
                    y: a4
                },
                {
                    label: "Recall",
                    y: a5
                },
                {
                    label: "Specificity",
                    y: a6
                    }
                ]
            },
            {
                type: "column",
                name: "3 Semester",
                axisYType: "third",
                showInLegend: true,
                yValueFormatString: "#,##0.#####",
                dataPoints: [{
                    label: "Precision",
                    y: a7
                },
                {
                    label: "Recall",
                    y: a8
                },
                {
                    label: "Specificity",
                    y: a9
                    }
                ]
            }
        ]
    });
    chart.render();

    function toggleDataSeries(e) {
        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        e.chart.render();
    }

}