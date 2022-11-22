<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class FileController extends Controller
{


public function stringGetIndex($html,$needle) {

$lastPos = 0;
$positions = array();

while (($lastPos = strpos($html, $needle, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($needle);
}

// Displays 3 and 10

// foreach ($positions as $value) {
//     echo substr($html,$value,strlen($needle));
//     echo $value ."<br />";
// }
if(!count($positions)) {
    return [-1 , -1];
}

return [$positions[0],$positions[0] + strlen($needle)];

}

public function getSubStr($text,$first_index,$last_index) {

    if($first_index == -1 || $last_index == -1) {
        return "could not retrieve";
    }
if($last_index - $first_index == 0) {
 return "";
}

   return substr($text,$first_index,$last_index - $first_index);



    }







    public function store(Request $request) {

        $file = $request->file;

        $request->validate([
            'file' => 'required|mimes:pdf',
        ]);

        // use of pdf parser to read content from pdf
        $fileName = $file->getClientOriginalName();

        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($file->path());
        $content = $pdf->getText();


        $text = "";
        $datas1 = $pdf->getPages()[0]->getDataTm();
        foreach($datas1 as $data1) {
            $text .= $data1[1] ;
        }
        if(!empty($pdf->getPages()[1])) {
        $datas2 = $pdf->getPages()[1]->getDataTm();
        foreach($datas2 as $data2) {
            $text .= $data2[1] ;
        }
        }
        if(!empty($pdf->getPages()[2])) {
            $datas3 = $pdf->getPages()[2]->getDataTm();
            foreach($datas3 as $data3) {
                $text .= $data3[1] ;
            }
        }



$formData = [];

$text = stripslashes($text);
$text =  str_replace(array('/'), '',$text);



     $ministryIndex =   $this->stringGetIndex($text,"Ministry :");
     $divisionIndex =   $this->stringGetIndex($text,"Division :");
     $organizationIndex =   $this->stringGetIndex($text,"Organization :");

     $procuringEntityNameIndex =   $this->stringGetIndex($text,"Procuring Entity Name :");
     $procuringEntityCodeIndex =   $this->stringGetIndex($text,"Procuring Entity Code :");
     $procuringEntityDistrictIndex =   $this->stringGetIndex($text,"Procuring Entity District :");

     $procurementNatureIndex =   $this->stringGetIndex($text,"Procurement Nature :");
     $procurementTypeIndex =   $this->stringGetIndex($text,"Procurement Type :");
     $eventTypeIndex =   $this->stringGetIndex($text,"Event Type :");
     $invitationForIndex =   $this->stringGetIndex($text,"Invitation for :");
     $invitationReferenceNoIndex =   $this->stringGetIndex($text,"Invitation Reference No. :");
     $appIDIndex =   $this->stringGetIndex($text,"App ID :");

     $TenderProposalIDIndex =   $this->stringGetIndex($text,"TenderProposal ID :");


     $keyInformationAndFundingInformationIndex =   $this->stringGetIndex($text,"Key Information and Funding Information :");

     $procurementMethodIndex =   $this->stringGetIndex($text,"Procurement Method :");

     $budgetTypeIndex =   $this->stringGetIndex($text,"Budget Type :");
     $sourceOfFundsIndex =   $this->stringGetIndex($text,"Source of Funds :");
     $particularInformationIndex =   $this->stringGetIndex($text,"Particular Information :");
     $projectCodeIndex =   $this->stringGetIndex($text,"Project Code :");
     $projectNameIndex =   $this->stringGetIndex($text,"Project Name :");

     $tenderProposalPackageNoAndDescriptionIndex =   $this->stringGetIndex($text,"TenderProposal PackageNo. and Description :");

     $categoryIndex =   $this->stringGetIndex($text,"Category :");

     $scheduledTenderProposalPublicationDateAndTimeIndex =   $this->stringGetIndex($text,"ScheduledTenderProposalPublicationDate and Time :");
     $TenderProposalDocumentlastsellingdownloadingDateandTimeIndex =   $this->stringGetIndex($text,"TenderProposal Documentlast selling downloading Date andTime :");
     $PreTenderProposalmeetingStartDateandTimeIndex =   $this->stringGetIndex($text,"Pre - TenderProposalmeeting StartDate and Time :");

     $PreTenderProposalmeetingEndDateandTimeIndex =   $this->stringGetIndex($text,"Pre - TenderProposalmeeting EndDate and Time :");

     $TenderProposalClosingDateandTimeIndex =   $this->stringGetIndex($text,"TenderProposal ClosingDate and Time :");

     $TenderProposalOpeningDateandTimeIndex =   $this->stringGetIndex($text,"TenderProposal OpeningDate and Time :");

     $LastDateandTimeforTenderProposalSecuritySubmissionIndex =   $this->stringGetIndex($text,"Last Date and Time forTenderProposal SecuritySubmission :");




// echo $PreTenderProposalmeetingEndDateandTimeIndex[0];




     $LastDateAndTimeForTenderProposalSecuritySubmissionIndex =   $this->stringGetIndex($text,"Last Date and Time forTenderProposal SecuritySubmission :");

     $informationForTendererConsultantIndex =   $this->stringGetIndex($text,"Information for TendererConsultant :");
     $eligibilityOfTendererIndex =   $this->stringGetIndex($text,"Eligibility of Tenderer :");
    //  stop
     $briefDescriptionOfGoodsIndex =   $this->stringGetIndex($text,"Brief Description of Goods");
      //  stop

     $evaluationTypeIndex =   $this->stringGetIndex($text,"Evaluation Type :");
      $documentAvailableIndex =   $this->stringGetIndex($text,"Document Available :");
      $documentFeesIndex =   $this->stringGetIndex($text,"Document Fees :");
      $modeOfPaymentIndex =   $this->stringGetIndex($text,"Mode of Payment :");
      $TenderProposalValidUptoIndex =   $this->stringGetIndex($text,"TenderProposal Valid Up to");
      $CountryIndex =   $this->stringGetIndex($text,"Country:");


      $ContactDetailsOfOfficialInvitingTenderProposalIndex =   $this->stringGetIndex($text,"Contact details of Official Inviting TenderProposal :");
    //  $Index =   $this->stringGetIndex($text,"");
    //  $Index =   $this->stringGetIndex($text,"");
    //  $Index =   $this->stringGetIndex($text,"");









     $formData["ministry"] = $this->getSubStr($text,$ministryIndex[1],$divisionIndex[0]);
     $formData["division"] = $this->getSubStr($text,$divisionIndex[1],$organizationIndex[0]);

     $formData["organization"] = $this->getSubStr($text,$organizationIndex[1],$procuringEntityNameIndex[0]);

     $formData["procuringEntityName"] = $this->getSubStr($text,$procuringEntityNameIndex[1],$procuringEntityCodeIndex[0]);

     $formData["procuringEntityCode"] = $this->getSubStr($text,$procuringEntityCodeIndex[1],$procuringEntityDistrictIndex[0]);

     $formData["procuringEntityDistrict"] = $this->getSubStr($text,$procuringEntityDistrictIndex[1],$procurementNatureIndex[0]);


     $formData["procurementNature"] = $this->getSubStr($text,$procurementNatureIndex[1],$procurementTypeIndex[0]);

     $formData["procurementType"] = $this->getSubStr($text,$procurementTypeIndex[1],$eventTypeIndex[0]);

     $formData["eventType"] = $this->getSubStr($text,$eventTypeIndex[1],$invitationForIndex[0]);

     $formData["invitationFor"] = $this->getSubStr($text,$invitationForIndex[1],$invitationReferenceNoIndex[0]);

     $formData["invitationReferenceNo"] = $this->getSubStr($text,$invitationReferenceNoIndex[1],$appIDIndex[0]);


     $formData["appID"] = $this->getSubStr($text,$appIDIndex[1],$TenderProposalIDIndex[0]);


// echo $appIDIndex[1] . " " . $TenderProposalIDIndex[0] . " " . $TenderProposalIDIndex[1] . " " . $keyInformationAndFundingInformationIndex[0];
     $formData["TenderProposalID"] = $this->getSubStr($text,$TenderProposalIDIndex[1],$keyInformationAndFundingInformationIndex[0]);



     $formData["keyInformationAndFundingInformation"] = $this->getSubStr($text,$keyInformationAndFundingInformationIndex[1],$procurementMethodIndex[0]);


     $formData["procurementMethod"] = $this->getSubStr($text,$procurementMethodIndex[1],$budgetTypeIndex[0]);

     $formData["budgetType"] = $this->getSubStr($text,$budgetTypeIndex[1],$sourceOfFundsIndex[0]);


     $formData["sourceOfFunds"] = $this->getSubStr($text,$sourceOfFundsIndex[1],$particularInformationIndex[0]);

     $formData["particularInformation"] = $this->getSubStr($text,$particularInformationIndex[1],$projectCodeIndex[0]);

     $formData["projectCode"] = $this->getSubStr($text,$projectCodeIndex[1],$projectNameIndex[0]);


     $formData["projectName"] = $this->getSubStr($text,$projectNameIndex[1],$tenderProposalPackageNoAndDescriptionIndex[0]);


     $formData["tenderProposalPackageNoAndDescription"] = $this->getSubStr($text,$tenderProposalPackageNoAndDescriptionIndex[1],$categoryIndex[0]);

     $formData["category"] = $this->getSubStr($text,$categoryIndex[1],$scheduledTenderProposalPublicationDateAndTimeIndex[0]);

     $formData["scheduledTenderProposalPublicationDateAndTime"] = $this->getSubStr($text,$scheduledTenderProposalPublicationDateAndTimeIndex[1],$TenderProposalDocumentlastsellingdownloadingDateandTimeIndex[0]);

     $formData["TenderProposalDocumentlastsellingdownloadingDateandTime"] = $this->getSubStr($text,$TenderProposalDocumentlastsellingdownloadingDateandTimeIndex[1],$PreTenderProposalmeetingStartDateandTimeIndex[0]);


     $formData["PreTenderProposalmeetingStartDateandTime"] = $this->getSubStr($text,$PreTenderProposalmeetingStartDateandTimeIndex[1],$PreTenderProposalmeetingEndDateandTimeIndex[0]);


     $formData["PreTenderProposalmeetingEndDateandTime"] = $this->getSubStr($text,$PreTenderProposalmeetingEndDateandTimeIndex[1],$TenderProposalClosingDateandTimeIndex[0]);



     $formData["TenderProposalClosingDateandTime"] = $this->getSubStr($text,$TenderProposalClosingDateandTimeIndex[1],$TenderProposalOpeningDateandTimeIndex[0]);

     $formData["TenderProposalOpeningDateandTime"] = $this->getSubStr($text,$TenderProposalOpeningDateandTimeIndex[1],$LastDateandTimeforTenderProposalSecuritySubmissionIndex[0]);

     $formData["LastDateandTimeforTenderProposalSecuritySubmission"] = $this->getSubStr($text,$LastDateandTimeforTenderProposalSecuritySubmissionIndex[1],$informationForTendererConsultantIndex[0]);





     $formData["lastDateAndTimeForTenderProposalSecuritySubmission"] = $this->getSubStr($text,$LastDateAndTimeForTenderProposalSecuritySubmissionIndex[1],$informationForTendererConsultantIndex[0]);


     $formData["informationForTendererConsultant"] = $this->getSubStr($text,$informationForTendererConsultantIndex[1],$eligibilityOfTendererIndex[0]);

     $formData["eligibilityOfTenderer"] = $this->getSubStr($text,$eligibilityOfTendererIndex[1],$briefDescriptionOfGoodsIndex[0]);


     $formData["evaluationType"] = $this->getSubStr($text,$evaluationTypeIndex[1],$documentAvailableIndex[0]);


     $formData["documentAvailable"] = $this->getSubStr($text,$documentAvailableIndex[1],$documentFeesIndex[0]);

     $formData["documentFees"] = $this->getSubStr($text,$documentFeesIndex[1],$modeOfPaymentIndex[0]);

     $formData["modeOfPayment"] = $this->getSubStr($text,$modeOfPaymentIndex[1],$TenderProposalValidUptoIndex[0]);


     $formData["tenderProposalValidUpto"] = $this->getSubStr($text,$TenderProposalValidUptoIndex[1],$CountryIndex[0]);

     $formData["country"] = $this->getSubStr($text,$CountryIndex[1],$ContactDetailsOfOfficialInvitingTenderProposalIndex[0]);


    //  return response()->json($text,200);
     return view("form",compact("formData"));
    // echo $formData["ministry"];
    return response()->json($formData[""],200);
          return response()->json($text,200);


        return view("form",compact("formData"));

        return response()->json($formData,200);

    //    $upload_file = new File;
    //    $upload_file->orig_filename = $fileName;
    //    $upload_file->mime_type = $file->getMimeType();
    //    $upload_file->filesize = $file->getSize();
    //    $upload_file->content = $content;
    //    $upload_file->save();
       return redirect()->back()->with('success', 'File  submitted');
}
}
