<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
<div class="box-header">

<div class="col-md-6">
<a href="<?php echo base_url('Report/export'); ?>" class="form-control btn btn-warning">
<i class="glyphicon glyphicon-floppy-save"></i> Export Data Excel
</a>
</div>

</div>

<div class="box-body">
<table id="list-data-report" class="table table-bordered table-striped">

<thead>
<tr>
<th style="background-color: darkcyan; color:white;">No</th>
<th style="background-color: darkcyan; color:white;">KDTK</th>
<th style="background-color: darkcyan; color:white;">Nama Toko</th>
<th style="background-color: darkcyan; color:white;">Station</th>
<th style="background-color: darkcyan; color:white;">Nama EDP</th>
<th style="background-color: darkcyan; color:white;">CPU Usage</th>
<th style="background-color: darkcyan; color:white;">UPS Status</th>
<th style="background-color: darkcyan; color:white;">LAN Speed</th>
<th style="background-color: darkcyan; color:white;">Suhu</th>
<th style="background-color: darkcyan; color:white;">Boot Time</th>

<th style="background-color: darkcyan; color:white;">EDC BCA ON</th>
<th style="background-color: darkcyan; color:white;">EDC BCA OFF</th>
<th style="background-color: darkcyan; color:white;">EDC BCA LAST</th>

<th style="background-color: darkcyan; color:white;">EDC Mandiri ON</th>
<th style="background-color: darkcyan; color:white;">EDC Mandiri OFF</th>
<th style="background-color: darkcyan; color:white;">EDC Mandiri LAST</th>

<th style="background-color: darkcyan; color:white;">EDC MTI ON</th>
<th style="background-color: darkcyan; color:white;">EDC MTI OFF</th>
<th style="background-color: darkcyan; color:white;">EDC MTI LAST</th>

</tr>
</thead>

<tbody id="data-report-report">
</tbody>

</table>
</div>
</div>

<div id="tempat-modal"></div>