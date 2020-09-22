jQuery(document).ready(() => {
    // custom select input
    customSelectInput(); // NOT WORKING!!

    // add dataTable for ilmoitukset's table
    addDataTable();
    
});

// is exists
function isExists(target) {
    if (target) {
        return true;
    } else {
        return false;
    }
}

// custom select input
function customSelectInput() {
    let customSelects = document.querySelectorAll(".custom-select-input");
    if (customSelects.length < 1) {return};
    let customSelectOptions = document.querySelectorAll(".custom-select-options");
    function hideCustomOptions() {
        for (item of customSelectOptions) {
            item.classList.remove("active");
        }
    };
    for (customSelect of customSelects) {
        customSelect.addEventListener("click", e => {
            e.stopPropagation();
            hideCustomOptions();
            e.target.nextElementSibling.classList.toggle("active");
        });
    }
    document.body.addEventListener("click", hideCustomOptions);
    let customOptions = document.querySelectorAll(".custom-select-options li");
    let selectFrom= document.querySelector("#select-from");
    let selectMeasures= document.querySelector("#select-measures");
    console.log(selectMeasures);
    selectMeasures.value = "e.target.innerText";
    for (item of customOptions) {
        item.addEventListener("click", e => {
            e.stopPropagation();
            e.target.parentElement.previousElementSibling.innerText = e.target.innerText;
            // console.log(e.target.parentElement.parentElement.id);
            // console.log(selectFrom.value);
            // console.log(selectMeasures.value);
            // console.log(e.target.parentElement.parentElement.id == "custom-select-from");
            console.log(e.target.parentElement.parentElement.id == "custom-select-from");
            if (e.target.parentElement.parentElement.id == "custom-select-from") {
                selectFrom.value = e.target.innerText;
            } else {
                console.log(selectMeasures);
                console.log(selectMeasures.value);
                selectMeasures.value = "e.target.innerText";
            }
            hideCustomOptions();
        });
    }
}

// add dataTable for ilmoitukset's table
function addDataTable() {
    let table = document.getElementById("jobs-table");
    if(!isExists(table)) {return};
    let dataTableOpt = {
        "searching": false,
        "lengthChange": false,
        "info": false,
        "paging": false
    }
    jQuery(table).dataTable(dataTableOpt);
}