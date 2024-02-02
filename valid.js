
function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerText = message;
    toastContainer.appendChild(toast);
    toast.offsetHeight;
    toast.classList.add('show');
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            toast.remove();
        }, 500); 
    }, 3000);
  }
  function showAlert(message) {
    showToast(message, 'error');
  }
  function showSuccess(message) {
    showToast(message, 'success');
  }
  function showWait(message) {
    showToast(message, 'waiting');
  }

  function validateForm() {
  var fullname = document.getElementById("fullname").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var phone_no = document.getElementById("phone_no").value;
  var age = document.getElementById("age").value;
  var gender = document.getElementById("gender").value;
  var state = document.getElementById("state").value;
  var city = document.getElementById("city").value;
  
  
  // Simple validation for Full Name

  if (fullname.trim() === "") {
    showAlert("Full Name must not be empty");
    return false;
  }
  
  // Email validation using a simple regular expression
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    showAlert("Please enter a valid email address");
    return false;
  }
  
  // Simple validation for Password
  if (password.trim() === "") {
    showAlert("Password must not be empty");
    return false;
  }
  
  // Phone number validation (numeric check and length)
  var phoneRegex = /^[0-9]+$/;
  if (!phoneRegex.test(phone_no) || phone_no.length !== 10) {
    showAlert("Please enter a valid 10-digit phone number");
    return false;
  }
  
  // Simple validation for Age (numeric check)
  if (age.trim() === "" || isNaN(age)) {
    showAlert("Please enter a valid age");
    return false;
  }
  
  // Validation for Gender
  if (gender === "") {
    showAlert("Please select your gender");
    return false;
  }
  
  // Validation for State
  if (state === "") {
    showAlert("Please select your state");
    return false;
  }
  
  // Validation for City
  if (city === "") {
    showAlert("Please select your city");
    return false;
  }
  
  // Validation for Service
  
  
  // If all validations pass, show success toast and submit the form
  showSuccess("Form submitted successfully!");
  return true;
  
  }
  
  
  var config = {
  cUrl: 'https://api.countrystatecity.in/v1/countries',
  ckey: 'WHdGZHRmN2loMHpLODRkQXRUSHQ4SXo4Y2lRa3pwcmtYS25LWng5ag=='
  }
  
  var stateSelect = document.getElementById('state');
  var citySelect = document.getElementById('city');
  
  function loadStates() {
  stateSelect.disabled = false;
  citySelect.disabled = true;
  stateSelect.style.pointerEvents = 'auto';
  citySelect.style.pointerEvents = 'none';
  
  const selectedCountryCode = 'IN';
  
  stateSelect.innerHTML = '<option value="">Select State</option>';
  citySelect.innerHTML = '<option value="">Select City</option>';
  
  fetch(`${config.cUrl}/${selectedCountryCode}/states`, { headers: { "X-CSCAPI-KEY": config.ckey } })
    .then(response => response.json())
    .then(data => {
        data.forEach(state => {
            const option = document.createElement('option');
            option.value = state.name;
            option.id = state.iso2;
            option.textContent = state.name;
            stateSelect.appendChild(option);
        });
    })
    .catch(error => console.error('Error loading states:', error))
  }
  
  function loadCities() {
  citySelect.disabled = false;
  citySelect.style.pointerEvents = 'auto';
  
  let StateIso2 = stateSelect.options[stateSelect.selectedIndex].id;
  const selectedCountryCode = 'IN';
  
  citySelect.innerHTML = '<option value="">Select City</option>';
  
  fetch(`${config.cUrl}/${selectedCountryCode}/states/${StateIso2}/cities`, { headers: { "X-CSCAPI-KEY": config.ckey } })
    .then(response => response.json())
    .then(data => {
        data.forEach(city => {
            const option = document.createElement('option');
            option.value = city.name;
            option.textContent = city.name;
            citySelect.appendChild(option);
        });
  
        if (data.length > 0) {
            citySelect.selectedIndex = 1;
        }
    })
    .catch(error => console.error('Error loading cities:', error))
  }
  
  window.onload = loadStates;