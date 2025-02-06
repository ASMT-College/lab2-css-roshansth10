function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll('.content, .section, .form-container').forEach(section => {
      section.style.display = 'none';
  });

  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}

// Show the "Home" section by default
showSection('home');
