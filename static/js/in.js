// Your existing functions
function ClinicalServicesPage() {
    window.location.href = "clinicalServices.html";
}

function FindDoctor() {
    window.location.href = "findA-Doctor.html";
}

function AppointmentsPage() {
    window.location.href = "appointment.html";
}

function updateInfo() {
    window.location.href = "updateInfo.html";
}

function AboutUsPage() {
    window.location.href = "inAboutUs.html";
}

// Event listener for fetching user data
document.addEventListener("DOMContentLoaded", function () {
    console.log("Page loaded!"); // Check if this log appears in the browser console
    
    var userID = 123; // Replace '123' with the actual user ID
    
    fetch("in.php", {
        method: "POST",
        body: JSON.stringify({ ID: userID }), // Pass the user ID here
    })
        .then((response) => response.text())
        .then((data) => {
            console.log("Data received:", data); // Check if data is being received
            document.getElementById("userData").innerHTML = data;
        })
        .catch((error) => {
            console.error("Error:", error);
        });
});
