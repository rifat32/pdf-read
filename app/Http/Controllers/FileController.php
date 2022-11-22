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

$tableArrayData = [];
$tableDataStartingIndex = -1;
$tableDataStarted = false;



        foreach($datas1 as $data1) {
            $text .= $data1[1] ;
        }
        if(!empty($pdf->getPages()[1])) {
        $datas2 = $pdf->getPages()[1]->getDataTm();
        foreach($datas2 as $index=>$data2) {

                if($data2[1] == "e") {
                  if(
                    $datas2[$index + 1][1] == "t"
                    &&
                    $datas2[$index + 2][1] == "i"
                    &&
                    $datas2[$index + 3][1] == "o"
                    &&
                    $datas2[$index + 4][1] == "n"
                    &&
                    $datas2[$index + 5][1] == "D"
                    &&
                    $datas2[$index + 6][1] == "a"
                    &&
                    $datas2[$index + 7][1] == "t"
                    &&
                    $datas2[$index + 8][1] == "e"
                    ) {

                        $tableDataStartingIndex = ($index + 9);
                        echo "found";

                  }
                }
                if($tableDataStartingIndex == $index) {
                    $tableDataStarted = true;
                }

                if($data2[1] == "P") {
                    if(
                      $datas2[$index + 1][1] == "r"
                      &&
                      $datas2[$index + 2][1] == "o"
                      &&
                      $datas2[$index + 3][1] == "c"
                      &&
                      $datas2[$index + 4][1] == "u"
                      &&
                      $datas2[$index + 5][1] == "r"
                      &&
                      $datas2[$index + 6][1] == "i"
                      &&
                      $datas2[$index + 7][1] == "n"
                      &&
                      $datas2[$index + 8][1] == "g"
                      &&
                      $datas2[$index + 9][1] == " "
                      &&
                      $datas2[$index + 10][1] == "E"
                      &&
                      $datas2[$index + 11][1] == "n"
                      &&
                      $datas2[$index + 12][1] == "t"
                      &&
                      $datas2[$index + 13][1] == "i"
                      &&
                      $datas2[$index + 14][1] == "t"
                      &&
                      $datas2[$index + 15][1] == "y"
                      &&
                      $datas2[$index + 16][1] == " "
                      &&
                      $datas2[$index + 17][1] == "D"
                      &&
                      $datas2[$index + 18][1] == "e"

                      ) {
                          $tableDataStarted = false;
                          echo "foundend";

                    }
                  }

if($tableDataStarted) {
    array_push($tableArrayData,$data2);
}




             echo $data2[1] . "  " . json_encode($data2[0]) . "<br>";

            $text .= $data2[1] ;
        }
        }
        if(!empty($pdf->getPages()[2])) {
            $datas3 = $pdf->getPages()[2]->getDataTm();
            foreach($datas3 as $data3) {
                $text .= $data3[1] ;
            }
        }

        foreach($tableArrayData as $index => $data4) {
            if(!empty($tableArrayData[$index + 1])) {
                if(($tableArrayData[$index + 1][0][4] - $data4[0][4]) > 40) {
                    echo $data4[1] . "  " . json_encode($data4[0][4]) . "<br>";
                }
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
     $briefDescriptionOfGoodsIndex =   $this->stringGetIndex($text,"Brief Description of Goodsand Related Service :");
      //  stop

     $evaluationTypeIndex =   $this->stringGetIndex($text,"Evaluation Type :");

      $documentAvailableIndex =   $this->stringGetIndex($text,"Document Available :");
      $documentFeesIndex =   $this->stringGetIndex($text,"Document Fees :");
      $tenderProposalDocumentPriceIndex =   $this->stringGetIndex($text,"TenderProposal DocumentPrice (In BDT) :");


      $modeOfPaymentIndex =   $this->stringGetIndex($text,"Mode of Payment :");
      $TenderProposalSecurityValidUptoIndex =   $this->stringGetIndex($text,"TenderProposal SecurityValid Up to :");

      $TenderProposalValidUptoIndex =   $this->stringGetIndex($text,"TenderProposal Valid Up to:");
      $lotNoIndex =   $this->stringGetIndex($text,"LotNo.");

      $NameofOfficialInvitingTenderProposalIndex =   $this->stringGetIndex($text,"Name of OfficialInvitingTenderProposal:");
      $DesignationofOfficialInvitingTenderProposalIndex =   $this->stringGetIndex($text,"Designation of Official Inviting TenderProposal :");

      $AddressofOfficialInvitingTenderProposalIndex =   $this->stringGetIndex($text,"Address ofOfficial InvitingTenderProposal:");
      $AddressIndex =   $this->stringGetIndex($text,"Address:");
      $CityIndex =   $this->stringGetIndex($text,"City:");
      $ThanaIndex =   $this->stringGetIndex($text,"Thana:");
      $DistrictIndex =   $this->stringGetIndex($text,"District:");




      $CountryIndex =   $this->stringGetIndex($text,"Country:");


      $ContactDetailsOfOfficialInvitingTenderProposalIndex =   $this->stringGetIndex($text,"Contact details of Official Inviting TenderProposal :");

      $PhoneNoIndex =   $this->stringGetIndex($text,"PhoneNo:");
      $FaxNoIndex =   $this->stringGetIndex($text,"FaxNo:");

      $TheprocuringentityreservesIndex =   $this->stringGetIndex($text,"The procuring entity reserves");


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

     $formData["briefDescriptionOfGoods"] = $this->getSubStr($text,$briefDescriptionOfGoodsIndex[1],$evaluationTypeIndex[0]);




     $formData["evaluationType"] = $this->getSubStr($text,$evaluationTypeIndex[1],$documentAvailableIndex[0]);


     $formData["documentAvailable"] = $this->getSubStr($text,$documentAvailableIndex[1],$documentFeesIndex[0]);

     $formData["documentFees"] = $this->getSubStr($text,$documentFeesIndex[1],$tenderProposalDocumentPriceIndex[0]);
     $formData["tenderProposalDocumentPrice"] = $this->getSubStr($text,$tenderProposalDocumentPriceIndex[1],$modeOfPaymentIndex[0]);


     $formData["modeOfPayment"] = $this->getSubStr($text,$modeOfPaymentIndex[1],$TenderProposalSecurityValidUptoIndex[0]);

     $formData["tenderProposalSecurityValidUpto"] = $this->getSubStr($text,$TenderProposalSecurityValidUptoIndex[1],$TenderProposalValidUptoIndex[0]);

     $formData["tenderProposalValidUpto"] = $this->getSubStr($text,$TenderProposalValidUptoIndex[1],$lotNoIndex[0]);

     $formData["NameofOfficialInvitingTenderProposal"] = $this->getSubStr($text,$NameofOfficialInvitingTenderProposalIndex[1],$DesignationofOfficialInvitingTenderProposalIndex[0]);

     $formData["DesignationofOfficialInvitingTenderProposal"] = $this->getSubStr($text,$DesignationofOfficialInvitingTenderProposalIndex[1],$AddressofOfficialInvitingTenderProposalIndex[0]);

     $formData["Address"] = $this->getSubStr($text,$AddressIndex[1],$CityIndex[0]);

     $formData["City"] = $this->getSubStr($text,$CityIndex[1],$ThanaIndex[0]);

     $formData["Thana"] = $this->getSubStr($text,$ThanaIndex[1],$DistrictIndex[0]);

     $formData["District"] = $this->getSubStr($text,$DistrictIndex[1],$CountryIndex[0]);


     $formData["country"] = $this->getSubStr($text,$CountryIndex[1],$ContactDetailsOfOfficialInvitingTenderProposalIndex[0]);

     $formData["PhoneNo"] = $this->getSubStr($text,$PhoneNoIndex[1],$FaxNoIndex[0]);
     $formData["FaxNo"] = $this->getSubStr($text,$FaxNoIndex[1],$TheprocuringentityreservesIndex[0]);


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
