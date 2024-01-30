<?php 

include 'head.php';

?>

<body style= "background: radial-gradient(circle at center, #3498db, #1abc9c);
            animation: backgroundAnimation 20s ease infinite; overflow: hdden; margin: 0;">
 <div class="animated-element element1"></div>
 <div class="animated-element element2"></div>
 <div class="animated-element element3"></div>
 <div class="animated-element element4"></div>
 <div class="animated-element element5"></div>
 <div class="animated-element element6"></div>
 <div class="animated-element element7"></div>
 <div class="animated-element element8"></div>
 <div class="animated-element element9"></div>
 <div class="animated-element element10"></div>
 <div class="animated-element element11"></div>
 <div class="animated-element element12"></div>
 <div class="animated-element element13"></div>
 <div class="animated-element element14"></div>
 <div class="animated-element element15"></div>
 <div class="animated-element element16"></div>
 <div class="animated-element element17"></div>
 <div class="animated-element element18"></div>
 <div class="animated-element element19"></div>
 <div class="animated-element element20"></div>
 <div class= "container" >
  <form id= "chartForm">
   <h3>Fill in Fields:</h3>

 <div class= "label-input-group">
  <label for= "Label"> Label </label> 
  <input type= "text" class= "form-control label" placeholder= "enter label" required /> 
 </div>
  <button class= "btn btn-info" type= "button" onclick= "addLabelField()" style= "margin-top: 5dvh;"> Add More Labels</button>

 <div class= "value-input-group" style= "margin-top: 6dvh;">
  <label for= "value"> Value </label>
  <input type= "number" class= "form-control value" placeholder= "supply value" required /> 
 </div>
 <button class= "btn btn-info" type= "button" onclick="addValueField()" style= "margin-top: 8dvh;"> Add More Values </button><br /><br /><br /><br /><br />

 <button class= "btn btn-success" type= "button" onclick= "generateChart('pie')"> Generate Pie Chart </button>
 <button class= "btn btn-danger" type= "button" onclick= "generateChart('bar')"> Generate Bar Chart </button>
  </form>
 
  <div class= "form-group" style="width: 400px; height: 400px;">
   <canvas id= "myChart" width= "400" style="max-width: 100%; height: auto;" height="400"></canvas>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script>

    let labelCounter = 1;
    let valueCounter = 1;
    let myChart; // Declare a variable to store the chart instance

    function addLabelField() {
        labelCounter++;
        const labelInput = document.createElement('input');
        labelInput.type = 'text';
        labelInput.className = 'form-control label';
        labelInput.placeholder = 'enter label';
        document.querySelector('.label-input-group').appendChild(labelInput);
    }

    function addValueField() {
        valueCounter++;
        const valueInput = document.createElement('input');
        valueInput.type = 'number';
        valueInput.className = 'form-control value';
        valueInput.placeholder = 'supply values';
        document.querySelector('.value-input-group').appendChild(valueInput);
    }

    function generateChart(chartType) {
        const labels = document.querySelectorAll('.label');
        const values = document.querySelectorAll('.value');

        const data = {
            labels: Array.from(labels).map(label => label.value),
            datasets: [{
                data: Array.from(values).map(value => parseFloat(value.value)),
                backgroundColor: getRandomColorArray(values.length),
            }],
        };

        const ctx = document.getElementById('myChart').getContext('2d');

        // Destroy the previous chart if it exists
        if (myChart) {
            myChart.destroy();
        }

        const chartConfig = {
            type: chartType === 'pie' ? 'pie' : 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            const label = data.labels[tooltipItem.index] || '';
                            const value = data.datasets[0].data[tooltipItem.index] || '';
                            return `${label}: ${value}`;
                        }
                    }
                },
            },
        };

        // Create a new chart and store the instance in the myChart variable
        myChart = new Chart(ctx, chartConfig);
    }

    function getRandomColorArray(length) {
        const colors = [];
        for (let i = 0; i < length; i++) {
            colors.push(`rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 0.7)`);
        }
        return colors;
    }

    // Additional code or modifications specific to your implementation can go here


 </script>

</body>