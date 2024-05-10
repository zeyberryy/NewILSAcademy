function submitViaEmail() {
    if (validateForm()) {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        const mailtoLink = `mailto:ilsacademycalicut@example.com?subject=${encodeURIComponent(subject)}&body=Name: ${encodeURIComponent(name)}\nEmail: ${encodeURIComponent(email)}\nSubject: ${encodeURIComponent(subject)}\nMessage: ${encodeURIComponent(message)}`;

        window.location.href = mailtoLink;
    } else {
        alert("Please fill out all required fields.");
    }
}

function submitViaWhatsApp() {
    if (validateForm()) {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        const whatsappMessage = `New Message\n\nName: ${encodeURIComponent(name)}\nEmail: ${encodeURIComponent(email)}\nSubject: ${encodeURIComponent(subject)}\nMessage: ${encodeURIComponent(message)}`;

        window.open(`https://wa.me/917559930461/?text=${whatsappMessage}`);
    } else {
        alert("Please fill out all required fields.");
    }
}

function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    if (name.trim() === '' || email.trim() === '' || subject.trim() === '' || message.trim() === '') {
        return false;
    }
    return true;
}

function resetForm() {
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('message').value = '';
}