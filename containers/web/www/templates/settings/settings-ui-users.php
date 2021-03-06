<?php

if ($_SESSION['permissions'] != 1) {
    include("../error.php");
    exit();
}

$user_list = sqlexec("SELECT * FROM `pyover_users`");
$table = new table_creator("SELECT `username` AS `USERNAME`,`full_name` AS `NAME`,`privileges` AS `PRIVILEGES` FROM `pyover_users` WHERE 1\"",true)

?>
<div class="container">
    <div class="container-fluid">

        <?php include("settings-ui-users-add.php"); ?>

    </div>
    <hr class='my-4'>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    <table class="table table-hover align-content-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">NO</th>
            <th scope="col">USERNAME</th>
            <th scope="col">NAME</th>
            <th scope="col">TYPE</th>
            <th scope="col">OPTIONS</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($user_list as $row) {
            switch ($row['privileges']) {
                case 1:
                    $user_type = "Admin";
                    break;
                case 0:
                    $user_type = "Viewer";
                    break;
                default:
                    $user_type = "Unknown";
                    break;
            }
            echo "<tr scope=\"row\">
							<td>{$no}</td>
							<td>{$row['username']}</td>
							<td>{$row['full_name']}</td>
							<td>{$user_type}</td>
							<td class='user_options'>
							<div class='btn-group' role='group'>
							    <div><a class='btn btn-primary btn-sm' href=\"viewStation.php.station={$row['username']}\">View</a> </div>
							    <div><a class='btn btn-primary btn-sm' href=\"editStation.php?station={$row['username']}\">Edit</a></div>
							    <div><button type=\"button\" class=\"btn btn-danger btn-sm\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"focus\" data-placement=\"right\" data-html=\"true\" title=\"<b>Are you sure ?</b>\" data-content=\"<div><a class='btn btn-danger btn-sm btn-block' href= '/lib/be_users.php?delete={$row['username']}' >Confirm</a></div>\">Remove</button></div>
							    </div>
                            </td>
						</tr>";
            $no++;
        } ?>
        </tbody>
        <tfoot>
        <tr>
        </tr>
        </tfoot>
    </table>
</div>