<form>
    <div class="d-flex">
        <div class="form-outline form-group d-flex flex-fill">
            <input type="search" class="form-control input-sm" placeholder="&#128270; Search Doctor name or Email">
        </div>
        <div class="px-2">
            <button type="button" class="btn btn-dark border-0" style="
              padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;">
                search
            </button>
        </div>
    </div>
</form>

<!--  -->
<div class=" px-1 py-2 d-flex justify-content-center justify-content-md-start">
    <strong class="fs-3">Status</strong>
</div>
<div class="row ps-3 gap-5 d-flex justify-content-center mb-3  ">
    <button
        class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3 bg-white border-0 rounded">
        <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
            <i class="bi bi-heart-pulse-fill "> </i>
        </div>
        <div class="order-1">
            <span><?php echo $countd['COUNT(role)'] ?> </span><br>
            <span>Doctors</span>
        </div>
    </button>
    <button
        class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3  bg-white border-0 rounded">
        <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
            <i class="bi bi-bandaid-fill "></i>
        </div>
        <div class="order-1">
            <span><?php echo $countp['COUNT(role)'] ?> </span><br>
            <span>Patient</span>
        </div>
    </button>
    <button
        class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3 bg-white border-0 rounded">
        <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
            <i class="bi bi-bookmark-fill"></i>
        </div>
        <div class="order-1">
            <span></span><br>
            <span>NewBoking</span>
        </div>
    </button>
    <button
        class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3 bg-white border-0 rounded">
        <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
            <i class="bi bi-calendar-check-fill"></i>
        </div>
        <div class="order-1">
            <span>0</span><br>
            <span>Today Session</span>
        </div>
    </button>
</div>

</div>
<div id="bookContainer" class="d-none">
</div>
<div class="row d-flex justify-content-md-between justify-content-center container-fluid px-3 w-100">
    <div class="col-11 col-md-6">
        <div class="text-center">
            <strong>Upcoming appoinments unitel next tuesday</strong><br>
            <p>Here's Quick access to Upcoming Appointments until 7 days More details available in
                @Appointment section.</p>
        </div>
        <div class="">
            <div class="table-responsive  shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-hover" style="cursor: pointer;">
                    <thead class="position-sticky top-0">
                        <tr class="shadow-sm mb-5 bg-white rounded" style="border-color: #000000;">
                            <th>Appoinment number</th>
                            <th>patient name</th>
                            <th>Doctor</th>
                            <th>Session</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>dazda</td>
                            <td>Nouhaila KHAOUTI</td>
                            <td>Nouhaila KHAOUTI</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>dazda</td>
                            <td>Nouhaila KHAOUTI</td>
                            <td>Nouhaila KHAOUTI</td>
                            <td>13</td>
                        </tr>

                        <tr>
                            <td>dazda</td>
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
                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <div class="col-10 col-md-6 mt-5 pt-5  pt-md-0 mt-md-0">
        <div class="text-center">
            <strong>Upcoming Session untel Next Tuesday</strong><br>
            <p> Here's Quick access to Upcoming Sessions until 7 days
                Add,Remove available in @Schedule section .</p>
        </div>
        <div>
            <div class="table-responsive mt-2 shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-hover">
                    <thead class="position-sticky top-0">
                        <tr class="shadow-sm mb-5 bg-white rounded" style="border-color: #000000;">
                            <th>Session Tiltle</th>
                            <th>Doctor</th>
                            <th>Scheduled Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>

        </div>
    </div>