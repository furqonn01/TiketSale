<table class="table table-bordered">
    <tr class="success">
        <th colspan="6">Detail Transaksi</th>
    </tr>
    <tr>
        <th>No</th>
        <th>Nama Tiket</th>
        <th>Qty</th>
        <th>Harga Tiket</th>
        <th>Subtotal</th>
        <th>Cancel</th>
    </tr>
    <?php $no=1; $total=0; ?>
    @foreach ($transaksi as $item)
    <tr>
        <td>1</td>
        <td>{{ $item->tiket->name_tiket }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->tiket->harga_tiket }}</td>
        <td>{{ $item->tiket->harga_tiket*$item->qty }}</td>
    </tr>
    <?php $no++ ?>
    <?php $total=$total+($item->tiket->harga_tiket*$item->qty) ?>
    @endforeach
    <tr>
        <td colspan="5">
            <p align="right">Total</p>
        </td>
        <td>{{$total}}</td>
    </tr>
</table>
