<?php
    session_start();
    //back function false
    if(!isset($_SESSION['username'])){
        header('location:../login.php');
    }

    include('../../private/required/dashboard/header.php');
?>
            <div class="dashboard__content">
                <div class="dashboard__admin">
                    <div class="dashboard__admin-wrap">
                        <div class="page">
                            dashboard
                        </div>
                    </div>
                </div>
                <div class="main__content">
                    <div class="main__content-wrap">

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>