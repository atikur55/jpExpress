<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    head{
        height: 400px;
        width: 100%;
        border-bottom:2px solid red; 
    }
    .head_one{
        width: 50%;
        float: left;
    }
    .head_one p{
        padding-right: 10px;
    }
    .head_two{
        width: 50%;
        float: right;
    }
    .head_two h2{
        color: red;
        font-size: 24px;
        text-align: right;
        
    }
    .head_two h4{
        font-size: 15px;
        text-align: right;
        
    }
    .head_two h4 span{
        font-size: 15px;
        text-align: right;
        
    }
    /* .shipper{
        width: 50%;
        float: left;
        margin: 2px;
    }
    .receiver{
        width: 50%;
        float: right;
        margin: 2px;
    } */
    .shipper_table table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    .receive_table table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

</style>
</head>
<body>

<header style="height: 170px;">
    <div class="head_one">
        <h3>JP Express</h3>
        <p>G.P Gho-185, <br>Opposite of Titumir College Mohakhali, Dhaka 1213<br>Mobile: 01777-889900<br>Email: jpex@gmail.com</p>
    </div>
    <div class="head_two">
        <h2><i>Delivery Order</i></h2>
        <h4>Date:&nbsp;&nbsp;&nbsp;<span>13-05-2021</span></h4>
        <h4>INVOICE&nbsp;&nbsp;&nbsp;<span>jp#222334556</span></p>
    </div>
</header>
<section style="height: 400px;">
    <div class="shipper">
        <h2>Shipper</h2>
        <div class="shipper_table">
            <table style="width:100%">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th> 
                </tr>
                <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
            </table>
        </div>
    </div>
    {{-- <div class="receiver" style="width: 50%">
        <h2>Receiver</h2>
        <div class="receive_table">
            <table style="width:100%">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th> 
                </tr>
                <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
            </table>
        </div>
        
    </div> --}}
</section>


</body>
</html>
