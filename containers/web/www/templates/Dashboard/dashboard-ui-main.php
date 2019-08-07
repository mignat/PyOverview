<?php
/**
 * Created by PhpStorm.
 * User: mariusignat
 * Date: 19/09/2018
 * Time: 13:26
 */
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../../scripts/dashboard.js"></script>
<div class="container">
    <div class="container">
<div class="row rowmid">
    <div class="jumbotron widget col-xs-6 col-sm-3">
        <h3>CPU</h3>
        <hr class="my-4">
        <h2 id="cpu-widget">0%</h2>
    </div>
    <div class="jumbotron widget col-xs-6 col-sm-3">
        <h3>RAM</h3>
        <hr class="my-4">
        <h2 id="ram-widget">0%</h2>
    </div>
    <div class="jumbotron widget col-xs-6 col-sm-3">
        <h3>Connected Devices</h3>
        <hr class="my-4">
        <h2 id="device-num">0</h2>
    </div>
</div>
        <h3>Activity Log</h3>
        <hr class="my-4">
        <table class="table table-hover align-content-center" align="center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Timestamp</th>
                <th scope="col">Type</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>
            <tr scope="row">
							<td>2018-05-13</td>
							<td>INFO</td>
							<td>Station pycom_1 created</td>
						</tr>
            </tbody>
            <tfoot>
            <tr>
            </tr>
            </tfoot>
        </table>


    </div>
</div>