<?php
include("../includes/config.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: .investor_login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Investor</title>
    <!--Fav Icons-->
    <link href="./img/favicon.png" rel="icon" sizes="45*45">
    <!-- lato font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <!-- Bootstrap css v4.5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- bootstrap script v4.5 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- font awasome  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" media="all" />

    <script src="https://use.fontawesome.com/a4810d46b6.js"></script>
    <link rel="stylesheet" href="../css/investor.css">
</head>

<body>
    <div class="container">
        <img src="../img/logo.png" class="img-fluid m-logo-size lazyload" alt="Home" width="170px" height="150px" /></a>

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="section mainnav collapse navbar-collapse" id="navbarNav">
            <div class="container">
                <ul>
                    <li class="home active ">
                        <h2 style="height: 53px;">
                            <a href="index.php" id="Header1_lih" style="height: 53px;"></a>
                        </h2>
                    </li>
                    <li id="Header1_lif" class="parent">
                        <h2>
                            <a href="investor_financials.php">Financials</a>
                        </h2>

                    </li>

                    <li id="Header1_lic" class="parent">
                        <h2>
                            <a href="investor_corporate_governance.php">Corporate Governance</a>
                        </h2>

                    </li>
                    <li id="Header1_lid" class=" parent">
                        <h2>
                            <a href="investor_download.php">Downloads</a>
                        </h2>

                    </li>
                    <li id="Header1_lir" class="parent">
                        <h2>
                            <a href="#">Resources</a>
                        </h2>

                    </li>
                    <li id="Header1_liEvents" class="parent">
                        <h2>
                            <a href="#">Events</a>
                        </h2>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <img src="../img/investor/Annual--Report.png" width="100%" height="394" alt="banner">
    </div>
    <div id="ImpNews1_divnews" class="inews container" style="height: 30px !important;">
        <table>
            <tbody>
                <tr>
                    <td class="newsL" style="text-align: left; background: url(../img/symbols/latestnewsM.png) 0% 0% repeat-x; border-right: 1px solid #E3E3E3;">
                        Important News
                    </td>

                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <div class="top">
                        <div class="FL M-T-5 Font14">
                            Annual Report</div>
                    </div>
                    <div class="mdl TAC">
                        <div class="view3 second-effect">
                            <img src="../img/investor/Annual-report-thumb-201920.png" width="199" height="190" alt="">
                            <div class="mask">

                                <a href="#" id="linkAnnRep" class="info">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="btm">
                        <a class="more" href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="box ">
                    <div class="top">
                        <div class="FL M-T-5 Font14">
                            Investor Presentation</div>
                    </div>
                    <div class="mdl TAC">
                        <div class="view3 second-effect">
                            <img src="../img/investor/Inverstor-presen-2017.jpg" width="199" height="190" alt="">
                            <div class="mask">

                                <a href="#" id="linkInvPres" class="info">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="btm">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="FR">


                    <div class="">
                        <div class="top">
                            <div class="FL M-T-5 Font14">Exchange ANNOUNCEMENTS</div>
                        </div>
                        <div class="mdl">
                            <ul class="InIco  P-T-10">

                                <li id="Annoucements_li1"> <a id="Annoucements_HyperLink1" class="thickbox" href="#">Announcement under Regulation 30 (LODR)-Award of Order Rece..</a></li>
                                <li id="Annoucements_li2"><a id="Annoucements_HyperLink2" class="thickbox" href="#">Announcement under Regulation 30 (LODR)-Analyst / Investor ..</a></li>
                                <li id="Annoucements_li3"><a id="Annoucements_HyperLink3" class="thickbox" href="#">Announcement under Regulation 30 (LODR)-Investor Presentati..</a></li>
                                <li id="Annoucements_li4"><a id="Annoucements_HyperLink4" class="thickbox" href="#">Announcement under Regulation 30 (LODR)-Analyst / Investor ..</a></li>
                            </ul>
                        </div>
                        <div class="btm"><a class="more" href="#" target="_parent">More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>










</body>

</html>