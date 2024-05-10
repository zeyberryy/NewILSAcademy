<style>
    @keyframes jump {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0); 
  }
  40% {
    transform: translateY(-20px); 
  }
  60% {
    transform: translateY(-10px); 
  }
}
#whatsapp-button {
  position: fixed;
  bottom: 15px;
  left: 15px;
  z-index: 999;
animation: jump 3s infinite;
}
#whatsapp-link img {
  width: 45px;
  height: 45px;
  margin: 10px;
  
}
#whatsapp-link img:hover {
  width: 50px;
  height: 50px;
  margin: 10px;
  
}
</style>
<div id="whatsapp-button">
    <a id="whatsapp-link" target="_blank" rel="noopener noreferrer">
    <img src="https://atlabs.ae/whatsapp.png" alt="WhatsApp">
    </a>
</div>
<script>
    const phoneNumber = "919061035558";
const message = "Hello, I have a question about your services. Can you provide more information?"; 

document.addEventListener("DOMContentLoaded", function () {
  const whatsappButton = document.getElementById("whatsapp-link");
  whatsappButton.href = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
});
</script>