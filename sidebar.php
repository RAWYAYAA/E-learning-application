
    <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-mycolor" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <ul class="">
                <li><h1 class="border-start px-2 m-3 border-info border-5 fw-bold fs-2 ">E-classe</h1></li>
                <li>
                    <img class="rounded-circle mt-3 p-3" src="./assets/youcode.svg" alt="image youcode">
                    <p class="fw-bold px-4">Admin Name</p>
                    <span class="text-info px-5">Admin</span>
                </li>
                </ul>
                <div class=" mt-5 px-3">
                    <ul>
                    <li class="m-3 p-2 rounded-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'Dashboard.php') echo 'bg-info'; ?>">
                        <a class="link" href="Dashboard.php">
                        <img src="./assets/Vector.svg" alt="aceuil">
                        <span class="p-3">Home</span>
                    </a>
                    </li>
                    <li class="m-3 p-2 rounded-3">
                        <img src="./assets/book.svg" alt="mark">
                        <span class="p-3">Course</span>
                    </li>
                    <li class="m-3 p-2 rounded-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'student.php') echo 'bg-info'; ?>">
                        <a class="link" href="student.php">
                        <img class="" src="./assets/graduation.svg" alt="graduation">
                        <span class="p-2">Students</span>
                    </a>
                    </li>
                    <li class="m-3 p-2 rounded-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'paymentdetail.php') echo 'bg-info'; ?>">
                        <a class="link" href="paymentdetail.php">
                        <img src="./assets/payment.svg" alt="prix">
                        <span class="p-3">Payment</span>
                       </a>
                    </li>
                    <li class="m-3 p-2 rounded-3">
                        <img src="./assets/report.svg" alt="azert">
                        <span class="p-3">Report</span>
                    </li>
                    <li class="m-3 p-2 rounded-3">
                        <img src="./assets/setting.svg" alt="parametres">
                        <span class="p-3">Settings</span>
                    </li>
                    <li class="mt-5 m-3 ">
                        <a class="link" href="index.php">
                            <span class="p-3">Logout</span>
                            <img src="./assets/logout.svg" alt="sortir">
                        </a>
                    </li>
                </div>
            </ul>
        </div> 
        <div class="list-group list-group-flush">
        </div>
 </div>
