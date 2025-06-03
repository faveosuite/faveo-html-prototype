function toggleButton()
{
            const checkbox = document.getElementById('terms');
            const button = document.getElementById('continueBtn');

            if (checkbox.checked) {
              continueBtn.removeAttribute("disabled");  
            }
            
            button.disabled = !checkbox.checked;
            
            
}
