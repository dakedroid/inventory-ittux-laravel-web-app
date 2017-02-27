<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Test</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
</head>
<body class="fuelux">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="fu-example section">
                <div id="myDatepickerContainer">
                    <div class="form-group">
                        <label class="control-label" for="myDatepickerInput"> </label>
                        <div>
                            <div class="datepicker" data-initialize="datepicker" id="myDatepicker">
                                <div class="input-group">
                                    <input class="form-control" id="myDatepickerInput" type="text">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                            <span class="sr-only">Toggle Calendar</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right datepicker-calendar-wrapper" role="menu">
                                            <div class="datepicker-calendar">
                                                <div class="datepicker-calendar-header">
                                                    <button type="button" class="prev"><span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous Month</span></button>
                                                    <button type="button" class="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next Month</span></button>
                                                    <button type="button" class="title" data-month="3" data-year="2015">
              <span class="month">
                <span data-month="0">January</span>
                <span data-month="1">February</span>
                <span data-month="2">March</span>
                <span data-month="3" class="current">April</span>
                <span data-month="4">May</span>
                <span data-month="5">June</span>
                <span data-month="6">July</span>
                <span data-month="7">August</span>
                <span data-month="8">September</span>
                <span data-month="9">October</span>
                <span data-month="10">November</span>
                <span data-month="11">December</span>
              </span> <span class="year">2015</span>
                                                    </button>
                                                </div>
                                                <table class="datepicker-calendar-days">
                                                    <thead>
                                                    <tr>
                                                        <th>Su</th>
                                                        <th>Mo</th>
                                                        <th>Tu</th>
                                                        <th>We</th>
                                                        <th>Th</th>
                                                        <th>Fr</th>
                                                        <th>Sa</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody><tr><td class="last-month past restricted" data-date="29" data-month="2" data-year="2015" title="Restricted"><span><b class="datepicker-date">29</b></span></td><td class="last-month past restricted" data-date="30" data-month="2" data-year="2015" title="Restricted"><span><b class="datepicker-date">30</b></span></td><td class="last-month past restricted" data-date="31" data-month="2" data-year="2015" title="Restricted"><span><b class="datepicker-date">31</b></span></td><td data-date="1" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">1</b></span></td><td data-date="2" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">2</b></span></td><td data-date="3" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">3</b></span></td><td data-date="4" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">4</b></span></td></tr><tr><td data-date="5" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">5</b></span></td><td data-date="6" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">6</b></span></td><td data-date="7" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">7</b></span></td><td data-date="8" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">8</b></span></td><td data-date="9" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">9</b></span></td><td data-date="10" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">10</b></span></td><td data-date="11" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">11</b></span></td></tr><tr><td data-date="12" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">12</b></span></td><td data-date="13" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">13</b></span></td><td data-date="14" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">14</b></span></td><td data-date="15" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">15</b></span></td><td data-date="16" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">16</b></span></td><td data-date="17" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">17</b></span></td><td data-date="18" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">18</b></span></td></tr><tr><td data-date="19" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">19</b></span></td><td data-date="20" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">20</b></span></td><td data-date="21" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">21</b></span></td><td data-date="22" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">22</b></span></td><td data-date="23" data-month="3" data-year="2015" class="past restricted" title="Restricted"><span><b class="datepicker-date">23</b></span></td><td data-date="24" data-month="3" data-year="2015" class="current-day"><span><button type="button" class="datepicker-date">24</button></span></td><td data-date="25" data-month="3" data-year="2015"><span><button type="button" class="datepicker-date">25</button></span></td></tr><tr><td data-date="26" data-month="3" data-year="2015"><span><button type="button" class="datepicker-date">26</button></span></td><td data-date="27" data-month="3" data-year="2015"><span><button type="button" class="datepicker-date">27</button></span></td><td data-date="28" data-month="3" data-year="2015"><span><button type="button" class="datepicker-date">28</button></span></td><td data-date="29" data-month="3" data-year="2015"><span><button type="button" class="datepicker-date">29</button></span></td><td data-date="30" data-month="3" data-year="2015"><span><button type="button" class="datepicker-date">30</button></span></td><td class="next-month selected" data-date="1" data-month="4" data-year="2015"><span><button type="button" class="datepicker-date">1</button></span></td><td class="next-month" data-date="2" data-month="4" data-year="2015"><span><button type="button" class="datepicker-date">2</button></span></td></tr></tbody>
                                                </table>
                                                <div class="datepicker-calendar-footer">
                                                    <button type="button" class="datepicker-today">Today</button>
                                                </div>
                                            </div>
                                            <div class="datepicker-wheels" aria-hidden="true">
                                                <div class="datepicker-wheels-month">
                                                    <h2 class="header">Month</h2>
                                                    <ul>
                                                        <li data-month="0"><button type="button">Jan</button></li>
                                                        <li data-month="1"><button type="button">Feb</button></li>
                                                        <li data-month="2"><button type="button">Mar</button></li>
                                                        <li data-month="3"><button type="button">Apr</button></li>
                                                        <li data-month="4"><button type="button">May</button></li>
                                                        <li data-month="5"><button type="button">Jun</button></li>
                                                        <li data-month="6"><button type="button">Jul</button></li>
                                                        <li data-month="7"><button type="button">Aug</button></li>
                                                        <li data-month="8"><button type="button">Sep</button></li>
                                                        <li data-month="9"><button type="button">Oct</button></li>
                                                        <li data-month="10"><button type="button">Nov</button></li>
                                                        <li data-month="11"><button type="button">Dec</button></li>
                                                    </ul>
                                                </div>
                                                <div class="datepicker-wheels-year">
                                                    <h2 class="header">Year</h2>
                                                    <ul></ul>
                                                </div>
                                                <div class="datepicker-wheels-footer clearfix">
                                                    <button type="button" class="btn datepicker-wheels-back"><span class="glyphicon glyphicon-arrow-left"></span><span class="sr-only">Return to Calendar</span></button>
                                                    <button type="button" class="btn datepicker-wheels-select">Select <span class="sr-only">Month and Year</span></button>
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
    </div>
</div>
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js"></script>
</body>
</html>
