<div class="card" style="">
    <div class="card-body" style="padding: 0 !important; ">
        <div class="table-responsive" style="border-radius: 10px !important; ">
            <table class="table table-striped table-sm mb-0">
                <thead class="thead-dark">
                    <tr>
                        @foreach ($thead as $item)
                            <th>{{ $item }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
                {{-- <tfoot class="thead-light">
                    <tr>
                        @foreach ($thead as $item)
                            <th>{{ $item }}</th>
                        @endforeach
                    </tr>
                </tfoot> --}}
            </table>
        </div>
    </div>
</div>
