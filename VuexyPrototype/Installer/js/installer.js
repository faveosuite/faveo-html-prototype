function toggleButton()
{
            const checkbox = document.getElementById('terms');
            const button = document.getElementById('continueBtn');

            if (checkbox.checked) {
              continueBtn.removeAttribute("disabled");  
            }
            
            button.disabled = !checkbox.checked;
            
            
}

// Function to toggle password visibility
function setupPasswordToggle(inputId, toggleId) {
    const passwordInput = document.getElementById(inputId);
    const toggle = document.getElementById(toggleId);

    if (toggle && passwordInput) {
        toggle.addEventListener('click', function () {
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.className = 'icon-base ti tabler-eye';
            } else {
                passwordInput.type = 'password';
                icon.className = 'icon-base ti tabler-eye-off';
            }
        });
    }
}

// Setup password visibility toggles
setupPasswordToggle('form-alignment-password', 'form-alignment-password2');
setupPasswordToggle('form-alignment-confirm-password', 'form-alignment-confirm-password2');

//DATABASE SETUP

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formAuthentication");

    const hostname = document.getElementById("hostname");
    const port = document.getElementById("port");
    const databasename = document.getElementById("databasename");
    const username = document.getElementById("username");
    const password = document.getElementById("form-alignment-password");

    const errors = {
        hostname: document.getElementById("hostnameError"),
        databasename: document.getElementById("databaseError"),
        username: document.getElementById("usernameError"),
        password: document.getElementById("passwordError")
    };

    function validateField(field, errorEl, condition, message) {
        if (!condition) {
            field.classList.add("is-invalid");
            errorEl.textContent = message;
            return false;
        } else {
            field.classList.remove("is-invalid");
            errorEl.textContent = "";
            return true;
        }
    }

    function validatePort(portVal) {
        const portNum = parseInt(portVal, 10);
        return !isNaN(portNum) && portNum > 0 && portNum <= 65535;
    }

    // Handle form submit
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const validHostname = validateField(
            hostname,
            errors.hostname,
            hostname.value.trim() !== "",
            "Host is required."
        );

        const validDatabase = validateField(
            databasename,
            errors.databasename,
            databasename.value.trim() !== "",
            "Database name is required."
        );

        const validUsername = validateField(
            username,
            errors.username,
            username.value.trim() !== "",
            "Username is required."
        );

        let validPort = true;
        const portErrorSpan = port.parentElement.querySelector(".error");

        if (port.value.trim() !== "") {
            validPort = validateField(
                port,
                portErrorSpan,
                validatePort(port.value.trim()),
                "Port must be between 1 and 65535."
            );
        } else {
            port.classList.remove("is-invalid");
            if (portErrorSpan) portErrorSpan.textContent = "";
        }

        // Password is optional, but can be validated if needed
        password.classList.remove("is-invalid");
        errors.password.textContent = "";

        
    });

    // Setup password visibility toggle
    setupPasswordToggle('form-alignment-password', 'form-alignment-password-toggle');
});

//GETTING STARTED
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("getting-started-form");

    const firstname = document.getElementById("firstname");
    const lastname = document.getElementById("lastname");
    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const password = document.getElementById("form-alignment-password");
    const confirmPassword = document.getElementById("form-alignment-confirm-password");

    const errors = {
        firstname: document.getElementById("firstnameError"),
        lastname: document.getElementById("lastnameError"),
        username: document.getElementById("usernameError"),
        email: document.getElementById("emailError"),
        password: document.getElementById("passwordError"),
        confirmpassword: document.getElementById("confirmpasswordError")
    };

    const passwordRules = {
        length: { regex: /^.{8,16}$/, text: "8–16 characters" },
        lowercase: { regex: /[a-z]/, text: "Lowercase letter (a-z)" },
        uppercase: { regex: /[A-Z]/, text: "Uppercase letter (A-Z)" },
        number: { regex: /[0-9]/, text: "Number (0–9)" },
        special: { regex: /[~*!@$#%_+.?\[\]]/, text: "Special character (~*!@$#%_+.?[])" }
    };

    // Add password rule hints dynamically
    const passwordHint = document.createElement("ul");
    passwordHint.style.paddingLeft = "20px";
    passwordHint.style.marginTop = "5px";
    passwordHint.style.display = "none";

    for (let key in passwordRules) {
        const item = document.createElement("li");
        item.id = `rule-${key}`;
        item.style.color = "red";
        item.textContent = passwordRules[key].text;
        passwordHint.appendChild(item);
    }
    errors.password.appendChild(passwordHint);

    function validateField(field, errorEl, condition, message) {
        if (!condition) {
            field.classList.add("is-invalid");
            errorEl.textContent = message;
            return false;
        } else {
            field.classList.remove("is-invalid");
            errorEl.textContent = "";
            return true;
        }
    }

    function validateEmail(emailVal) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal);
    }

    function validatePasswordStrength(pw) {
        let isValid = true;
        for (let key in passwordRules) {
            const rule = passwordRules[key];
            const ruleEl = document.getElementById(`rule-${key}`);
            if (rule.regex.test(pw)) {
                ruleEl.style.color = "green";
            } else {
                ruleEl.style.color = "red";
                isValid = false;
            }
        }
        return isValid;
    }

    // Show password conditions only when typing
    password.addEventListener("input", () => {
        const pw = password.value.trim();
        if (pw) {
            passwordHint.style.display = "block";
            validatePasswordStrength(pw);
        } else {
            passwordHint.style.display = "none";
            errors.password.innerHTML = ''; // Clear dynamic error when empty
            errors.password.appendChild(passwordHint);
        }
    });

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent actual form submission

        const validFirst = validateField(firstname, errors.firstname, firstname.value.trim() !== "", "First name is required.");
        const validLast = validateField(lastname, errors.lastname, lastname.value.trim() !== "", "Last name is required.");
        const validUsername = validateField(username, errors.username, username.value.trim() !== "", "Username is required.");
        const validEmail = validateField(email, errors.email, validateEmail(email.value.trim()), "Valid email is required.");

        // Password validation
        const pw = password.value.trim();
        let validPassword = true;

        if (!pw) {
            passwordHint.style.display = "block";
            errors.password.innerHTML = "Password is required.";
            errors.password.appendChild(passwordHint);
            password.classList.add("is-invalid");
            validPassword = false;
        } else {
            passwordHint.style.display = "block";
            const strengthOk = validatePasswordStrength(pw);
            if (!strengthOk) {
                errors.password.innerHTML = "Password does not meet the requirements.";
                errors.password.appendChild(passwordHint);
                password.classList.add("is-invalid");
                validPassword = false;
            } else {
                errors.password.textContent = "";
                errors.password.appendChild(passwordHint);
                password.classList.remove("is-invalid");
            }
        }

        // Confirm password validation
        const validConfirmPassword = validateField(
            confirmPassword,
            errors.confirmpassword,
            confirmPassword.value === pw && confirmPassword.value !== "",
            "Passwords do not match."
        );

    });
});


