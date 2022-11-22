<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body >
    <div class="container mt-5">
        <h3 class="text-success">View IFT /PQ / REOI / RFP Notice Details</h3>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="Ministry" class="form-label">Ministry :</label>
                    <input type="text" class="form-control" id="Ministry" name="Ministry"

                    @if ($formData["ministry"] != "could not retrieve")
                        value="{{$formData["ministry"]}}"
                    @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="Organization" class="form-label" >Organization :</label>
                    <input type="text" class="form-control" id="Organization" name="Organization"
                    @if ($formData["organization"] != "could not retrieve")
                    value="{{$formData["organization"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="ProcuringEntityCode" class="form-label" >Procuring Entity Code :</label>
                    <input type="text" class="form-control" id="ProcuringEntityCode" name="ProcuringEntityCode"
                    @if ($formData["procuringEntityCode"] != "could not retrieve")
                    value="{{$formData["procuringEntityCode"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="ProcurementNature" class="form-label" >Procurement Nature :</label>
                    <input type="text" class="form-control" id="ProcurementNature" name="ProcurementNature"
                    @if ($formData["procurementNature"] != "could not retrieve")
                    value="{{$formData["procurementNature"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="EventType" class="form-label" >Event Type :</label>
                    <input type="text" class="form-control" id="EventType" name="EventType"
                    @if ($formData["eventType"] != "could not retrieve")
                    value="{{$formData["eventType"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="InvitationReferenceNo" class="form-label" >Invitation Reference No. :</label>
                    <input type="text" class="form-control" id="InvitationReferenceNo" name="InvitationReferenceNo"
                    @if ($formData["invitationReferenceNo"] != "could not retrieve")
                    value="{{$formData["invitationReferenceNo"]}}"

                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="AppID" class="form-label" >App ID :</label>
                    <input type="text" class="form-control" id="AppID" name="AppID"
                    @if ($formData["appID"] != "could not retrieve")
                    value="{{$formData["appID"]}}"

                @endif

                    >
                  </div>

            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="Division" class="form-label" >Division :</label>
                    <input type="text" class="form-control" id="Division" name="Division"
                    @if ($formData["division"] != "could not retrieve")
                    value="{{$formData["division"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="ProcuringEntityName" class="form-label" >ProcuringEntityName</label>
                    <input type="text" class="form-control" id="ProcuringEntityName" name="ProcuringEntityName"
                    @if ($formData["procuringEntityName"] != "could not retrieve")
                    value="{{$formData["procuringEntityName"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="ProcuringEntityDistrict" class="form-label" >Procuring Entity District :</label>
                    <input type="text" class="form-control" id="ProcuringEntityDistrict" name="ProcuringEntityDistrict"
                    @if ($formData["procuringEntityDistrict"] != "could not retrieve")
                    value="{{$formData["procuringEntityDistrict"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="ProcurementType" class="form-label" >Procurement Type :</label>
                    <input type="text" class="form-control" id="ProcurementType" name="ProcurementType"
                    @if ($formData["procurementType"] != "could not retrieve")
                    value="{{$formData["procurementType"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="Invitationfor" class="form-label" >Invitation for :</label>
                    <input type="text" class="form-control" id="Invitationfor" name="Invitationfor"
                    @if ($formData["invitationFor"] != "could not retrieve")
                    value="{{$formData["invitationFor"]}}"

                @endif
                    >
                  </div>
                  {{-- <div class="mb-3">
                    <label for="TenderProposalStatus" class="form-label" >TenderProposal Status :</label>
                    <input type="text" class="form-control" id="TenderProposalStatus" name="TenderProposalStatus"
                    @if ($formData["TenderProposalID"] != "could not retrieve")
                    value="{{$formData["TenderProposalID"]}}"

                @endif
                    >
                  </div> --}}
                  <div class="mb-3">
                    <label for="TenderProposalID" class="form-label" >Tender/Proposal ID :</label>
                    <input type="text" class="form-control" id="TenderProposalID" name="TenderProposalID"
                    @if ($formData["TenderProposalID"] != "could not retrieve")
                    value="{{$formData["TenderProposalID"]}}"

                @endif
                    >
                  </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-success">Key Information and Funding Information :</h3>
            {{-- <h1 class="text-center">working...</h1> --}}
            <div class="col-6 mb-5">
                <div class="mb-3">
                    <label for="ProcurementMethod" class="form-label" >Procurement Method : </label>
                    <input type="text" class="form-control" id="ProcurementMethod" name="ProcurementMethod"
                    @if ($formData["procurementMethod"] != "could not retrieve")
                    value="{{$formData["procurementMethod"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="SourceofFunds" class="form-label" >Source of Funds :  </label>
                    <input type="text" class="form-control" id="SourceofFunds" name="SourceofFunds"
                    @if ($formData["sourceOfFunds"] != "could not retrieve")
                    value="{{$formData["sourceOfFunds"]}}"

                @endif
                    >
                  </div>
            </div>

            <div class="col-6 mb-5t">
                <div class="mb-3">
                    <label for="BudgetType" class="form-label" >Budget Type :  </label>
                    <input type="text" class="form-control" id="BudgetType" name="BudgetType"
                    @if ($formData["budgetType"] != "could not retrieve")
                    value="{{$formData["budgetType"]}}"

                @endif
                    >
                  </div>

            </div>
        </div>


        <div class="row">
            <h3 class="text-success">Particular Information :</h3>
            {{-- <h1 class="text-center">working...</h1> --}}
            <div class="col-6 mb-5">
                <div class="mb-3">
                    <label for="ProjectCode" class="form-label" >Project Code :  </label>
                    <input type="text" class="form-control" id="ProjectCode" name="ProjectCode"
                    @if ($formData["projectCode"] != "could not retrieve")
                    value="{{$formData["projectCode"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalPackageNoandDescription" class="form-label" >Tender/Proposal Package
                        No. and Description : </label>
                    <input type="text" class="form-control" id="TenderProposalPackageNoandDescription" name="TenderProposalPackageNoandDescription"
                    @if ($formData["tenderProposalPackageNoAndDescription"] != "could not retrieve")
                    value="{{$formData["tenderProposalPackageNoAndDescription"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="Category" class="form-label" >Category :  </label>
                    <input type="text" class="form-control" id="Category" name="Category"
                    @if ($formData["category"] != "could not retrieve")
                    value="{{$formData["category"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="ScheduledTenderProposalPublicationDateandTime" class="form-label" >Scheduled
                        Tender/Proposal
                        Publication
                        Date and Time : </label>
                    <input type="text" class="form-control" id="ScheduledTenderProposalPublicationDateandTime" name="ScheduledTenderProposalPublicationDateandTime"
                    @if ($formData["scheduledTenderProposalPublicationDateAndTime"] != "could not retrieve")
                    value="{{$formData["scheduledTenderProposalPublicationDateAndTime"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="PreTenderProposalmeetingStartDateandTime" class="form-label" >Pre - Tender/Proposal
                        meeting Start
                        Date and Time :  </label>
                    <input type="text" class="form-control" id="PreTenderProposalmeetingStartDateandTime" name="PreTenderProposalmeetingStartDateandTime"
                    @if ($formData["PreTenderProposalmeetingStartDateandTime"] != "could not retrieve")
                    value="{{$formData["PreTenderProposalmeetingStartDateandTime"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalClosingDateandTime" class="form-label" >Tender/Proposal Closing
                        Date and Time :  </label>
                    <input type="text" class="form-control" id="TenderProposalClosingDateandTime" name="TenderProposalClosingDateandTime"
                    @if ($formData["TenderProposalClosingDateandTime"] != "could not retrieve")
                    value="{{$formData["TenderProposalClosingDateandTime"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="LastDateandTimeforTenderProposalSecuritySubmission" class="form-label" >Last Date and Time for
                        Tender/Proposal Security
                        Submission :  </label>
                    <input type="text" class="form-control" id="LastDateandTimeforTenderProposalSecuritySubmission" name="LastDateandTimeforTenderProposalSecuritySubmission"
                    @if ($formData["LastDateandTimeforTenderProposalSecuritySubmission"] != "could not retrieve")
                    value="{{$formData["LastDateandTimeforTenderProposalSecuritySubmission"]}}"

                @endif
                    >
                  </div>


            </div>

            <div class="col-6 mb-5t">
                <div class="mb-3">
                    <label for="ProjectName" class="form-label" >Project Name :   </label>
                    <input type="text" class="form-control" id="ProjectName" name="ProjectName"
                    @if ($formData["projectName"] != "could not retrieve")
                    value="{{$formData["projectName"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalDocumentlastsellingdownloadingDateandTime" class="form-label" >Tender/Proposal Document
                        last selling /
                        downloading Date and
                        Time :   </label>
                    <input type="text" class="form-control" id="TenderProposalDocumentlastsellingdownloadingDateandTime" name="TenderProposalDocumentlastsellingdownloadingDateandTime"
                    @if ($formData["TenderProposalDocumentlastsellingdownloadingDateandTime"] != "could not retrieve")
                    value="{{$formData["TenderProposalDocumentlastsellingdownloadingDateandTime"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="PreTenderProposalmeetingEndDateandTime" class="form-label" >Pre - Tender/Proposal
                        meeting End
                        Date and Time    </label>
                    <input type="text" class="form-control" id="PreTenderProposalmeetingEndDateandTime" name="PreTenderProposalmeetingEndDateandTime"
                    @if ($formData["PreTenderProposalmeetingEndDateandTime"] != "could not retrieve")
                    value="{{$formData["PreTenderProposalmeetingEndDateandTime"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalOpeningDateandTime" class="form-label" >Tender/Proposal Opening
                        Date and Time    </label>
                    <input type="text" class="form-control" id="TenderProposalOpeningDateandTime" name="TenderProposalOpeningDateandTime"
                    @if ($formData["TenderProposalOpeningDateandTime"] != "could not retrieve")
                    value="{{$formData["TenderProposalOpeningDateandTime"]}}"

                @endif
                    >
                  </div>


            </div>
        </div>

        <h3 class="text-success">View IFT /PQ / REOI / RFP Notice Details</h3>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="EligibilityofTenderer" class="form-label">Eligibility of Tenderer :</label>
                    <input type="text" class="form-control" id="EligibilityofTenderer" name="EligibilityofTenderer"

                    @if ($formData["eligibilityOfTenderer"] != "could not retrieve")
                        value="{{$formData["eligibilityOfTenderer"]}}"
                    @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="BriefDescriptionofGoodsandRelatedService" class="form-label" >Brief Description of Goodsand Related Service :</label>
                    <input type="text" class="form-control" id="BriefDescriptionofGoodsandRelatedService" name="BriefDescriptionofGoodsandRelatedService"
                    @if ($formData["briefDescriptionOfGoods"] != "could not retrieve")
                    value="{{$formData["briefDescriptionOfGoods"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="EvaluationType" class="form-label" >Evaluation Type :</label>
                    <input type="text" class="form-control" id="EvaluationType" name="EvaluationType"
                    @if ($formData["evaluationType"] != "could not retrieve")
                    value="{{$formData["evaluationType"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="DocumentAvailable" class="form-label" >Document Available :</label>
                    <input type="text" class="form-control" id="DocumentAvailable" name="DocumentAvailable"
                    @if ($formData["documentAvailable"] != "could not retrieve")
                    value="{{$formData["documentAvailable"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="DocumentFees" class="form-label" >Document Fees :</label>
                    <input type="text" class="form-control" id="DocumentFees" name="DocumentFees"
                    @if ($formData["documentFees"] != "could not retrieve")
                    value="{{$formData["documentFees"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalDocumentPrice" class="form-label" >Tender/Proposal DocumentPrice (In BDT) :</label>
                    <input type="text" class="form-control" id="TenderProposalDocumentPrice" name="TenderProposalDocumentPrice"
                    @if ($formData["tenderProposalDocumentPrice"] != "could not retrieve")
                    value="{{$formData["tenderProposalDocumentPrice"]}}"

                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="ModeofPayment" class="form-label" >Mode of Payment :</label>
                    <input type="text" class="form-control" id="ModeofPayment" name="ModeofPayment"
                    @if ($formData["modeOfPayment"] != "could not retrieve")
                    value="{{$formData["modeOfPayment"]}}"

                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalSecurityValidUpto" class="form-label" >Tender/Proposal Security Valid Up to :</label>
                    <input type="text" class="form-control" id="TenderProposalSecurityValidUpto" name="TenderProposalSecurityValidUpto"
                    @if ($formData["tenderProposalSecurityValidUpto"] != "could not retrieve")
                    value="{{$formData["tenderProposalSecurityValidUpto"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="TenderProposalValidUpto" class="form-label" >Tender/Proposal Valid Up to</label>
                    <input type="text" class="form-control" id="TenderProposalValidUpto" name="TenderProposalValidUpto"
                    @if ($formData["tenderProposalValidUpto"] != "could not retrieve")
                    value="{{$formData["tenderProposalValidUpto"]}}"

                @endif
                    >
                  </div>
            </div>

        </div>

        <h3 class="text-success">Procuring Entity Details:</h3>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="NameofOfficialInvitingTenderProposal" class="form-label">Name of Official Inviting Tender/Proposal:</label>
                    <input type="text" class="form-control" id="NameofOfficialInvitingTenderProposal" name="NameofOfficialInvitingTenderProposal"

                    @if ($formData["NameofOfficialInvitingTenderProposal"] != "could not retrieve")
                        value="{{$formData["NameofOfficialInvitingTenderProposal"]}}"
                    @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="Address" class="form-label" >Address:</label>
                    <input type="text" class="form-control" id="Address" name="Address"
                    @if ($formData["Address"] != "could not retrieve")
                    value="{{$formData["Address"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="City" class="form-label" >City
                        :</label>
                    <input type="text" class="form-control" id="City" name="City"
                    @if ($formData["City"] != "could not retrieve")
                    value="{{$formData["City"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="Thana" class="form-label" >Thana :</label>
                    <input type="text" class="form-control" id="Thana" name="Thana"
                    @if ($formData["Thana"] != "could not retrieve")
                    value="{{$formData["Thana"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="District" class="form-label" >District :</label>
                    <input type="text" class="form-control" id="District" name="District"
                    @if ($formData["District"] != "could not retrieve")
                    value="{{$formData["District"]}}"
                @endif

                    >
                  </div>
                  <div class="mb-3">
                    <label for="Country" class="form-label" >Country :</label>
                    <input type="text" class="form-control" id="Country" name="Country"
                    @if ($formData["country"] != "could not retrieve")
                    value="{{$formData["country"]}}"

                @endif

                    >
                  </div>

            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="DesignationofOfficialInvitingTenderProposal" class="form-label" >Designation of Official Inviting Tender/Proposal :</label>
                    <input type="text" class="form-control" id="DesignationofOfficialInvitingTenderProposal" name="DesignationofOfficialInvitingTenderProposal"
                    @if ($formData["DesignationofOfficialInvitingTenderProposal"] != "could not retrieve")
                    value="{{$formData["DesignationofOfficialInvitingTenderProposal"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="PhoneNo" class="form-label" >Phone No:</label>
                    <input type="text" class="form-control" id="PhoneNo" name="PhoneNo"
                    @if ($formData["PhoneNo"] != "could not retrieve")
                    value="{{$formData["PhoneNo"]}}"

                @endif
                    >
                  </div>
                  <div class="mb-3">
                    <label for="FaxNo" class="form-label" >Fax No:</label>
                    <input type="text" class="form-control" id="FaxNo" name="FaxNo"
                    @if ($formData["FaxNo"] != "could not retrieve")
                    value="{{$formData["FaxNo"]}}"

                @endif
                    >
                  </div>




            </div>
        </div>


      <table class="table">
        <thead>
            <tr>
                <th>Lot No.</th>
                <th> Identification of Lot </th>
                <th>Location</th>
                <th>Tender/Proposal security (Amount in BDT)</th>
                <th>Tentative Start Date</th>
                <th>Tentative Completion Date</th>
            </tr>

        </thead>
        <tbody>
<tr>
    <td>Lot No.</td>
    <td> Identification of Lot </td>
    <td>Location</td>
    <td>Tender/Proposal security (Amount in BDT)</td>
    <td>Tentative Start Date</td>
    <td>Tentative Completion Date</td>
</tr>
        </tbody>

      </table>


    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
