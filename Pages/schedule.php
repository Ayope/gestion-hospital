<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Assests/css/style.css">
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
                    <div class="col-md-1 col-sm-12 order-md-1 order-1">
                        <buttonbutton type="button" class="btn btn-primary btn-bg btn-md m-1 rounded border-0" style="
                            padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;"><i
                                class="uil uil-arrow-left"></i><span class="d-none d-md-inline">Back</span></button>
                    </div>
                    <div class="col-md-8 col-sm-12 order-md-2 order-1">
                        <strong class="fs-3">Schedule Manager</strong>
                    </div>
                    <div
                        class="d-flex justify-content-md-end justify-content-center py-5 px-5 p-md-0 col-md-2 col-sm-12 order-md-2 order-1">
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
            <div class="d-flex align-items-center ">
                <div class="ps-3 py-5">
                    <strong style="font-size:20px ;">Schudale a Session</strong>
                </div>
                <div class="px-3 py-5">
                    <button type="button" class="btn btn-primary btn-bg btn-md m-1 rounded border-0" style="
                        padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;">+ Add New</button>
                </div>
            </div>
            <div class="text-center text-md-start px-5">
                <strong>All session(1)</strong>
            </div>
            <div class="shadow-sm bg-white rounded text-center" style="height:55px;">
                    <form action="">
                        <div class="d-flex row align-items-center justify-content-center">
                            <div class="col-4 d-flex input-group-sm">
                                <label for="">Date:</label>&nbsp;&nbsp;
                                <input type="date" name="" id="" class="form-control input-sm">
                            </div>
                            <div class="d-flex col-4 justify-content-between">
                                <label for="">Doctor:</label>&nbsp;&nbsp;
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Chose doctor Name from the liste</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <buttontype="button" class="btn btn-primary btn-bg btn-md m-1 rounded border-0" style="
                                padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;"><i class="uil uil-filter"></i>&nbsp;Filtrer</button>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="container-fluid mt-5 shadow-sm table-wrapper-scroll-y my-custom-scrollbar text-center"
                style="width: 90%;cursor:pointer">
                <table class="table table-hover table-responsive">
                    <thead style="border-color:#0A76D8;">
                        <tr class="">
                            <th scope="col">Session Tiltle</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Schudaled Date & Time</th>
                            <th scope="col">Max num that can be booked</th>
                            <th scope="col">Events</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ayoub AYOUK</td>
                            <td>Test doctor</td>
                            <td>2050-18-06 18:00</td>
                            <td>50</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i
                                            class="bi bi-eye"> View</i></button>
                                    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i
                                            class="bi bi-trash"> Remove</i></button>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>