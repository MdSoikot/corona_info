@extends('layouts.main')

@section('header-style')
    <style>
        .blog-side-item {
            padding: 10px;
            box-shadow: 0px 0px 6px -2px #ccc;
            cursor: pointer;
        }
        .active {
            box-shadow: 0px 0px 6px -2px #FF6A40;
        }
    </style>
@endsection

@section('content')
    
<div class="page-title-area title-bg-five">
  <div class="title-shape">
      <img src="assets/img/title/title-bg-shape.png" alt="Shape">
  </div>
  <div class="d-table">
      <div class="d-table-cell">
          <div class="container">
              <div class="title-content">
                  <h2>Contact</h2>
                  <ul>
                      <li>
                          <a href="index.html">Home</a>
                      </li>
                      <li>
                          <i class='bx bx-chevron-right'></i>
                      </li>
                      <li>
                          <span>Contact</span>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Page Title -->

<!-- Contact -->
<div class="contact-area pt-100 pb-70">
  <div class="contact-shape">
      <img src="assets/img/contact-shape.png" alt="Shape">
  </div>
  <div class="container">
      <div class="row align-items-center">

          <div class="col-lg-12">
              <div class="section-title">
                  <h2>Get The Ambulance</h2>
              </div>
                <form id="orderAmbulanceForm" action="{{route('ambulance-rent.store')}}" method="POST">
                  @csrf
                  <div class="row">

                      <div class="col-lg-6">
                          <div class="form-group">
                            <select name="district" id="district" class="form-control" onchange="getAmbulance(this)">
                                <option value="">Select District</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Shariatpur">Shariatpur</option>
                            </select>
                          </div>
                          <div class="help-block with-errors text-danger" id="district-err"></div>
                          <input type="hidden" id="ambulance_id" name="ambulance_id" value="">
                      </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="area" id="area" class="form-control" placeholder="Area"  data-error="Please enter your Area">
                                <div class="help-block with-errors text-danger" id="area-err"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row" id="ambulance-list">
                                
                            </div>
                        </div>
                      
                      <div class="col-lg-12">
                        <div class="help-block with-errors text-danger" id="error-message"></div>
                          <button type="button" onclick="submitForm(this)" class="btn common-btn">
                            Get The Ambulance
                          </button>
                          {{-- <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div> --}}
                      </div>

                  </div>
              </form>
          </div>

      </div>
  </div>
</div>
<!-- End Contact -->




@endsection

@section('footer-script')
    <script>
        function getAmbulance(e){
            $.ajax({
                type: "GET",
                url: "/ambulance/"+e.value,
                success: function (response) {
                    let ambulanceList = '';

                    response.ambulances.map(ambulance=>{
                        ambulanceList += `
                                <div class="col-lg-4">
                                    <div class="blog-side-item" id="am-${ambulance.id}" onclick="setAmbulanceId(${ambulance.id})">
                                        <ul class="align-items-center">
                                            <li>
                                                <a href="#">
                                                    <img src="assets/img/blog/blog-side1.jpg" alt="Blog">
                                                </a>
                                            </li>
                                            <li>
                                                <h4>
                                                    <a href="#">${ambulance.name}</a>
                                                </h4>
                                                <p>Driver : ${ambulance.driver_name}</p>
                                                <p>Phone: ${ambulance.driver_phone}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>       
                        `
                    })

                    $('#ambulance-list').html(ambulanceList)

                }
            })
        }

        function setAmbulanceId(id) {
            $('#ambulance_id').val(id)
            $('.blog-side-item').removeClass('active')
            $('#am-'+id).addClass('active')
            
        }

        function submitForm(e) {
            let district = $('#district').val()
            let area = $('#area').val()
            let ambulance_id =  $('#ambulance_id').val()

            if (district =='') {
                $('#district-err').html('Select Your District')
                return false;
            }
            else if(area == ''){
                $('#area-err').html('Enter Your Area')
                return false;
            }
            else if(ambulance_id == ''){
                $('#error-message').html('Select Any Ambulance')
                return false;
            }
            else{
                $('#orderAmbulanceForm').submit()
            }
        }

    </script>
@endsection