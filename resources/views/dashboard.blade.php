<x-app-layout>
    <livewire:task-list>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <div class="flex">
        <div class="text-center w-1/3">
            <h1 class="text-4xl text-gray-700 mb-2 mt-4 uppercase">Portfolio</h1>
            <img class="w-32 h-32 rounded-full mx-auto" src={{ asset('images/may-profile.jpg') }}>
            <h2 class="text-2xl text-gray-600 ">Maylyn Deyanne Bravo Lopez</h2>
            <h3 class="text-1xl text-gray-600">Estudiante de Ingeniería en Sistemas Computacionales</h3>
            <h3 class="text-lg text-gray-600">Instituto Tecnológico de Cancún</h3>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" id="alert" onclick="alert()">
                Muestra mensaje Emergente
            </button>
            <br>
        </div>
    
        <div class="w-1/3">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        
        <div class="w-1/3">
            <canvas id="myChart2" width="100" height="100"></canvas>
        </div>
    </div>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Divertida', 'Enojona', 'Estudiosa', 'Dormilona', 'Responsable', 'Tenaz'],
        datasets: [{
            label: 'Mis habilidades personales',
            data: [5, 4, 3, 3, 1, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<script>
    var ctx = document.getElementById('myChart2');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Divertida', 'Enojona', 'Estudiosa', 'Dormilona', 'Responsable', 'Tenaz'],
            datasets: [{
                label: 'Mis habilidades personales',
                data: [5, 4, 3, 3, 1, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
        var mensaje = document.getElementById('alert');
        mensaje = function alert() {
            alert("Hola!");
        }
    </script>
</x-app-layout>