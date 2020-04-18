
<table class="table table-bordered">
        <tr class="success"><th colspan="6">Laporan Penjualan Tiket</th></tr>
        <tr>
            <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th> <th>Subtotal</th></tr>
        <?php $no=1; $total=0; ?>
        @foreach ($transaksi as $item)
        <tr>
                <td>1</td>
                <td>{{ $item->tiket->name_tiket }}</td>
                <td>{{ $item->qty }}</td>
                @php( $harga=str_replace('.','',$item->tiket->harga_tiket))
                <td>{{"Rp.".number_format($harga) }}</td>
                <td>{{"Rp.".number_format($harga*$item->qty) }}</td>
                
                <?php $no++ ?>
                <?php $total=$total+($harga*$item->qty) ?>
        @endforeach
                <tr><td colspan="4"><p>Total</p></td><td>{{"Rp.".number_format($total) }}</td></tr>
</table>
