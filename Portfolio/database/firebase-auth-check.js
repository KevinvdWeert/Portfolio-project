import { auth } from "./firebase-config.js";
import { onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-auth.js";

onAuthStateChanged(auth, (user) => {
  if (!user) {
    alert("You are not logged in!");
    window.location.href = "../firebase-login.php";
  }
});

document.getElementById("logout-button").addEventListener("click", async () => {
  await signOut(auth);
  alert("Logged out successfully!");
  window.location.href = "../firebase-login.php";
});
