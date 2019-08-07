<?php
// php script
include("controller_login.php");

// html
include("header2.php");
?>
    <div class="row">
        <div data-alert class="alert-box" style="display:none;">
        Ini standard error
        <a href="#" class="close">&times;</a>
        </div>
    </div>
    <div class="row">
        <div class="medium-6 medium-centered large-4 large-centered columns">
            <div class="row log-in-form">
                <form action="login.php" method="POST">
                    <div class="row column">
                        <h4 class="text-center">Login</h4>
                        <label>Course Id
                         </label>
                         <h>001</h>

                         <label>Course Name</label>
                         <h>Mathematic</h>

                         <label>Fee</label>
                         <h>4.000.000/Sem</h>

                         <label>Prerequisite</label>
                         <h>Lulusan SMA</h>
                         <h>Umur 21 tahun</h>
                         
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include("footer.php");
?>
<br>
<br>
<a href="logout.php">Logout</a>