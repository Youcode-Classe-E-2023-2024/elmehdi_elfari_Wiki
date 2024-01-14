<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Title</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Additional styles or links go here -->
</head>
<div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">

    <!-- Desktop sidebar -->
    <aside class="z-20 flex-shrink-0 hidden w-60 pl-2 overflow-y-auto bg-gray-800 md:block">
        <div>
            <div class="text-white">
                <div class="flex p-2 bg-gray-800">
                    <div class="flex py-3 px-2 items-center">
                        <p class="text-2xl text-green-500 font-semibold">SA</p>
                        <a href="index.php?page=dashboard">
                            <p class="ml-2 font-semibold italic">DASHBOARD</p>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div>
                        <img class="hidden h-24 w-24 rounded-full sm:block object-cover mr-2 border-4 border-green-400" src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="">
                        <p class="font-bold text-base text-gray-400 pt-2 text-center w-24">Safwan</p>
                    </div>
                </div>

            </div>
        </div>
    </aside>


    <!-- Mobile sidebar -->
    <!-- Backdrop -->


    <div class="flex flex-col flex-1 w-full overflow-y-auto">
        <!-- <header class="z-40 py-4  bg-gray-800  "> -->
        <div class="flex items-center justify-between h-8 px-6 mx-auto">




            <!-- log out -->
            <div class="flex justify-center  mt-2 mr-4">
                logout
            </div>


        </div>
        </header>
        <main class="">
            <div class="contentdash grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">

                <div class="grid grid-cols-12 gap-6">
                    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                        <div class="col-span-12 mt-8">
                            <div class="flex items-center h-10 intro-y">
                                <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                            </div>


                            <div class="col-span-12 mt-5">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                    <div class="bg-white p-4 shadow-lg rounded-lg">
                                        <h1 class="font-bold text-base">Table</h1>
                                        <div class="mt-4">
                                            <div class="flex flex-col">
                                                <div class="-my-2 overflow-x-auto">
                                                    <div class="py-2 align-middle inline-block min-w-full">
                                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                            <table class="min-w-full divide-y h-full divide-gray-200">
                                                                <thead>

                                                                    <tr>
                                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">PRODUCT NAME</span>
                                                                            </div>
                                                                        </th>
                                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Stock</span>
                                                                            </div>
                                                                        </th>

                                                                    </tr>

                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-gray-200">
                                                                    <?php foreach ($articles as $article) : ?>
                                                                        <tr>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                <?= $article['article_id']; ?></td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                <p><?= $article['article_title']; ?></p>
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                <div class="flex text-green-500">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m62a99011-809001" />
                                                                                    </svg>
                                                                                    <p><?= $article['status']; ?></p>
                                                                                </div>
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                <div class="flex space-x-4">
                                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                        </svg>
                                                                                        <p>Edit</p>
                                                                                    </a>
                                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                                        </svg>
                                                                                        <p>Delete</p>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    function data() {

        return {

            isSideMenuOpen: false,
            toggleSideMenu() {
                this.isSideMenuOpen = !this.isSideMenuOpen
            },
            closeSideMenu() {
                this.isSideMenuOpen = false
            },
            isNotificationsMenuOpen: false,
            toggleNotificationsMenu() {
                this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
            },
            closeNotificationsMenu() {
                this.isNotificationsMenuOpen = false
            },
            isProfileMenuOpen: false,
            toggleProfileMenu() {
                this.isProfileMenuOpen = !this.isProfileMenuOpen
            },
            closeProfileMenu() {
                this.isProfileMenuOpen = false
            },
            isPagesMenuOpen: false,
            togglePagesMenu() {
                this.isPagesMenuOpen = !this.isPagesMenuOpen
            },

        }
    }
</script>
<script>
    var chart = document.querySelector('#chartline')
    var options = {
        series: [{
            name: 'TEAM A',
            type: 'area',
            data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
        }, {
            name: 'TEAM B',
            type: 'line',
            data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        stroke: {
            curve: 'smooth'
        },
        fill: {
            type: 'solid',
            opacity: [0.35, 1],
        },
        labels: ['Dec 01', 'Dec 02', 'Dec 03', 'Dec 04', 'Dec 05', 'Dec 06', 'Dec 07', 'Dec 08', 'Dec 09 ',
            'Dec 10', 'Dec 11'
        ],
        markers: {
            size: 0
        },
        yaxis: [{
                title: {
                    text: 'Series A',
                },
            },
            {
                opposite: true,
                title: {
                    text: 'Series B',
                },
            },
        ],
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function(y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " points";
                    }
                    return y;
                }
            }
        }
    };
    var chart = new ApexCharts(chart, options);
    chart.render();
</script>
<script>
    var chart = document.querySelector('#chartpie')
    var options = {
        series: [44, 55, 67, 83],
        chart: {
            height: 350,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: '22px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function(w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return 249
                        }
                    }
                }
            }
        },
        labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
    };
    var chart = new ApexCharts(chart, options);
    chart.render();
</script>