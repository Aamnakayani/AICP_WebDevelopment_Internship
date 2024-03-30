function validateForm() {
    var name = document.getElementById("name").value;
    var dob = document.getElementById("dob").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var gender = document.getElementById("gender").value;
    var occupation = document.getElementById("occupation").value;
    var ID_type = document.getElementById("ID_type").value;
    var ID_Number = document.getElementById("ID_Number").value;
    var issue_auth = document.getElementById("issue_auth").value;
    var issue_date = document.getElementById("issue_date").value;
    var issue_state = document.getElementById("issue_state").value;
    var expiry_date = document.getElementById("expiry_date").value;

    // Perform validation for each field
    if (name === '') {
        alert('Please enter your name');
        return false;
    }
    if (dob === '') {
        alert('Please enter your date of birth');
        return false;
    }
    if (email === '') {
        alert('Please enter your email');
        return false;
    }
    if (mobile === '') {
        alert('Please enter your mobile');
        return false;
    }if (gender === '') {
        alert('Please enter your gender');
        return false;
    }
    if (occupation === '') {
        alert('Please enter your Occupation');
        return false;
    }
    if (ID_type === '') {
        alert('Please enter your ID Type');
        return false;
    }
    if (ID_Number === '') {
        alert('Please enter your ID Number');
        return false;
    }
    if (issue_auth === '') {
        alert('Please enter Issue Authority');
        return false;
    }
    if (issue_date === '') {
        alert('Please enter Issue Date');
        return false;
    }
    if (issue_state === '') {
        alert('Please enter Issue State');
        return false;
    }
    if (expiry_date === '') {
        alert('Please enter Expiry Date');
        return false;
    }

    return true; // Return true if all fields are valid
}
