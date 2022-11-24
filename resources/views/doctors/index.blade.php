@extends('layouts.admin')

@section('title', 'View Specialist')

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <p></p>
            <div class="text-center">
                <h3 class="text-primary">VIEW SPECIALIST</h3>
            </div>
            <div class="col-3">
                <p></p>
                <div class="p-2">
                    <img src="https://source.unsplash.com/collection/190727/1000x900" class="d-block img-fluid" alt="image">
                    <div class="input-group mb-3">

                    </div>
                    <div class="d-grid col-12 mx-auto">
                        <button class="btn btn-primary" type="button"><span></span> Download QRCODE</button>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <p></p>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names...">

                <table id="myTable">
                    <tr class="header">
                        <th style="width:auto">Doctor Name</th>
                        <th style="width:auto">Schedule Availability</th>
                        <th style="width:auto">Specialist Field</th>
                        <th style="width:auto">Action</th>
                    </tr>
                    <tr>
                        <td>Dr. Bate, Christian</td>
                        <td>7-8 pm daily</td>
                        <td>Pediatrician</td>
                        <td>Select</td>
                    </tr>
                </table>

                <script>
                    function myFunction() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("myTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[0];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                </script>
                <style>
                    * {
                      box-sizing: border-box;
                    }
                    
                    #myInput {
                      background-image: url('/css/searchicon.png');
                      background-position: 10px 10px;
                      background-repeat: no-repeat;
                      width: 100%;
                      font-size: 16px;
                      padding: 12px 20px 12px 40px;
                      border: 1px solid #ddd;
                      margin-bottom: 12px;
                    }
                    
                    #myTable {
                      border-collapse: collapse;
                      width: 100%;
                      border: 1px solid #ddd;
                      font-size: 18px;
                    }
                    
                    #myTable th, #myTable td {
                      text-align: left;
                      padding: 12px;
                    }
                    
                    #myTable tr {
                      border-bottom: 1px solid #ddd;
                    }
                    
                    #myTable tr.header, #myTable tr:hover {
                      background-color: #f1f1f1;
                    }
                    </style>
            </div>
        </div>
    </div>
@endsection
