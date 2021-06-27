<?php include("includes/header.php"); ?>
<?php include("includes/users.php"); ?>
<?php include("includes/database.php"); ?>

<body>
<input type="checkbox" id="sidebar-toggle">

<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span class="ti-unlink"></span>
            <span style="font-size:25px;">Dashboard</span>
        <h3>
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="admin.php">
                    <span class="ti-home"></span>
                    <span class="t1">Home</span>
                </a>
            </li>
            <li>
                <a href="member.php">
                    <span class="ti-face-smile"></span>
                    <span class="t1">Members</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="ti-agenda"></span>
                    <span class="t1">Tasks</span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="ti-folder"></span>
                    <span class="t1">Store Front</span>
                </a>
            </li>
        </ul>
    </div>
</div>