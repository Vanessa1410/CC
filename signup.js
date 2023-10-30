
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
    item.addEventListener('click', function() {
        switchers.forEach(item => item.parentElement.classList.remove('is-active'))
        this.parentElement.classList.add('is-active')
    })
})


const orgNameInput = document.getElementById('signup-orgname');
const orgNameValidationMessage = document.getElementById('orgname-validation-message');

orgNameInput.addEventListener('input', function () {
    const orgName = this.value;
    const isValid = /^[a-zA-Z0-9\s]+$/.test(orgName);

    if (!isValid) {
        this.setCustomValidity('Should contain only letters and numbers');
        orgNamevalidationMessage.textContent = 'Should contain only letters and numbers'; // Display the validation message
    } else {
        this.setCustomValidity('');
        orgNamevalidationMessage.textContent = ''; // Hide the validation message
    }
});

const ngoIdInput = document.getElementById('signup-ngoid');
const ngoIdValidationMessage = document.getElementById('ngoid-validation-message');

ngoIdInput.addEventListener('input', function () {
    const ngoId = this.value;

    // Check if the input contains any lowercase letters
    const hasLowercaseLetters = /[a-z]/.test(ngoId);

    // Check if the input contains a slash '/'
    const hasSlash = /\//.test(ngoId);

    let feedback = '';

    if (hasLowercaseLetters) {
        feedback += 'NGO Unique ID cannot contain lowercase letters. ';
    }

    if (!hasSlash) {
        feedback += 'NGO Unique ID must contain a slash "/". ';
    }

    const isValidLength = /^[A-Z0-9\/]{1,16}$/.test(ngoId);

    if (!isValidLength) {
        feedback += 'NGO Unique ID should be 16 characters or less. ';
    }

    if (feedback) {
        this.setCustomValidity(feedback.trim());
        ngoIdvalidationMessage.textContent = feedback.trim(); // Display the validation message
    } else {
        this.setCustomValidity('');
        ngoIdvalidationMessage.textContent = ''; // Hide the validation message
    }
});

const inceptionYearInput = document.getElementById('signup-inception');
const inceptionvalidationMessage = inceptionYearInput.nextElementSibling; // Get the next element (which is the validation message)

inceptionYearInput.addEventListener('input', function () {
    const inceptionYear = this.value;
    const currentYear = new Date().getFullYear();
    const isValidYear = /^\d{4}$/.test(inceptionYear);

    if (!isValidYear || inceptionYear < 1800 || inceptionYear > currentYear) {
        this.setCustomValidity(`Invalid year`);
        inceptionvalidationMessage.textContent = `Invalid year`;
    } else {
        this.setCustomValidity('');
        inceptionvalidationMessage.textContent = '';
    }
});

const contactInput = document.getElementById('signup-orgcontact');
const validationMessage = contactInput.nextElementSibling; // Get the next element (which is the validation message)

contactInput.addEventListener('input', function () {
    const contactNumber = this.value;
    const isValidNumber = /^\d{10}$/.test(contactNumber);

    if (!isValidNumber) {
        this.setCustomValidity('Contact Number should contain exactly 10 digits.');
        validationMessage.textContent = 'Contact Number should contain exactly 10 digits.';
    } else {
        this.setCustomValidity('');
        validationMessage.textContent = '';
    }
});

contactInput.addEventListener('keypress', function (e) {
    const charCode = e.charCode;
    if (charCode < 48 || charCode > 57) {
        e.preventDefault();
        validationMessage.textContent = 'Only digits are allowed.';
    } else {
        validationMessage.textContent = '';
    }
});

const cityInput = document.getElementById('signup-orgcity');
const orgcityvalidationMessage = cityInput.nextElementSibling; // Get the next element (which is the validation message)

cityInput.addEventListener('input', function () {
    const cityName = this.value;
    const isValidCity = /^[A-Za-z\s]+$/.test(cityName);

    if (!isValidCity) {
        this.setCustomValidity('Invalid entry');
        orgcityvalidationMessage.textContent = 'Invalid entry';
    } else {
        this.setCustomValidity('');
        orgcityvalidationMessage.textContent = '';
    }
});

const usernameInput = document.getElementById('signup-orgusername');
const orguservalidationMessage = usernameInput.nextElementSibling; // Get the next element (which is the validation message)

usernameInput.addEventListener('input', function () {
    const username = this.value;
    const isValidLength = username.length <= 15;

    if (!isValidLength) {
        this.setCustomValidity('Username cannot exceed 15 characters.');
        validationMessage.textContent = 'Username cannot exceed 15 characters.';
    } else {
        this.setCustomValidity('');
        validationMessage.textContent = '';
    }
});

