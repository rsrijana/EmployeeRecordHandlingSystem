<?php
namespace App\Talent\EducationalDetails;
use App\Talent\EducationalDetails\Models\EducationalDetails;
use Illuminate\Http\Response;
use Throwable;

class EducationalDetailsManager
{
    public function __construct(private EducationalDetails $educationalDetails)
    {

    }

    public function create(array $educationDetails):EducationalDetails
    {
        try
        {
            $datas = $this->educationalDetails->create($educationDetails);
            return $datas;

        }catch(Throwable)
        {
            return responseHelper('Something Went Wrong Please Try Again!', Response::HTTP_BAD_REQUEST, "Failed!");
        }
    }
}