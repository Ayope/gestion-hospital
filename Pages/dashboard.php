<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>N.A.M.A</title>
</head>

<body class="m-0 p-0">
    <nav class="navbar navbar-expand-lg navbar-light navColor d-flex justify-content-between px-4 vw-100"
        style="background:#00b4ff ;">
        <a class="navbar-brand" href="#"> <img src="./image/icon.png" alt="icon" width="120" height="50"> </a>
        <ul class="navbar-nav ">
            <li class="nav-item pt-sm-0 pt-3 ">
                <a class="nav-link text-white" href="#"> <i class="bi bi-box-arrow-right text-white"></i><span
                        class="ms-1 d-none d-md-inline d-sm-inline"> Log Out</span> </a>
            </li>
            &nbsp;
            &nbsp;
            <li class="nav-item text-white  d-none d-lg-block">
                <button class="btn button fw-bold" href="#" style="border: solid #fcfafd;
                        border-width: 1px;
                        border-radius: 20px;
                        color: #ffffff;">
                    <i class="bi bi-person-fill text-white "></i><span
                        class="ms-1 d-none d-md-inline d-sm-inline">Administrateur</span></a>
            </li>
        </ul>
    </nav>
    <div class="row overflow-auto">
        <div class="col-sm-3 col-xl-2 col-2 px-sm-2 px-0 bg-white d-flex shadow text-black fw-bold overflow-scroll">
            <div
                class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-black min-vh-100 ms-4 sticky-top">
                <a href="/"
                    class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-black text-decoration-none">
                    <span class="fs-5 d-none d-lg-block ps-3" style="color: #00b4ff;">N.A.M.A</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-black"
                    id="menu" role="navigation">
                    <li class="nav-item d-none d-lg-block">
                        <div class=" border-1 rounded-circle px-2">
                            <img class="rounded-circle shadow" src="./image/user.jpg" alt="user" width="100"
                                height="100">
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a href="#" class="nav-link px-sm-0 px-2 text-black">
                            <i class="bi bi-envelope"></i><span
                                class="ms-1 d-none d-lg-inline fw-normal">email.address</span>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-sm-0 px-2 text-black">
                            <i class="bi bi-speedometer"></i> &nbsp; &nbsp;<span
                                class="ms-1 d-none d-lg-inline">Dashboard</span>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2 text-black">
                            <img src="./image/doctors.png" alt="doctors" width="20" height="20"> &nbsp; &nbsp;<span
                                class="ms-1 d-none d-lg-inline">Doctors</span></a>
                    </li>
                    <br>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2 text-black">
                            <img src="./image/patient.png" alt="patient" width="20" height="20"> &nbsp; &nbsp;<span
                                class="ms-1 d-none d-lg-inline">Patient</span></a>
                    </li>
                    <br>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2 text-black">
                            <i class="bi bi-journal-medical"></i> &nbsp; &nbsp;<span
                                class="ms-1 d-none d-lg-inline">Session</span></a>
                    </li>
                    <br>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2 text-black">
                            <i class="bi bi-person-lines-fill"></i> &nbsp; &nbsp;<span
                                class="ms-1 d-none d-lg-inline">Parametre</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-10 d-flex flex-column h-100 mt-3">
            <div class="container-fluid d-inline">
                <div class="input-group d-flex justify-content-between row">
                    <div class="col-md-6 col-sm-12 order-md-1 order-2">
                        <form>
                            <div class="d-flex">
                                <div class="form-outline form-group d-flex flex-fill">
                                    <input type="search" class="form-control input-sm"
                                        placeholder="&#128270; Search Doctor name or Email">
                                </div>
                                <div class="px-2">
                                    <button type="button" class="btn btn-primary border-0" style="background-color:#9CCDF9;
                                        padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;">
                                        search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div
                        class="d-flex justify-content-md-end justify-content-center pe-5 p-3 pe-md-0 p-md-0 col-md-6 col-sm-12 order-md-2 order-1">
                        <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                            <i class="uil uil-schedule fs-3"></i>
                        </div>
                        &nbsp;
                        &nbsp;
                        <div class="order-1 px-2">
                            <span>Today's Date</span><br>
                            <span>2022-11-01</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2 py-3 d-flex justify-content-center justify-content-md-start">
                <strong class="fs-3">Status</strong>
            </div>
            <div class="row ps-3 gap-5 d-flex justify-content-center">
                <button
                    class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm mb-5 bg-white border-0 rounded">
                    <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                        <img src="./image/doctors.png" alt="doctors" width="30" height="40">
                    </div>
                    &nbsp;&nbsp;
                    <div class="order-1">
                        <span>0</span><br>
                        <span>Doctors</span>
                    </div>
                </button>
                <button
                    class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm mb-5 bg-white border-0 rounded">
                    <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                        <img src="./image/patient.png" alt="patient" width="30" height="40">
                    </div>
                    &nbsp;&nbsp;
                    <div class="order-1">
                        <span>0</span><br>
                        <span>Patient</span>
                    </div>
                </button>
                <button
                    class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm mb-5 bg-white border-0 rounded">
                    <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                        <i class="uil uil-clipboard-notes fs-2"></i>
                    </div>
                    &nbsp;&nbsp;
                    <div class="order-1">
                        <span>0</span><br>
                        <span>NewBoking</span>
                    </div>
                </button>
                <button
                    class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm mb-5 bg-white border-0 rounded">
                    <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                        <i class="uil uil-monitor-heart-rate fs-2"></i>
                    </div>
                    &nbsp;&nbsp;
                    <div class="order-1">
                        <span>0</span><br>
                        <span>Today Session</span>
                    </div>
                </button>
            </div>
            <div class="row d-flex justify-content-md-between justify-content-center container-fluid px-5">
                <div class="col-10 col-md-5">
                    <div>
                        <strong>Upcoming appoinments unitel next tuesday</strong><br>
                        <p> here’s quiq acces to uppoinments unitil 7 days more details available in @ appoinements
                            section.</p>
                    </div>
                    <div class="position-relative">
                        <div class="table-responsive mt-5 shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover" style="cursor: pointer;">
                                <tr class="shadow-sm mb-5 bg-white rounded" style="border-color: #0A76D8;">
                                    <th>Appoinment number</th>
                                    <th>patient name</th>
                                    <th>Doctor</th>
                                    <th>Session</th>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <button class="btn btn-primary btn btn-primary w-100 btn-bg position-absolute">Show all
                                appoitments</button>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-5 mt-5 pt-5  pt-md-0 mt-md-0">
                    <div>
                        <strong>Upcoming Session untel Next Tuesday</strong><br>
                        <p> here’s quiq acces to uppoinments unitil 7 days more details available in @ appoinements
                            section.</p>
                    </div>
                    <div class="position-relative">
                        <div class="table-responsive mt-5 shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover">
                                <tr class="shadow-sm mb-5 bg-white rounded" style="border-color: #0A76D8;">
                                    <th>Session Tiltle</th>
                                    <th>Doctor</th>
                                    <th>Scheduled Date & Time</th>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <button class="btn btn-primary btn btn-primary w-100 btn-bg position-absolute">Show all
                                appoitments</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="row overflow-auto">
        <div class="col">

        </div>
    </main>
</body>

</html>