const passwordInput = document.getElementById('signup-orgpassword');
const confirmPasswordInput = document.getElementById('signup-orgconfpassword');
const passwordValidationMessage = passwordInput.nextElementSibling;
const confirmPasswordValidationMessage = confirmPasswordInput.nextElementSibling;

passwordInput.addEventListener('input', function () {
    const password = this.value;
    const isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/.test(password);

    if (!isValidPassword) {
        this.setCustomValidity('Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.');
        passwordValidationMessage.textContent = 'Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.';
    } else {
        this.setCustomValidity('');
        passwordValidationMessage.textContent = '';
    }
});

confirmPasswordInput.addEventListener('input', function () {
    const confirmPassword = this.value;
    const isValidMatch = confirmPassword === passwordInput.value;

    if (!isValidMatch) {
        this.setCustomValidity('Passwords do not match.');
        confirmPasswordValidationMessage.textContent = 'Passwords do not match.';
    } else {
        this.setCustomValidity('');
        confirmPasswordValidationMessage.textContent = '';
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const fnameInput = document.getElementById('vsignup-fname');
    const vfnameValidationMessage = document.getElementById('vfname-validation-message');

    fnameInput.addEventListener('input', function() {
        const lettersOnlyRegex = /^[A-Za-z]+$/;
        const fnameValue = fnameInput.value;

        if (!lettersOnlyRegex.test(fnameValue)) {
            vfnameValidationMessage.textContent = 'Only letters are allowed.';
        } else {
            vfnameValidationMessage.textContent = '';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const lnameInput = document.getElementById('vsignup-lname');
    const vlnameValidationMessage = document.getElementById('vlname-validation-message');

    lnameInput.addEventListener('input', function() {
        const lettersOnlyRegex = /^[A-Za-z]+$/;
        const lnameValue = lnameInput.value;

        if (!lettersOnlyRegex.test(lnameValue)) {
            vlnameValidationMessage.textContent = 'Only letters are allowed.';
        } else {
            vlnameValidationMessage.textContent = '';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const ageInput = document.getElementById('vsignup-age');
    const vageValidationMessage = document.getElementById('vage-validation-message');

    ageInput.addEventListener('input', function() {
        const ageRegex = /^(1[5-9]|[2-9][0-9]|100)$/;
        const ageValue = ageInput.value;

        if (!ageRegex.test(ageValue)) {
            vageValidationMessage.textContent = 'Please enter a valid age(between 15-100)';
        } else {
            vageValidationMessage.textContent = '';
        }
    });
});

const vcityInput = document.getElementById('signup-vcity');
const vcityvalidationMessage = cityInput.nextElementSibling; // Get the next element (which is the validation message)

cityInput.addEventListener('input', function () {
    const cityName = this.value;
    const isValidCity = /^[A-Za-z\s]+$/.test(cityName);

    if (!isValidCity) {
        this.setCustomValidity('Invalid entry');
        vcityvalidationMessage.textContent = 'Invalid entry';
    } else {
        this.setCustomValidity('');
        vcityvalidationMessage.textContent = '';
    }
});

const vusernameInput = document.getElementById('signup-vusername');
const vuservalidationMessage = vusernameInput.nextElementSibling; // Get the next element (which is the validation message)

vusernameInput.addEventListener('input', function () {
    const vusername = this.value;
    const isValidLength = vusername.length <= 15;

    if (!isValidLength) {
        this.setCustomValidity('Username cannot exceed 15 characters.');
        vuservalidationMessage.textContent = 'Username cannot exceed 15 characters.';
    } else {
        this.setCustomValidity('');
        vuservalidationMessage.textContent = '';
    }
});

const vpasswordInput = document.getElementById('signup-vpassword');
const vconfirmPasswordInput = document.getElementById('signup-vconfpassword');
const vpasswordValidationMessage = vpasswordInput.nextElementSibling;
const vconfirmPasswordValidationMessage = vconfirmPasswordInput.nextElementSibling;

vpasswordInput.addEventListener('input', function () {
    const vpassword = this.value;
    const isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/.test(password);

    if (!isValidPassword) {
        this.setCustomValidity('Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.');
        vpasswordValidationMessage.textContent = 'Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.';
    } else {
        this.setCustomValidity('');
        vpasswordValidationMessage.textContent = '';
    }
});

vconfirmPasswordInput.addEventListener('input', function () {
    const vconfirmPassword = this.value;
    const isValidMatch = vconfirmPassword === vpasswordInput.value;

    if (!isValidMatch) {
        this.setCustomValidity('Passwords do not match.');
        vconfirmPasswordValidationMessage.textContent = 'Passwords do not match.';
    } else {
        this.setCustomValidity('');
        vconfirmPasswordValidationMessage.textContent = '';
    }
});