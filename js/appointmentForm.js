    function submitToEmail() {
        if (validateForm()) {
            document.getElementById('myForm1').action = "mailto:ilsacademycalicut@example.com";
            document.getElementById('myForm1').submit();
        } else {
            alert("Please fill out all required fields.");
        }
    }

    function submitToWhatsApp() {
        if (validateForm()) {
            const formData = new FormData(document.getElementById('myForm1'));
            const studentName = formData.get('studentName');
            const education = formData.get('education');
            const mobile = formData.get('mobile');
            const email = formData.get('email');
            const course = formData.get('course');
            const details = formData.get('details');

            const message = `New Student Details:\n
            Name: ${studentName}\n
            Higher Education:${education}\n
            Education: ${education}\n
            Mobile: ${mobile}\n
            Email: ${email}\n
            Course: ${course}\n
            Location:${details}`;

            window.open(`https://wa.me/917559930461/?text=${encodeURIComponent(message)}`);
        } else {
            alert("Please fill out all required fields.");
        }
    }

    function validateForm() {
        const requiredFields = document.querySelectorAll('#myForm1 [required]');
        let isValid = true;
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
            }
        });
        return isValid;
    }
    function resetForm() {
        document.getElementById('myForm1').reset();
    }
