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
                    <h4 class="card-title">Client Information Entry Form</h4>
                    <form class="form-sample">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Client Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="depname" id="depname" placeholder="Enter Client Name" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Client Address</label>
                            <div class="col-sm-9">
                              <textarea rows="" cols="" name="depadd" id="depadd" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="state" id="state">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="city" id="city">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Other City</label>
                            <div class="col-sm-9">
                              <input type="text" name="ancity" id="ancity" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Retailer</label>
                            <div class="col-sm-9">
                              <input type="text" name="retailer" id="retailer" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Supplier  </label>
                            <div class="col-sm-9">
                              <input type="text" name="supplier" id="supplier" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Depositor Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="depositor" id="depositor" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                              <input type="text" name="mobile" id="mobile" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email ID</label>
                            <div class="col-sm-9">
                              <input type="text" name="email" id="email" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">PAN Number :
                              </label>
                            <div class="col-sm-9">
                              <input type="text" name="panno" id="panno" class="form-control" />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">TAN Number :
                              </label>
                            <div class="col-sm-9">
                              <input type="text" name="tanno" id="tanno" class="form-control" />
                            </div>
                          </div>
                        </div>
                        
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">GST Number :
                              </label>
                            <div class="col-sm-9">
                              <input type="text" name="gstno" id="gstno" class="form-control" />
                            </div>
                          </div>
                        </div>

                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-md-6">
                        <h4 class="card-title">Diamond Jewellery:</h4>
                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat1" value="0.01-0.28" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate1" value="100" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/pc</label>
                            </div>
                          </div>


                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat2" value="0.29-Above" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate2" value="400" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/ct</label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                        <h4 class="card-title">Solitare Diamond Jewellery:</h4>
                        <div class="form-group row">
                           
                           <div class="col-sm-5">
                             <input type="text" name="carat3" value="0.20-0.99" class="form-control" />
                           </div>
                           <div class="col-sm-4">
                             <input type="text" name="rate3" value="450" class="form-control" />
                           </div>
                           <div class="col-sm-3">
                           <label class="col-sm-12 col-form-label">p/pc</label>
                           </div>
                         </div>
                        
                         <div class="form-group row">
                           
                           <div class="col-sm-5">
                             <input type="text" name="carat4" value="1.00-Above" class="form-control" />
                           </div>
                           <div class="col-sm-4">
                             <input type="text" name="rate4" value="450" class="form-control" />
                           </div>
                           <div class="col-sm-3">
                           <label class="col-sm-12 col-form-label">p/ct</label>
                           </div>
                         </div>

                      </div>

                      <hr>  
                      <div class="row">
                        <div class="col-md-6">
                        <h4 class="card-title">Diamond Grading:</h4>
                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat5" value="0.01-1.00" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate5" value="500" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/ct</label>
                            </div>
                          </div>


                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat6" value="1.01-Above" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate6" value="550" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/ct</label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                        <h4 class="card-title">Solitaire Diamond Grading: </h4>
                        <div class="form-group row">
                           
                           <div class="col-sm-5">
                             <input type="text" name="carat7" value="0.20-0.59" class="form-control" />
                           </div>
                           <div class="col-sm-4">
                             <input type="text" name="rate7" value="550" class="form-control" />
                           </div>
                           <div class="col-sm-3">
                           <label class="col-sm-12 col-form-label">p/pc</label>
                           </div>
                         </div>
                        
                         <div class="form-group row">
                           
                           <div class="col-sm-5">
                             <input type="text" name="carat8" value="0.60-Above" class="form-control" />
                           </div>
                           <div class="col-sm-4">
                             <input type="text" name="rate8" value="950"class="form-control" />
                           </div>
                           <div class="col-sm-3">
                           <label class="col-sm-12 col-form-label">p/ct</label>
                           </div>
                         </div>

                      </div>
                       
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                        <h4 class="card-title">Gemstones-Loose&Studded:</h4>
                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat9" value="0.01-1.99" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate9" value="225" class="form-control" />
                              
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/pc</label>
                              <!-- <input type="text" value="p/pc" readonly class="form-control" /> -->
                            </div>
                          </div>


                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat10" value="2.00-4.99" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate10" value="325" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/pc</label>
                            </div>
                          </div>

                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text" name="carat11" value="5.00-9.99" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate11" value="525" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/pc</label>
                            </div>
                          </div>

                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                              <input type="text"  name="carat12" value="10.00-Above" class="form-control" />
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="rate12" value="100" class="form-control" />
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-12 col-form-label">p/ct</label>
                            </div>
                          </div>

                        </div>
                        
                        <div class="col-md-6">
                          <h4 class="card-title">CVD Check: </h4>
                            <div class="form-group row">
                              
                                <div class="col-sm-5">
                                  <input type="text" name="carat14" value="0.03-0.07" class="form-control" />
                                </div>
                                <div class="col-sm-4">
                                  <input type="text"  name="rate14" value="1500" class="form-control" />
                                </div>
                                <div class="col-sm-3">
                                <label class="col-sm-12 col-form-label">p/ct</label>
                                </div>
                            </div>
                        
                              <div class="form-group row">
                                
                                <div class="col-sm-5">
                                  <input type="text" name="carat15" value="0.08-0.99" class="form-control" />
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" name="rate15" value="250" class="form-control" />
                                </div>
                                <div class="col-sm-3">
                                 <label class="col-sm-12 col-form-label">p/pc</label>
                                </div>
                              </div>


                              <div class="form-group row">
                                
                                <div class="col-sm-5">
                                  <input type="text" name="carat16" value="1.00-Above" class="form-control" />
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" name="rate16" value="500" class="form-control" />
                                </div>
                                <div class="col-sm-3">
                                 <label class="col-sm-12 col-form-label">p/pc</label>
                                </div>
                              </div>

                              <hr>
                              <h4 class="card-title">Uncut Jewellery: </h4>
                            <div class="form-group row">
                              
                                <div class="col-sm-5">
                                  <input type="text" name="carat17" value="0.01-5.00" class="form-control" />
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" name="rate17" value="200" class="form-control" />
                                </div>
                                <div class="col-sm-3">
                                <label class="col-sm-12 col-form-label">p/pc</label>
                                </div>
                            </div>
                        
                              <div class="form-group row">
                                
                                <div class="col-sm-5">
                                  <input type="text" name="carat18" value="5.00-Above" class="form-control" />
                                </div>
                                <div class="col-sm-4">
                                  <input type="text" name="rate18" value="25" class="form-control" />
                                </div>
                                <div class="col-sm-3">
                                <label class="col-sm-12 col-form-label">p/pt</label>
                                </div>
                              </div>

                        </div>

                        
                    </form>
                  </div>
                </div>
              </div>

            <!-- <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Assignee </th>
                            <th> Subject </th>
                            <th> Status </th>
                            <th> Last Update </th>
                            <th> Tracking ID </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                            </td>
                            <td> Fund is not recieved </td>
                            <td>
                              <label class="badge badge-gradient-success">DONE</label>
                            </td>
                            <td> Dec 5, 2017 </td>
                            <td> WD-12345 </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                            </td>
                            <td> High loading time </td>
                            <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td>
                            <td> Dec 12, 2017 </td>
                            <td> WD-12346 </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                            </td>
                            <td> Website down for one week </td>
                            <td>
                              <label class="badge badge-gradient-info">ON HOLD</label>
                            </td>
                            <td> Dec 16, 2017 </td>
                            <td> WD-12347 </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                            </td>
                            <td> Loosing control on server </td>
                            <td>
                              <label class="badge badge-gradient-danger">REJECTED</label>
                            </td>
                            <td> Dec 3, 2017 </td>
                            <td> WD-12348 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
           
          
</div>
@endsection          