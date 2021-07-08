    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        /* table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        } */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
   
    <title>Order Report</title>
  </head>
  <body>
        <h1>JP Express</h1><br><br>
        <h4 style="">Order List</h4>
        <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Priority</th>
        </tr>
        @foreach($get_data as $data)
        <tr>
            <td>{{$data->track_id}}</td>
            <td>{{$data->from}}</td>
            <td>{{$data->to}}</td>
            <td>{{$data->service_type}}</td>
            <td>{{$data->price}}</td>
        </tr>
        @endforeach
        </table>
  
  </body>
</html>