//LICENSE CODE
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('twoStepsForm');
  const inputs = form.querySelectorAll('#code-group input[type="text"]');
  const hiddenOtpInput = form.querySelector('input[name="otp"]');

  // Autofill logic: if full 16-digit code is entered in the first box
  inputs[0].addEventListener('input', function () {
    const value = this.value.trim();
    if (value.length === 16 && /^\d{16}$/.test(value)) {
      for (let i = 0; i < 4; i++) {
        inputs[i].value = value.slice(i * 4, (i + 1) * 4);
      }
    }
  });

  // Form submission
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    let combinedCode = '';
    inputs.forEach(input => combinedCode += input.value.trim());

    hiddenOtpInput.value = combinedCode;

    // Validation: must be exactly 16 digits
    if (!/^\d{16}$/.test(combinedCode)) {
      inputs.forEach(input => input.classList.add('is-invalid'));
    } else {
      inputs.forEach(input => input.classList.remove('is-invalid'));
      form.submit(); // submit if valid
    }
  });

  // Remove red border on input
  inputs.forEach(input => {
    input.addEventListener('input', function () {
      this.classList.remove('is-invalid');
    });
  });
});

document.querySelectorAll('#code1, #code2, #code3, #code4').forEach(function(input) {
    input.addEventListener('paste', function(ev) {
        ev.preventDefault();
        const text = (ev.clipboardData || window.clipboardData).getData('text/plain');
        const inputs = document.querySelectorAll('.form-control');
        let index = 0;

        for (let i = 0; i < inputs.length; i++) {
            const chunk = text.substr(index, 4);
            inputs[i].value = chunk;
            index += 4;
            if (index >= text.length) break;
        }

        // Focus the next empty input or the last input
        let nextInput = null;
        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].value === '') {
                nextInput = inputs[i];
                break;
            }
        }

        if (nextInput) {
            nextInput.focus();
        } else {
            inputs[inputs.length - 1].focus();
        }
    });
});





//RTL
document.addEventListener('click', function(event) {
      const target = event.target;

      // Check if the clicked element is an anchor tag with data-text-direction
      if (target.tagName === 'A' && target.dataset.textDirection) {
        event.preventDefault(); // Prevent link navigation

        // Set the <html> dir attribute to the value of data-text-direction
        const direction = target.dataset.textDirection.toLowerCase();
        if (direction === 'rtl' || direction === 'ltr') {
          document.documentElement.setAttribute('dir', direction);
        }
      }
});





  //ONLY IMAGE
  const dropdownButton = document.getElementById("defaultDropdown");
  const dropdownLinks = document.querySelectorAll("#vertical-example a");

  dropdownLinks.forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const img = this.querySelector("img").cloneNode(true);

      // Clear the button and only add the image
      dropdownButton.innerHTML = '';
      dropdownButton.appendChild(img);
    });
  });

  const toggleDirButton = document.getElementByClass('btn');

  toggleDirButton.addEventListener('click', () => {
    const html = document.documentElement;
    html.dir = html.dir === 'ltr' ? 'rtl' : 'ltr';
  });





 
  





  


