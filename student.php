<?php
$title='dashboard student';
    require_once 'head.php';
?>
    <body>
    <style>
    .model {
        margin: 0;
        padding: 0;
        max-width: 500px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: whitesmoke;
    }

    .hidden {
        display: none;
    }
    .close {
  color: #aaa;
  float: left;
  font-size: 28px;
  font-weight: bold;


}
.modal-content{
    border: none !important;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
        <main>
            <!-- Sidebar-->
                <?php
                include 'sidebar.php';
                include 'navbar.php';
                ?>
            <!-- navbar -->
                <!-- Page content-->
                <div class="container-fluid mt-3">
                    <div class="buttons">
                        <h2>student List</h2>
                        <ul class="uls">
                            <li class="px-3">
                                <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.6 11.375H1.39998C0.157481 11.375 -0.472519 12.8574 0.411231 13.7211L6.01123 19.2211C6.55811 19.7582 7.44623 19.7582 7.99311 19.2211L13.5931 13.7211C14.4681 12.8574 13.8425 11.375 12.6 11.375ZM6.99998 18.25L1.39998 12.75H12.6L6.99998 18.25ZM1.39998 8.625H12.6C13.8425 8.625 14.4725 7.14257 13.5887 6.2789L7.98873 0.7789C7.44186 0.241791 6.55373 0.241791 6.00686 0.7789L0.406856 6.2789C-0.468144 7.14257 0.157481 8.625 1.39998 8.625ZM6.99998 1.74999L12.6 7.24999H1.39998L6.99998 1.74999Z" fill="#00C1FE"/>
                                </svg>                                    
                            </li>
                            <li class="pe-auto">
                            <a class="  btn-info pe-auto text-white rounded link px-3 py-2 me-3" id="modaladd">ADD student</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mytable  ml-3 ">
                        <table class="table table-borderless m-3 bg-white">
                            <thead class="">
                              <tr class="text-muted">
                                <td> </td>
                                <th>name</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>enroll number</th>
                                <th>date of admission</th>
                                <td> </td>
                              </tr>
                            </thead>
                            <tbody class="">
                                  <?php
                                  require_once "e-classe-db.php";
                                    // $file = 'student.json';
                                    // $data = file_get_contents($file);
                                    // $student = Json_decode($data,true);
                                    // $index = 0;
                                    $req ="SELECT * FROM student";
                                    $res= $conn -> query($req);
                                    if($res->num_rows > 0){
                                        while($key = $res->fetch_assoc()){
                                            echo '<tr>';
                                        echo '<th><img src="assets/'. $key['image'] .'" alt="user pic"></th>';
                                        echo '<td>'.$key['fullName'].'</td>';
                                        echo '<td>'.$key['email'].'</td>';
                                        echo '<td>'.$key['phone'].'</td>';
                                        echo '<td>'.$key['enrollnumber'].'</td>';
                                        echo '<td>'.$key['dateofadmission'].'</td>';
                                        echo '<td>
                                        <a href="./formeditstudent.php?id='.$key['id'].'" >
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.3033 2.08777L16.9113 0.695801C16.4478 0.231934 15.8399 0 15.2321 0C14.6242 0 14.0164 0.231934 13.5525 0.69543L0.475916 13.772L0.00462689 18.0107C-0.0547481 18.5443 0.365701 19 0.88783 19C0.920858 19 0.953885 18.9981 0.987654 18.9944L5.22332 18.5265L18.3036 5.44617C19.231 4.51881 19.231 3.01514 18.3033 2.08777ZM4.67818 17.3924L1.2259 17.775L1.61035 14.3175L11.4031 4.52475L14.4747 7.59629L4.67818 17.3924ZM17.4639 4.60676L15.3141 6.7565L12.2426 3.68496L14.3923 1.53521C14.6164 1.31107 14.9148 1.1875 15.2321 1.1875C15.5494 1.1875 15.8474 1.31107 16.0719 1.53521L17.4639 2.92719C17.9266 3.39031 17.9266 4.14363 17.4639 4.60676Z" fill="#00C1FE"/>
                                            </svg>
                                        </a>
                                        <a href="./deletestudent.php?id='.$key['id'].'" >
                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.285713 2.25H4L5.2 0.675C5.35968 0.465419 5.56674 0.295313 5.80478 0.178154C6.04281 0.0609948 6.30529 0 6.57143 0L9.42857 0C9.69471 0 9.95718 0.0609948 10.1952 0.178154C10.4333 0.295313 10.6403 0.465419 10.8 0.675L12 2.25H15.7143C15.7901 2.25 15.8627 2.27963 15.9163 2.33238C15.9699 2.38512 16 2.45666 16 2.53125V3.09375C16 3.16834 15.9699 3.23988 15.9163 3.29262C15.8627 3.34537 15.7901 3.375 15.7143 3.375H15.0393L13.8536 16.4637C13.8152 16.8833 13.6188 17.2737 13.3029 17.558C12.987 17.8423 12.5745 17.9999 12.1464 18H3.85357C3.42554 17.9999 3.01302 17.8423 2.69711 17.558C2.38121 17.2737 2.18477 16.8833 2.14643 16.4637L0.960713 3.375H0.285713C0.209937 3.375 0.137264 3.34537 0.083683 3.29262C0.0301008 3.23988 0 3.16834 0 3.09375V2.53125C0 2.45666 0.0301008 2.38512 0.083683 2.33238C0.137264 2.27963 0.209937 2.25 0.285713 2.25ZM9.88571 1.35C9.8323 1.28034 9.76324 1.22379 9.68393 1.18475C9.60463 1.14572 9.51723 1.12527 9.42857 1.125H6.57143C6.48277 1.12527 6.39537 1.14572 6.31606 1.18475C6.23676 1.22379 6.1677 1.28034 6.11429 1.35L5.42857 2.25H10.5714L9.88571 1.35ZM3.28571 16.3617C3.29748 16.5019 3.36245 16.6325 3.46768 16.7277C3.57292 16.8228 3.7107 16.8754 3.85357 16.875H12.1464C12.2893 16.8754 12.4271 16.8228 12.5323 16.7277C12.6376 16.6325 12.7025 16.5019 12.7143 16.3617L13.8929 3.375H2.10714L3.28571 16.3617Z" fill="#00C1FE"/>
                                            </svg> 
                                        </a>                                     
                                        </td>';
                                        echo '</tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
    <button>Open</button>
    <div class="model hidden">
    <div class="modal-content border-none">
    <span class="close ">&times;</span>
  </div>
        <form class="d-flex flex-column" method="POST" name="form" action="./student.php" onsubmit="valid()"  >
            <label class="form-label">image</label>
            <input type="file"  class="form-control " name="image" placeholder="Entrer une image">
            <label class="form-label">name</label>
            <input type="text"  class="form-control " name="name" placeholder="Entrer le nom">
            <label class="form-label">email</label>
            <input type="text"  class="form-control " name="email" placeholder="Enter l'email">
            <label class="form-label">Phone</label>
            <input type="tel"  class="form-control " name="phone" placeholder="Enter phone">
            <label class="form-label">enroll</label>
            <input type="tel"  class="form-control "  name="enroll" placeholder="Enter enroll">
            <label class="form-label">datedadmission</label>
            <input type="date"  class="form-control " name="datedadmission" placeholder="Enter date"> 
            <input class="btn-info" type="submit" value="add" name="save" >  

        </form>
        </div>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
                                </main>
                                <script src="modaladdstudent.js"></script>
                                <script src="addstudent.js"></script>
    </body>
</html>
