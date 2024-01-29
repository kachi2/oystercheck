<?php 
namespace App\Dto;

use App\Models\Candidate;
use Illuminate\Support\Facades\Request;

class EmployeeDto {

    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $phone,
        public readonly string $address,
        public Candidate $candidate
    )
    {
        
    }


    // public function fromRequest(Request $request){

    //    $data = [

    //     ''

    //    ];

    //    return $data;

    // }

}