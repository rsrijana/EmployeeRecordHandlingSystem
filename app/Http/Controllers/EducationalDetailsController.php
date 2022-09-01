<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeEducationalResource;
use App\Talent\EducationalDetails\Requests\EducationalDetailsRequest;
use App\Talent\EducationalDetails\Models\EducationalDetails;
use App\Talent\EducationalDetails\EducationalDetailsManager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EducationalDetailsController extends Controller
{
    public function __construct(private EducationalDetails $educationalDetails, private EducationalDetailsManager $educationalDetailsManager)
    {

    }

    public function store(EducationalDetailsRequest $request)
    {
        
        $educationDetails = $request->validated();
        
        $allEducationalDetails = [];

        foreach ($educationDetails['educational_details'] as $education )
        {

            $educationalDetailsResponse =$this->educationalDetailsManager->create($education);
            array_push($allEducationalDetails, $educationalDetailsResponse);

        }
       
       return response([

            "message" => "Educational Details Saved!", 
            "data" => $allEducationalDetails
        ]);
    }


    public function show(Request $request)
    {
        $id = $request->query('id');
        $educationalDetails = $this->educationalDetailsManager->educationalProfile($id);

        if(!$educationalDetails)
        {
            return responseHelper('Details Not Found!', Response::HTTP_NOT_FOUND, 'Failed!');
        }
        return new EmployeeEducationalResource($educationalDetails);
    }
}
