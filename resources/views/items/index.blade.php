<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Comparison</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .highlight { background-color: yellow; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Quotation Comparison</h2>
        <table class="table table-bordered">
       
            <thead>
                <tr>
                   
                    <th rowspan="2">Sl No</th>
                    <th rowspan="2">VAT</th>
                    <th rowspan="2">Item Name</th>
                    <th rowspan="2">Unit</th>
                    <th rowspan="2">Quantity</th>
                    
                    @foreach($quotations as $index => $quotation)
                        <th colspan="2"><h4>{{ $quotation->quotations_name}}</h4> 
                        <p>Currency  : {{ $quotation->currency}}</p>
                        <p> Payment Term : {{ $quotation->payment_term}} </p>
                        <p>Delivery Period  : {{ $quotation->delivery_period}} </p></th>
                    @endforeach
                </tr>
                <tr>
                @foreach($quotations as $quotation)
                    <th>Unit Cost</th>
                    <th>Total Cost</th>
                 @endforeach
                </tr>
            </thead>
            <tbody id="quotationTable">
            @foreach($quotations as $quotation)
            <tr>
              
                <td colspan="5">
                    1
                </td>
                <td>{{ number_format($quotation->unit_cost, 2) }}</td>
                <td>{{ number_format($quotation->total_cost, 2) }}</td> 

                <td>{{ number_format($quotation->unit_cost, 2) }}</td>
                <td>{{ number_format($quotation->total_cost, 2) }}</td> 

                <td>{{ number_format($quotation->unit_cost, 2) }}</td>
                <td>{{ number_format($quotation->total_cost, 2) }}</td> 
                
        </tr>
        @endforeach
            </tbody>
            <thead>
                <tr>
                    <th colspan="4">Supplier Name</th>
                    <th colspan="7">Awarded Line</th>
                </tr>
                <tr>
                    <th colspan="4">Accurate Meezan Trading LLC</th>
                    <th colspan="7">1</th>
                </tr>
                <tr>
                    <th colspan="4">Awarded Submission Recommendation</th>
                    <th colspan="7"></th>
                </tr>
                <tr>
                    <th colspan="4">Item # (1) To M/s ccurate Meezan Trading LLC @ AED 126,000</th>
                    <th colspan="7"><input type="text" /></th>
                </tr>
                <tr>
                    <th colspan="4"><textarea /></th>
                    
                  
                </tr>
            </thead>
          
        </table>
    </div>

    <script>
     
        function highlightQuote(index, amount, vat) {
            document.querySelectorAll('tbody tr').forEach(row => row.classList.remove('highlight'));
            document.getElementById('row-' + index).classList.add('highlight');
            const total = (amount + (amount * vat / 100)).toFixed(2);
            document.getElementById('total-' + index).innerText = total;
        }
    </script>
</body>
</html>
