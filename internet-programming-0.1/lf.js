document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting
    
    // Get form values
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    // Simple validation
    if (email === "" || password === "") {
      alert("Please fill in all fields");
    } else {
      alert("Login successful!");
      // Proceed with login process (e.g., form submission or API call)
    }
  });
  