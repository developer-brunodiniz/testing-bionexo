<table id="tablebionexo" class="table table-striped center-header table table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Created</th>
        </tr>
    </thead>
    <tbody>
        @if (count($list) !== 0)
        @foreach ($list as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->amount }}</td>
            <td>{{ date('d/m/Y H:m', strtotime(str_replace('-', '/', $value->created_at))) }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>