function openWhatsApp() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var subject = document.getElementById('subject').value;
    var messageText = document.getElementById('message').value;

    var message = `New Enquiry Form\nName: ${name}\nEmail: ${email}\nMobile Number: ${mobile}\nSubject: ${subject}\nMessage: ${messageText}`;
    var url = `https://wa.me/917559930461/?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}