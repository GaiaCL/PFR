function account($argument) {
    $resume = document.getElementById('resume');
    $details = document.getElementById('details');
    $billing = document.getElementById('billing');
    $history = document.getElementById('history');
    
    $resumeBox = document.getElementById('resumeBox');
    $detailsBox = document.getElementById('detailsBox');
    $billingBox = document.getElementById('billingBox');
    $historyBox = document.getElementById('historyBox');

    if($argument == "resume") {
        $resumeBox.style.display = "flex" ;
        $detailsBox.style.display = "none" ; 
        $billingBox.style.display = "none" ; 
        $historyBox.style.display = "none" ;  
    }
    else if ($argument == "details"){
        $resumeBox.style.display = "none" ;
        $detailsBox.style.display = "flex" ; 
        $billingBox.style.display = "none" ; 
        $historyBox.style.display = "none" ;  
    }
    else if ($argument == "billing" ){
        $resumeBox.style.display = "none" ;
        $detailsBox.style.display = "none" ; 
        $billingBox.style.display = "flex" ; 
        $historyBox.style.display = "none" ;  
    }
    else if ($argument == "history"){
        $resumeBox.style.display = "none" ;
        $detailsBox.style.display = "none" ; 
        $billingBox.style.display = "none" ; 
        $historyBox.style.display = "flex" ;  
    }
}