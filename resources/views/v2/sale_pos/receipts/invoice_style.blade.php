<style>

    @page {
        margin: 10px !important;
    }

    body {

        justify-content: center;
        padding: 1px !important;
        margin: 0 !important;
        width: 100% !important;
    }

    .container {
        padding: 0 !important
    }

    #company {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #invoice-num {
        margin-top: 4px;
    }

    #invoice-num>div {
        text-align: center
    }

    #datetime {
        margin-top: 0px;
        display: flex;
    }

    #datetime>div {
        /* text-align: center; */
        padding: 0 2px;
    }

    #datetime {
        margin: 6px 0;
    }

    .items-table {
        margin-top: 10px;
    }

    .items-table table th,
    .items-table table td {
        padding: 4px;
        text-align: center;
    }

    #totals {
        display: flex;
        margin-top: 10px;
        direction: rtl;
    }

    #totals>div:nth-of-type(2) {
        width: 100%;
        margin-inline-start: 4px;
        padding-inline-start: 4px;
        border-right: 1px solid rgba(146, 146, 146, 0.152);
    }

    #totals>div>div {
        padding: 4px;
    }

    #totals div {
        /* white-space: nowrap; */
    }

    #totals>div:nth-of-type(1) table {
        white-space: nowrap;
    }

    #totals>div:nth-of-type(2)>tr>td:nth-of-type(2) {
        width: 100%;
    }


    #totals>div:nth-of-type(2) table tr td:nth-of-type(2) {
        white-space: nowrap;
    }

    #total_row>td {
        padding-top: 5px;
    }

    #total_row>td>div {
        border-top: 1px dotted rgba(146, 146, 146, 0.152);
        padding-top: 5px !important;
    }

    #top-table {
        /* margin-bottom: 10px; */
    }

    table {
        width: 100%;
    }
    #logo-wrapper {
        width: 100%;
        text-align: center;
        margin: 10px auto;
    }

    #logo-wrapper img {
        max-height: 60px;
    }

    .text-center {
        text-align: center;
    }

    .ticket {
        width: 98%;
        max-width: 98%;
        margin-left: 6px;
        font-weight: 800;
        color: black;

    }


    #header-text {
        padding-top: 10px;
    }



    #installmentTable {
        font-size: 24px;
        margin: 15px 0 !important;
    }

    #installment_calculations tr>td:nth-of-type(1) {
        padding-inline-end: 10px;

    }

    #installmentTable td {
        font-size: 20px;
    }

    #gurantor-receipt {
        width: calc(100% - 100px);
        margin: auto;
    }

    #gurantor-receipt h1 {
        text-align: center;
    }

    #gurantor-receipt p {
        font-size: 20px;
    }

    #commodity-sale-statement p,
    #commodity-sale-statement div {
        font-size: 20px;
    }
    .f-8 {
        font-size: 8px !important;
    }
    @media print {
        * {
            font-size: 12px;
            font-family: 'Times New Roman';
            word-break: break-all;
        }
        table {
            border-collapse: collapse !important;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        td{
            border-bottom: 1px solid #f4f4f5 !important;
        }
        table th{
            background-color: rgba(0, 146, 208, 0.96) !important;
            color: #fff !important;
            font-family: Arial, Helvetica, sans-serif !important;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        .f-8 {
            font-size: 8px !important;
        }

        .headings{
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .sub-headings{
            font-size: 15px !important;
            font-weight: 700 !important;
        }

        .border-top{
            border-top: 1px solid #242424;
        }
        .border-bottom{
            border-bottom: 1px solid #242424;
        }

        .border_btn{
            display: flex;
        }
        .border_btn1{
            height: 20px;
            background-color: #009dd0;
            width: 40%;
            border-right: 40px solid transparent;
            border-bottom: 40px solid #009dd0;
            z-index: 99;
        }
        .border_btn2{
            width: 70%;
            height: 20px;
            background-color: black;
            margin-top: 14.5px;
            border-bottom: 25px solid black;
            margin-left: -30px;
        }

        .border-bottom-dotted{
            border-bottom: 1px dotted darkgray;
        }

        td.serial_number, th.serial_number{
            width: 5%;
            max-width: 5%;
        }

        td.description,
        th.description {
            width: 25%;
            max-width: 25%;
        }

        td.quantity,
        th.quantity {
            width: 15%;
            max-width: 15%;
            word-break: break-all;
        }
        .description_th{
            background-color: #009dd0 !important;
        }
        .quantity-th {
            background-color: black !important;
        }

        .total_paid{
            background-color: #009dd0 !important;
            padding: 5px;
            border-radius: 3px;
            width: 80% !important;
            text-align: right !important;
        }
        .total_paid p{
            color: #fff !important;
        }
        td.unit_price, th.unit_price{
            width: 25%;
            max-width: 25%;
            word-break: break-all;
        }

        td.price,
        th.price {
            width: 20%;
            max-width: 20%;
            word-break: break-all;
        }

        .centered {
            text-align: left;
            align-content: center;
            font-size: medium !important;
        }


        .ticket {
            width: 100%;
            max-width: 100%;
        }
        .footer_opt{
            display: flex;
        }

        .qr_code{
            width: 40% !important;
        }
        .footer_dtls{
            width: 60% !important;
            text-align: left !important;
            margin-left: 100px !important;
        }

        img {
            max-width: inherit;
            width: auto;
        }

        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }
    .table-info {
        width: 100%;
    }
    .table-info tr:first-child td, .table-info tr:first-child th {
        background-color: #009dd0;
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
    }
    .table-info th {
        text-align: left;
    }
    .table-info td {
        text-align: right;
    }
    .logo {
        float: left;
        width:35%;
        padding: 10px;
    }

    .text-with-image {
        float: left;
        width:65%;
    }
    .text-box {
        width: 100%;
        height: auto;
    }

    .textbox-info {
        clear: both;
    }
    .textbox-info p {
        margin-bottom: 0px
    }
    .flex-box {
        display: flex;
        width: 100%;
    }
    .flex-box p {
        width: 50%;
        margin-bottom: 0px;
        white-space: nowrap;
    }

    .table-f-12 th, .table-f-12 td {
        font-size: 12px;
        word-break: break-word;
    }

    .bw {
        word-break: break-word;
    }

    .text-right{
        text-align: left;
    }


    .f-wrapper {
        display: flex;
        justify-content: space-between;
    }
    .logo-side {
    }
    .invoice {
        color: #009dd0;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 40px;
        text-align: right;
    }
    .info-wrapeer {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .f-logo {
        border-bottom: 3px solid #000;
        padding-bottom: 5px;
    }
    .invice-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px;
        width: 100%;
        text-align: right;
    }
    .invice-info:last-child {
        border-bottom: 3px solid #009dd0;
        padding-bottom: 12px;
    }
    .text-l {
        text-align: left;
    }
    .invice-info p {
        /*width: 50%;*/
        font-size: 12px;
        word-wrap: break-word;
    }
    .invoice-client {
        display: flex;
        gap: 20px;
    }
    .client-info {
        width: 100%;
        margin-top: -280px;
        margin-left: 300px;
        text-align: center !important;
    }
    .text-side {
        width: 100%;
        margin-top: -250px;
        text-align: center;
        margin-right: 20px;
    }
    .invoice-to h3 {
        font-size: 16px;
        font-weight: 600;
        color: #009dd0;
        margin-bottom: 5px;
    }
    .personal-info h2 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    .personal-info p {
        font-size: 12px;
        margin-bottom: 5px;
    }
    .client-msg {
        width: 70%;
        margin-top: 30px;
    }

    .msg h4 {
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 7px;
    }
    .msg p {
        font-size: 12px;
        line-height: 1.4;
    }
.footerAddress{
    display: flex;
}
.footer1{
    width: 40%;
}
.footer2{
    width: 60%;
}
</style>