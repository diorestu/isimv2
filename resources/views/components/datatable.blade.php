@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.js"></script>
    <script>
        var options = {
            lengthMenu: [10, 20, 30, 40, 50, 100],
            "dom": '<"my-0"t><"d-flex justify-content-between align-items-center mx-3 mb-2"<"d-flex justify-content-start my-3 mx-2" <"me-2 pt-2"l>><"pt-2"p>>',
            "language": {
                "sSearch": "Cari:",
                "emptyTable": "Data Tidak Tersedia",
                "paginate": {
                    "previous": '<i class="fa fa-sm fa-chevron-left"></i>',
                    "next": '<i class="fa fa-sm fa-chevron-right"></i>'
                },
                "decimal": ",",
                "emptyTable": "Tidak Ada Data Tersedia",
                "info": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
                "infoFiltered": "(difiliter dari _MAX_ data)",
                "infoPostFix": "",
                "thousands": ".",
                "lengthMenu": "Tampilkan _MENU_ data",
                "loadingRecords": "Memuat...",
                "processing": "<i class='fa fa-spinner fa-spin fa-fw'></i>",
                "search": "Cari:",
                "zeroRecords": "Tidak ada data yang sesuai",
            },
        }
        let table = new DataTable('#myTable', options);
        $('#search').keyup(function() {
            table.search($(this).val()).draw();
        });
    </script>
@endpush

<div class="card mb-0" style="">
    <div class="card-header d-flex justify-content-between p-3">
        {{ $header }}
        <div class="form-search">
            <i class="ph-duotone ph-magnifying-glass icon-search"></i>
            <input type="text" class="form-control shadow-sm" placeholder="Cari" id="search">
        </div>
    </div>
    <div class="card-body" style="padding: 0 !important; ">
        <div class="table-responsive">
            <table class="table table-hover table-sm mb-0" id="myTable">
                <thead>
                    <tr>
                        @foreach ($thead as $item)
                            <th class="text-center" {{ $loop->first ? 'width=5%' : '' }}>{{ $item }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>
        </div>
    </div>
</div>
