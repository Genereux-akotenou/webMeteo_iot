<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- basic config  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- webpage icon  -->
    <link rel="icon" type="image/png" sizes="48x48" href="/favicon.png">
    <!-- Style sheet   -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gQuick.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Icon package  -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Scripts link  -->
    <script src="script/my_script.js"></script>
    <!-- window title  -->
    <title>webMeteo - AI&IoT Club</title>
    <!-- 20210914_0921 -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
</head>
<body>
    <?php
        setlocale(LC_ALL, 'fr_FR.utf8', 'fra').': ';
    ?>
    <header>
        <a target="_blank" href="./dataset.csv">GET DATASET</a>
    </header>
    <main>
        <!-- main block -->
        <div id="mainBloc1">
            <div class="gFlex gFlex-column blocTemp1">
                <p><b><i class="fa fa-map-marker"></i> Calavi</b></p>
                <p>
                    <?php echo substr(strtolower(strftime('%A', time()+(86400*$i))), 0, 3) . '. ' . strftime('%d %B', time()+(86400*$i)) . ' ' . date('H:m'); ?>
                </p>
            </div>
            <div class="gFlex gFlex-row blocTemp">
                <div>
                    <img width="100px" src="./img/wt-2.svg" alt="">
                </div>
                <div>
                    <p id="temp1">28°c</p>
                </div>
            </div>
            <div class="gFlex gFlex-row blocTemp2">
                <span id="temp2">Humidité 35%</span>
            </div>
        </div>

        <!-- data per hours -->
        <div id="mainBloc2" class="lotOfData">
            <span class="subBlocTitle">Température</span>
            <div class="TimeCart">
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"><span>28°</span><span></span></b>
                        <b class="m3"></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-13.svg" alt="">
                        <p>00:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"><span>29°</span><span></span></b>
                        <b class="m2"></b>
                        <b class="m3"></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-13.svg" alt="">
                        <p>03:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-2.svg" alt="">
                        <p>06:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-2.svg" alt="">
                        <p>09:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-1.svg" alt="">
                        <p>12:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-2.svg" alt="">
                        <p>15:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-2.svg" alt="">
                        <p>18:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-6.svg" alt="">
                        <p>00:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27°</span><span></span></b>
                    </div>
                    <div class="time">
                        <img  width="45px" src="./img/wt-6.svg" alt="">
                        <p>00:00</p>
                        <span><i class="fa fa-umbrella"></i> 10%</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="mainBloc2" class="lotOfData">
            <span class="subBlocTitle">Humidité</span>
            <div class="TimeCart" style="height: 9em;">
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"><span>28%</span><span></span></b>
                        <b class="m3"></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"><span>29%</span><span></span></b>
                        <b class="m2"></b>
                        <b class="m3"></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
            </div>
        </div>

        <div id="mainBloc2" class="lotOfData">
            <span class="subBlocTitle">Luminosité</span>
            <div class="TimeCart" style="height: 9em;">
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"><span>28%</span><span></span></b>
                        <b class="m3"></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"><span>29%</span><span></span></b>
                        <b class="m2"></b>
                        <b class="m3"></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27%</span><span></span></b>
                    </div>
                </div>
            </div>
        </div>

        <div id="mainBloc2" class="lotOfData" style="margin-bottom: 0.5em; ">
            <span class="subBlocTitle">Vent</span>
            <div class="TimeCart" style="height: 9em;">
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"><span>28m/s</span><span></span></b>
                        <b class="m3"></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"><span>29m/s</span><span></span></b>
                        <b class="m2"></b>
                        <b class="m3"></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
                <div class="detailBox">
                    <div class="data">
                        <b class="m1"></b>
                        <b class="m2"></b>
                        <b class="m3"><span>27m/s</span><span></span></b>
                    </div>
                </div>
            </div>
        </div>

        <div class="author">
            <span>Source: Station météo ESP8266 - AI&IoT Club (TP1)</span>
            <span>IFRI 2022</span>
        </div>
    </main>
    <footer>
        
    </footer>
    <script>
        var data;
        $.ajax({
        type: "GET",  
        url: "dataset.csv",
        dataType: "text",       
        success: function(response)  
        {
            data = $.csv.toArrays(response);
            lastdata = data[data.length-1]

            //assign current temp
            lastdata[3] = lastdata[3] ? lastdata[3] : '...';
            document.getElementById('temp1').innerHTML = lastdata[3] + '°c';

            //assign current humidity
            lastdata[4] = lastdata[4] ? lastdata[4] : '...';
            document.getElementById('temp2').innerHTML = 'Humidité ' + lastdata[4] + '%';
            
            console.log(data)
            //generateHtmlTable(data);
        }   
        });
    </script>
</body>
</html>