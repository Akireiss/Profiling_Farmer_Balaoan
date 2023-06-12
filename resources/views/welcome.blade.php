<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/assets/css/farm.css" rel="stylesheet">
  <script src="/resources/script.js"></script>
  <style>
.cutting-line {
  border: none;
  border-top: 2px dashed #000000;
  margin: 20px 0;
}


    body {
      background-color: rgb(255, 255, 255);
    }

    .form-title {
      text-align: left;
      margin-top: 20px;
    }

    .form-image {
      text-align: center;
      margin-top: 20px;
    }

    .form-image img {
      max-width: 100%;
      height: auto;
    }

    .form-section {
      margin-top: 10px;
    }

    .form-border {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
  }


.form-control-line {
  border: none;
  border-bottom: 1px solid #ccc;
  outline: none;
  width: 100%;
  padding: 0.5rem 0;
  font-size: 1rem;
}
  </style>
  <title>Document</title>
</head>

<body>

    <div class="container">
    <div class="card-body">

        <div class="form-border">
        <form>
            <div class="row">
              <div class="col-md-8">

                <h2>ANI AT KITA</h2>
                <h1>RSBSA ENROLLMENT FORM</h1>
                <p>REGISTRY SYSTEM FOR BASIC SECTORS IN AGRICULTURE (RSBSA)</p>
              </div>
              <!-- First Row -->
              <div class="row form-section">
                <div class="enrollment-options">
                  <label for="enrollment">ENROLLMENT:</label>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="enrollment" id="new-enrollment">
                      <label class="form-check-label" for="new-enrollment">
                        New
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="enrollment" id="existing-enrollment">
                      <label class="form-check-label" for="existing-enrollment">
                        Existing
                      </label>
                    </div>
                    </div>
                </div>



                <div class="col-md-2 form-image ">
                  <img src="download.png" alt="Profile Picture" class="img-fluid" height="200" width="200">
                </div>


                <div class="col-md-2  form-image">
                  <label for="photo">2x2 Picture</label>
                  <div class="image-upload-container">
                    <input type="file" class="form-control-file" id="photo" accept="image/*" required onchange="previewPhoto(event)">
                    <div class="image-placeholder">
                      <img id="preview" src="#" alt="Choose Photo" style="max-width: 100%; max-height: 100%;">
                    </div>
                  </div>
                  <small class="form-text text-muted">Photo taken within the last 6 months.</small>
                </div>



            </div>

            <!-- End of Form -->


            <!-- Signature-->
            <div class="col-md-6 col-lg-6 mt-5">
              <label for="reference-no" class="font-italic">Reference/Control No:</label>
              <input type="text" class="form-control-line" id="reference-no" placeholder="Reference/Control No" name="reference-no" required>
            </div>
            <!-- End -->

              <hr class="my-1">
              <h6>PART I. Personal Information</h6>
              <hr class="my-1">

          <div class="row form-section">
            <div class="col-md-6 mb-3">
              <label for="surname"></label>
              <input type="text" class="form-control-line" placeholder="Surname" name="surname" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="firstname"></label>
              <input type="text" class="form-control-line" placeholder="Firstname" name="firstname" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="middlename"></label>
              <input type="text" class="form-control-line" placeholder="Middlename" name="middlename" required>
            </div>

            <div class="col-md-3 mb-3">
              <label for="extensionname"></label>
              <input type="text" class="form-control-line" placeholder="Extension name" name="extensionname" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="sex">Sex</label>
                <div class="d-flex flex-wrap">
                  <div class="form-check mr-3">
                    <input class="form-check-input" type="radio" name="sex" id="male" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="female" value="female" required>
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="house">House/Lot/BLDG No.</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>

              <div class="col-md-4 mb-3">
                <label for="street">Street/Sitio/Subdv.</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>

              <div class="col-md-4 mb-3">
                <label for="brgy">Barangay</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>

              <div class="col-md-4 mb-3">
                <label for="municipality">Municipality</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>

              <div class="col-md-4 mb-3">
                <label for="province">Province</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>

              <div class="col-md-4 mb-3">
                <label for="region">Region</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>

            <div class="col-md-4 mb-3">
              <label for="number">Contact Number</label>
              <input type="number" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="dob">Date of Birth</label>
                <div class="input-group">
                  <input type="date" class="form-control" id="dob" name="dob" required>
                  <div class="input-group-append">
                    <span><i class="bi bi-calendar3"></i></span>
                  </div>
                </div>
              </div>

            <div class="col-md-4 mb-3">
                <label for="education">Highest Formal Education:</label>
                <div class="d-flex justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="education" id="none" value="none">
                    <label class="form-check-label" for="none">None</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="education" id="elem" value="elem">
                    <label class="form-check-label" for="elem">Elementary</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="education" id="highschool" value="highschool">
                    <label class="form-check-label" for="highschool">High School</label>
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="education" id="vocational" value="vocational">
                    <label class="form-check-label" for="vocational">Vocational</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="education" id="college" value="college">
                    <label class="form-check-label" for="college">College</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="education" id="postgraduate" value="postgraduate">
                    <label class="form-check-label" for="postgraduate">Post Graduate</label>
                  </div>
                </div>
              </div>

            <div class="col-md-4 mb-3">
              <label for="birth"></label>
              <input type="text" class="form-control-line" placeholder="Place of Birth" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="religion"></label>
              <input type="text" class="form-control-line" placeholder="Place of Birth"  required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="PWD">Person with Disability (PWD)</label>
              <div class="d-flex flex-wrap">
                <div class="form-check mr-3">
                  <input class="form-check-input" type="radio" name="PWD" id="pwd-yes" value="yes" required>
                  <label class="form-check-label" for="pwd-yes">Yes</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="PWD" id="pwd-no" value="no" required>
                  <label class="form-check-label" for="pwd-no">No</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="education">Civil Status:</label>
              <div class="d-flex flex-wrap">
                <div class="form-check flex-fill">
                  <input class="form-check-input" type="radio" name="education" id="single" value="single">
                  <label class="form-check-label" for="single">Single</label>
                </div>
                <div class="form-check flex-fill">
                  <input class="form-check-input" type="radio" name="education" id="married" value="married">
                  <label class="form-check-label" for="married">Married</label>
                </div>
              </div>
              <div class="d-flex flex-wrap">
                <div class="form-check flex-fill">
                  <input class="form-check-input" type="radio" name="education" id="widowed" value="widowed">
                  <label class="form-check-label" for="widowed">Widowed</label>
                </div>
                <div class="form-check flex-fill">
                  <input class="form-check-input" type="radio" name="education" id="separated" value="separated">
                  <label class="form-check-label" for="separated">Separated</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="name">Name of Spouse if Married</label>
              <input type="text" class="form-control-line" placeholder="" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="4ps">4P's Beneficiary</label>
              <div class="d-flex flex-wrap">
                  <div class="form-check mr-3">
                      <input class="form-check-input" type="radio" name="4ps" id="4ps-yes" value="yes" required>
                      <label class="form-check-label" for="4ps-yes">Yes</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="4ps" id="4ps-no" value="no" required>
                      <label class="form-check-label" for="4ps-no">No</label>
                  </div>
              </div>
          </div>

            <div class="col-md-4 mb-3">
              <label for="name">Mothers Maiden Name</label>
              <input type="text" class="form-control-line" placeholder="" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="member">Member of Indigenous Group</label>
              <div class="d-flex flex-wrap">
                <div class="form-check mr-3">
                  <input class="form-check-input" type="radio" name="member" id="member-yes" value="yes" required>
                  <label class="form-check-label" for="member-yes">Yes</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="member" id="member-no" value="no" required>
                  <label class="form-check-label" for="member-no">No</label>
                </div>
              </div>
              <div id="beneficiary-details" style="margin-top: 10px;">
                <label for="beneficiary-specify">If yes, specify:</label>
                <input type="text" class="form-control-line" name="beneficiary-specify" id="beneficiary-specify">
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="government-id">With Government ID</label>
              <div class="d-flex flex-wrap">
                <div class="form-check mr-3">
                  <input class="form-check-input" type="radio" name="government-id" id="government-id-yes" value="yes" required>
                  <label class="form-check-label" for="government-id-yes">Yes</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="government-id" id="government-id-no" value="no" required>
                  <label class="form-check-label" for="government-id-no">No</label>
                </div>
              </div>
              <div id="government-id" style="margin-top: 10px;">
                <label for="government-id">If yes, specify:</label>
                <input type="text" class="form-control-line" name="government-id" id="government-id">
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <label for="member">Household held:</label>
              <div class="d-flex">
                <div class="form-check mr-3">
                  <input class="form-check-input" type="radio" name="member" id="member-yes" value="yes" required>
                  <label class="form-check-label" for="member-yes">Yes</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="member" id="member-no" value="no" required>
                  <label class="form-check-label" for="member-no">No</label>
                </div>
              </div>

              <div id="household-details" style="margin-top: 10px;">
                <div class="d-flex">
                  <div class="mb-3 mr-3">
                    <label for="household-name">If no, name of household held</label>
                    <input type="text" name="household-name"  id="household-name">
                  </div>
                  <div class="mb-3 mr-3">
                    <label for="relationship">Relationship</label>
                    <input type="text" name="relationship"  id="relationship">
                  </div>
                  <div class="mb-3">
                    <label for="living-members">No. of Living Household member</label>
                    <input type="number" name="living-members" id="living-members">
                  </div>
                </div>

                <div class="d-flex">
                  <div class="mb-3 mr-3">
                    <label for="male-members">No of Male:</label>
                    <input type="number"  class="form-control-line" name="male-members"  id="male-members">
                  </div>
                  <div class="mb-3 mr-3">
                    <label for="female-members">No. of Female</label>
                    <input type="number"  class="form-control-line" name="female-members"  id="female-members">
                  </div>
                </div>
              </div>
            </div>

          <div class="col-md-5 mb-3">
            <label for="member">Member of any Farmers Association/Cooperative</label>
            <div class="d-flex flex-wrap">
              <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="member" id="member-yes" value="yes" required>
                <label class="form-check-label" for="member-yes">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="member" id="member-no" value="no" required>
                <label class="form-check-label" for="member-no">No</label>
              </div>
            </div>
            <div id="member" style="margin-top: 10px;">
              <label for="member-specify">If yes, specify:</label>
              <input type="text" class="form-control-line" name="member-specify" id="member-specify">
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="emergency-name">Person to Notify in case of emergency</label>
            <input type="text" class="form-control-line" name="emergency-name" id="emergency-name" required>

            <label for="emergency-contact">Contact number</label>
            <input type="text" class="form-control-line"" name="emergency-contact" id="emergency-contact" required>
        </div>

        </div>
        <hr class="my-1">
        <h6>PART II. Farmers Profile</h6>
        <hr class="my-1">

        <div class="col-md-7 mb-3">
          <label for="education" class="d-flex justify-content-between">Highest Formal Education:
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="education" id="none" value="none">
              <label class="form-check-label" for="none">None</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="education" id="elem" value="elem">
              <label class="form-check-label" for="elem">Elementary</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="education" id="highschool" value="highschool">
              <label class="form-check-label" for="highschool">High School</label>
            </div>
          </label>
        </div>
        <hr>

        <div class="row form-section">
        <div class="col-md-4 mb-3">
          <center><h6><label for="farming-activity">For Farmers:</label></h6></center>
          <p class="fs-6">Type of Farming Activity</p>
          <div class="d-flex flex-column">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-activity" id="rice" value="rice">
              <label class="form-check-label" for="rice">Rice</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-activity" id="corn" value="corn">
              <label class="form-check-label" for="corn">Corn</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-activity" id="other-crops" value="other-crops">
              <label class="form-check-label" for="other-crops">Other crops, please specify</label>
              <input type="text" class="form-control-line" name="other-crops-specify" id="other-crops-specify">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-activity" id="livestock" value="livestock">
              <label class="form-check-label" for="livestock">Livestock, please specify</label>
              <input type="text" class="form-control-line" name="livestock-specify" id="livestock-specify">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-activity" id="poultry" value="poultry">
              <label class="form-check-label" for="poultry">Poultry, please specify</label>
              <input type="text" class="form-control-line" name="poultry-specify" id="poultry-specify">
            </div>
          </div>
        </div>


        <div class="col-md-4 mb-3">
          <center><h6><label for="farming-work">For Farmworkers:</label></h6></center>
          <p class="fs-6">Kind of Work</p>
          <div class="d-flex flex-column">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-work" id="land-preparation" value="land-preparation">
              <label class="form-check-label" for="land-preparation">Land Preparation</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-work" id="planting" value="planting">
              <label class="form-check-label" for="planting">Planting/Transplanting</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-work" id="cultivation" value="cultivation">
              <label class="form-check-label" for="cultivation">Cultivation</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-work" id="harvesting" value="harvesting">
              <label class="form-check-label" for="harvesting">Harvesting</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="farming-work" id="others" value="others">
              <label class="form-check-label" for="others">Others, please specify</label>
              <input type="text" class="form-control-line" name="others-specify" id="others-specify">
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <center><h6><label for="farming-activity">For Fisherfolk:</label></h6></center>
          <p class="fs-6 text-justify">The Lending Condult shall coordinate with the Bureau of Fisheries and Aquatic Resources (BFAR). In the issuance of a certification that the Fisherfolk-borrower under PUNLA/PLEA is registered under the Municipal Fisherfolk Registration (FishR).</p>
          <p class="fs-6 text-justify">Type of Fishing Activity</p>
          <div class="d-flex flex-column">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fishing-activity" id="fish-capture" value="fish-capture">
              <label class="form-check-label" for="fish-capture">Fish Capture</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fishing-activity" id="fish-processing" value="fish-processing">
              <label class="form-check-label" for="fish-processing">Fish Processing</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fishing-activity" id="aquaculture" value="aquaculture">
              <label class="form-check-label" for="aquaculture">Aquaculture</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fishing-activity" id="fish-vending" value="fish-vending">
              <label class="form-check-label" for="fish-vending">Fish Vending</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fishing-activity" id="gleaning" value="gleaning">
              <label class="form-check-label" for="gleaning">Gleaning</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fishing-activity" id="others" value="others">
              <label class="form-check-label" for="others">Others, please specify</label>
              <input type="text" class="form-control-line" name="others-specify" id="others-specify">
            </div>
          </div>
        </div>
      </div>

