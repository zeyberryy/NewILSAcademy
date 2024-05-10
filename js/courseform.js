    function submitViaEmail() {
        if (validateForm()) {
            document.getElementById('myForm').action = "mailto:ilsacademycalicut@example.com";
            document.getElementById('myForm').submit();
        } else {
            alert("Please fill out all required fields.");
        }
    }

    function submitViaWhatsApp() {
        if (validateForm()) {
            const formData = new FormData(document.getElementById('myForm'));
            const studentName = formData.get('studentName');
            const address = formData.get('address');
            const education = formData.get('education');
            const mobile = formData.get('mobile');
            const email = formData.get('email');

            const message = `New Student Details:\n
            Name: ${studentName}\n
            Address: ${address}\n
            Education: ${education}\n
            Mobile: ${mobile}\n
            Email: ${email}`;

            window.open(`https://wa.me/917559930461/?text=${encodeURIComponent(message)}`);
        } else {
            alert("Please fill out all required fields.");
        }
    }

    function validateForm() {
        const requiredFields = document.querySelectorAll('#myForm [required]');
        let isValid = true;
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
            }
        });
        return isValid;
    }
    function resetForm() {
        document.getElementById('myForm').reset();
    }
