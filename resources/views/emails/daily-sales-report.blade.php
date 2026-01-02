<h2>Daily Sales Report</h2>

<p>Date: {{ now()->format('d M Y') }}</p>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th align="left">Product</th>
            <th align="right">Quantity Sold</th>
            <th align="right">Revenue ($)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $item)
            <tr>
                <td>{{ $item->product_name }}</td>
                <td align="right">{{ $item->total_qty }}</td>
                <td align="right">{{ number_format($item->total_amount, 2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>Total Revenue: ${{ number_format($totalRevenue, 2) }}</h3>
