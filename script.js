// Typing effect
const text = "Happy Birthday, My Love!";
const typingText = document.getElementById("typing-text");
let index = 0;

function type() {
  if (index < text.length) {
    typingText.innerHTML += text.charAt(index);
    index++;
    setTimeout(type, 100);
  }
}
type();

// Play music
function playMusic() {
    const audio = document.getElementById("birthdayAudio");
    audio.play().catch(() => {
      console.log("Autoplay failed, user must interact.");
    });
  }
  
