@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 10px;
  border-radius: 8px;
  font-size: 15px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
@endsection
@section('subheader')

@endsection
@section('content')
    <div class="d-flex flex-column-fluid">
        <div class="container ">
            {{-- @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif --}}

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
        @endif
    <!--begin::Row-->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-custom" style="background:#E2F3FE;">
                <div class="card-body">
                    <h3 class="card-title">
                        Create Invoice
                    </h3>
                </div>


                <!--begin::Form-->
                <form class="form" action="{{url('invoice_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="from">From</label>
                                    <textarea name="from" id="summernote" cols="4" rows="4" class="form-control" placeholder="Your Name or Company and Address"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="upload-btn-wrapper" style="margin-top: 45px;">
                                    <div class="form-group">
                                        <button class="btn">Upload a Logo</button>
                                        <input type="file" name="image"  onchange="document.getElementById('photo').src=window.URL.createObjectURL(this.files[0])"/>
                                    </div>
                                </div>
                                <div class="">
                                    <img src="" alt="" id="photo" width="100px;">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="from">Bill To</label>
                                    <textarea name="bill_to" id="billto"  cols="4" rows="4" class="form-control" placeholder="Your Customer Billing Address"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Invoice #</label>
                                <input type="text" name="invoice_no" class="form-control" placeholder="100">
                                <label for="">Invoice Date</label>
                                <input type="date" name="invoice_date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="from">Ship To</label>
                                <textarea name="ship_to" id="shipto" cols="4" rows="4" class="form-control" placeholder="Your Customer Shipping Address (Optional)"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Track #</label>
                                <input type="text" name="track_no" class="form-control" value="{{$data->track_id}}">
                                <label for="">Due Date</label>
                                <input type="date" name="due_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                      <th><input class='check_all' type='checkbox' onclick="select_all()"/></th>
                                      <th>S. No</th>
                                      <th>Country Name</th>
                                      <th>Country code</th>
                                    </tr>
                                    <tr>
                                      <td><input type='checkbox' class='chkbox'/></td>
                                      <td><span id='sn'>1.</span></td>
                                      <td><input class="form-control autocomplete_txt" type='text' data-type="countryname" id='countryname_1' name='countryname[]'/></td>
                                      <td><input class="form-control autocomplete_txt" type='text' data-type="country_code" id='country_code_1' name='country_code[]'/> </td>
                                    </tr>
                                </table>
                                    <button type="button" class='btn btn-danger delete'>- Delete</button>
                                    <button type="button" class='btn btn-success addbtn'>+ Add More</button>
                            </div>
                        </div>
                  

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="from">Terms & Conditions</label>
                                <textarea name="term" id="terms" cols="4" rows="4" class="form-control">Payment is due within 15 days</textarea>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Track #</label>
                                <input type="text" name="track" class="form-control">
                                <label for="">Due Date</label>
                                <input type="date" name="date" class="form-control">
                                </div>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->
        </div>
    </div>
@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    @if(Session::has('customer'))
        toastr.success("{{ Session::get('customer') }}");
    @endif
</script>
<script>
    @if(Session::has('pass_error'))
        toastr.error("{{ Session::get('pass_error') }}");
    @endif
</script>
<script>
      $('#summernote').summernote({
        placeholder: 'Your Name or Company and Address',
        tabsize: 2,
        height: 100
      });
</script>
<script>
      $('#billto').summernote({
        placeholder: 'Your Customer Billing Address',
        tabsize: 2,
        height: 100
      });
</script>
<script>
      $('#shipto').summernote({
        placeholder: 'Your Customer Shipping Address (Optional)',
        tabsize: 2,
        height: 100
      });
</script>
<script>
      $('#terms').summernote({
        placeholder: 'Payment is due within 15 days',
        tabsize: 2,
        height: 100
      });
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
          
 $(".delete").on('click', function() {
  $('.chkbox:checkbox:checked').parents("tr").remove();
  $('.check_all').prop("checked", false); 
  updateSerialNo();
});
var i=$('table tr').length;
$(".addbtn").on('click',function(){
  count=$('table tr').length;
  
    var data="<tr><td><input type='checkbox' class='chkbox'/></td>";
      data+="<td><span id='sn"+i+"'>"+count+".</span></td>";
      data+="<td><input class='form-control autocomplete_txt' type='text' data-type='countryname' id='countryname_"+i+"' name='countryname[]'/></td>";
      data+="<td><input class='form-control autocomplete_txt' type='text' data-type='country_code' id='country_code_"+i+"' name='country_code[]'/></td></tr>";
  $('table').append(data);
  i++;
});
        
function select_all() {
  $('input[class=chkbox]:checkbox').each(function(){ 
    if($('input[class=check_all]:checkbox:checked').length == 0){ 
      $(this).prop("checked", false); 
    } else {
      $(this).prop("checked", true); 
    } 
  });
}
function updateSerialNo(){
  obj=$('table tr').find('span');
  $.each( obj, function( key, value ) {
    id=value.id;
    $('#'+id).html(key+1);
  });
}
//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
  type = $(this).data('type');
  
  if(type =='countryname' )autoType='name'; 
  if(type =='country_code' )autoType='sortname'; 
  
   $(this).autocomplete({
       minLength: 0,
       source: function( request, response ) {
            $.ajax({
                url: "{{ route('searchajax') }}",
                dataType: "json",
                data: {
                    term : request.term,
                    type : type,
                },
                success: function(data) {
                    var array = $.map(data, function (item) {
                       return {
                           label: item[autoType],
                           value: item[autoType],
                           data : item
                       }
                   });
                    response(array)
                }
            });
       },
       select: function( event, ui ) {
           var data = ui.item.data;           
           id_arr = $(this).attr('id');
           id = id_arr.split("_");
           elementId = id[id.length-1];
           $('#countryname_'+elementId).val(data.name);
           $('#country_code_'+elementId).val(data.sortname);
       }
   });
   
   
});
</script>

@endsection
