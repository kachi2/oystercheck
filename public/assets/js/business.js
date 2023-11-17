$(() => {
    window.onload = (e) => {
        $("#searchTerm").select2({
            minimumResultsForSearch: Infinity
        });

    };

    $('option').on('click', ()=>{
        $('#searchTerm').val($(this).attr('value'));
        $('#searchTerm').trigger('change');
    });

    $('#searchTerm').on('change', ()=>{
        if($('#searchTerm').val() == 'taxId'){
            $('#searchValue').siblings('label').text('Tax Identification Number')
            $('#searchValue').attr('placeholder', 'Enter Tax Identication Number')
        }else if($('#searchTerm').val() == 'cacReg'){
            $('#searchValue').siblings('label').text('CAC Registration Number')
            $('#searchValue').attr('placeholder', 'Enter CAC Registration Number')
        }else if($('#searchTerm').val() == 'regPhone'){
            $('#searchValue').siblings('label').text('Registered Phone Number')
            $('#searchValue').attr('placeholder', 'Enter Registered Phone Number')
        }else{
            $('#searchValue').siblings('label').text('Search Value')
            $('#searchValue').attr('placeholder', 'Enter a Search Value')
        }
    });
     

    $('#subjectConsent').on('click', () => {
        if ($('#subjectConsent').is(':checked')) {
            $('#subjectConsent').val('true');
        } else {
            $('#subjectConsent').val('false');
        }
    });

});