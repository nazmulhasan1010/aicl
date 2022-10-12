@extends('layouts.admin.app')

@section('title','Expense List')
@push('css')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        .modal-lg {
            max-width: 80% !important;
        }
    </style>

@endpush

@section('content')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Expense List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{ route('admin.expense.index') }}">Expenses</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Expenses List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>Expenses List  <span class="badge bg-info">
                                            {{ $expenses->count() }}        </span></header>

                                            <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">
                                                            Add New <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6">

                                                </div>
                                            </div>
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                    <thead>
                                                    <tr class="center">
                                                        <th>#</th>
                                                        <th> Invoice No </th>
                                                        <th> Date </th>
                                                        <th> Name </th>
                                                        <th> Phone </th>
                                                        <th> Amount </th>
                                                        <th> Action </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($expenses as $key=>$expense)
                                                        <tr class="odd gradeX">

                                                            <td>{{ $key+1 }}</td>
                                                            <td class="left"><a href="{{ route('admin.expense.show',$expense->invoice) }}">{{ $expense->invoice }}</a> </td>
                                                            <td class="left">{{date('d/m/Y', strtotime($expense->date))}}
                                                            </td>


                                                            <td class="left">{{ $expense->username }}</td>
                                                            <td class="left">+880{{ $expense->phone }}</td>
                                                            <td class="left">{{ $expense->total }}</td>
                                                            <td class="center">

                                                                <a href="{{ route('admin.expense.edit',$expense->invoice) }}" class="btn btn-info btn-xs"> <i class="icon-note" id="del_icon"></i></a>



                                                                <button class="btn btn-danger btn-xs"  type="button" onclick="deleteExpense({{ $expense->id }})">
                                                                    <i class="fa fa-trash" id="del_icon"></i>
                                                                </button>
                                                                <form id="delete-form-{{ $expense->id }}" action="{{ route('admin.expense.destroy', $expense->invoice) }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </td>
                                                        </tr>
                                                   @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Add New Modal -->
    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <form action="{{ route('admin.expense.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div  class="form-group">
                                    <label for="datepicker">Date</label>
                                    <input type="text" name="date" value="{{ date('Y-m-d') }}" class="form-control" id="datepicker" autocomplete="off"/>
                                    <script>
                                        //$('#datepicker').datepicker();
                                        $('#datepicker').datepicker({
                                            format: 'yyyy-mm-dd',
                                            autoclose: false,
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name"   class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile"  pattern="[0-9]{11}" class="form-control" placeholder="1234567890">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="text" name="note"   class="form-control" placeholder="Note">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Unit</th>
                                        <th>Quantity</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Payment Type</th>
                                        <th>Amount</th>
                                        <th>Scan Copy</th>
                                        <th><a href="#" class="addRow"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                                    </tr>
                                </thead>
                                <tbody id="customtbl">
                                    <tr>
                                        <td><input type="text" name="rows[0][purpose]" class="form-control" required=""/></td>
                                        <td><input type="text" name="rows[0][unit]" class="form-control" required=""/></td>
                                        <td>
                                            <select name="rows[0][category_id]"  class="form-control">
                                                <option value="0">-- Select Category--</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="rows[0][subcategory_id]"  class="form-control">
                                                <option value="0">-- Select Sub Category--</option>
                                                @foreach($subCategory as $v_sub)
                                                    <option value="{{ $v_sub->id }}">{{ $v_sub->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="rows[0][payment_type]" onchange='PaymentType(this,"0");' class="form-control">
                                                <option value="cash">Cash</option>
                                                <option value="bank">Bank</option>
                                            </select>
                                            <input type="text" name="rows[0][cheque_no]" id="cheque_no_0" class="form-control" placeholder="Enter Cheque No" style='display:none;' value="0"/>
                                        </td>
                                        <td class="totaltd"><input type="text" name="rows[0][amount]" class="form-control budget" onkeyup="javascript:total();" /></td>
                                        <td><input type="file" name="scanfile[]" class="form-control" /></td>
                                        <td><button type="button" class="btn btn-danger btn-sm btn-rect" onclick="javascript:remove25(this);">Close</button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="border: none"></td>
                                        <td style="border: none"></td>
                                        <td style="border: none"></td>
                                        <td style="border: none"></td>
                                        <td>Total</td>
                                        <td><b class="total"></b> </td>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Pay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('js')

    <script type="text/javascript">
        // Payment Method Select
        function PaymentType(val,idval){
            var val = $(val).val();
            if(val=="bank") {
                $("#cheque_no_" + idval).css("display", "block");
            }else {
                $("#cheque_no_" + idval).css("display", "none");
            }
        }

        // Datepicker
        $('#datepickerEdit').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: false
        });

        // Delete with sweetalert
        function deleteExpense(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
    <script type="text/javascript">
        var i75 = 0;
        function total(){
            var total=0;
            $('#customtbl tr').each(function(i,e){
                var amount = parseFloat($(this).find("td.totaltd input").val());
                total +=amount;
            });
            $('.total').html(total+".00 tk");
        }
        $('.addRow').on('click',function(){
            addRow();
        });
        function addRow()
        {
            i75++;
            var tr='<tr>'+
                '<td><input type="text" name="rows['+i75+'][purpose]" class="form-control" required=""></td>'+
                '<td><input type="text" name="rows['+i75+'][unit]" class="form-control" required=""></td>'+
                '<td>'+'<select name="rows['+i75+'][category_id]" onchange=\'PaymentType(this,'+i75+');\' class="form-control">\n' +
                '  <option value="0">-- Select Category--</option>\n'+
                    '@foreach($categories as $category)\n'+
                '<option value="{{ $category->id }}">{{ $category->name }}</option>\n'+
                '@endforeach\n'+
                '</select>' +
                '</td>'+
                '<td>'+'<select name="rows['+i75+'][subcategory_id]" onchange=\'PaymentType(this,'+i75+');\' class="form-control">\n' +
                '  <option value="0">-- Select Category--</option>\n'+
                '@foreach($subCategory as $v_sub)\n'+
                '<option value="{{ $v_sub->id }}">{{ $v_sub->name }}</option>\n'+
                '@endforeach\n'+
                '</select>' +
                '</td>'+
                '<td>'+'<select name="rows['+i75+'][payment_type]" onchange=\'PaymentType(this,'+i75+');\' class="form-control">\n' +
                '   <option value="cash">Cash</option>\n' +
                '   <option value="bank">Bank</option>\n' +
                '   </select>\n' +
                '    <input type=\'text\' name=\'rows['+i75+'][cheque_no]\' id=\'cheque_no_'+i75+'\' class=\'form-control\' placeholder=\'Enter Cheque No\' style=\'display:none;\' value=\'0\' />' +
                '</td>'+
                '<td class="totaltd"><input type="text" name="rows['+i75+'][amount]" class="form-control budget" onkeyup="javascript:total();"></td>'+
                '<td><input type="file" name="scanfile[]" class="form-control"></td>'+
                '<td><button type=\'button\' class=\'btn btn-danger btn-sm btn-rect\' onclick=\'javascript:remove25(this);\'>Close</button></td>'+
                '</tr>';
            $('#customtbl').append(tr);
        };
        function remove25(index){
            //console.log("hello");
            $(index).parent().parent().remove();
        }
    </script>
@endpush
