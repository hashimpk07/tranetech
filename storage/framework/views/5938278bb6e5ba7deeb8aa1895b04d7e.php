<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Comparison</title>
    <style>
        .lowest { background-color: yellow; }
        .selected { background-color: lightblue; }
        .quotation { cursor: pointer; padding: 10px; border: 1px solid #ccc; margin: 5px; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>Quotation Comparison</h1>
    <div id="quotations">
        <?php $__currentLoopData = $quotations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>Supplier Name</th>
                <th>Quoted Amount</th>
                <th>VAT (20%)</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody id="quotationDetails"></tbody>
        <div class="quotation" data-amount="<?php echo e($quotation->quoted_amount); ?>" onclick="selectQuotation(this)">
                <?php echo e($quotation->quotations_name); ?>

                <?php echo e(number_format($quotation->currency)); ?>

                <?php echo e(number_format($quotation->payment_term)); ?>

                <?php echo e(number_format($quotation->unit_cost, 2)); ?>

                <?php echo e(number_format($quotation->total_cost, 2)); ?>

        </div>
    </table>

    <script>
        const quotations = <?php echo json_encode($quotations, 15, 512) ?>;
        let lowestAmount = Math.min(...quotations.map(q => q.quoted_amount));

        document.querySelectorAll('.quotation').forEach(el => {
            if (parseFloat(el.getAttribute('data-amount')) === lowestAmount) {
                el.classList.add('lowest');
            }
        });

        function calculateVAT(amount) {
            return amount * 0.2; // Assuming 20% VAT
        }

        function selectQuotation(selected) {
            const supplierName = selected.textContent.split(':')[0];
            const amount = parseFloat(selected.getAttribute('data-amount'));
            const vat = calculateVAT(amount);
            const totalAmount = amount + vat;

           
            const details = document.getElementById('quotationDetails');
            details.innerHTML = '';

           
            const row = `
                <tr>
                    <td>${supplierName}</td>
                    <td>$${amount.toFixed(2)}</td>
                    <td>$${vat.toFixed(2)}</td>
                    <td>$${totalAmount.toFixed(2)}</td>
                </tr>
            `;
            details.innerHTML = row;

            document.querySelectorAll('.quotation').forEach(el => {
                el.classList.remove('selected');
            });
            selected.classList.add('selected');
        }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\projects\Tranetech\resources\views/items/index.blade.php ENDPATH**/ ?>