<style>
.dataTables_wrapper {
        min-height: 500px
    }

    .dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        margin-left: -50%;
        margin-top: -25px;
        padding-top: 20px;
        text-align: center;
        font-size: 1.2em;
        color:grey;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">        
                    <div class="box-body">
                        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-5">
                <h2 style="margin-top:0px">LIST FPKB DEPARTEMEN <?php if($this->fungsi->user_login()->id_dept == 1 || $this->fungsi->user_login()->id_dept == 2){ echo " "; }else{ echo $this->fungsi->user_login()->nama_depart;}?></h2>
            </div>
            <div class="col-md-3 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pengajuan_karyawan/create'), 'Create', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('pengajuan_karyawan/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('pengajuan_karyawan/word'), 'Word', 'class="btn btn-primary"'); ?>
        </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Form Pengajuan</th>
                    <th>TPK</th>
                    <th>Departemen</th>
                    <th>Posisi</th>
                    <th>Tgl Pengajuan</th>
                    <th>Prioritas</th>
                    <th>Status</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
        
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "pengajuan_karyawan/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_form",
                            "orderable": false
                        },{"data": "id_form"},{"data": "tpk"},{"data": "id_dept"},{"data": "id_posisi"},{"data": "tanggal_pengajuan"},{"data": "priority_id"},{"data": "status_pengajuan", render: function(data){if (data == "Pending") {return '<span class="label label-warning">'+ data +'</span>'} else if (data == "Ditolak") {return '<span class="label label-danger">' + data + '</span>'} else {return '<span class="label label-success">'+ data +'</span>'}}},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>