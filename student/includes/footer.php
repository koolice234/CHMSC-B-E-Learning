   <!-- jQuery -->
    <script src="../assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/vendor/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="../assets/vendor/simplebar.js"></script>

    <!-- MDK -->
    <script src="../assets/vendor/dom-factory.js"></script>
    <script src="../assets/vendor/material-design-kit.js"></script>

    <!-- Sidebar Collapse -->
    <script src="../assets/vendor/sidebar-collapse.js"></script>

    <!-- App JS -->
    <script src="../assets/js/main.js"></script>


    <!-- Theme Colors -->
    <script src="../assets/js/colors.js"></script>

    <!-- Morris.js charts -->
    <script src="../assets/vendor/raphael.min.js"></script>
    <script src="../assets/vendor/morris.min.js"></script>

    <!-- Moment.js -->
    <script src="../assets/vendor/moment.min.js"></script>
    <script src="../assets/vendor/moment-range.min.js"></script>



    <!-- Last 30 days earnings chart -->
    <script>
        (function() {
            var earnings = []

            // Create a date range for the last 30 days
            var start = moment().subtract(30, 'days').format('YYYY-MM-DD') // 30 days ago
            var end = moment().format('YYYY-MM-DD') // today
            var range = moment.range(start, end)

            // Create the earnings graph data
            // Iterate the date range and assign a random ($) earnings value for each day
            range.by('days', function(moment) {
                earnings.push({
                    y: moment.format(),
                    a: Math.floor(Math.random() * 300) + 10
                })
            })

            new Morris.Area({
                element: 'earnings-month',
                data: earnings,
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Earnings'],
                xLabels: 'day',
                dateFormat: function(date) {
                    return moment(date).calendar()
                },
                xLabelFormat: function(date) {
                    return moment(date).format('MM/D')
                },
                preUnits: '$',
                lineColors: [colors['chart-primary']],
                fillOpacity: .3,
                pointSize: 3,
                lineWidth: 2,
                gridTextColor: '000',
                resize: true
            })
        })()
    </script>




</body>


<!-- Mirrored from learnplus.frontendmatter.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 17:11:58 GMT -->
</html>