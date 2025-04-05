import { auth } from "./firebase-config.js";
import { signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-auth.js";

document.getElementById("firebase-login-form").addEventListener("submit", async (e) => {
  e.preventDefault();

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const errorMessage = document.getElementById("error-message");

  try {
    const userCredential = await signInWithEmailAndPassword(auth, email, password);
    alert("Login successful!");
    window.location.href = "admin/admin.php"; // Redirect to admin panel
  } catch (error) {
    errorMessage.textContent = error.message;
  }
});
