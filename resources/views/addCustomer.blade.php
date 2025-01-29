@extends('layouts.admin.master')

@section('title', 'Gills Lab -2025 Add Customer Page')
@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Add Customer
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
           

            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Client Whatapp Key </h4>
                    <form class="form-sample" id="appKeyForm">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Api Key</label>
                            <div class="col-sm-9">
                              <input type="text" name="apiKey" id="apiKey" value="{{$api_key[0]->key}}" placeholder="Enter Api Key" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                           
                            <div class="col-sm-9">
                            @if(!empty($api_key[0]->key))
                                <button type="button" id="saveBtn" class="btn btn-gradient-success btn-rounded btn-fw">Save Changes</button>
                            @else  
                            <button type="button" id="saveBtn" class="btn btn-gradient-success btn-rounded btn-fw">Save Changes</button> 
                            @endif
                           
                          </div>
                          </div>
                        </div>
                      </div>
                     

                        
                    </form>
                  </div>
                </div>
              </div>

          
           
          
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
      $('#saveBtn').click(function(){
          let apiKey=$('#apiKey').val();

          $.ajax({
              url:"{{route('store.api.key')}}",
              type:"POST",
              data:{
                    _token:"{{csrf_token()}}",
                    api_key:apiKey,
                    },
              success:function(response){
                   
                      if(response.status){
                        Swal.fire({
                              title: response.message,
                              showClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeInUp
                                  animate__faster
                                `
                              },
                              hideClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeOutDown
                                  animate__faster
                                `
                              }
                            });
                      }else{
                        Swal.fire({
                              title: response.message,
                              showClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeInUp
                                  animate__faster
                                `
                              },
                              hideClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeOutDown
                                  animate__faster
                                `
                              }
                            });
                      }
                     
                    },
              error:function(xhr){
                    console.log(xhr.status);
                    if(xhr.status==422){

                    }

                    // alert("An Error Occured"+ xhr.responseText);
                    }            

          });
      });

      $('#updateBtn').click(function(){
          let apiKey=$('#apiKey').val();

          $.ajax({
              url:"{{route('update.api.key')}}",
              type:"POST",
              data:{
                    _token:"{{csrf_token()}}",
                    api_key:apiKey,
                    },
              success:function(response){
                   
                      if(response.status){
                        Swal.fire({
                              title: response.message,
                              showClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeInUp
                                  animate__faster
                                `
                              },
                              hideClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeOutDown
                                  animate__faster
                                `
                              }
                            });
                      }else{
                        Swal.fire({
                              title: response.message,
                              showClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeInUp
                                  animate__faster
                                `
                              },
                              hideClass: {
                                popup: `
                                  animate__animated
                                  animate__fadeOutDown
                                  animate__faster
                                `
                              }
                            });
                      }
                     
                    },
              error:function(xhr){
                    console.log(xhr.status);
                    if(xhr.status==422){

                    }

                    // alert("An Error Occured"+ xhr.responseText);
                    }            

          });
      });

      
  });
</script>  
@endsection          