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









    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
