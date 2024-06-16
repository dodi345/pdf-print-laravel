<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f5f7;
            color: #526484;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header,
        .invoice-head,
        .invoice-bills {
            margin-bottom: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #2c7be5;
        }

        .header .date {
            color: #8094ae;
            font-size: 0.875rem;
        }

        .invoice-brand {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-brand img {
            max-width: 150px;
        }

        .invoice-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .invoice-contact,
        .invoice-desc {
            width: 48%;
        }

        .invoice-contact .title {
            font-size: 1.125rem;
            margin-bottom: 10px;
        }

        .invoice-contact ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .invoice-contact ul li {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            font-size: 0.875rem;
        }

        .invoice-contact ul li em {
            margin-right: 10px;
            color: #2c7be5;
        }

        .invoice-desc {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .invoice-desc .title {
            font-size: 1.125rem;
            margin-bottom: 10px;
        }

        .invoice-desc ul {
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 0.875rem;
        }

        .invoice-desc ul li {
            margin-bottom: 5px;
        }

        .invoice-bills table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-bills th,
        .invoice-bills td {
            padding: 10px;
            border: 1px solid #e0e6ed;
        }

        .invoice-bills th {
            background-color: #f9fafc;
            text-align: left;
            font-size: 0.875rem;
            color: #526484;
        }

        .invoice-bills td {
            font-size: 0.875rem;
        }

        .invoice-bills tfoot {
            font-weight: bold;
        }

        .invoice-bills tfoot tr td {
            border: none;
        }

        .nk-notes {
            font-style: italic;
            font-size: 0.75rem;
            color: #8094ae;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <h3>Invoice <strong class="text-primary small">#746F5K2</strong></h3>
                <div class="date">Created At: <span class="text-base">18 Dec, 2019 01:02 PM</span></div>
            </div>
        </div>
        <div class="invoice-head">
            <div class="invoice-contact">
                <span class="overline-title">Invoice To</span>
                <div class="invoice-contact-info">
                    <h4 class="title">Gregory Ander son</h4>
                    <ul class="list-plain">
                        <li><em class="icon ni ni-map-pin-fill"></em><span>House #65, 4328 Marion Street<br>Newbury, VT 05051</span></li>
                        <li><em class="icon ni ni-call-fill"></em><span>+012 8764 556</span></li>
                    </ul>
                </div>
            </div>
            <div class="invoice-desc">
                <h3 class="title">Invoice</h3>
                <ul class="list-plain">
                    <li class="invoice-id"><span>Invoice ID</span>:<span>66K5W3</span></li>
                    <li class="invoice-date"><span>Date</span>:<span>26 Jan, 2020</span></li>
                </ul>
            </div>
        </div>
        <div class="invoice-bills">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="w-150px">Item ID</th>
                            <th class="w-60">Description</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>24108054</td>
                            <td>Dashlite - Conceptual App Dashboard - Regular License</td>
                            <td>$40.00</td>
                            <td>5</td>
                            <td>$200.00</td>
                        </tr>
                        <tr>
                            <td>24108054</td>
                            <td>6 months premium support</td>
                            <td>$25.00</td>
                            <td>1</td>
                            <td>$25.00</td>
                        </tr>
                        <tr>
                            <td>23604094</td>
                            <td>Invest Management Dashboard - Regular License</td>
                            <td>$131.25</td>
                            <td>1</td>
                            <td>$131.25</td>
                        </tr>
                        <tr>
                            <td>23604094</td>
                            <td>6 months premium support</td>
                            <td>$78.75</td>
                            <td>1</td>
                            <td>$78.75</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td>Subtotal</td>
                            <td>$435.00</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td>Processing fee</td>
                            <td>$10.00</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td>TAX</td>
                            <td>$43.50</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td>Grand Total</td>
                            <td>$478.50</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="nk-notes"> Invoice was created on a computer and is valid without the signature and seal. </div>
            </div>
        </div>
    </div>
</body>

</html>
