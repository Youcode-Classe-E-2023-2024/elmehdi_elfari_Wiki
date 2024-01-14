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
                        <p class="ml-2 font-semibold italic">DASHBOARD</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div>
                        <img class="hidden h-24 w-24 rounded-full sm:block object-cover mr-2 border-4 border-green-400" src="/img/Capture d'écran 2024-01-03 093119.png" alt="">
                        <p class="font-bold text-base text-gray-400 pt-2 text-center w-24">Safwan</p>
                    </div>
                </div>
                <div class="manageTag mt-4 mx-6">
                    <a href="index.php?page=tags"><button class="bg-blue-500 hover:bg-blue-600 w-44 text-white font-bold py-2 px-4 rounded-full">
                            Manage Tag
                        </button></a>
                </div>
                <div class="manageCategory mt-4 mx-6">
                    <a href="index.php?page=categories"><button class="bg-yellow-600 w-44 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full">
                            Manage Category
                        </button></a>
                </div>
                <div class="manageTag mt-4 mx-6">
                    <a href="index.php?page=article"><button class="bg-gray-600 hover:bg-gray-600 w-44 text-white font-bold py-2 px-4 rounded-full">
                            Manage Article
                        </button></a>
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
                            <div class="flex items-center h-10 intro-y ">
                                <h2 class="mr-5 mt-8 text-lg font-medium truncate">Dashboard</h2>
                            </div>
                            <div class="grid mt-16 grid-cols-12 gap-6 mt-5">
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                    <div class="p-5">
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8"><?php echo isset($totalArticles) ? $totalArticles : ''; ?></div>

                                                <div class="mt-1 text-base text-gray-600">Total Articles</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                    <div class="p-5">
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8"><?php echo isset($totalUsers) ? $totalUsers : ''; ?></div>

                                                <div class="mt-1 text-base text-gray-600">Total Users</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                    <div class="p-5">
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">
                                                    <?php echo isset($totalAuthors) ? $totalAuthors : ''; ?>
                                                </div>

                                                <div class="mt-1 text-base text-gray-600">Total Authors</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                    <div class="p-5">

                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8"><?php echo isset($totalAdmins) ? $totalAdmins : ''; ?></div>

                                                <div class="mt-1 text-base text-gray-600">Total Admins</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
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