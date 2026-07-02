<!-- FILTER -->
<div class="row mb-3">

    <!-- Jenis EDC -->
    <div class="col-md-3">
        <label><b>Jenis EDC</b></label>
        <select id="filter-edc" class="form-control">
            <option value="BCA" selected>BCA</option>
            <option value="Mandiri">Mandiri</option>
            <option value="MTI">MTI</option>
            <option value="MDR MTI">MDR MTI</option>
        </select>
    </div>

    <!-- Nama EDP -->
    <div class="col-md-3">
        <label><b>Nama EDP</b></label>
        <select id="filter-edp" class="form-control">
            <option value="">Semua EDP</option>
            <option value="ADHI PRASETYO">ADHI PRASETYO</option>
            <option value="AHMAD SOFYAN">AHMAD SOFYAN</option>
            <option value="ANDREAS ARMANDO JUNIOR">ANDREAS ARMANDO JUNIOR</option>
            <option value="ARIFIN HAZALI">ARIFIN HAZALI</option>
            <option value="DEDE HERMANSYAH">DEDE HERMANSYAH</option>
            <option value="EGA RAMADHANI ANWARI">EGA RAMADHANI ANWARI</option>
            <option value="HENDRIK ASTA MANGGALA">HENDRIK ASTA MANGGALA</option>
            <option value="ILHAM M FIRDAUS">ILHAM M FIRDAUS</option>
            <option value="JAMHARA PARPANI">JAMHARA PARPANI</option>
            <option value="PRADITYA RIYAN VIVALDI">PRADITYA RIYAN VIVALDI</option>
            <option value="RAMADHAN SAPUTRA">RAMADHAN SAPUTRA</option>
        </select>
    </div>

    <!-- Tombol Filter -->
    <div class="col-md-1">
        <label>&nbsp;</label>
        <button type="button" id="btn-filter" class="btn btn-primary btn-block">
            <i class="fa fa-search"></i> Filter
        </button>
    </div>

    <div class="col-md-2">
        <label><b>File Excel</b></label>
        <input type="file" id="file-import" class="form-control" accept=".xlsx,.xls">
    </div>

    <div class="col-md-1">
        <label>&nbsp;</label>
        <button type="button" id="btn-import" class="btn btn-success btn-block">
            <i class="fa fa-upload"></i> Import
        </button>
    </div>
</div>

<table id="list-data-edc-trace" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>KDTK</th>
            <th>Nama</th>
            <th>EDP</th>
            <th>Station</th>

            <?php for ($i = 13; $i >= 0; $i--) : ?>
                <th><?= date('d/m', strtotime("-{$i} days")); ?></th>
            <?php endfor; ?>

        </tr>
    </thead>

    <tbody id="data-report-edc-trace">
    </tbody>
</table>