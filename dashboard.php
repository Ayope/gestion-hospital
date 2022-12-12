<?php include "./include/header.php"?>
<div class="col">
    <div class="mt-3">
        <div class="d-inline">
            <div class="input-group d-flex justify-content-between row">
                <div class="col-md-6 col-sm-12 order-md-1 order-2">
                    <form>
                        <div class="d-flex">
                            <div class="form-outline form-group d-flex flex-fill">
                                <input type="search" class="form-control input-sm"
                                    placeholder="&#128270; Search Doctor name or Email">
                            </div>
                            <div class="px-2">
                                <button type="button" class="btn btn-primary border-0" style="background-color:#00b4ff;
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
                <div class="col-10 col-md-6">
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
                <div class="col-10 col-md-6 mt-5 pt-5  pt-md-0 mt-md-0">
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



<?php 
include "./include/footer.php";?>