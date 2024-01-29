<?php 
namespace App\Traits;

trait business {

    public function StoreBusiness($request){
        return [
            'company_name' => $request->businessName,
            'company_email' => $request->companyEmail,
             'company_address' => $request->registeredCompanyAddress,
              'company_phone' => $request->companyPhone,
             'image' => $request->image, 
             'logo' => $request->businessLogo,
            'reg_number' => $request->registrationNumber, 
            'tax_number' => $request->taxId,
            'description' => $request->businessDescription,
             'website' => $request->companyWebsite,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram, 
            'linkedin' => $request->linkedin, 
            'cac' => $request->businessRegistrationCert, 
            'others' => $request->supportingDocument
        ];

    }



    public function BasicInfo($request, $image){
        return [
            'company_name' => $request->businessName,
            'logo' => $image,
            'reg_number' => $request->registrationNumber, 
            'tax_number' => $request->taxId,
            'description' => $request->businessDescription,
        ];

    }


    public function ContactInfo($request){
        return [
            'company_email' => $request->companyEmail,
            'company_address' => $request->registeredCompanyAddress,
             'company_phone' => $request->companyPhone,
             'website' => $request->companyWebsite,
             'facebook' => $request->facebook,
             'instagram' => $request->instagram, 
             'linkedin' => $request->linkedin, 
        ];
    }


    public function DocumentInfo($Cert = null, $Doc = null){

        
        return [
            'cac' => $Cert, 
            'others' => $Doc
        ];
    }
}