<hr>
        <div class="col-md-7 mb-3">
          <label for="education" class="d-flex justify-content-between">Gross Annual Income Last Year:
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="education" id="farming-income" value="farming">
              <label class="form-check-label" for="farming-income">Farming</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="education" id="non-farming-income" value="non-farming">
              <label class="form-check-label" for="non-farming-income">Non-Farming</label>
            </div>
          </label>
        </div>
<hr>

<hr class="cutting-line">
        <div class="col-lg-12 mb-3">
          <center><h6><label for="farming-activity">Registry System for Basic Sectors In Agriculture</label></h6></center>
          <center><h6><label for="farming-activity">(RSBSA)ENROLLMENT CLIENT'S COPY</label></h6></center>

          <div class="col-md-6 col-lg-4 mt-5">
            <div style="display: flex; flex-direction: row;">
              <label for="reference-no" class="font-italic" style="margin-right: 10px;">Reference/Control No:</label>
              <input type="text" class="form-control-line" id="reference-no" placeholder="Reference/Control No" name="reference-no" required>
            </div>
          </div>


          <div class="row form-section mt-5">
            <div class="col-md-6 mb-3">
              <label for="surname">Surname</label>
              <input type="text" class="form-control-line" placeholder="Surname" name="surname" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="firstname">Firstname</label>
              <input type="text" class="form-control-line" placeholder="Firstname" name="firstname" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="middlename">Middlename</label>
              <input type="text" class="form-control-line" placeholder="Middlename" name="middlename" required>
            </div>

            <div class="col-md-3 mb-3">
              <label for="extensionname">Extension name</label>
              <input type="text" class="form-control-line" placeholder="Extensionname" name="extensionname" required>
            </div>
          </div>
           </div>

          <div class="form-section">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

</div>
</div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
