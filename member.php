<?php include("admin_header.php"); ?>


<div class="main-content">
    <header>
    <div>
        <span class="ti-search"></span>
        <input type="search" placeholder="search">
    </div>
    <div class="social-icons">
        <span class="ti-bell"></span>
        <span class="ti-comment"></span>
    </div>
    </header>

    <main>
    <section class="recent">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Recent Activity</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>eMail</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $database = new Database();
                            $db = $database->connect();
                            $user = new Users($db);
                            $user->read();
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="summary">
                <div class="summary-card">
                    <div class="summary-single">
                        <span class="ti-id-badge"></span>
                        <div>
                        <h5><?php $user->countUser(); ?></h5>
                        <small>Number of staff</small>
                    </div>
                </div>
                <div class="summary-single">
                    <span class="ti-calendar"></span>
                    <div>
                        
                        <small>Number of leave</small>
                    </div>
                </div>
                <div class="summary-single">
                    <span class="ti-face-smile"></span>
                    <div>
                        
                        <small>Profile update request</small>
                    </div>
                </div>
            </div>

            <div class="bday-card">
                <div class="bday-flex">
                    <div class="bday-img"></div>
                    <div class="bday-info">
                        <h5>Omar kkdif</h5>
                        <small>Birthday Today</small>
                    </div>
                </div>
                <div class="text-center">
                    <button>
                        <span class="ti-gift"></span>
                        Wish him
                    </button>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>

</body>
</html>

